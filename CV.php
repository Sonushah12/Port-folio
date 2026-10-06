<?php
if (realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) {
    header('Location: https://drive.google.com/file/d/1nqIfngYDr2BVabT8FBmxnBq6vSOqi9fx/view', true, 302);
    exit;
}
?>
<a class="button button-outline" href="https://drive.google.com/file/d/1nqIfngYDr2BVabT8FBmxnBq6vSOqi9fx/view" target="_blank" rel="noopener noreferrer">View my résumé <?= icon('diagonal') ?><span class="sr-only"> (opens in a new tab)</span></a>
