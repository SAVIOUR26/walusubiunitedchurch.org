<?php require_once __DIR__ . '/config.php'; ?>

<!-- Footer -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <img src="assets/images/logo.png" alt="<?= SITE_NAME ?>">
        <h3><?= SITE_NAME ?></h3>
        <p>United in Christ, connected to the Kingdom. Many Parts, One Body.<br>Serving God and community in Walusubi, Uganda.</p>
        <div class="footer-social">
          <a href="<?= FACEBOOK_URL ?>" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="<?= YOUTUBE_URL ?>" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
          <a href="<?= TWITTER_URL ?>" target="_blank" rel="noopener" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="<?= INSTAGRAM_URL ?>" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
      <div class="footer-col">
        <h4>Quick Links</h4>
        <a href="/">Home</a>
        <a href="/about">About Us</a>
        <a href="/ministries">Ministries</a>
        <a href="/sermons">Sermons</a>
        <a href="/events">Events</a>
        <a href="/gallery">Gallery</a>
        <a href="/blog">Blog</a>
      </div>
      <div class="footer-col">
        <h4>Connect</h4>
        <a href="/prayer">Prayer Request</a>
        <a href="/give">Give / Donate</a>
        <a href="/livestream">Live Stream</a>
        <a href="/connect">Membership</a>
        <a href="/contact">Contact Us</a>
      </div>
      <div class="footer-col">
        <h4>Service Times</h4>
        <p style="color:rgba(255,255,255,0.7);font-size:0.88rem;line-height:2;">
          <strong style="color:var(--gold);">Sunday:</strong><br>
          1st Service: 9:00 AM<br>
          2nd Service: 11:00 AM<br><br>
          <strong style="color:var(--gold);">Wednesday:</strong><br>
          Bible Study: 6:00 PM<br><br>
          <strong style="color:var(--gold);">Friday:</strong><br>
          Prayer Night: 7:00 PM
        </p>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container" style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:10px;width:100%;">
      <span>&copy; <?= date('Y') ?> <?= SITE_NAME ?>. All rights reserved.</span>
      <span>Designed with ❤ for God's Glory | <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></span>
    </div>
  </div>
</footer>

<!-- WhatsApp Float -->
<a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=Hello%20Walusubi%20United%20Church!" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
  <i class="fab fa-whatsapp" style="color:#fff;font-size:1.8rem;"></i>
</a>

<!-- Back to Top -->
<button id="back-to-top" aria-label="Back to top" title="Back to top">
  <i class="fas fa-chevron-up"></i>
</button>

<!-- Lightbox -->
<div class="lightbox" id="lightbox" role="dialog" aria-label="Image lightbox">
  <span class="lightbox-close" id="lightbox-close" aria-label="Close lightbox">&times;</span>
  <img id="lightbox-img" src="" alt="Gallery image">
</div>

<!-- Scripts -->
<script src="assets/js/main.js"></script>
</body>
</html>
