<?php
require_once __DIR__ . '/config.php';
$current = pathinfo(basename($_SERVER['PHP_SELF']), PATHINFO_FILENAME); // e.g. "about"
function nav_class($page) {
    global $current;
    return ($current === $page) ? 'active' : '';
}
$page_title = isset($page_title) ? $page_title . ' | ' . SITE_NAME : SITE_NAME . ' — ' . SITE_TAGLINE;
$page_desc  = isset($page_desc) ? $page_desc : 'Walusubi United Church of Jesus Christ — United in Christ, Connected to the Kingdom. Join us for worship, fellowship and community in Walusubi, Uganda.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
  <meta name="keywords" content="church Uganda, Walusubi, United Church, Jesus Christ, ministry, worship, Bogere Geofrey">
  <meta name="author" content="<?= SITE_NAME ?>">
  <!-- Open Graph -->
  <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_desc) ?>">
  <meta property="og:image" content="<?= SITE_URL ?>/assets/images/logo.png">
  <meta property="og:url" content="<?= SITE_URL ?>">
  <meta property="og:type" content="website">
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($page_desc) ?>">
  <!-- Canonical -->
  <link rel="canonical" href="<?= SITE_URL ?>/<?= $current ?>">
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/images/logo.png">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,400&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Navbar -->
<nav id="navbar">
  <div class="nav-inner">
    <a href="/" class="nav-logo">
      <img src="assets/images/logo.png" alt="<?= SITE_NAME ?> Logo">
      <span>Walusubi United Church</span>
    </a>
    <div class="nav-links">
      <a href="/" class="<?= nav_class('index') ?>">Home</a>
      <a href="/about" class="<?= nav_class('about') ?>">About</a>
      <a href="/ministries" class="<?= nav_class('ministries') ?>">Ministries</a>
      <a href="/sermons" class="<?= nav_class('sermons') ?>">Sermons</a>
      <a href="/events" class="<?= nav_class('events') ?>">Events</a>
      <a href="/gallery" class="<?= nav_class('gallery') ?>">Gallery</a>
      <a href="/blog" class="<?= nav_class('blog') ?>">Blog</a>
      <a href="/contact" class="<?= nav_class('contact') ?>">Contact</a>
    </div>
    <div style="display:flex;align-items:center;gap:12px;">
      <a href="/give" class="btn btn-primary btn-sm nav-cta">Give Online</a>
      <div class="hamburger" id="hamburger" aria-label="Menu" role="button" tabindex="0">
        <span></span><span></span><span></span>
      </div>
    </div>
  </div>
</nav>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobile-menu" role="navigation" aria-label="Mobile navigation">
  <span class="mobile-close" id="mobile-close" aria-label="Close menu">&times;</span>
  <a href="/" class="<?= nav_class('index') ?>">Home</a>
  <a href="/about" class="<?= nav_class('about') ?>">About</a>
  <a href="/ministries" class="<?= nav_class('ministries') ?>">Ministries</a>
  <a href="/sermons" class="<?= nav_class('sermons') ?>">Sermons</a>
  <a href="/events" class="<?= nav_class('events') ?>">Events</a>
  <a href="/gallery" class="<?= nav_class('gallery') ?>">Gallery</a>
  <a href="/blog" class="<?= nav_class('blog') ?>">Blog</a>
  <a href="/prayer" class="<?= nav_class('prayer') ?>">Prayer</a>
  <a href="/give" class="<?= nav_class('give') ?>">Give</a>
  <a href="/livestream" class="<?= nav_class('livestream') ?>">Live Stream</a>
  <a href="/connect" class="<?= nav_class('connect') ?>">Connect</a>
  <a href="/contact" class="<?= nav_class('contact') ?>">Contact</a>
</div>
