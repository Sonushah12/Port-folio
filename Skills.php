<?php
if (realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) {
    header('Location: index.php#expertise', true, 302);
    exit;
}
?>
<section id="expertise" class="section expertise-section wrap" aria-labelledby="expertise-title">
    <div class="section-heading"><div><p class="eyebrow">My ever-growing toolkit</p><h2 id="expertise-title">Different tools.<br>The same curiosity<span class="blue-dot">.</span></h2></div><p class="heading-description">From the first line of code to the final interaction,<br>I enjoy connecting the pieces.</p></div>
    <div class="expertise-list">
        <details class="expertise-item" open><summary><span class="expertise-icon"><?= icon('code') ?></span><h3>Web development</h3><span class="expertise-subtitle">Thoughtful interfaces. Solid foundations.</span><span class="expand-icon"><?= icon('plus') ?></span></summary><div class="expertise-content"><p>Building responsive websites with clear interfaces and practical backend logic. I enjoy turning an idea into something people can use.</p><div class="skill-tags"><span>HTML & CSS</span><span>JavaScript</span><span>PHP</span><span>MySQL</span></div></div></details>
        <details class="expertise-item"><summary><span class="expertise-icon"><?= icon('phone') ?></span><h3>Mobile applications</h3><span class="expertise-subtitle">Small screens. Thoughtful experiences.</span><span class="expand-icon"><?= icon('plus') ?></span></summary><div class="expertise-content"><p>Exploring cross-platform apps, intuitive interactions, and the systems that connect mobile experiences to the world around them.</p><div class="skill-tags"><span>Flutter</span><span>Dart</span><span>Java</span><span>WebSockets</span></div></div></details>
        <details class="expertise-item"><summary><span class="expertise-icon"><?= icon('signal') ?></span><h3>Connected technology</h3><span class="expertise-subtitle">Bridging the physical and digital.</span><span class="expand-icon"><?= icon('plus') ?></span></summary><div class="expertise-content"><p>Learning through experiments with connected devices, networking, and systems programming — finding useful ways for technology to work together.</p><div class="skill-tags"><span>IoT</span><span>Go</span><span>Python</span><span>C</span></div></div></details>
    </div>
</section>
