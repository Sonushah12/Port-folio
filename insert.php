<?php
require_once __DIR__ . '/form_session.php';
$expectsJson = str_contains($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json');
function respond(int $status, array $body): never {
    global $expectsJson;
    http_response_code($status);
    if ($expectsJson) {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($body);
        exit;
    }
    if ($status === 200) {
        header('Location: index.php?contact=sent#contact', true, 303);
        exit;
    }
    require_once __DIR__ . '/layout.php';
    page_head('Message status — Sonu Shah');
    include __DIR__ . '/navbar.php';
    echo '<main id="main" class="wrap section response-page"><p class="eyebrow">Let’s try that again</p><h1>Message not sent.</h1><p>' . htmlspecialchars($body['message']) . '</p>';
    foreach ($body['errors'] ?? [] as $error) { echo '<p>'.htmlspecialchars($error).'</p>'; }
    echo '<a class="button button-primary" href="index.php#contact">Return to the contact form</a></main>';
    include __DIR__ . '/footer.php';
    exit;
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    respond(405, ['message' => 'Please use the contact form to send a message.']);
}
if (!is_string($_POST['csrf_token'] ?? null) || !hash_equals($_SESSION['contact_token'], $_POST['csrf_token'])) {
    respond(403, ['message' => 'Your session has expired. Reload the page and send your message again.']);
}
$values = [];
$errors = [];
foreach (['name' => 255, 'email' => 255, 'description' => 5000] as $field => $limit) {
    $values[$field] = is_string($_POST[$field] ?? null) ? trim($_POST[$field]) : '';
    if ($values[$field] === '') {
        $errors[$field] = ['name' => 'Enter your name.', 'email' => 'Enter your email address.', 'description' => 'Tell me a little about your idea.'][$field];
    } elseif (preg_match('/\A.{0,' . $limit . '}\z/us', $values[$field]) !== 1) {
        $errors[$field] = "Please keep this field under $limit characters.";
    }
}
if (!isset($errors['email']) && !filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Enter a valid email address.';
}
if ($errors) { respond(422, ['message' => 'Check the highlighted fields and try again.', 'errors' => $errors]); }
try {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connection = new mysqli(getenv('DB_HOST') ?: 'localhost', getenv('DB_USER') ?: 'root', getenv('DB_PASSWORD') ?: '', getenv('DB_NAME') ?: 'portfolio');
    $connection->set_charset('utf8mb4');
    $statement = $connection->prepare('INSERT INTO user_master (name, email, description) VALUES (?, ?, ?)');
    $statement->bind_param('sss', $values['name'], $values['email'], $values['description']);
    $statement->execute();
    $statement->close();
    $connection->close();
    respond(200, ['message' => 'Message saved. Thank you for reaching out!']);
} catch (Throwable $error) {
    error_log('Portfolio contact submission failed: ' . $error->getMessage());
    respond(503, ['message' => 'Your message couldn’t be saved right now. Please try again, or email me directly at sonu.shah99098@gmail.com.']);
}
