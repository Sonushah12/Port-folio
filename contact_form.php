<?php
if (realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) {
    header('Location: index.php#contact', true, 302);
    exit;
}
?>
<section id="contact" class="contact-section section" aria-labelledby="contact-title">
    <div class="wrap contact-grid">
        <div class="contact-copy"><p class="eyebrow">Good things start with a conversation</p><h2 id="contact-title">Have an idea?<br>Let’s make<br>it happen<span>.</span></h2><p>A project, a collaboration, or just a hello.<br>I’d love to hear what you’re thinking.</p><a class="email-link" href="mailto:sonu.shah99098@gmail.com">sonu.shah99098@gmail.com <?= icon('diagonal') ?></a><div class="social-links"><a href="https://github.com/Sonushah12" target="_blank" rel="noopener noreferrer">GitHub <?= icon('diagonal') ?><span class="sr-only"> (opens in a new tab)</span></a><a href="https://www.linkedin.com/in/shah-sonu-762032264/" target="_blank" rel="noopener noreferrer">LinkedIn <?= icon('diagonal') ?><span class="sr-only"> (opens in a new tab)</span></a></div></div>
        <form id="contact-form" class="contact-form" action="insert.php" method="post">
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['contact_token'], ENT_QUOTES) ?>">
            <div class="form-topline"><span>Send a note</span><?= icon('mail') ?></div>
            <div id="form-errors" class="form-errors" role="alert" tabindex="-1" hidden></div>
            <div class="field"><label for="name">Your name</label><input type="text" name="name" id="name" placeholder="What should I call you?" autocomplete="name" required maxlength="255" aria-describedby="name-error"><span class="field-error" id="name-error"></span></div>
            <div class="field"><label for="email">Email address</label><input type="email" name="email" id="email" placeholder="you@example.com" autocomplete="email" required maxlength="255" aria-describedby="email-error"><span class="field-error" id="email-error"></span></div>
            <div class="field"><label for="description">What’s on your mind?</label><textarea name="description" id="description" placeholder="Tell me a little about your idea…" rows="3" required maxlength="5000" aria-describedby="description-error"></textarea><span class="field-error" id="description-error"></span></div>
            <button class="button button-light" type="submit"><span>Send message</span><?= icon('arrow') ?></button>
            <p id="form-status" class="form-status" role="status" aria-live="polite"><?= ($_GET['contact'] ?? '') === 'sent' ? 'Message saved. Thank you for reaching out!' : 'Your message goes straight to my project inbox.' ?></p>
        </form>
    </div>
</section>
