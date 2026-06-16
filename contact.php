<?php
$page_title = 'Contact Us';
$page_desc  = 'Contact Walusubi United Church of Jesus Christ. Call us on +256 782 134374, visit us in Walusubi, Mukono District, Uganda, or send us a message online.';
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

<div class="page-hero" style="padding-bottom:80px;">
  <div class="container">
    <span class="section-label" style="color:var(--gold);">We'd Love to Hear from You</span>
    <h1>Contact Us</h1>
    <p>Reach out by phone, WhatsApp, email or visit us in person — we are here for you</p>
    <div class="breadcrumb">
      <a href="/">Home</a> <span>/</span> <span>Contact</span>
    </div>
  </div>
</div>

<!-- Quick Contact Strip -->
<div style="background:var(--gold);padding:0;">
  <div class="container">
    <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:0;">
      <a href="tel:+256782134374" style="display:flex;align-items:center;gap:10px;padding:18px 32px;color:var(--primary-dark);font-weight:700;text-decoration:none;border-right:1px solid rgba(0,0,0,0.1);transition:var(--transition);" onmouseover="this.style.background='rgba(0,0,0,0.08)'" onmouseout="this.style.background='transparent'">
        <i class="fas fa-phone" style="font-size:1.1rem;"></i>
        <span>+256 782 134374</span>
      </a>
      <a href="tel:+256744521840" style="display:flex;align-items:center;gap:10px;padding:18px 32px;color:var(--primary-dark);font-weight:700;text-decoration:none;border-right:1px solid rgba(0,0,0,0.1);transition:var(--transition);" onmouseover="this.style.background='rgba(0,0,0,0.08)'" onmouseout="this.style.background='transparent'">
        <i class="fas fa-phone" style="font-size:1.1rem;"></i>
        <span>+256 744 521840</span>
      </a>
      <a href="https://wa.me/256744521840?text=Hello%20Walusubi%20United%20Church!" target="_blank" rel="noopener" style="display:flex;align-items:center;gap:10px;padding:18px 32px;color:var(--primary-dark);font-weight:700;text-decoration:none;border-right:1px solid rgba(0,0,0,0.1);transition:var(--transition);" onmouseover="this.style.background='rgba(0,0,0,0.08)'" onmouseout="this.style.background='transparent'">
        <i class="fab fa-whatsapp" style="font-size:1.1rem;"></i>
        <span>WhatsApp Us</span>
      </a>
      <a href="mailto:<?= SITE_EMAIL ?>" style="display:flex;align-items:center;gap:10px;padding:18px 32px;color:var(--primary-dark);font-weight:700;text-decoration:none;transition:var(--transition);" onmouseover="this.style.background='rgba(0,0,0,0.08)'" onmouseout="this.style.background='transparent'">
        <i class="fas fa-envelope" style="font-size:1.1rem;"></i>
        <span><?= SITE_EMAIL ?></span>
      </a>
    </div>
  </div>
</div>

