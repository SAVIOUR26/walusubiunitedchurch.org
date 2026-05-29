<?php
$page_title = 'Sermons & Teachings';
$page_desc  = 'Watch and listen to sermons and teachings from Walusubi United Church of Jesus Christ. Sunday services, midweek fellowship and special conference messages.';
require_once 'includes/header.php';

$sermons = [
  ['title'=>'Walking in the Power of Faith','preacher'=>'Pastor Bogere Geofrey','date'=>'May 25, 2025','category'=>'sunday','cat_label'=>'Sunday Service','img'=>'img2.jpeg','duration'=>'58 min'],
  ['title'=>'The Grace That Transforms','preacher'=>'Pastor Bogere Geofrey','date'=>'May 21, 2025','category'=>'midweek','cat_label'=>'Midweek Fellowship','img'=>'img4.jpeg','duration'=>'45 min'],
  ['title'=>'United We Stand: One Body in Christ','preacher'=>'Pastor Bogere Geofrey','date'=>'May 18, 2025','category'=>'conference','cat_label'=>'Special Conference','img'=>'img5.jpeg','duration'=>'72 min'],
  ['title'=>'The Anointing That Breaks the Yoke','preacher'=>'Pastor Bogere Geofrey','date'=>'May 11, 2025','category'=>'sunday','cat_label'=>'Sunday Service','img'=>'img8.jpeg','duration'=>'61 min'],
  ['title'=>'Praying With Purpose','preacher'=>'Pastor Bogere Geofrey','date'=>'May 7, 2025','category'=>'midweek','cat_label'=>'Midweek Fellowship','img'=>'img9.jpeg','duration'=>'50 min'],
  ['title'=>'Kingdom Builders: Your Assignment on Earth','preacher'=>'Pastor Bogere Geofrey','date'=>'May 4, 2025','category'=>'sunday','cat_label'=>'Sunday Service','img'=>'img10.jpeg','duration'=>'65 min'],
];
?>

<div class="page-hero">
  <div class="container">
    <h1>Sermons &amp; Teachings</h1>
    <p>Be fed by the living Word of God</p>
    <div class="breadcrumb">
      <a href="index.php">Home</a> <span>/</span> <span>Sermons</span>
    </div>
  </div>
</div>

<section class="section">
  <div class="container">
    <!-- Featured Sermon -->
    <div class="featured-sermon">
      <video controls poster="assets/images/img3.jpeg" preload="none">
        <source src="assets/videos/video1.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="featured-sermon-text">
        <div class="tag">✨ Featured Sermon</div>
        <h2>Walking in the Power of Faith</h2>
        <p>In this powerful message, Pastor Bogere Geofrey unpacks what it means to live a life governed by faith in God's Word, not by what we see with our natural eyes. Faith moves mountains!</p>
        <div class="sermon-meta" style="margin-bottom:16px;">
          <span><i class="fas fa-user"></i> Pastor Bogere Geofrey</span>
          <span><i class="fas fa-calendar"></i> May 25, 2025</span>
          <span><i class="fas fa-clock"></i> 58 min</span>
        </div>
        <div style="display:flex;gap:10px;flex-wrap:wrap;">
          <a href="livestream.php" class="btn btn-primary btn-sm">Watch Live</a>
          <a href="<?= YOUTUBE_URL ?>" target="_blank" rel="noopener" class="btn btn-secondary btn-sm" style="background:rgba(255,255,255,0.15);border-color:rgba(255,255,255,0.4);">
            <i class="fab fa-youtube"></i> YouTube
          </a>
        </div>
      </div>
    </div>

    <!-- Filters -->
    <div class="section-header">
      <h2>All Sermons</h2>
    </div>
    <div class="sermon-filters">
      <button class="tab-btn sermon-filter-btn active" data-filter="all">All Sermons</button>
      <button class="tab-btn sermon-filter-btn" data-filter="sunday">Sunday Services</button>
      <button class="tab-btn sermon-filter-btn" data-filter="midweek">Midweek Fellowship</button>
      <button class="tab-btn sermon-filter-btn" data-filter="conference">Special Conferences</button>
    </div>

    <div class="grid-3">
      <?php foreach ($sermons as $s): ?>
      <div class="sermon-card card" data-category="<?= $s['category'] ?>">
        <div class="sermon-thumb">
          <img src="assets/images/<?= $s['img'] ?>" alt="<?= htmlspecialchars($s['title']) ?>">
          <div class="sermon-play"><span>▶</span></div>
        </div>
        <div class="sermon-body">
          <span class="sermon-category"><?= $s['cat_label'] ?></span>
          <h3><?= htmlspecialchars($s['title']) ?></h3>
          <div class="sermon-meta">
            <span><i class="fas fa-user"></i> <?= $s['preacher'] ?></span>
            <span><i class="fas fa-clock"></i> <?= $s['duration'] ?></span>
          </div>
          <div class="sermon-meta">
            <span><i class="fas fa-calendar"></i> <?= $s['date'] ?></span>
          </div>
          <a href="livestream.php" class="btn btn-outline btn-sm" style="margin-top:12px;">Watch Now</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Second Video -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Recent Recording</span>
      <h2>Latest Church Recording</h2>
    </div>
    <div style="max-width:900px;margin:0 auto;">
      <div class="video-item" style="border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-lg);">
        <video controls poster="assets/images/img6.jpeg" style="width:100%;display:block;" preload="none">
          <source src="assets/videos/video2.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <h3 style="padding:16px;background:var(--primary);color:var(--white);font-family:'Open Sans',sans-serif;">Special Church Service — Walusubi United Church</h3>
      </div>
    </div>
  </div>
</section>

<!-- Subscribe CTA -->
<section style="background:var(--gold);padding:60px 0;text-align:center;">
  <div class="container">
    <h2 style="color:var(--primary-dark);">Never Miss a Sermon</h2>
    <p style="color:var(--primary);margin:12px 0 28px;font-size:1.05rem;">Subscribe to our YouTube channel and follow us on Facebook for live services and new messages every week.</p>
    <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
      <a href="<?= YOUTUBE_URL ?>" target="_blank" rel="noopener" class="btn btn-primary" style="background:var(--primary);color:var(--white);border-color:var(--primary);">
        <i class="fab fa-youtube"></i> Subscribe on YouTube
      </a>
      <a href="<?= FACEBOOK_URL ?>" target="_blank" rel="noopener" class="btn btn-primary" style="background:var(--primary-dark);color:var(--white);border-color:var(--primary-dark);">
        <i class="fab fa-facebook-f"></i> Follow on Facebook
      </a>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
