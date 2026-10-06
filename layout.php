<?php
function icon(string $name, string $class = ''): string {
    $paths = [
        'arrow' => '<path d="M5 12h14M13 6l6 6-6 6"/>',
        'diagonal' => '<path d="M6 18 18 6M6 6h12v12"/>',
        'download' => '<path d="M12 3v12m-5-5 5 5 5-5M5 16v5h14v-5"/>',
        'code' => '<path d="m8 7-5 5 5 5m8-10 5 5-5 5M14 4l-4 16"/>',
        'phone' => '<rect x="6" y="2" width="12" height="20" rx="3"/><path d="M10 18h4"/>',
        'signal' => '<path d="M3 8a15 15 0 0 1 18 0M6 12a10 10 0 0 1 12 0M9 16a5 5 0 0 1 6 0"/><circle cx="12" cy="20" r="1"/>',
        'mail' => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 6 9 7 9-7"/>',
        'plus' => '<path d="M12 5v14M5 12h14"/>',
        'pause' => '<path d="M8 5v14M16 5v14"/>',
        'play' => '<path d="m8 4 12 8-12 8Z"/>',
        'check' => '<path d="m5 12 4 4L19 6"/>',
        'star' => '<path d="M12 2v20M2 12h20M5 5l14 14M5 19 19 5"/>',
    ];
    return '<svg class="icon '.htmlspecialchars($class).'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">'.($paths[$name] ?? $paths['arrow']).'</svg>';
}
function page_head(string $title): void { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sonu Shah — developer exploring the space between thoughtful code and meaningful digital experiences. Web, mobile, and connected technology.">
    <meta name="theme-color" content="#f7f8fc">
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">
    <link rel="preload" href="assets/fonts/space-grotesk.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="stylesheet" href="style.css">
    <script src="portfolio.js" defer></script>
    <noscript><style>
        .motion-toggle {display:none;}
        .orbit-sculpture {animation:none;}
        @media(max-width:680px) {
            html {scroll-padding-top:150px;}
            .header-inner {height:auto;min-height:74px;flex-wrap:wrap;padding-top:16px;}
            .menu-toggle {display:none;}
            .primary-nav {display:flex;position:static;flex-wrap:wrap;width:100%;gap:6px 16px;padding:10px 0;background:transparent;border:0;box-shadow:none;}
            .primary-nav>a {font-size:12px;min-height:44px;padding:5px 0;}
            .primary-nav .nav-contact {margin:0;padding:5px 10px;}
        }
    </style></noscript>
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<?php }
