<?php
$activePage = $activePage ?? '';
$pageTitle = $pageTitle ?? 'Daliya Ayurvedic';
$navItems = [
    'home' => ['label' => 'Home', 'url' => './'],
    'specialities' => ['label' => 'Specialities', 'url' => 'specialities'],
    'bone-setting' => ['label' => 'Bone Setting', 'url' => 'bone-setting'],
    'gallery' => ['label' => 'Gallery', 'url' => 'gallery'],
    'about' => ['label' => 'About Us', 'url' => 'about-us'],
    'contact' => ['label' => 'Contact Us', 'url' => 'contactus'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Daliya Ayurvedics Clinic offers Ayurvedic consultation, traditional bone setting, physiotherapy and holistic wellness care.">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v=<?= filemtime(__DIR__ . '/../assets/css/style.css'); ?>">
</head>
<body>
<header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="./"><span>Daliya</span> Ayurvedic</a>
        <button class="mobile-menu-toggle" type="button" aria-label="Open navigation menu" aria-controls="primary-navigation" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav id="primary-navigation" class="main-nav" aria-label="Primary navigation">
            <button class="mobile-menu-close" type="button" aria-label="Close navigation menu">&times;</button>
            <?php foreach ($navItems as $key => $item): ?>
                <a class="<?= $activePage === $key ? 'active' : ''; ?>" href="<?= $item['url']; ?>"><?= $item['label']; ?></a>
            <?php endforeach; ?>
        </nav>
        <!-- <a class="nav-cta" href="contactus">Appointment</a> -->
    </div>
</header>
<main>
