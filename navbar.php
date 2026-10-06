<?php
if (realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) {
    header('Location: index.php', true, 302);
    exit;
}
?>
<header class="site-header">
    <div class="header-inner wrap">
        <a class="brand" href="index.php" aria-label="Sonu Shah home"><span class="brand-mark">s<span>.</span></span><span>Sonu Shah<span class="brand-caption">Developer & curious mind</span></span></a>
        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-nav"><span class="menu-bars" aria-hidden="true"></span><span class="sr-only">Open navigation</span></button>
        <nav id="primary-nav" class="primary-nav" aria-label="Main navigation">
            <a href="index.php#work" data-section="work">Work</a>
            <a href="index.php#about" data-section="about">About</a>
            <a href="index.php#expertise" data-section="expertise">Expertise</a>
            <a class="nav-contact" href="index.php#contact" data-section="contact">Let’s talk <?= icon('diagonal') ?></a>
        </nav>
    </div>
    <div class="reading-progress" aria-hidden="true"></div>
</header>