<!-- Main Contact Section -->
<section class="section">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1.6fr;gap:48px;align-items:start;">

      <!-- Left: Info Cards -->
      <div style="display:flex;flex-direction:column;gap:20px;">

        <!-- Address -->
        <div style="background:var(--primary);border-radius:var(--radius-lg);padding:28px;color:var(--white);">
          <div style="display:flex;gap:16px;align-items:flex-start;">
            <div style="width:46px;height:46px;border-radius:50%;background:rgba(255,255,255,0.15);display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.2rem;">📍</div>
            <div>
              <h4 style="color:var(--gold);font-family:'Open Sans',sans-serif;font-size:0.8rem;letter-spacing:2px;text-transform:uppercase;margin-bottom:6px;">Our Location</h4>
              <p style="color:var(--white);font-size:1rem;font-weight:600;margin-bottom:4px;">Walusubi United Church of Jesus Christ</p>
              <p style="color:rgba(255,255,255,0.8);font-size:0.9rem;line-height:1.7;">Walusubi Village<br>Mukono District<br>Central Region, Uganda</p>
            </div>
          </div>
        </div>

        <!-- Phone -->
        <div style="background:var(--white);border-radius:var(--radius-lg);padding:28px;box-shadow:var(--shadow-sm);border:2px solid var(--mid-gray);">
          <h4 style="color:var(--gold);font-family:'Open Sans',sans-serif;font-size:0.8rem;letter-spacing:2px;text-transform:uppercase;margin-bottom:16px;">📞 Phone Numbers</h4>
          <div style="display:flex;flex-direction:column;gap:12px;">
            <a href="tel:+256782134374" style="display:flex;justify-content:space-between;align-items:center;padding:12px 16px;background:var(--light-gray);border-radius:var(--radius);text-decoration:none;transition:var(--transition);" onmouseover="this.style.background='#e8f0fb'" onmouseout="this.style.background='var(--light-gray)'">
              <span style="color:var(--text-medium);font-size:0.85rem;">MTN Line</span>
              <strong style="color:var(--primary);">+256 782 134374</strong>
            </a>
            <a href="tel:+256744521840" style="display:flex;justify-content:space-between;align-items:center;padding:12px 16px;background:var(--light-gray);border-radius:var(--radius);text-decoration:none;transition:var(--transition);" onmouseover="this.style.background='#e8f0fb'" onmouseout="this.style.background='var(--light-gray)'">
              <span style="color:var(--text-medium);font-size:0.85rem;">Airtel / WhatsApp</span>
              <strong style="color:var(--primary);">+256 744 521840</strong>
            </a>
          </div>
        </div>

        <!-- WhatsApp CTA -->
        <a href="https://wa.me/256744521840?text=Hello%20Walusubi%20United%20Church!%20I%20found%20you%20on%20your%20website." target="_blank" rel="noopener"
           style="display:flex;align-items:center;gap:16px;background:#25d366;border-radius:var(--radius-lg);padding:24px;text-decoration:none;transition:var(--transition);"
           onmouseover="this.style.background='#1da851'" onmouseout="this.style.background='#25d366'">
          <span style="font-size:2.2rem;">💬</span>
          <div>
            <p style="color:var(--white);font-weight:700;font-size:1rem;margin-bottom:2px;">Chat on WhatsApp</p>
            <p style="color:rgba(255,255,255,0.85);font-size:0.85rem;">Fastest way to reach us — reply within minutes</p>
          </div>
          <i class="fas fa-arrow-right" style="color:var(--white);margin-left:auto;font-size:1rem;"></i>
        </a>

        <!-- Service Times -->
        <div style="background:var(--light-gray);border-radius:var(--radius-lg);padding:28px;border-left:5px solid var(--gold);">
          <h4 style="color:var(--primary);font-size:1rem;margin-bottom:16px;"><i class="fas fa-clock" style="margin-right:8px;color:var(--gold);"></i>Service Times</h4>
          <div style="display:flex;flex-direction:column;gap:10px;font-size:0.9rem;">
            <div style="display:flex;justify-content:space-between;">
              <span style="color:var(--text-medium);">Sunday 1st Service</span>
              <strong style="color:var(--primary);">9:00 AM</strong>
            </div>
            <div style="display:flex;justify-content:space-between;">
              <span style="color:var(--text-medium);">Sunday 2nd Service</span>
              <strong style="color:var(--primary);">11:00 AM</strong>
            </div>
            <div style="display:flex;justify-content:space-between;">
              <span style="color:var(--text-medium);">Wednesday Bible Study</span>
              <strong style="color:var(--primary);">6:00 PM</strong>
            </div>
            <div style="display:flex;justify-content:space-between;">
              <span style="color:var(--text-medium);">Friday Prayer Night</span>
              <strong style="color:var(--primary);">7:00 PM</strong>
            </div>
          </div>
        </div>

        <!-- Social Links -->
        <div style="background:var(--white);border-radius:var(--radius-lg);padding:24px;box-shadow:var(--shadow-sm);border:2px solid var(--mid-gray);">
          <h4 style="color:var(--primary);font-size:0.9rem;margin-bottom:16px;font-family:'Open Sans',sans-serif;">Follow Us Online</h4>
          <div style="display:flex;gap:10px;flex-wrap:wrap;">
            <a href="<?= FACEBOOK_URL ?>" target="_blank" rel="noopener" style="display:flex;align-items:center;gap:8px;padding:10px 16px;background:#1877f2;border-radius:50px;color:#fff;font-size:0.82rem;font-weight:600;text-decoration:none;">
              <i class="fab fa-facebook-f"></i> Facebook
            </a>
            <a href="<?= YOUTUBE_URL ?>" target="_blank" rel="noopener" style="display:flex;align-items:center;gap:8px;padding:10px 16px;background:#ff0000;border-radius:50px;color:#fff;font-size:0.82rem;font-weight:600;text-decoration:none;">
              <i class="fab fa-youtube"></i> YouTube
            </a>
            <a href="<?= INSTAGRAM_URL ?>" target="_blank" rel="noopener" style="display:flex;align-items:center;gap:8px;padding:10px 16px;background:linear-gradient(45deg,#f09433,#e6683c,#dc2743,#cc2366,#bc1888);border-radius:50px;color:#fff;font-size:0.82rem;font-weight:600;text-decoration:none;">
              <i class="fab fa-instagram"></i> Instagram
            </a>
          </div>
        </div>

      </div>

      <!-- Right: Contact Form -->
      <div>
        <span class="section-label">Send Us a Message</span>
        <h2 style="font-size:2rem;margin:10px 0 8px;">We Are Here for You</h2>
        <p style="color:var(--text-medium);margin-bottom:32px;">Whether you have a question, need prayer, want to plan a visit, or simply want to say hello — we would love to hear from you. Fill in the form and we will get back to you as soon as possible.</p>

        <?php if ($success): ?>
        <div class="alert alert-success">
          <strong>✅ Message received!</strong><br>
          Thank you for reaching out, <?= htmlspecialchars($name) ?>. Our team will respond to you within 24 hours. God bless you!
        </div>
        <?php elseif (!empty($errors)): ?>
        <div class="alert alert-error">
          <strong>Please fix the following:</strong>
          <ul style="margin:8px 0 0 16px;">
            <?php foreach ($errors as $e): ?><li><?= $e ?></li><?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>

        <form method="POST" action="/contact" novalidate style="background:var(--light-gray);padding:36px;border-radius:var(--radius-lg);">
          <div class="form-row">
            <div class="form-group">
              <label for="name">Full Name <span class="required">*</span></label>
              <input type="text" id="name" name="name" placeholder="Your full name"
                value="<?= isset($name) ? htmlspecialchars($name) : '' ?>" required>
            </div>
            <div class="form-group">
              <label for="email">Email Address <span class="required">*</span></label>
              <input type="email" id="email" name="email" placeholder="your@email.com"
                value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label for="subject">Subject <span class="required">*</span></label>
            <select id="subject" name="subject" required>
              <option value="">— What is your message about? —</option>
              <option value="General Enquiry" <?= (isset($subject) && $subject==='General Enquiry') ? 'selected':'' ?>>General Enquiry</option>
              <option value="Planning a Visit" <?= (isset($subject) && $subject==='Planning a Visit') ? 'selected':'' ?>>Planning a Visit</option>
              <option value="Prayer Request" <?= (isset($subject) && $subject==='Prayer Request') ? 'selected':'' ?>>Prayer Request</option>
              <option value="Joining the Church" <?= (isset($subject) && $subject==='Joining the Church') ? 'selected':'' ?>>Joining the Church</option>
              <option value="Partnership / Giving" <?= (isset($subject) && $subject==='Partnership / Giving') ? 'selected':'' ?>>Partnership / Giving</option>
              <option value="Ministry Enquiry" <?= (isset($subject) && $subject==='Ministry Enquiry') ? 'selected':'' ?>>Ministry Enquiry</option>
              <option value="Media / Press" <?= (isset($subject) && $subject==='Media / Press') ? 'selected':'' ?>>Media / Press</option>
              <option value="Other" <?= (isset($subject) && $subject==='Other') ? 'selected':'' ?>>Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message">Your Message <span class="required">*</span></label>
            <textarea id="message" name="message" placeholder="Write your message here..." rows="6" required><?= isset($message) ? htmlspecialchars($message) : '' ?></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-lg" style="width:100%;justify-content:center;">
            <i class="fas fa-paper-plane"></i>&nbsp; Send Message
          </button>
          <p style="text-align:center;color:var(--text-light);font-size:0.8rem;margin-top:12px;">
            <i class="fas fa-lock"></i> Your information is private and will never be shared.
          </p>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Map Section -->
