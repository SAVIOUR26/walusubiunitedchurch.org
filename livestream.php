<?php
$page_title = 'Live Stream';
$page_desc  = 'Watch Walusubi United Church of Jesus Christ live services on YouTube and Facebook. Stream our Sunday services and special events online.';
require_once 'includes/header.php';
?>

<div class="page-hero">
  <div class="container">
    <h1>Watch Us Live</h1>
    <p>Join our services online from anywhere in the world</p>
    <div class="breadcrumb">
      <a href="/">Home</a> <span>/</span> <span>Live Stream</span>
    </div>
  </div>
</div>

<section class="section">
  <div class="container">
    <!-- Next Service Countdown -->
    <div style="background:var(--primary);border-radius:var(--radius-lg);padding:40px;text-align:center;margin-bottom:56px;color:var(--white);">
      <span class="section-label" style="color:var(--gold);">Next Service</span>
      <h2 style="color:var(--white);font-size:1.8rem;margin:12px 0;">Sunday Service starts in:</h2>
      <div class="countdown" id="countdown"></div>
      <p style="color:rgba(255,255,255,0.7);margin-top:16px;font-size:0.9rem;">Sunday, 9:00 AM East Africa Time (EAT)</p>
      <div style="display:flex;gap:12px;justify-content:center;margin-top:24px;flex-wrap:wrap;">
        <a href="<?= YOUTUBE_URL ?>" target="_blank" rel="noopener" class="btn btn-primary">
          <i class="fab fa-youtube"></i> Set Reminder on YouTube
        </a>
        <a href="<?= FACEBOOK_URL ?>" target="_blank" rel="noopener" class="btn btn-secondary">
          <i class="fab fa-facebook-f"></i> Follow on Facebook
        </a>
      </div>
    </div>

    <!-- Stream Embeds -->
    <div class="section-header">
      <span class="section-label">Watch Now</span>
      <h2>Live &amp; Recent Services</h2>
      <p>Watch our latest messages and join us live every Sunday.</p>
    </div>
    <div class="grid-2">
      <!-- YouTube -->
      <div class="stream-card">
        <span class="live-badge" style="margin-bottom:16px;">LIVE</span>
        <h3><i class="fab fa-youtube" style="color:#ff0000;margin-right:8px;"></i>YouTube Live</h3>
        <p>Watch our Sunday services and special events live on YouTube. Subscribe and hit the notification bell to never miss a service.</p>
        <div class="embed-container" style="margin-top:20px;">
          <iframe
            src="https://www.youtube.com/embed/live_stream?channel=UCwalusubiunitedchurch"
            title="Walusubi United Church YouTube Live Stream"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
          </iframe>
        </div>
        <a href="<?= YOUTUBE_URL ?>" target="_blank" rel="noopener" class="btn btn-primary btn-sm" style="margin-top:16px;">
          <i class="fab fa-youtube"></i> Subscribe on YouTube
        </a>
      </div>
      <!-- Facebook -->
      <div class="stream-card">
        <span class="live-badge" style="margin-bottom:16px;">LIVE</span>
        <h3><i class="fab fa-facebook-f" style="color:#1877f2;margin-right:8px;"></i>Facebook Live</h3>
        <p>Join us on Facebook Live and interact with our church family through comments and reactions during the service.</p>
        <div class="embed-container" style="margin-top:20px;">
          <iframe
            src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fwalusubiunitedchurch%2Fvideos%2F&show_text=0&width=560"
            title="Walusubi United Church Facebook Live Stream"
            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
            allowfullscreen>
          </iframe>
        </div>
        <a href="<?= FACEBOOK_URL ?>" target="_blank" rel="noopener" class="btn btn-primary btn-sm" style="margin-top:16px;background:#1877f2;border-color:#1877f2;">
          <i class="fab fa-facebook-f"></i> Follow on Facebook
        </a>
      </div>
    </div>
  </div>
</section>

<!-- How to Watch -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <h2>How to Watch</h2>
      <p>Joining our online service is simple and free.</p>
    </div>
    <div class="grid-4">
      <div class="service-card">
        <div class="service-icon">📱</div>
        <h3>Step 1</h3>
        <p style="color:var(--text-medium);font-size:0.9rem;">Open YouTube or Facebook on your device.</p>
      </div>
      <div class="service-card">
        <div class="service-icon">🔍</div>
        <h3>Step 2</h3>
        <p style="color:var(--text-medium);font-size:0.9rem;">Search "Walusubi United Church" and subscribe or follow.</p>
      </div>
      <div class="service-card">
        <div class="service-icon">🔔</div>
        <h3>Step 3</h3>
        <p style="color:var(--text-medium);font-size:0.9rem;">Turn on notifications so you're alerted when we go live.</p>
      </div>
      <div class="service-card">
        <div class="service-icon">✝️</div>
        <h3>Step 4</h3>
        <p style="color:var(--text-medium);font-size:0.9rem;">Join us every Sunday from 9:00 AM EAT. God bless you!</p>
      </div>
    </div>
  </div>
</section>

<!-- Archive Video -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Recent Recording</span>
      <h2>Watch Our Latest Service</h2>
    </div>
    <div style="max-width:900px;margin:0 auto;">
      <div class="video-item" style="border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-lg);">
        <video controls poster="assets/images/img3.jpeg" style="width:100%;display:block;" preload="none">
          <source src="assets/videos/video1.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <h3 style="padding:16px;background:var(--primary);color:var(--white);font-family:'Open Sans',sans-serif;">Most Recent Sunday Service — Walusubi United Church</h3>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
