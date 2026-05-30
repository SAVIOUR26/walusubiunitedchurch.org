<?php
$page_title = 'Home';
$page_desc  = 'Welcome to Walusubi United Church of Jesus Christ — United in Christ, Connected to the Kingdom. Join us for worship every Sunday in Walusubi, Uganda.';
require_once 'includes/header.php';
?>

<!-- Hero -->
<section class="hero" id="home">
  <div class="hero-content">
    <img src="assets/images/logo.png" alt="Church Logo" class="hero-logo">
    <div class="hero-label">Many Parts, One Body</div>
    <h1>United in Christ,<br>Connected to the Kingdom</h1>
    <p class="hero-scripture">
      <em>"Now I plead with you, brethren, by the name of our Lord Jesus Christ, that you all speak the same thing..."</em><br>
      <span>— 1 Corinthians 1:10</span>
    </p>
    <div class="hero-btns">
      <a href="/connect" class="btn btn-primary btn-lg">Join Us</a>
      <a href="/sermons" class="btn btn-secondary btn-lg">Watch Sermons</a>
    </div>
  </div>
  <div class="hero-scroll">
    <a href="#welcome" aria-label="Scroll down"><i class="fas fa-chevron-down"></i></a>
  </div>
</section>

<!-- Welcome -->
<section class="section" id="welcome">
  <div class="container">
    <div class="welcome-grid">
      <div class="welcome-img">
        <img src="assets/images/img7.jpeg" alt="Church congregation in worship">
      </div>
      <div class="welcome-text">
        <span class="section-label">Welcome Message</span>
        <h2>A Home for Every Soul</h2>
        <p>We are the Walusubi United Church of Jesus Christ — a vibrant, Spirit-filled community of believers committed to bringing people into a living relationship with God and with one another.</p>
        <p>Our doors are open to everyone. Whether you are searching for meaning, seeking healing, or wanting to grow deeper in your faith, you will find a warm, loving community here.</p>
        <p>We invite you to join us this Sunday as we worship together, grow in the Word, and serve our community in love.</p>
        <div class="pastor-sig">
          <div class="pastor-avatar">
            <img src="assets/images/img1.jpeg" alt="Senior Pastor Bogere Geofrey">
          </div>
          <div class="pastor-info">
            <strong>Pastor Bogere Geofrey</strong>
            <span>Senior Pastor, Walusubi United Church</span>
          </div>
        </div>
        <a href="/about" class="btn btn-outline" style="margin-top:24px;">Learn More About Us</a>
      </div>
    </div>
  </div>
</section>

<!-- Stats -->
<section style="background:var(--primary);padding:60px 0;">
  <div class="container">
    <div class="grid-4">
      <div class="stat-card">
        <div class="stat-number" style="color:var(--gold);">15+</div>
        <div class="stat-label" style="color:rgba(255,255,255,0.8);">Years of Ministry</div>
      </div>
      <div class="stat-card">
        <div class="stat-number" style="color:var(--gold);">500+</div>
        <div class="stat-label" style="color:rgba(255,255,255,0.8);">Church Members</div>
      </div>
      <div class="stat-card">
        <div class="stat-number" style="color:var(--gold);">9</div>
        <div class="stat-label" style="color:rgba(255,255,255,0.8);">Active Ministries</div>
      </div>
      <div class="stat-card">
        <div class="stat-number" style="color:var(--gold);">100+</div>
        <div class="stat-label" style="color:rgba(255,255,255,0.8);">Souls Reached Weekly</div>
      </div>
    </div>
  </div>
</section>

<!-- Service Times -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Worship With Us</span>
      <h2>Service Times</h2>
      <p>Come and experience the presence of God. All are welcome!</p>
    </div>
    <div class="grid-3">
      <div class="service-card">
        <div class="service-icon">🕊️</div>
        <h3>Sunday 1st Service</h3>
        <div class="time">9:00 AM – 11:00 AM</div>
        <div class="location"><i class="fas fa-map-marker-alt"></i> Walusubi Church Grounds</div>
      </div>
      <div class="service-card">
        <div class="service-icon">✝️</div>
        <h3>Sunday 2nd Service</h3>
        <div class="time">11:00 AM – 1:00 PM</div>
        <div class="location"><i class="fas fa-map-marker-alt"></i> Walusubi Church Grounds</div>
      </div>
      <div class="service-card">
        <div class="service-icon">📖</div>
        <h3>Wednesday Bible Study</h3>
        <div class="time">6:00 PM – 8:00 PM</div>
        <div class="location"><i class="fas fa-map-marker-alt"></i> Main Sanctuary</div>
      </div>
      <div class="service-card">
        <div class="service-icon">🙏</div>
        <h3>Friday Prayer Night</h3>
        <div class="time">7:00 PM – 9:00 PM</div>
        <div class="location"><i class="fas fa-map-marker-alt"></i> Prayer Hall</div>
      </div>
      <div class="service-card">
        <div class="service-icon">🎵</div>
        <h3>Youth Fellowship</h3>
        <div class="time">Saturday 3:00 PM – 5:00 PM</div>
        <div class="location"><i class="fas fa-map-marker-alt"></i> Youth Centre</div>
      </div>
      <div class="service-card">
        <div class="service-icon">📡</div>
        <h3>Live Online Service</h3>
        <div class="time">Sunday 9:00 AM</div>
        <div class="location"><i class="fab fa-youtube"></i> YouTube & Facebook</div>
      </div>
    </div>
  </div>
