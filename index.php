<?php
require_once __DIR__ . '/form_session.php';
require_once __DIR__ . '/layout.php';
page_head('Sonu Shah — Developer & curious mind');
include __DIR__ . '/navbar.php';
?>
<main id="main">
    <section class="hero wrap" aria-labelledby="hero-title">
        <div class="hero-copy">
            <p class="hello"><span class="hello-line" aria-hidden="true"></span> Hello, I’m Sonu. A developer based in India.</p>
            <h1 id="hero-title"><span class="title-line">Thoughtful code.</span><span class="title-line">Meaningful</span><span class="title-line title-last">experiences<span class="blue-dot">.</span></span></h1>
            <p class="hero-description">I turn curiosity into digital things that work.<br class="desktop-break"> From intuitive websites to apps that connect us.</p>
            <div class="hero-actions"><a class="button button-primary" href="#work">Explore my work <?= icon('arrow') ?></a><a class="text-link" href="#about">A little about me <?= icon('diagonal') ?></a></div>
        </div>
        <div class="hero-art" aria-label="Abstract orbital sculpture representing connected web, mobile and IoT experiences" role="img">
            <div class="art-grid" aria-hidden="true"></div>
            <div class="art-coordinate coordinate-top" aria-hidden="true">IDEAS, IN ORBIT</div>
            <div class="orbit-stage" aria-hidden="true">
                <div class="orbit-sculpture">
                    <div class="orbit-ring ring-one"></div><div class="orbit-ring ring-two"></div><div class="orbit-ring ring-three"></div>
                    <div class="orbit-core"><span class="core-shine"></span></div>
                    <span class="satellite satellite-one"></span><span class="satellite satellite-two"></span>
                </div>
            </div>
            <div class="orbit-tag tag-web" aria-hidden="true"><?= icon('code') ?><span>Web development</span></div>
            <div class="orbit-tag tag-mobile" aria-hidden="true"><?= icon('phone') ?><span>Mobile experiences</span></div>
            <div class="orbit-tag tag-iot" aria-hidden="true"><?= icon('signal') ?><span>Connected ideas</span></div>
            <div class="art-footer" aria-hidden="true"><span class="tiny-cross">+</span><span>CREATIVE THINKING × CLEAN CODE</span><span class="tiny-cross">+</span></div>
        </div>
        <div class="hero-bottom"><a class="scroll-cue" href="#work"><span class="scroll-icon" aria-hidden="true">↓</span> Scroll to explore</a><p>Always learning. Always building.</p><button class="motion-toggle" type="button" aria-pressed="false"><?= icon('pause') ?><span>Pause motion</span></button></div>
    </section>
    <div class="capability-strip"><div class="wrap capability-inner"><span>Web development</span><?= icon('star') ?><span>Mobile applications</span><?= icon('star') ?><span>Creative problem solving</span><?= icon('star') ?><span>Connected technology</span></div></div>

    <section id="work" class="section work-section wrap" aria-labelledby="work-title">
        <div class="section-heading"><div><p class="eyebrow">A few things I’ve built</p><h2 id="work-title">Ideas made real<span class="blue-dot">.</span></h2></div><a class="text-link" href="https://github.com/Sonushah12" target="_blank" rel="noopener noreferrer">More on GitHub <?= icon('diagonal') ?><span class="sr-only"> (opens in a new tab)</span></a></div>
        <div class="project-grid">
            <article class="project-card">
                <a class="project-visual wifi-visual" href="https://github.com/Sonushah12/wifi-mouse" target="_blank" rel="noopener noreferrer" aria-label="View WiFi Mouse source on GitHub (opens in a new tab)">
                    <span class="preview-note">A SMALL SCREEN. A BIG CONNECTION.</span>
                    <div class="laptop" aria-hidden="true"><div class="laptop-display"><span class="desktop-logo"><?= icon('signal') ?></span><span>Connected to your phone</span><span class="connection-line"><i></i> WiFi Mouse</span></div><div class="laptop-base"></div></div>
                    <div class="phone-preview" aria-hidden="true"><div class="phone-island"></div><div class="phone-header"><?= icon('signal') ?><span>WiFi Mouse</span><i></i></div><div class="touchpad"><span class="touch-circle"></span><span>Touch. Move. Connect.</span></div><div class="phone-buttons"><span>Left</span><span>Right</span></div><div class="phone-home"></div></div>
                    <span class="project-open"><?= icon('diagonal') ?></span><span class="concept-label">Interface illustration</span>
                </a>
                <div class="project-meta"><div><p class="project-kind">Mobile + connected systems</p><h3><a href="https://github.com/Sonushah12/wifi-mouse" target="_blank" rel="noopener noreferrer">WiFi Mouse<span class="sr-only"> (opens in a new tab)</span></a></h3></div><span class="project-tags">Flutter / Go / WebSockets</span></div>
                <p class="project-description">Your phone, reimagined as a wireless touchpad. A mobile app and desktop server that connect over Wi-Fi.</p>
            </article>
            <article class="project-card">
                <a class="project-visual portfolio-visual" href="https://github.com/Sonushah12/Port-folio" target="_blank" rel="noopener noreferrer" aria-label="View personal portfolio source on GitHub (opens in a new tab)">
                    <div class="browser-preview" aria-hidden="true"><div class="browser-toolbar"><span></span><span></span><span></span><i>sonu.shah / portfolio</i></div><div class="mini-nav"><b>s.</b><span>Work &nbsp; About &nbsp; Let’s talk ↗</span></div><div class="mini-content"><span>DEVELOPER & CURIOUS MIND</span><strong>Thoughtful code.<br>Meaningful<br>experiences<span>.</span></strong><div class="mini-cta">Explore my work ↗</div></div><div class="mini-orbit"></div><div class="mini-bottom">Always learning. Always building.</div></div>
                    <span class="project-open"><?= icon('diagonal') ?></span><span class="concept-label">Portfolio preview</span>
                </a>
                <div class="project-meta"><div><p class="project-kind">Web development + visual design</p><h3><a href="https://github.com/Sonushah12/Port-folio" target="_blank" rel="noopener noreferrer">Personal Portfolio<span class="sr-only"> (opens in a new tab)</span></a></h3></div><span class="project-tags">PHP / CSS / JavaScript</span></div>
                <p class="project-description">A little corner of the internet for my work, ideas, and ongoing journey as a developer.</p>
            </article>
        </div>
        <div class="work-note"><span class="note-dot" aria-hidden="true"></span><p>Every project is a chance to learn something new.</p><a href="https://github.com/Sonushah12/Resume-Builder" target="_blank" rel="noopener noreferrer">Also exploring: Resume Builder <?= icon('diagonal') ?><span class="sr-only"> (opens in a new tab)</span></a></div>
    </section>
    <?php include __DIR__ . '/introduction.php'; ?>
    <?php include __DIR__ . '/Skills.php'; ?>
    <?php include __DIR__ . '/contact_form.php'; ?>
</main>
<?php include __DIR__ . '/footer.php'; ?>