<section style="padding:0 0 80px;">
  <div class="container">
    <div style="background:var(--primary);border-radius:var(--radius-lg) var(--radius-lg) 0 0;padding:20px 28px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px;">
      <div style="display:flex;align-items:center;gap:12px;">
        <i class="fas fa-map-marked-alt" style="color:var(--gold);font-size:1.3rem;"></i>
        <span style="color:var(--white);font-weight:600;">Walusubi, Mukono District — Central Uganda</span>
      </div>
      <a href="https://maps.google.com/?q=Mukono+Uganda" target="_blank" rel="noopener" class="btn btn-primary btn-sm" style="background:var(--gold);border-color:var(--gold);color:var(--primary-dark);">
        <i class="fas fa-directions"></i> Get Directions
      </a>
    </div>
    <div class="map-container" style="border-radius:0 0 var(--radius-lg) var(--radius-lg);height:420px;">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127431.46484375!2d32.6901!3d0.3476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbc0a0f4e4c6b%3A0x4a15c7c8e9e4b6e8!2sMukono%2C%20Uganda!5e0!3m2!1sen!2sug!4v1680000000000!5m2!1sen!2sug"
        width="100%" height="100%" style="border:0;display:block;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade" title="Walusubi United Church — Mukono District, Uganda">
      </iframe>
    </div>
  </div>
</section>

<!-- Visit Us CTA -->
<section style="background:var(--light-gray);padding:70px 0;text-align:center;">
  <div class="container" style="max-width:700px;">
    <span class="section-label">You Are Welcome</span>
    <h2 style="margin:12px 0;">Come Visit Us This Sunday</h2>
    <p style="color:var(--text-medium);font-size:1.05rem;margin-bottom:32px;">No need to book in advance. Simply come as you are. Our doors are open to everyone and our Welcome Team will be there to greet you from the moment you arrive.</p>
    <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
      <a href="https://wa.me/256744521840?text=Hi!%20I%27d%20like%20to%20visit%20the%20church%20this%20Sunday" target="_blank" rel="noopener" class="btn btn-primary btn-lg">
        <i class="fab fa-whatsapp"></i> Let Us Know You're Coming
      </a>
      <a href="/about" class="btn btn-outline btn-lg">Learn About Us First</a>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
