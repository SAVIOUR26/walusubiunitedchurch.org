<?php
$page_title = 'Events';
$page_desc  = 'Upcoming church events at Walusubi United Church of Jesus Christ — services, prayer nights, conferences, outreaches and more.';
require_once 'includes/header.php';

$events = [
  ['day'=>'01','month'=>'Jun','title'=>'Sunday Worship Service','time'=>'9:00 AM – 1:00 PM','location'=>'Main Sanctuary','desc'=>'Join us for our uplifting Sunday worship service with praise, powerful teaching from the Word, and warm fellowship.','type'=>'service'],
  ['day'=>'04','month'=>'Jun','title'=>'Midweek Bible Study','time'=>'6:00 PM – 8:00 PM','location'=>'Main Hall','desc'=>'A deep dive into the Scriptures every Wednesday evening. Bring your Bible and come ready to learn and be transformed.','type'=>'bible-study'],
  ['day'=>'07','month'=>'Jun','title'=>'All Night Prayer Vigil','time'=>'10:00 PM – 4:00 AM','location'=>'Prayer Hall','desc'=>'A night of intense intercession for our nation, families, and the advancement of God\'s Kingdom. Come prepared to pray!','type'=>'prayer'],
  ['day'=>'14','month'=>'Jun','title'=>'Youth Empowerment Conference','time'=>'2:00 PM – 7:00 PM','location'=>'Youth Centre','desc'=>'A dynamic conference for young people 13-35. Featuring powerful speakers, workshops, worship and lots of fun.','type'=>'conference'],
  ['day'=>'15','month'=>'Jun','title'=>'Sunday Special Service','time'=>'9:00 AM – 2:00 PM','location'=>'Main Sanctuary','desc'=>'A special service with anointed worship, the Word of God and a time of ministry for healing and breakthrough.','type'=>'service'],
  ['day'=>'21','month'=>'Jun','title'=>'Community Outreach Day','time'=>'8:00 AM – 4:00 PM','location'=>'Walusubi Village','desc'=>'Serving our neighbours with food distribution, free medical checkups, prayer and sharing the love of Jesus Christ.','type'=>'outreach'],
  ['day'=>'28','month'=>'Jun','title'=>'Women\'s Fellowship Monthly Meeting','time'=>'10:00 AM – 1:00 PM','location'=>'Fellowship Hall','desc'=>'Our beloved women gather monthly for teaching, testimonies, prayer and sweet fellowship. All women are welcome!','type'=>'fellowship'],
  ['day'=>'05','month'=>'Jul','title'=>'Gospel Crusade – Walusubi','time'=>'5:00 PM – 9:00 PM','location'=>'Walusubi Grounds','desc'=>'A powerful open-air crusade bringing the Gospel to the community. Expect miracles, salvations and powerful worship.','type'=>'crusade'],
];

$type_colors = [
  'service'=>'#1a3a6b','bible-study'=>'#27ae60','prayer'=>'#8e44ad',
  'conference'=>'#e67e22','outreach'=>'#e74c3c','fellowship'=>'#16a085','crusade'=>'#c9a227'
];
$type_labels = [
  'service'=>'Service','bible-study'=>'Bible Study','prayer'=>'Prayer',
  'conference'=>'Conference','outreach'=>'Outreach','fellowship'=>'Fellowship','crusade'=>'Crusade'
];
?>

<div class="page-hero">
  <div class="container">
    <h1>Upcoming Events</h1>
    <p>Mark your calendar and join us for what God has planned</p>
    <div class="breadcrumb">
      <a href="index.php">Home</a> <span>/</span> <span>Events</span>
    </div>
  </div>
</div>

<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Coming Up</span>
      <h2>June &amp; July 2025 Events</h2>
      <p>There's always something happening at Walusubi United Church. You are always welcome!</p>
    </div>
    <div style="display:flex;flex-direction:column;gap:20px;">
      <?php foreach ($events as $e):
        $color = $type_colors[$e['type']] ?? '#1a3a6b';
        $label = $type_labels[$e['type']] ?? 'Event';
      ?>
      <div class="event-card" style="align-items:center;">
        <div class="event-date" style="background:<?= $color ?>;min-width:64px;">
          <div class="day"><?= $e['day'] ?></div>
          <div class="month"><?= $e['month'] ?></div>
        </div>
        <div class="event-info" style="flex:1;">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:6px;flex-wrap:wrap;">
            <h3 style="margin:0;"><?= htmlspecialchars($e['title']) ?></h3>
            <span style="background:<?= $color ?>;color:#fff;font-size:0.72rem;font-weight:700;padding:3px 10px;border-radius:20px;letter-spacing:1px;text-transform:uppercase;"><?= $label ?></span>
          </div>
          <p><?= htmlspecialchars($e['desc']) ?></p>
          <div class="event-tags">
            <span class="event-tag"><i class="fas fa-clock"></i> <?= $e['time'] ?></span>
            <span class="event-tag"><i class="fas fa-map-marker-alt"></i> <?= $e['location'] ?></span>
          </div>
        </div>
        <div style="flex-shrink:0;">
          <a href="contact.php" class="btn btn-outline btn-sm">Register</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section style="background:var(--primary);padding:70px 0;text-align:center;">
  <div class="container">
    <h2 style="color:var(--white);margin-bottom:12px;">Don't Miss What God Is Doing!</h2>
    <p style="color:rgba(255,255,255,0.8);max-width:600px;margin:0 auto 28px;">Follow us on social media to stay updated on all our upcoming events, announcements and live streams.</p>
    <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
      <a href="<?= FACEBOOK_URL ?>" target="_blank" rel="noopener" class="btn btn-primary">
        <i class="fab fa-facebook-f"></i> Follow on Facebook
      </a>
      <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" rel="noopener" class="btn btn-secondary">
        <i class="fab fa-whatsapp"></i> Join WhatsApp Group
      </a>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
