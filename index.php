<?php
$page_title = "QuickPOS – The Last POS System You'll Ever Need";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?= htmlspecialchars($page_title) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>

<!-- ========== EPIC 1: NAVIGATION ========== -->
<nav class="navbar" id="navbar">
  <div class="nav-container">
    <a href="#" class="logo">
      <span class="logo-icon">⚡</span>
      Quick<span>POS</span>
    </a>
    <ul class="nav-links">
      <li><a href="#features">Features</a></li>
      <li><a href="#pricing">Pricing</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <a href="#pricing" class="btn-signup">Sign Up Free</a>
    <div class="hamburger" id="hamburger">
      <span></span><span></span><span></span>
    </div>
  </div>
</nav>

<!-- ========== EPIC 2: HERO SECTION ========== -->
<section class="hero" id="home">
  <div class="hero-bg-grid"></div>
  <div class="hero-content">
    <div class="hero-badge">🚀 Trusted by 10,000+ businesses</div>
    <h1 class="hero-title">
      The Last POS System<br/>
      <span class="gradient-text">You'll Ever Need</span>
    </h1>
    <p class="hero-subtitle">
      Lightning-fast checkouts, real-time analytics, and seamless inventory management — 
      all in one beautifully simple platform.
    </p>
    <div class="hero-cta">
      <a href="#pricing" class="btn-primary">Get Started for Free →</a>
      <a href="#features" class="btn-ghost">See How It Works</a>
    </div>
    <div class="hero-stats">
      <div class="stat"><strong>10K+</strong><span>Businesses</span></div>
      <div class="stat-divider"></div>
      <div class="stat"><strong>99.9%</strong><span>Uptime</span></div>
      <div class="stat-divider"></div>
      <div class="stat"><strong>2M+</strong><span>Transactions/day</span></div>
    </div>
  </div>
  <div class="hero-visual">
    <div class="mockup-wrapper">
      <div class="mockup-screen">
        <div class="mockup-topbar">
          <span></span><span></span><span></span>
        </div>
        <div class="mockup-content">
          <div class="mockup-sidebar">
            <div class="mock-icon active">🏠</div>
            <div class="mock-icon">📦</div>
            <div class="mock-icon">📊</div>
            <div class="mock-icon">💳</div>
          </div>
          <div class="mockup-main">
            <div class="mock-header">Today's Sales</div>
            <div class="mock-amount">$12,480.50</div>
            <div class="mock-bars">
              <div class="bar" style="height:60%"></div>
              <div class="bar" style="height:80%"></div>
              <div class="bar" style="height:45%"></div>
              <div class="bar" style="height:90%"></div>
              <div class="bar" style="height:70%"></div>
              <div class="bar" style="height:100%"></div>
              <div class="bar" style="height:65%"></div>
            </div>
            <div class="mock-items">
              <div class="mock-item">
                <span>☕ Espresso ×3</span><strong>$12.00</strong>
              </div>
              <div class="mock-item">
                <span>🥐 Croissant ×2</span><strong>$8.50</strong>
              </div>
              <div class="mock-item">
                <span>🍰 Cheesecake ×1</span><strong>$6.00</strong>
              </div>
            </div>
            <div class="mock-btn">Complete Sale ✓</div>
          </div>
        </div>
      </div>
      <div class="mockup-glow"></div>
    </div>
  </div>
</section>

<!-- ========== EPIC 3: FEATURES SECTION ========== -->
<section class="features" id="features">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Why QuickPOS?</span>
      <h2>Everything You Need to Run Your Business</h2>
      <p>From your first sale to your millionth — we scale with you.</p>
    </div>
    <div class="features-grid">
      <?php
      $features = [
        ["icon" => "fa-boxes-stacking", "color" => "#6C63FF", "title" => "Inventory Management",
         "desc" => "Track stock in real-time across all locations. Get low-stock alerts before you run out."],
        ["icon" => "fa-chart-line", "color" => "#FF6584", "title" => "Sales Analytics",
         "desc" => "Beautiful dashboards with hourly, daily, and monthly insights. Know your best sellers."],
        ["icon" => "fa-plug", "color" => "#43C6AC", "title" => "Easy Integration",
         "desc" => "Connect with Shopify, WooCommerce, QuickBooks, and 50+ apps in one click."],
        ["icon" => "fa-shield-halved", "color" => "#F7971E", "title" => "Secure Payments",
         "desc" => "PCI-DSS compliant. Accept cards, cash, QR codes, and digital wallets safely."],
      ];
      foreach ($features as $f): ?>
      <div class="feature-card">
        <div class="feature-icon" style="background: <?= $f['color'] ?>22; color: <?= $f['color'] ?>">
          <i class="fas <?= $f['icon'] ?>"></i>
        </div>
        <h3><?= $f['title'] ?></h3>
        <p><?= $f['desc'] ?></p>
        <a href="#" class="feature-link">Learn more →</a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ========== EPIC 4: PRICING SECTION ========== -->
