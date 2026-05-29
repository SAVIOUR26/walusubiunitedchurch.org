<?php
$page_title = 'Blog & News';
$page_desc  = 'Read devotionals, announcements, pastor\'s messages and event recaps from Walusubi United Church of Jesus Christ.';
require_once 'includes/header.php';

$posts = [
  ['img'=>'img1.jpeg','category'=>'Devotional','cat_color'=>'#1a3a6b','title'=>'The Secret to Unshakeable Peace','author'=>'Pastor Bogere Geofrey','date'=>'May 26, 2025','excerpt'=>'In a world full of chaos and uncertainty, there is a peace that surpasses all understanding. Learn how to walk in this supernatural peace every single day...'],
  ['img'=>'img2.jpeg','category'=>'Announcement','cat_color'=>'#27ae60','title'=>'Youth Empowerment Conference 2025 — Registration Open','author'=>'Church Secretary','date'=>'May 24, 2025','excerpt'=>'We are thrilled to announce the Youth Empowerment Conference 2025 coming on June 14. This is a must-attend event for all young people aged 13-35...'],
  ['img'=>'img4.jpeg','category'=>'Pastor\'s Message','cat_color'=>'#8e44ad','title'=>'Why Unity in the Church Matters More Than Ever','author'=>'Pastor Bogere Geofrey','date'=>'May 20, 2025','excerpt'=>'Division has never built anything. It is unity, walking in one accord, that causes the anointing to flow and God\'s blessing to be commanded. Here is why...'],
  ['img'=>'img5.jpeg','category'=>'Event Recap','cat_color'=>'#e67e22','title'=>'Community Outreach Day — Hundreds Served with Love','author'=>'Outreach Team','date'=>'May 15, 2025','excerpt'=>'Last week our church family went into the community and served hundreds of families with food, medical care and prayer. Here is a recap of this blessed day...'],
  ['img'=>'img8.jpeg','category'=>'Devotional','cat_color'=>'#1a3a6b','title'=>'5 Scriptures for When You Feel Overwhelmed','author'=>'Pastor Bogere Geofrey','date'=>'May 10, 2025','excerpt'=>'Life gets overwhelming sometimes. Whether it\'s work, family, finances or health, the weight can feel unbearable. But God\'s Word has an answer for every situation...'],
  ['img'=>'img11.jpeg','category'=>'Announcement','cat_color'=>'#27ae60','title'=>'New Service Time Announced for Sunday Second Service','author'=>'Church Admin','date'=>'May 5, 2025','excerpt'=>'Starting this June, our Sunday second service will begin at 11:00 AM instead of 10:30 AM. This change is to allow more time for our growing congregation...'],
];
?>

<div class="page-hero">
  <div class="container">
    <h1>Blog &amp; News</h1>
    <p>Devotionals, announcements and stories of God's faithfulness</p>
    <div class="breadcrumb">
      <a href="index.php">Home</a> <span>/</span> <span>Blog</span>
    </div>
  </div>
</div>

<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Latest Articles</span>
      <h2>From the Church Family</h2>
      <p>Be inspired, informed and encouraged through our blog.</p>
    </div>
    <div class="grid-3">
      <?php foreach ($posts as $post): ?>
      <div class="blog-card">
        <div class="blog-img">
          <img src="assets/images/<?= $post['img'] ?>" alt="<?= htmlspecialchars($post['title']) ?>" loading="lazy">
        </div>
        <div class="blog-body">
          <span class="blog-category" style="background:<?= $post['cat_color'] ?>;"><?= htmlspecialchars($post['category']) ?></span>
          <h3><?= htmlspecialchars($post['title']) ?></h3>
          <p><?= htmlspecialchars($post['excerpt']) ?></p>
          <div class="blog-meta">
            <span><i class="fas fa-user"></i> <?= htmlspecialchars($post['author']) ?></span>
            <span><i class="fas fa-calendar"></i> <?= $post['date'] ?></span>
          </div>
          <a href="#" class="btn btn-outline btn-sm" style="margin-top:16px;">Read More <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center;margin-top:48px;">
      <p style="color:var(--text-medium);margin-bottom:20px;">Want to receive our devotionals and news directly in your inbox?</p>
      <form style="display:flex;gap:12px;max-width:480px;margin:0 auto;" onsubmit="event.preventDefault();this.querySelector('button').textContent='Subscribed! ✓';">
        <input type="email" placeholder="Enter your email address" style="flex:1;padding:14px 18px;border:2px solid var(--mid-gray);border-radius:50px;font-family:'Open Sans',sans-serif;font-size:0.95rem;" required>
        <button type="submit" class="btn btn-primary">Subscribe</button>
      </form>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
