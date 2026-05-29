<?php
$page_title = 'Connect & Membership';
$page_desc  = 'Connect with Walusubi United Church of Jesus Christ. Register for baptism, volunteer, join a small group or become a member.';
require_once 'includes/header.php';

$success = false;
$connect_type = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $connect_type = htmlspecialchars($_POST['connect_type'] ?? '', ENT_QUOTES, 'UTF-8');
    $name    = trim(htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8'));
    $email   = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $phone   = trim(htmlspecialchars($_POST['phone'] ?? '', ENT_QUOTES, 'UTF-8'));
    $message = trim(htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8'));

    if ($name && $email) {
        $subject = "New Connect Form: $connect_type — $name";
        $body = "Type: $connect_type\nName: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
        $headers = 'From: ' . SITE_EMAIL;
        @mail(SITE_EMAIL, $subject, $body, $headers);
        $success = true;
    }
}

$groups = [
  ['icon'=>'📖','name'=>'Bible Study Group','time'=>'Wednesday 6:00 PM','location'=>'Main Hall','desc'=>'Deep Bible study for believers who want to go deeper in the Word.'],
  ['icon'=>'🙏','name'=>'Intercession Group','time'=>'Friday 6:00 AM','location'=>'Prayer Hall','desc'=>'Dedicated intercessors who stand in the gap for the church and nation.'],
  ['icon'=>'🔥','name'=>'Youth Cell Group','time'=>'Saturday 3:00 PM','location'=>'Youth Centre','desc'=>'Fun, faith-filled fellowship for young people aged 13-35.'],
  ['icon'=>'👶','name'=>'Young Families Group','time'=>'Sunday 2:00 PM','location'=>'Fellowship Hall','desc'=>'For young married couples and parents navigating family and faith together.'],
  ['icon'=>'💼','name'=>'Marketplace Ministers','time'=>'Monday 7:00 PM (Online)','location'=>'Zoom','desc'=>'Connecting Christians in business, careers and the workplace.'],
  ['icon'=>'🌍','name'=>'Outreach Team','time'=>'Last Saturday Monthly','location'=>'Various Locations','desc'=>'Taking the love of Jesus to the streets and communities around us.'],
];
?>

<div class="page-hero">
  <div class="container">
    <h1>Connect With Us</h1>
    <p>Find your place in our church family</p>
    <div class="breadcrumb">
      <a href="index.php">Home</a> <span>/</span> <span>Connect</span>
    </div>
  </div>
</div>

<!-- Welcome New Members -->
<section class="section">
  <div class="container">
    <div class="welcome-grid">
      <div class="welcome-text">
        <span class="section-label">You Belong Here</span>
        <h2>Welcome to the Family</h2>
        <p>Whether you are brand new to faith or have been walking with God for years, there is a place for you at Walusubi United Church. We are a family — and families make room for everyone.</p>
        <p>Taking your first step is easy. Join us on Sunday, introduce yourself to our Welcome Team, and let us help you find your place in this community. You are not just a visitor — you are family.</p>
        <div style="display:flex;gap:12px;margin-top:24px;flex-wrap:wrap;">
          <a href="#connect-form" class="btn btn-primary">Connect Today</a>
          <a href="contact.php" class="btn btn-outline">Visit Us Sunday</a>
        </div>
      </div>
      <div class="welcome-img">
        <img src="assets/images/img3.jpeg" alt="Church family fellowship">
      </div>
    </div>
  </div>
</section>

<!-- Connection Points -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Get Plugged In</span>
      <h2>Ways to Connect</h2>
      <p>There is a place for everyone in the body of Christ.</p>
    </div>
    <div class="grid-4">
      <div class="service-card">
        <div class="service-icon">💧</div>
        <h3>Baptism</h3>
        <p style="color:var(--text-medium);font-size:0.88rem;">Take the step of public declaration of your faith through water baptism.</p>
        <a href="#connect-form" class="btn btn-outline btn-sm" style="margin-top:12px;">Register</a>
      </div>
      <div class="service-card">
        <div class="service-icon">🙋</div>
        <h3>Volunteer</h3>
        <p style="color:var(--text-medium);font-size:0.88rem;">Use your gifts to serve the church. We have opportunities for everyone.</p>
        <a href="#connect-form" class="btn btn-outline btn-sm" style="margin-top:12px;">Sign Up</a>
      </div>
      <div class="service-card">
        <div class="service-icon">👥</div>
        <h3>Small Groups</h3>
        <p style="color:var(--text-medium);font-size:0.88rem;">Join a small group for deeper fellowship, accountability and growth.</p>
        <a href="#small-groups" class="btn btn-outline btn-sm" style="margin-top:12px;">Find a Group</a>
      </div>
      <div class="service-card">
        <div class="service-icon">📋</div>
        <h3>Membership</h3>
        <p style="color:var(--text-medium);font-size:0.88rem;">Formally join Walusubi United Church and become a covenant member.</p>
        <a href="#connect-form" class="btn btn-outline btn-sm" style="margin-top:12px;">Apply</a>
      </div>
    </div>
  </div>
</section>

<!-- Small Groups -->
<section class="section" id="small-groups">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Community</span>
      <h2>Small Groups &amp; Cells</h2>
      <p>Life is better in community. Find a small group that fits your season.</p>
    </div>
    <div class="grid-2">
      <?php foreach ($groups as $g): ?>
      <div class="group-card">
        <div class="group-icon"><?= $g['icon'] ?></div>
        <div class="group-info">
          <h4><?= htmlspecialchars($g['name']) ?></h4>
          <p><?= htmlspecialchars($g['desc']) ?></p>
          <div class="group-time"><i class="fas fa-clock"></i> <?= $g['time'] ?> &nbsp;|&nbsp; <i class="fas fa-map-marker-alt"></i> <?= $g['location'] ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Connect Form -->
<section class="section section-alt" id="connect-form">
  <div class="container" style="max-width:700px;">
    <div class="section-header">
      <span class="section-label">Take the Step</span>
      <h2>Connect With Us Today</h2>
      <p>Fill in the form below and our team will reach out to welcome you personally.</p>
    </div>

    <?php if ($success): ?>
    <div class="alert alert-success">
      <strong>🎉 Welcome to the family!</strong><br>
      Your connection form has been received. Our team will contact you very soon. We are so excited to have you!
    </div>
    <?php endif; ?>

    <form method="POST" action="connect.php#connect-form" novalidate>
      <div class="form-group">
        <label for="connect_type">I want to: <span class="required">*</span></label>
        <select id="connect_type" name="connect_type" required>
          <option value="">— Select an option —</option>
          <option value="New Member" <?= (isset($connect_type) && $connect_type==='New Member') ? 'selected' : '' ?>>Join as a New Member</option>
          <option value="Baptism" <?= (isset($connect_type) && $connect_type==='Baptism') ? 'selected' : '' ?>>Register for Baptism</option>
          <option value="Volunteer" <?= (isset($connect_type) && $connect_type==='Volunteer') ? 'selected' : '' ?>>Volunteer / Serve</option>
          <option value="Small Group" <?= (isset($connect_type) && $connect_type==='Small Group') ? 'selected' : '' ?>>Join a Small Group</option>
          <option value="General" <?= (isset($connect_type) && $connect_type==='General') ? 'selected' : '' ?>>General Connection</option>
        </select>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="name">Full Name <span class="required">*</span></label>
          <input type="text" id="name" name="name" placeholder="Your full name" required>
        </div>
        <div class="form-group">
          <label for="email">Email Address <span class="required">*</span></label>
          <input type="email" id="email" name="email" placeholder="your@email.com" required>
        </div>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="+256 700 000 000">
      </div>
      <div class="form-group">
        <label for="message">Anything else you'd like us to know?</label>
        <textarea id="message" name="message" placeholder="Optional message..." rows="4"></textarea>
      </div>
      <button type="submit" class="btn btn-primary btn-lg" style="width:100%;">
        <i class="fas fa-heart"></i> Connect With Us
      </button>
    </form>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
