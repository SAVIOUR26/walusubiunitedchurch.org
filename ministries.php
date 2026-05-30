<?php
$page_title = 'Ministries';
$page_desc  = 'Explore the 9 active ministries at Walusubi United Church — Children, Youth, Women, Men, Worship, Evangelism, Prayer, Media, and Community Outreach.';
require_once 'includes/header.php';

$ministries = [
  ['icon'=>'👶', 'name'=>'Children Ministry', 'desc'=>'Raising the next generation in the love and knowledge of God. Our children\'s program offers age-appropriate Bible teaching, worship, games and activities that make faith come alive for kids from infancy through primary school.', 'lead'=>'Children\'s Coordinator'],
  ['icon'=>'🔥', 'name'=>'Youth Ministry', 'desc'=>'Empowering young people aged 13-35 to discover their identity in Christ, develop their gifts and make an impact in their generation. We meet weekly for fellowship, Bible study, worship and discipleship.', 'lead'=>'Youth Pastor'],
  ['icon'=>'💜', 'name'=>'Women Fellowship', 'desc'=>'A safe, nurturing space for women to grow in faith, build friendships, support one another and discover their God-given purpose. We study the Word, pray together and serve our communities.', 'lead'=>'Women\'s Ministry Leader'],
  ['icon'=>'💪', 'name'=>'Men Fellowship', 'desc'=>'Equipping men to be godly leaders in their homes, workplaces and communities. We tackle real issues facing men today from a biblical perspective and build brotherhood through accountability.', 'lead'=>'Men\'s Ministry Leader'],
  ['icon'=>'🎵', 'name'=>'Worship Team', 'desc'=>'Leading the congregation into the presence of God through anointed praise and worship. Our team of singers, musicians and tech crew serves every Sunday service and special events throughout the year.', 'lead'=>'Worship Director'],
  ['icon'=>'📢', 'name'=>'Evangelism Ministry', 'desc'=>'Taking the Gospel beyond the church walls. We conduct street evangelism, gospel crusades, door-to-door outreach and mission trips, believing that every soul matters to God.', 'lead'=>'Evangelism Coordinator'],
  ['icon'=>'🙏', 'name'=>'Prayer & Intercession', 'desc'=>'The engine room of the church. Our intercessors cover the church, leadership, members and nation in prayer. We host weekly prayer meetings, 24-hour prayer vigils and special intercession sessions.', 'lead'=>'Prayer Ministry Coordinator'],
  ['icon'=>'📹', 'name'=>'Media Ministry', 'desc'=>'Using modern technology to advance the Gospel. We handle audio-visual, live streaming, social media, photography and video production to extend the church\'s reach locally and globally.', 'lead'=>'Media Director'],
  ['icon'=>'🌍', 'name'=>'Community Outreach', 'desc'=>'Putting our faith into action by serving those in need around us. We run food programs, medical camps, school support, widow care and other community development initiatives in Jesus\' name.', 'lead'=>'Outreach Coordinator'],
];
?>

<div class="page-hero">
  <div class="container">
    <h1>Our Ministries</h1>
    <p>Nine active ministries — one Kingdom purpose</p>
    <div class="breadcrumb">
      <a href="/">Home</a> <span>/</span> <span>Ministries</span>
    </div>
  </div>
</div>

<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Get Involved</span>
      <h2>Find Your Place to Serve</h2>
      <p>Every believer is called to serve. Discover the ministry where God has placed you and use your gifts for His glory.</p>
    </div>
    <div class="grid-3">
      <?php foreach ($ministries as $m): ?>
      <div class="ministry-card">
        <div class="ministry-icon"><?= $m['icon'] ?></div>
        <h3><?= htmlspecialchars($m['name']) ?></h3>
        <p><?= htmlspecialchars($m['desc']) ?></p>
        <a href="/connect" class="btn btn-outline btn-sm">Join This Ministry</a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section style="background:var(--primary);padding:80px 0;text-align:center;">
  <div class="container">
    <span class="section-label" style="color:var(--gold);">Take a Step</span>
    <h2 style="color:var(--white);font-size:2.2rem;margin:12px 0;">Ready to Get Involved?</h2>
    <p style="color:rgba(255,255,255,0.8);max-width:600px;margin:0 auto 32px;">Every gift, talent and calling has a place in the body of Christ. Take the next step and connect with a ministry today.</p>
    <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
      <a href="/connect" class="btn btn-primary btn-lg">Join a Ministry</a>
      <a href="/contact" class="btn btn-secondary btn-lg">Ask a Question</a>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
