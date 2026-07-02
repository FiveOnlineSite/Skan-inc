<?php $pageTitle = 'Home'; ?>
<?php include 'includes/header.php'; ?>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-bg">
      <img src="images/hero-image.jpg" alt="">
      <div class="hero-overlay"></div>
    </div>
    <div class="hero-content animate-fade-up">
      <h1>Advanced Hygiene &amp; Disinfection Solutions for Critical Spaces</h1>
      <p>Manufacturing certified fogging machines and controlled environment systems backed by quality, customization, and prompt service support.</p>
      <a href="#products" class="btn btn-primary">Our Products</a>
    </div>

    <!-- Awards Bar -->
    <div class="awards-bar animate-fade-up">
      <div class="award-item">
        <img src="images/icon-calendar.svg" alt="" class="award-icon">
        <h3>20+ Years Of Experience</h3>
        <p>Delighting customers since 2000.</p>
      </div>
      <div class="award-item">
        <img src="images/icon-file.svg" alt="" class="award-icon">
        <h3>ISO 9001: 2008 Accredited</h3>
        <p>World class quality assurance.</p>
      </div>
      <div class="award-item">
        <img src="images/icon-award.svg" alt="" class="award-icon">
        <h3>Bhartiya Udyog Pratibha Award</h3>
        <p>For Innovative fumigation method.</p>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about">
    <div class="about-inner">
      <div class="about-text animate-on-scroll">
        <h2>Engineering Safer, Controlled Environments</h2>
        <p>Skan Inc. is India's leading manufacturer of CE certified fogging machines, clean room system and Modular OT equipment. In addition to this, we also supply disposable products and disinfectant chemicals. Quality of our products and our prompt service response makes us your trusted partner in Hygiene and Disinfection Management. Our sanitizer fogging machine is especially designed to sanitize large as well as small areas and make them fit for human habitation.</p>
        <p>A vast experience in the medical equipment and instrument field coupled with a strong market expertise enables us to provide customized solutions and consistently deliver results as per your expectation. This is a testament to the fact that our clientele includes renowned health facilities.</p>
        <a href="#" class="btn btn-primary">Know More</a>
      </div>
      <div class="about-image animate-on-scroll">
        <img src="images/secondary-image.jpg" alt="Skan Inc. clean room">
      </div>
    </div>
  </section>

  <!-- Products Section -->
  <section id="products" class="products">
    <div class="products-inner">
      <h2 class="animate-on-scroll">Solutions for Hygiene, Disinfection &amp; Controlled Environments</h2>
      <div class="products-grid">
        <div class="product-card animate-on-scroll">
          <img src="images/product-fogging.jpg" alt="Fogging Machine">
          <div class="product-overlay"></div>
          <a href="#" class="product-arrow">
            <img src="images/arrow-icon.svg" alt="">
          </a>
          <div class="product-label">
            <span>Fogging Machine</span>
          </div>
        </div>
        <div class="product-card animate-on-scroll">
          <img src="images/product-mosquito.jpg" alt="Mosquito Fogging Machine">
          <div class="product-overlay"></div>
          <a href="#" class="product-arrow">
            <img src="images/arrow-icon-2.svg" alt="">
          </a>
          <div class="product-label">
            <span>Mosquito Fogging Machine</span>
          </div>
        </div>
        <div class="product-card animate-on-scroll">
          <img src="images/product-disposables.jpg" alt="Disposables">
          <div class="product-overlay"></div>
          <a href="#" class="product-arrow">
            <img src="images/arrow-icon-2.svg" alt="">
          </a>
          <div class="product-label">
            <span>Disposables</span>
          </div>
        </div>
        <div class="product-card animate-on-scroll">
          <img src="images/product-disposables2.jpg" alt="Disposables">
          <div class="product-overlay"></div>
          <a href="#" class="product-arrow">
            <img src="images/arrow-icon-2.svg" alt="">
          </a>
          <div class="product-label">
            <span>Disposables</span>
          </div>
        </div>
        <div class="product-card product-card-wide animate-on-scroll">
          <img src="images/product-cleanroom.jpg" alt="Clean Room Equipment">
          <div class="product-overlay"></div>
          <a href="#" class="product-arrow">
            <img src="images/arrow-icon-2.svg" alt="">
          </a>
          <div class="product-label">
            <span>Clean Room Equipment</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials">
    <div class="testimonials-inner">
      <h2 class="animate-on-scroll">Voices of Trust &amp; Reliability</h2>
      <div class="slider-container">
        <div class="testimonials-track" id="testimonialsTrack">
          <?php for ($i = 0; $i < 5; $i++): ?>
          <div class="testimonial-card">
            <img src="images/stars.svg" alt="5 stars" class="testimonial-stars">
            <p class="testimonial-text">Reliable products, timely support, and professional service made Skan Inc. a dependable partner for our hygiene and disinfection requirements</p>
            <div class="testimonial-author">
              <img src="images/avatar.png" alt="Anuv Gupta" class="testimonial-avatar">
              <div>
                <p class="testimonial-name">Anuv Gupta</p>
                <p class="testimonial-date">24th Jun 2026</p>
              </div>
            </div>
          </div>
          <?php endfor; ?>
        </div>
      </div>
      <div class="slider-pagination" id="sliderPagination"></div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
