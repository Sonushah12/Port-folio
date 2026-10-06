<?php
if (realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) {
    header('Location: index.php', true, 302);
    exit;
}
?>
<footer class="site-footer"><div class="wrap footer-inner"><a class="footer-brand" href="index.php">Sonu Shah<span class="blue-dot">.</span></a><p>Made with curiosity & a little code.</p><a class="back-top" href="#main">Back to top <span aria-hidden="true">↑</span></a></div><div class="wrap footer-bottom"><span>© <?= date('Y') ?> Sonu Shah</span><span>Always a work in progress.</span></div></footer>
</body>
</html>
