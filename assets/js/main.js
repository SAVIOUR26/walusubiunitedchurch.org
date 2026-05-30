// ===== Navbar scroll effect =====
const navbar = document.getElementById('navbar');
function handleScroll() {
  if (window.scrollY > 60) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
  const btn = document.getElementById('back-to-top');
  if (btn) {
    if (window.scrollY > 400) btn.classList.add('visible');
    else btn.classList.remove('visible');
  }
}
window.addEventListener('scroll', handleScroll);
handleScroll();

// ===== Hamburger menu =====
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobile-menu');
const mobileClose = document.getElementById('mobile-close');

if (hamburger && mobileMenu) {
  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('open');
    mobileMenu.classList.toggle('open');
    document.body.style.overflow = mobileMenu.classList.contains('open') ? 'hidden' : '';
  });
  if (mobileClose) {
    mobileClose.addEventListener('click', () => {
      hamburger.classList.remove('open');
      mobileMenu.classList.remove('open');
      document.body.style.overflow = '';
    });
  }
  mobileMenu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      hamburger.classList.remove('open');
      mobileMenu.classList.remove('open');
      document.body.style.overflow = '';
    });
  });
}

// ===== Back to top =====
const backToTop = document.getElementById('back-to-top');
if (backToTop) {
  backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
}

// ===== Gallery lightbox =====
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');
const lightboxClose = document.getElementById('lightbox-close');

document.querySelectorAll('.gallery-item[data-src]').forEach(item => {
  item.addEventListener('click', () => {
    if (lightbox && lightboxImg) {
      lightboxImg.src = item.dataset.src;
      lightbox.classList.add('open');
      document.body.style.overflow = 'hidden';
    }
  });
});
if (lightboxClose) {
  lightboxClose.addEventListener('click', closeLightbox);
}
if (lightbox) {
  lightbox.addEventListener('click', e => { if (e.target === lightbox) closeLightbox(); });
}
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLightbox(); });
function closeLightbox() {
  if (lightbox) { lightbox.classList.remove('open'); document.body.style.overflow = ''; }
}

// ===== Gallery tab filter =====
const tabBtns = document.querySelectorAll('.tab-btn');
tabBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    tabBtns.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const filter = btn.dataset.filter;
    document.querySelectorAll('.gallery-item, .video-section').forEach(el => {
      if (filter === 'all' || el.dataset.type === filter || (filter === 'videos' && el.classList.contains('video-section'))) {
        el.style.display = '';
      } else {
        el.style.display = 'none';
      }
    });
  });
});

// ===== Sermon category filter =====
document.querySelectorAll('.sermon-filter-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.sermon-filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const filter = btn.dataset.filter;
    document.querySelectorAll('.sermon-card[data-category]').forEach(card => {
      card.style.display = (filter === 'all' || card.dataset.category === filter) ? '' : 'none';
    });
  });
});

// ===== Animate on scroll =====
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('fade-in');
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('.card, .ministry-card, .value-card, .event-card, .blog-card, .sermon-card').forEach(el => {
  el.style.opacity = '0';
  el.style.transform = 'translateY(20px)';
  el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
  observer.observe(el);
});

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.fade-in').forEach(el => {
    el.style.opacity = '1';
    el.style.transform = 'translateY(0)';
  });
});

// Trigger fade-in when class added
const origAdd = DOMTokenList.prototype.add;
DOMTokenList.prototype.add = function(...tokens) {
  origAdd.apply(this, tokens);
  if (tokens.includes('fade-in') && this[0]) {
    this[0].style.opacity = '1';
    this[0].style.transform = 'translateY(0)';
  }
};

// ===== Countdown Timer =====
function updateCountdown() {
  const countdownEl = document.getElementById('countdown');
  if (!countdownEl) return;
  const now = new Date();
  const nextSunday = new Date(now);
  const daysUntilSunday = (7 - now.getDay()) % 7 || 7;
  nextSunday.setDate(now.getDate() + daysUntilSunday);
  nextSunday.setHours(9, 0, 0, 0);
  const diff = nextSunday - now;
  const d = Math.floor(diff / (1000 * 60 * 60 * 24));
  const h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
  const s = Math.floor((diff % (1000 * 60)) / 1000);
  const fill = (n) => String(n).padStart(2, '0');
  countdownEl.innerHTML = `
    <div class="countdown-unit"><div class="num">${fill(d)}</div><div class="label">Days</div></div>
    <div class="countdown-sep">:</div>
    <div class="countdown-unit"><div class="num">${fill(h)}</div><div class="label">Hours</div></div>
    <div class="countdown-sep">:</div>
    <div class="countdown-unit"><div class="num">${fill(m)}</div><div class="label">Mins</div></div>
    <div class="countdown-sep">:</div>
    <div class="countdown-unit"><div class="num">${fill(s)}</div><div class="label">Secs</div></div>
  `;
}
setInterval(updateCountdown, 1000);
updateCountdown();