</section>

<!-- Latest Sermons -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-label">The Word</span>
      <h2>Latest Sermons</h2>
      <p>Be fed by the Word of God. Listen to our recent teachings and messages.</p>
    </div>
    <div class="grid-3">
      <div class="sermon-card card">
        <div class="sermon-thumb">
          <img src="assets/images/img2.jpeg" alt="Sermon thumbnail">
          <div class="sermon-play"><span>▶</span></div>
        </div>
        <div class="sermon-body">
          <span class="sermon-category">Sunday Service</span>
          <h3>Walking in the Power of Faith</h3>
          <div class="sermon-meta">
            <span><i class="fas fa-user"></i> Pastor Bogere Geofrey</span>
            <span><i class="fas fa-calendar"></i> May 25, 2025</span>
          </div>
          <a href="/sermons" class="btn btn-outline btn-sm" style="margin-top:12px;">Listen Now</a>
        </div>
      </div>
      <div class="sermon-card card">
        <div class="sermon-thumb">
          <img src="assets/images/img4.jpeg" alt="Sermon thumbnail">
          <div class="sermon-play"><span>▶</span></div>
        </div>
        <div class="sermon-body">
          <span class="sermon-category">Midweek Fellowship</span>
          <h3>The Grace That Transforms</h3>
          <div class="sermon-meta">
            <span><i class="fas fa-user"></i> Pastor Bogere Geofrey</span>
            <span><i class="fas fa-calendar"></i> May 21, 2025</span>
          </div>
          <a href="/sermons" class="btn btn-outline btn-sm" style="margin-top:12px;">Listen Now</a>
        </div>
      </div>
      <div class="sermon-card card">
        <div class="sermon-thumb">
          <img src="assets/images/img5.jpeg" alt="Sermon thumbnail">
          <div class="sermon-play"><span>▶</span></div>
        </div>
        <div class="sermon-body">
          <span class="sermon-category">Special Conference</span>
          <h3>United We Stand: One Body in Christ</h3>
          <div class="sermon-meta">
            <span><i class="fas fa-user"></i> Pastor Bogere Geofrey</span>
            <span><i class="fas fa-calendar"></i> May 18, 2025</span>
          </div>
          <a href="/sermons" class="btn btn-outline btn-sm" style="margin-top:12px;">Listen Now</a>
        </div>
      </div>
    </div>
    <div style="text-align:center;margin-top:40px;">
      <a href="/sermons" class="btn btn-primary">View All Sermons</a>
    </div>
  </div>
</section>

<!-- Upcoming Events -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Mark Your Calendar</span>
      <h2>Upcoming Events</h2>
      <p>Join us for special gatherings, conferences, and community events.</p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(320px,1fr));gap:20px;">
      <div class="event-card">
        <div class="event-date"><div class="day">01</div><div class="month">Jun</div></div>
        <div class="event-info">
          <h3>Sunday Worship Service</h3>
          <p>Join us for our weekly Sunday service filled with praise, worship and the Word.</p>
          <div class="event-tags">
            <span class="event-tag">🕘 9:00 AM</span>
            <span class="event-tag">📍 Main Sanctuary</span>
          </div>
        </div>
      </div>
      <div class="event-card">
        <div class="event-date"><div class="day">07</div><div class="month">Jun</div></div>
        <div class="event-info">
          <h3>All Night Prayer Vigil</h3>
          <p>A night of intercession and seeking God's face for our nation and families.</p>
          <div class="event-tags">
            <span class="event-tag">🕙 10:00 PM</span>
            <span class="event-tag">📍 Prayer Hall</span>
          </div>
        </div>
      </div>
      <div class="event-card">
        <div class="event-date"><div class="day">14</div><div class="month">Jun</div></div>
        <div class="event-info">
          <h3>Youth Empowerment Conference</h3>
          <p>Empowering the next generation through the Word, worship and skills development.</p>
          <div class="event-tags">
            <span class="event-tag">🕑 2:00 PM</span>
            <span class="event-tag">📍 Youth Centre</span>
          </div>
        </div>
      </div>
      <div class="event-card">
        <div class="event-date"><div class="day">21</div><div class="month">Jun</div></div>
        <div class="event-info">
          <h3>Community Outreach Day</h3>
          <p>Serving our neighbors with love — food distribution, medical camp and gospel sharing.</p>
          <div class="event-tags">
            <span class="event-tag">🕘 8:00 AM</span>
            <span class="event-tag">📍 Walusubi Village</span>
          </div>
        </div>
      </div>
    </div>
    <div style="text-align:center;margin-top:36px;">
      <a href="/events" class="btn btn-primary">View All Events</a>
    </div>
  </div>
