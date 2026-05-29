<?php
$page_title = 'Give Online';
$page_desc  = 'Support the ministry of Walusubi United Church of Jesus Christ through tithes, offerings and donations. Give via mobile money, bank transfer or online.';
require_once 'includes/header.php';
?>

<div class="page-hero">
  <div class="container">
    <h1>Give &amp; Support</h1>
    <p>Partnering with us to advance God's Kingdom</p>
    <div class="breadcrumb">
      <a href="index.php">Home</a> <span>/</span> <span>Give</span>
    </div>
  </div>
</div>

<!-- Why Give -->
<section class="section">
  <div class="container">
    <div class="welcome-grid">
      <div class="welcome-img">
        <img src="assets/images/img7.jpeg" alt="Church offering and giving">
      </div>
      <div class="welcome-text">
        <span class="section-label">Kingdom Investment</span>
        <h2>Why We Give</h2>
        <p>Giving is an act of worship and an expression of our trust in God as our Provider. When you give to Walusubi United Church, you are investing in the advancement of God's Kingdom — changing lives, funding missions and transforming communities.</p>
        <div class="scripture-banner" style="margin-top:24px;">
          <blockquote>"Each of you should give what you have decided in your heart to give, not reluctantly or under compulsion, for God loves a cheerful giver."</blockquote>
          <cite>— 2 Corinthians 9:7 (NIV)</cite>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Giving Methods -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <span class="section-label">How to Give</span>
      <h2>Giving Methods</h2>
      <p>Choose the giving method that works best for you. Every gift, big or small, makes a difference.</p>
    </div>
    <div class="grid-3">
      <!-- Mobile Money -->
      <div class="giving-method">
        <h3><span class="icon">📱</span> Mobile Money</h3>
        <p style="color:var(--text-medium);font-size:0.9rem;margin-bottom:16px;">Send via MTN or Airtel Money instantly.</p>
        <div class="giving-detail"><span>MTN Mobile Money</span><strong>+256 700 000 000</strong></div>
        <div class="giving-detail"><span>Airtel Money</span><strong>+256 750 000 000</strong></div>
        <div class="giving-detail"><span>Account Name</span><strong>Walusubi United Church</strong></div>
        <p style="font-size:0.82rem;color:var(--text-light);margin-top:12px;">Send via M-Pesa/MTN/Airtel and SMS confirmation to church admin.</p>
      </div>
      <!-- Bank Transfer -->
      <div class="giving-method">
        <h3><span class="icon">🏦</span> Bank Transfer</h3>
        <p style="color:var(--text-medium);font-size:0.9rem;margin-bottom:16px;">Transfer directly to our church bank account.</p>
        <div class="giving-detail"><span>Bank Name</span><strong>Stanbic Bank Uganda</strong></div>
        <div class="giving-detail"><span>Account Name</span><strong>Walusubi United Church</strong></div>
        <div class="giving-detail"><span>Account Number</span><strong>9030005678912</strong></div>
        <div class="giving-detail"><span>Branch</span><strong>Mukono Branch</strong></div>
        <div class="giving-detail"><span>Swift Code</span><strong>SBICUGKX</strong></div>
      </div>
      <!-- Online -->
      <div class="giving-method" style="text-align:center;">
        <h3><span class="icon">💳</span> Online Giving</h3>
        <p style="color:var(--text-medium);font-size:0.9rem;margin-bottom:24px;">Give securely online using PayPal or card payment.</p>
        <a href="#" class="btn btn-primary btn-lg" style="margin-bottom:16px;">
          <i class="fab fa-paypal"></i> Give via PayPal
        </a>
        <p style="font-size:0.8rem;color:var(--text-light);">Secure payment powered by PayPal. All major cards accepted.</p>
        <div style="margin-top:24px;padding-top:24px;border-top:1px solid var(--mid-gray);">
          <p style="font-size:0.85rem;margin-bottom:8px;font-weight:600;">WhatsApp Giving</p>
          <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=I%20want%20to%20give%20to%20the%20church" class="btn btn-outline btn-sm">
            <i class="fab fa-whatsapp"></i> Give via WhatsApp
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Partnership Tiers -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Partner With Us</span>
      <h2>Partnership Levels</h2>
      <p>Become a church partner and join hands in building God's Kingdom together.</p>
    </div>
    <div class="grid-3">
      <div class="tier-card">
        <h3>Seed Partner</h3>
        <div class="amount">UGX 10K/mo</div>
        <p style="color:var(--text-medium);font-size:0.88rem;margin-bottom:20px;">Plant seeds of faith and participate in our weekly ministry activities.</p>
        <ul style="text-align:left;color:var(--text-medium);font-size:0.85rem;margin-bottom:24px;">
          <li style="margin-bottom:8px;">✓ Monthly prayer newsletter</li>
          <li style="margin-bottom:8px;">✓ Monthly partner prayer</li>
          <li>✓ Annual partner dinner</li>
        </ul>
        <a href="contact.php" class="btn btn-outline btn-sm">Become a Partner</a>
      </div>
      <div class="tier-card featured">
        <h3>Kingdom Builder</h3>
        <div class="amount">UGX 50K/mo</div>
        <p style="color:rgba(255,255,255,0.85);font-size:0.88rem;margin-bottom:20px;">Be a pillar of the church and directly fund our outreach and mission work.</p>
        <ul style="text-align:left;color:rgba(255,255,255,0.85);font-size:0.85rem;margin-bottom:24px;">
          <li style="margin-bottom:8px;">✓ All Seed Partner benefits</li>
          <li style="margin-bottom:8px;">✓ Personal prayer call monthly</li>
          <li style="margin-bottom:8px;">✓ VIP event invitations</li>
          <li>✓ Special recognition</li>
        </ul>
        <a href="contact.php" class="btn btn-primary btn-sm" style="background:var(--gold);border-color:var(--gold);">Become a Partner</a>
      </div>
      <div class="tier-card">
        <h3>Vision Sponsor</h3>
        <div class="amount">UGX 200K/mo</div>
        <p style="color:var(--text-medium);font-size:0.88rem;margin-bottom:20px;">Champion the vision and become a founding sponsor of our major projects.</p>
        <ul style="text-align:left;color:var(--text-medium);font-size:0.85rem;margin-bottom:24px;">
          <li style="margin-bottom:8px;">✓ All Kingdom Builder benefits</li>
          <li style="margin-bottom:8px;">✓ Named project dedication</li>
          <li style="margin-bottom:8px;">✓ Board advisory access</li>
          <li>✓ Annual stewardship report</li>
        </ul>
        <a href="contact.php" class="btn btn-outline btn-sm">Become a Sponsor</a>
      </div>
    </div>
  </div>
</section>

<!-- Testimony -->
<section class="testimonials" style="padding:70px 0;">
  <div class="container">
    <div class="section-header">
      <h2>Testimony of Giving</h2>
      <p>Hear how faithful giving has blessed our partners.</p>
    </div>
    <div class="grid-2">
      <div class="testimonial-card">
        <div class="testimonial-quote">"</div>
        <p>When I started tithing faithfully, God opened doors I could never have opened myself. My business grew, my family was blessed, and I found joy in giving that I had never experienced before.</p>
        <div class="testimonial-author">
          <img src="assets/images/img9.jpeg" alt="James O.">
          <div><strong>James O.</strong><span>Kingdom Builder Partner</span></div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-quote">"</div>
        <p>I was skeptical at first, but the Word of God says give and it shall be given to you. I obeyed, and God has been faithful beyond measure. This church has taught me true stewardship.</p>
        <div class="testimonial-author">
          <img src="assets/images/img10.jpeg" alt="Ruth A.">
          <div><strong>Ruth A.</strong><span>Seed Partner</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