<section class="pricing" id="pricing">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Pricing</span>
      <h2>Simple, Transparent Pricing</h2>
      <p>No hidden fees. Cancel anytime.</p>
    </div>
    <div class="pricing-grid">
      <?php
      $plans = [
        ["name" => "Basic", "price" => "9", "tag" => "", "color" => "#6C63FF",
         "features" => ["1 Register","Up to 500 products","Basic analytics","Email support","Monthly reports"]],
        ["name" => "Pro", "price" => "29", "tag" => "Most Popular", "color" => "#FF6584",
         "features" => ["5 Registers","Unlimited products","Advanced analytics","Priority support","Real-time reports","Inventory alerts","Multi-location"]],
        ["name" => "Enterprise", "price" => "79", "tag" => "", "color" => "#43C6AC",
         "features" => ["Unlimited registers","Unlimited products","Custom analytics","24/7 dedicated support","Custom reports","API access","White labeling","SLA guarantee"]],
      ];
      foreach ($plans as $plan): ?>
      <div class="pricing-card <?= $plan['tag'] ? 'popular' : '' ?>">
        <?php if ($plan['tag']): ?>
        <div class="popular-badge"><?= $plan['tag'] ?></div>
        <?php endif; ?>
        <div class="plan-name" style="color: <?= $plan['color'] ?>"><?= $plan['name'] ?></div>
        <div class="plan-price">
          <span class="currency">$</span><?= $plan['price'] ?><span class="period">/mo</span>
        </div>
        <ul class="plan-features">
          <?php foreach ($plan['features'] as $feat): ?>
          <li><i class="fas fa-check"></i> <?= $feat ?></li>
          <?php endforeach; ?>
        </ul>
        <a href="#contact" class="btn-plan" style="background: <?= $plan['color'] ?>">
          Get Started
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ========== EPIC 5: CONTACT FORM ========== -->
<section class="contact" id="contact">
  <div class="container">
    <div class="contact-wrapper">
      <div class="contact-info">
        <span class="section-tag">Get in Touch</span>
        <h2>Ready to Transform Your Business?</h2>
        <p>Our team will get back to you within 24 hours.</p>
        <div class="contact-details">
          <div class="contact-item">
            <i class="fas fa-envelope"></i>
            <span>hello@quickpos.io</span>
          </div>
          <div class="contact-item">
            <i class="fas fa-phone"></i>
            <span>+1 (800) 123-4567</span>
          </div>
          <div class="contact-item">
            <i class="fas fa-location-dot"></i>
            <span>San Francisco, CA</span>
          </div>
        </div>
      </div>
      <div class="contact-form-wrapper">
        <form action="submit.php" method="POST" class="contact-form">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="John Doe" required/>
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="john@company.com" required/>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" placeholder="Tell us about your business..." required></textarea>
          </div>
          <button type="submit" class="btn-submit">
            Send Message <i class="fas fa-paper-plane"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ========== EPIC 6: FOOTER ========== -->
<footer class="footer">
  <div class="container">
    <div class="footer-top">
      <div class="footer-brand">
        <a href="#" class="logo">⚡ Quick<span>POS</span></a>
        <p>The modern point-of-sale system built for businesses that move fast.</p>
        <div class="social-links">
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-github"></i></a>
        </div>
      </div>
      <div class="footer-links">
        <div class="footer-col">
          <h4>Product</h4>
          <a href="#features">Features</a>
          <a href="#pricing">Pricing</a>
          <a href="#">Changelog</a>
          <a href="#">Roadmap</a>
        </div>
        <div class="footer-col">
          <h4>Company</h4>
          <a href="#">About</a>
          <a href="#">Blog</a>
          <a href="#">Careers</a>
          <a href="#contact">Contact</a>
        </div>
        <div class="footer-col">
          <h4>Legal</h4>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Service</a>
          <a href="#">Cookie Policy</a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© <?= date('Y') ?> QuickPOS. All rights reserved. Built with ❤️ for businesses worldwide.</p>
    </div>
  </div>
</footer>

<script src="assets/js/main.js"></script>
</body>
</html>