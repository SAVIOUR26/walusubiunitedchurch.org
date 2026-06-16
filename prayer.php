<?php
$page_title = 'Prayer Request';
$page_desc  = 'Submit a confidential prayer request to Walusubi United Church of Jesus Christ. Our prayer team will intercede on your behalf.';
require_once 'includes/header.php';

$success = false;
$errors  = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name       = trim(htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8'));
    $email      = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $phone      = trim(htmlspecialchars($_POST['phone'] ?? '', ENT_QUOTES, 'UTF-8'));
    $request    = trim(htmlspecialchars($_POST['request'] ?? '', ENT_QUOTES, 'UTF-8'));
    $confidential = isset($_POST['confidential']);

    if (empty($name))    $errors[] = 'Please enter your name.';
    if (!$email)         $errors[] = 'Please enter a valid email address.';
    if (empty($request)) $errors[] = 'Please enter your prayer request.';

    if (empty($errors)) {
        $subject = 'New Prayer Request from ' . $name;
        $body    = "Name: $name\nEmail: $email\nPhone: $phone\nConfidential: " . ($confidential ? 'Yes' : 'No') . "\n\nPrayer Request:\n$request";
        $headers = 'From: ' . SITE_EMAIL;
        @mail(SITE_EMAIL, $subject, $body, $headers);
        $success = true;
    }
}
?>

<div class="page-hero">
  <div class="container">
    <h1>Prayer Request</h1>
    <p>Bring your burden to God — we will pray with you</p>
    <div class="breadcrumb">
      <a href="/">Home</a> <span>/</span> <span>Prayer</span>
    </div>
  </div>
</div>

<section class="section">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1.5fr;gap:60px;align-items:start;">
      <!-- Left: Info -->
      <div>
        <div class="scripture-banner" style="margin-bottom:32px;">
          <blockquote>"Do not be anxious about anything, but in every situation, by prayer and petition, with thanksgiving, present your requests to God."</blockquote>
          <cite>— Philippians 4:6 (NIV)</cite>
        </div>
        <h2 style="font-size:1.6rem;margin-bottom:16px;">We Believe in the Power of Prayer</h2>
        <p style="color:var(--text-medium);margin-bottom:16px;">Our dedicated prayer team intercedes for every request submitted. You are not alone — the body of Christ stands with you.</p>
        <div style="display:flex;flex-direction:column;gap:16px;">
          <div style="display:flex;gap:14px;align-items:flex-start;">
            <span style="font-size:1.5rem;">🙏</span>
            <div>
              <strong>Intercessory Prayer Team</strong>
              <p style="color:var(--text-medium);font-size:0.9rem;margin-top:4px;">Our team prays over every request with faith and compassion.</p>
            </div>
          </div>
          <div style="display:flex;gap:14px;align-items:flex-start;">
            <span style="font-size:1.5rem;">🔒</span>
            <div>
              <strong>Complete Confidentiality</strong>
              <p style="color:var(--text-medium);font-size:0.9rem;margin-top:4px;">Your private requests are treated with the utmost care and discretion.</p>
            </div>
          </div>
          <div style="display:flex;gap:14px;align-items:flex-start;">
            <span style="font-size:1.5rem;">📞</span>
            <div>
              <strong>Need Immediate Support?</strong>
              <p style="color:var(--text-medium);font-size:0.9rem;margin-top:4px;">Call or WhatsApp us: <a href="tel:<?= SITE_PHONE ?>"><?= SITE_PHONE ?></a></p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Form -->
      <div>
        <?php if ($success): ?>
        <div class="alert alert-success">
          <strong>🙏 Your prayer request has been received!</strong><br>
          Our prayer team will intercede on your behalf. May God answer your prayers in Jesus' name. Amen!
        </div>
        <?php elseif (!empty($errors)): ?>
        <div class="alert alert-error">
          <strong>Please correct the following:</strong>
          <ul style="margin:8px 0 0 16px;">
            <?php foreach ($errors as $e): ?><li><?= $e ?></li><?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>

        <div class="form-note">
          <i class="fas fa-lock"></i> Your prayer request is safe with us. Any information marked "Confidential" will only be seen by our prayer team.
        </div>

        <form method="POST" action="/prayer" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label for="name">Full Name <span class="required">*</span></label>
              <input type="text" id="name" name="name" placeholder="Your full name" value="<?= isset($name) ? htmlspecialchars($name) : '' ?>" required>
            </div>
            <div class="form-group">
              <label for="email">Email Address <span class="required">*</span></label>
              <input type="email" id="email" name="email" placeholder="your@email.com" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label for="phone">Phone Number <span style="color:var(--text-light);font-weight:400;">(optional)</span></label>
            <input type="tel" id="phone" name="phone" placeholder="+256 782 134374" value="<?= isset($phone) ? htmlspecialchars($phone) : '' ?>">
          </div>
          <div class="form-group">
            <label for="request">Your Prayer Request <span class="required">*</span></label>
            <textarea id="request" name="request" placeholder="Share your prayer need here. Be as specific as you'd like..." rows="6" required><?= isset($request) ? htmlspecialchars($request) : '' ?></textarea>
          </div>
          <div class="form-group">
            <div class="checkbox-group">
              <input type="checkbox" id="confidential" name="confidential" <?= isset($confidential) && $confidential ? 'checked' : '' ?>>
              <label for="confidential">Mark this request as <strong>confidential</strong> (seen only by the prayer team)</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-lg" style="width:100%;">
            <i class="fas fa-paper-plane"></i> Submit Prayer Request
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Prayer Times -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <h2>Join Us in Prayer</h2>
      <p>We have dedicated times of corporate prayer every week.</p>
    </div>
    <div class="grid-3">
      <div class="service-card">
        <div class="service-icon">🌅</div>
        <h3>Morning Prayer</h3>
        <div class="time">Mon–Fri, 6:00 AM</div>
        <div class="location">Main Sanctuary</div>
      </div>
      <div class="service-card">
        <div class="service-icon">🌙</div>
        <h3>Prayer Night</h3>
        <div class="time">Friday, 7:00 PM – 9:00 PM</div>
        <div class="location">Prayer Hall</div>
      </div>
      <div class="service-card">
        <div class="service-icon">⭐</div>
        <h3>All Night Vigil</h3>
        <div class="time">First Saturday of Month</div>
        <div class="location">Main Sanctuary</div>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
