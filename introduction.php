<?php
if (realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) {
    header('Location: index.php#about', true, 302);
    exit;
}
?>
<section id="about" class="about-section section" aria-labelledby="about-title">
    <div class="wrap about-grid">
        <div class="portrait-block"><div class="portrait-frame"><img src="images/Avtar-4.jpg" alt="Sonu Shah outdoors, wearing glasses and a blue shirt" width="2365" height="3546" loading="lazy"></div><div class="portrait-caption"><span>Sonu, beyond the screen.</span><?= icon('star') ?></div><div class="portrait-stamp" aria-hidden="true">Curiosity<br>is the starting point.</div></div>
        <div class="about-copy"><p class="eyebrow">The person behind the pixels</p><h2 id="about-title">A curious mind.<br>A builder at heart<span class="blue-dot">.</span></h2><p class="about-lead">Hello again. I’m Sonu Shah, a developer who enjoys figuring out how things work — and how to make them better.</p><p>My journey at LJ University sparked a love for coding, creative problem solving, and the possibilities of technology. I’m exploring web development, mobile apps, and the connections between them.</p><p>I care about the small details: an interaction that feels right, code that’s easy to understand, and an idea that becomes useful. Away from the keyboard, you’ll find me gaming or listening to music.</p><div class="about-details"><span><b>Based in</b>Gujarat, India</span><span><b>Driven by</b>Curiosity & craft</span></div><div class="about-actions"><?php include __DIR__ . '/CV.php'; ?><a class="text-link" href="https://www.linkedin.com/in/shah-sonu-762032264/" target="_blank" rel="noopener noreferrer">Find me on LinkedIn <?= icon('diagonal') ?><span class="sr-only"> (opens in a new tab)</span></a></div></div>
    </div>
</section>