</section>

<!-- Core Values -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-label">What We Believe</span>
      <h2>Our Core Values</h2>
      <p>The principles that guide everything we do as a church family.</p>
    </div>
    <div class="grid-3">
      <div class="value-card">
        <div class="value-icon">🤝</div>
        <h3>Unity</h3>
        <p>We celebrate diversity and believe that though we are many, we are one body in Christ Jesus.</p>
      </div>
      <div class="value-card">
        <div class="value-icon">⚓</div>
        <h3>Faith</h3>
        <p>Our foundation is unshakeable faith in the living God and the power of His Word.</p>
      </div>
      <div class="value-card">
        <div class="value-icon">❤️</div>
        <h3>Love</h3>
        <p>We are commanded to love God and love people — this is the greatest commandment.</p>
      </div>
      <div class="value-card">
        <div class="value-icon">📢</div>
        <h3>Evangelism</h3>
        <p>We are compelled by the Great Commission to share the Gospel in every nation.</p>
      </div>
      <div class="value-card">
        <div class="value-icon">🙌</div>
        <h3>Service</h3>
        <p>We serve God and humanity with humility, excellence and a joyful heart.</p>
      </div>
      <div class="value-card">
        <div class="value-icon">🌟</div>
        <h3>Leadership</h3>
        <p>We raise servant leaders who influence families, communities and nations for God.</p>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="testimonials">
  <div class="container">
    <div class="section-header">
      <h2>What Our Members Say</h2>
      <p>Testimonies of God's faithfulness in the lives of our church family.</p>
    </div>
    <div class="grid-3">
      <div class="testimonial-card">
        <div class="testimonial-quote">"</div>
        <p>Coming to Walusubi United Church transformed my life. I found not just a church but a family that truly cares. The teaching is deep, the worship is powerful, and the love is real.</p>
        <div class="testimonial-author">
          <img src="assets/images/img9.jpeg" alt="Sarah K.">
          <div>
            <strong>Sarah K.</strong>
            <span>Member, Women's Fellowship</span>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-quote">"</div>
        <p>Through the youth ministry here I discovered my purpose and calling. Pastor Bogere's mentorship and the community's support have been life-changing. God truly dwells in this place.</p>
        <div class="testimonial-author">
          <img src="assets/images/img10.jpeg" alt="David M.">
          <div>
            <strong>David M.</strong>
            <span>Youth Ministry Leader</span>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-quote">"</div>
        <p>I was broken and lost when I first walked into this church. Today I stand healed, restored and filled with purpose. This is truly a house of God's glory and miracles happen here!</p>
        <div class="testimonial-author">
          <img src="assets/images/img11.jpeg" alt="Grace N.">
          <div>
            <strong>Grace N.</strong>
            <span>Member since 2018</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Quick Links -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <h2>How Can We Help You?</h2>
      <p>We are here to serve you in every season of life.</p>
    </div>
    <div class="grid-4">
      <a href="/prayer" class="quick-link">
        <span class="icon">🙏</span>
        <h3>Prayer Request</h3>
        <p style="color:var(--text-medium);font-size:0.85rem;margin-top:6px;">Submit a confidential prayer request</p>
      </a>
      <a href="/give" class="quick-link">
        <span class="icon">💝</span>
        <h3>Give Online</h3>
        <p style="color:var(--text-medium);font-size:0.85rem;margin-top:6px;">Partner with us in Kingdom work</p>
      </a>
      <a href="/gallery" class="quick-link">
        <span class="icon">📸</span>
        <h3>Photo Gallery</h3>
        <p style="color:var(--text-medium);font-size:0.85rem;margin-top:6px;">See life at Walusubi Church</p>
      </a>
      <a href="/contact" class="quick-link">
        <span class="icon">📞</span>
        <h3>Contact Us</h3>
        <p style="color:var(--text-medium);font-size:0.85rem;margin-top:6px;">We'd love to hear from you</p>
      </a>
    </div>
  </div>
</section>

<!-- Scripture Banner -->
<section style="padding:60px 0;background:var(--light-gray);">
  <div class="container">
    <div class="scripture-banner">
      <blockquote>"For I know the plans I have for you," declares the Lord, "plans to prosper you and not to harm you, plans to give you hope and a future."</blockquote>
      <cite>— Jeremiah 29:11 (NIV)</cite>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
