<?php
$page_title = 'Contact Us';
$page_desc  = 'Get in touch with Walusubi United Church of Jesus Christ. Find our address, service times, phone number and contact form.';
require_once 'includes/header.php';

$success = false;
$errors  = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim(htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8'));
    $email   = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $subject = trim(htmlspecialchars($_POST['subject'] ?? '', ENT_QUOTES, 'UTF-8'));
    $message = trim(htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8'));

    if (empty($name))    $errors[] = 'Please enter your name.';
    if (!$email)         $errors[] = 'Please enter a valid email address.';
    if (empty($subject)) $errors[] = 'Please enter a subject.';
    if (empty($message)) $errors[] = 'Please enter your message.';

    if (empty($errors)) {
        $mail_subject = 'Website Contact: ' . $subject;
        $body = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";
        $headers = 'From: ' . SITE_EMAIL;
        @mail(SITE_EMAIL, $mail_subject, $body, $headers);
        $success = true;
    }
}
?>

<div class="page-hero">
  <div class="container">
    <h1>Contact Us</h1>
    <p>We'd love to hear from you</p>
    <div class="breadcrumb">
      <a href="index.php">Home</a> <span>/</span> <span>Contact</span>
    </div>
  </div>
</div>

<section class="section">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1.6fr;gap:48px;align-items:start;">
      <!-- Contact Info -->
      <div>
        <div class="contact-info-card">
          <h3>Get In Touch</h3>
          <div class="contact-item">
            <div class="contact-icon">📍</div>
            <div>
              <h4>Address</h4>
              <p><?= ADDRESS ?>, Uganda</p>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-icon">📞</div>
            <div>
              <h4>Phone</h4>
              <p><a href="tel:<?= SITE_PHONE ?>" style="color:rgba(255,255,255,0.85);"><?= SITE_PHONE ?></a><br>
              <a href="tel:<?= SITE_PHONE2 ?>" style="color:rgba(255,255,255,0.85);"><?= SITE_PHONE2 ?></a></p>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-icon">📧</div>
            <div>
              <h4>Email</h4>
              <p><a href="mailto:<?= SITE_EMAIL ?>" style="color:rgba(255,255,255,0.85);"><?= SITE_EMAIL ?></a></p>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-icon">🕒</div>
            <div>
              <h4>Service Times</h4>
              <p>Sunday: 9:00 AM &amp; 11:00 AM<br>Wednesday: 6:00 PM<br>Friday: 7:00 PM</p>
            </div>
          </div>
          <div style="margin-top:24px;">
            <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=Hello%20Walusubi%20Church!" target="_blank" rel="noopener" class="btn btn-primary btn-sm" style="width:100%;justify-content:center;background:#25d366;border-color:#25d366;">
              <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
          </div>
          <div class="social-links">
            <a href="<?= FACEBOOK_URL ?>" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="<?= YOUTUBE_URL ?>" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            <a href="<?= TWITTER_URL ?>" target="_blank" rel="noopener" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="<?= INSTAGRAM_URL ?>" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div>
        <?php if ($success): ?>
        <div class="alert alert-success">
          <strong>✅ Message sent!</strong><br>
          Thank you for reaching out. We will get back to you within 24 hours. God bless you!
        </div>
        <?php elseif (!empty($errors)): ?>
        <div class="alert alert-error">
          <strong>Please fix the following:</strong>
          <ul style="margin:8px 0 0 16px;">
            <?php foreach ($errors as $e): ?><li><?= $e ?></li><?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>

        <h2 style="margin-bottom:28px;">Send Us a Message</h2>
        <form method="POST" action="contact.php" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label for="name">Your Name <span class="required">*</span></label>
              <input type="text" id="name" name="name" placeholder="Full name" value="<?= isset($name) ? htmlspecialchars($name) : '' ?>" required>
            </div>
            <div class="form-group">
              <label for="email">Email Address <span class="required">*</span></label>
              <input type="email" id="email" name="email" placeholder="your@email.com" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label for="subject">Subject <span class="required">*</span></label>
            <input type="text" id="subject" name="subject" placeholder="What is your message about?" value="<?= isset($subject) ? htmlspecialchars($subject) : '' ?>" required>
          </div>
          <div class="form-group">
            <label for="message">Message <span class="required">*</span></label>
            <textarea id="message" name="message" placeholder="Write your message here..." rows="7" required><?= isset($message) ? htmlspecialchars($message) : '' ?></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-lg" style="width:100%;">
            <i class="fas fa-paper-plane"></i> Send Message
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Map -->
<section style="padding:0 0 80px;">
  <div class="container">
    <div class="map-container">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63712.01699282879!2d32.7535764!3d0.3220407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbc0a0f4e4c6b%3A0x4a15c7c8e9e4b6e8!2sMukono%2C%20Uganda!5e0!3m2!1sen!2sug!4v1680000000000!5m2!1sen!2sug"
        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
        title="Walusubi United Church location map">
      </iframe>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
