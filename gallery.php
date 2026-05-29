<?php
$page_title = 'Gallery';
$page_desc  = 'View photos and videos from Walusubi United Church of Jesus Christ — worship moments, church events, outreaches and community life.';
require_once 'includes/header.php';

$images = [
  ['file'=>'img1.jpeg','alt'=>'Church congregation worship'],
  ['file'=>'img2.jpeg','alt'=>'Sunday service gathering'],
  ['file'=>'img3.jpeg','alt'=>'Church event and fellowship'],
  ['file'=>'img4.jpeg','alt'=>'Youth ministry activity'],
  ['file'=>'img5.jpeg','alt'=>'Community outreach program'],
  ['file'=>'img6.jpeg','alt'=>'Church building and grounds'],
  ['file'=>'img7.jpeg','alt'=>'Prayer and intercession gathering'],
  ['file'=>'img8.jpeg','alt'=>'Women fellowship meeting'],
  ['file'=>'img9.jpeg','alt'=>'Men fellowship and worship'],
  ['file'=>'img10.jpeg','alt'=>'Children ministry program'],
  ['file'=>'img11.jpeg','alt'=>'Evangelism and outreach'],
];
?>

<div class="page-hero">
  <div class="container">
    <h1>Photo &amp; Video Gallery</h1>
    <p>Moments of God's faithfulness captured in time</p>
    <div class="breadcrumb">
      <a href="index.php">Home</a> <span>/</span> <span>Gallery</span>
    </div>
  </div>
</div>

<section class="section">
  <div class="container">
    <!-- Tabs -->
    <div class="gallery-tabs">
      <button class="tab-btn active" data-filter="all">All</button>
      <button class="tab-btn" data-filter="photos">Photos</button>
      <button class="tab-btn" data-filter="videos">Videos</button>
    </div>

    <!-- Photo Grid -->
    <div class="gallery-grid" id="photo-grid">
      <?php foreach ($images as $i => $img): ?>
      <div class="gallery-item <?= ($i === 0 || $i === 5) ? 'span-2' : '' ?>" data-src="assets/images/<?= $img['file'] ?>" data-type="photos">
        <img src="assets/images/<?= $img['file'] ?>" alt="<?= htmlspecialchars($img['alt']) ?>" loading="lazy">
        <div class="gallery-overlay"><span>🔍</span></div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Video Section -->
    <div class="video-section" data-type="videos" style="margin-top:56px;">
      <div class="section-header" style="margin-bottom:32px;">
        <h2>Videos</h2>
        <p>Watch moments of worship, teaching and life at Walusubi United Church.</p>
      </div>
      <div class="video-grid">
        <div class="video-item">
          <video controls poster="assets/images/img3.jpeg" preload="none" style="width:100%;display:block;">
            <source src="assets/videos/video1.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <h3>Church Service — Walusubi United Church</h3>
        </div>
        <div class="video-item">
          <video controls poster="assets/images/img6.jpeg" preload="none" style="width:100%;display:block;">
            <source src="assets/videos/video2.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <h3>Special Event — Walusubi United Church</h3>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Share CTA -->
<section style="background:var(--light-gray);padding:60px 0;text-align:center;">
  <div class="container">
    <h2>Share the Love</h2>
    <p style="color:var(--text-medium);margin:12px 0 28px;">Tag us in your photos! Follow and share our content to spread the Good News.</p>
    <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
      <a href="<?= FACEBOOK_URL ?>" target="_blank" rel="noopener" class="btn btn-primary"><i class="fab fa-facebook-f"></i> Facebook</a>
      <a href="<?= YOUTUBE_URL ?>" target="_blank" rel="noopener" class="btn btn-outline"><i class="fab fa-youtube"></i> YouTube</a>
      <a href="<?= INSTAGRAM_URL ?>" target="_blank" rel="noopener" class="btn btn-outline"><i class="fab fa-instagram"></i> Instagram</a>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
