<?php $pageTitle = 'Home'; ?>
<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero">
  <div class="hero-bg">
    <img src="<?php echo SITE_ROOT; ?>/images/banner-home.png" alt="Skan Inc. cleanroom and hygiene solutions facility">
    <div class="hero-overlay"></div>
  </div>
  <div class="hero-content animate-fade-up">
    <h1>Advanced Hygiene &amp; Disinfection Solutions for Critical Spaces</h1>
    <p>Manufacturing certified Fogging machines, OT solutions, Modular OT and controlled environment systems backed by quality,
      customization, and
      prompt service support.</p>
    <a href="#products" class="btn btn-primary">Our Products</a>
  </div>

  <!-- Awards Bar -->
  <div class="awards-bar animate-fade-up">
    <div class="award-item">
      <img src="<?php echo SITE_ROOT; ?>/images/products/glass-logo.png" alt="Skan Inc. company logo" class="award-icon">
      <h3>24+ Years Of Experience</h3>
      <p>Delighting customers since 2002.</p>
    </div>
    <div class="award-item">
      <img src="<?php echo SITE_ROOT; ?>/images/products/iso.webp" alt="ISO 13485 certification" class="award-icon">
      <h3>ISO 13485:2016 Accredited</h3>
      <p>World class quality assurance.</p>
    </div>
    <div class="award-item">
      <img src="<?php echo SITE_ROOT; ?>/images/products/bup.webp" alt="Bhartiya Udyog Pratibha Award" class="award-icon">
      <h3>Bhartiya Udyog Pratibha Award</h3>
      <p>For Innovative fumigation method.</p>
    </div>
    <div class="award-item">
      <img src="<?php echo SITE_ROOT; ?>/images/products/cdso.jpg" alt="CDSCO registration"
        class="award-icon">
      <h3>CDSCO Registered</h3>
      <p>Registered medical device manufacturer.</p>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="about">
  <div class="about-inner">
    <div class="about-text animate-on-scroll">
      <h2>Engineering Safer, Controlled Environments</h2>
      <p>Skan Inc. is India's leading manufacturer of CE certified fogging machines, clean room system and Modular OT
        equipment. In addition to this, we also supply disposable products and disinfectant chemicals. Quality of our
        products and our prompt service response makes us your trusted partner in Hygiene and Disinfection Management.
        Our sanitizer fogging machine is especially designed to sanitize large as well as small areas and make them fit
        for human habitation.</p>
      <p>A vast experience in the medical equipment and instrument field coupled with a strong market expertise enables
        us to provide customized solutions and consistently deliver results as per your expectation. This is a testament
        to the fact that our clientele includes renowned health facilities.</p>
      <a href="<?php echo SITE_ROOT; ?>/about.php" class="btn btn-primary">Know More</a>
    </div>
    <div class="about-image animate-on-scroll">
      <img src="<?php echo SITE_ROOT; ?>/images/products/ot-2.png" alt="Skan Inc. clean room">
    </div>
  </div>
</section>

<!-- Products Section -->
<section id="products" class="products">
  <div class="products-inner">
    <h2 class="animate-on-scroll">Solutions for Hygiene, Disinfection &amp; Controlled Environments</h2>
    <div class="products-grid">
      <div class="product-card animate-on-scroll">
        <video autoplay muted loop playsinline preload="metadata"
          style="width:100%; height: 100%; object-fit: cover;">
          <source src="<?php echo SITE_ROOT; ?>/images/products/skan.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <div class="product-overlay"></div>
        <a href="<?php echo SITE_ROOT; ?>/fogging-machine-decontamination.php" class="product-arrow"
          aria-label="View Fogging Machine solutions">
          <img src="<?php echo SITE_ROOT; ?>/images/arrow-icon.svg" alt="View fogging machines and decontamination solutions">
        </a>
        <div class="product-label">
          <span>Fogging Machine</span>
        </div>
      </div>
      <div class="product-card animate-on-scroll">
        <img src="<?php echo SITE_ROOT; ?>/images/products/puf-pannels.png" alt="Mosquito Fogging Machine">
        <div class="product-overlay"></div>
        <a href="<?php echo SITE_ROOT; ?>/cleanroom-panels-flooring.php" class="product-arrow"
          aria-label="View Cleanroom Panels and Flooring">
        <img src="<?php echo SITE_ROOT; ?>/images/arrow-icon-2.svg" alt="View cleanroom panels and flooring">
        </a>
        <div class="product-label">
          <span>Cleanroom Panels & Flooring</span>
        </div>
      </div>
      <div class="product-card animate-on-scroll">
        <img src="<?php echo SITE_ROOT; ?>/images/products/single-leaf-cleanroom-doors.png" alt="Disposables">
        <div class="product-overlay"></div>
        <a href="<?php echo SITE_ROOT; ?>/cleanroom-doors.php" class="product-arrow" aria-label="View Cleanroom Doors">
          <img src="<?php echo SITE_ROOT; ?>/images/arrow-icon-2.svg" alt="View cleanroom doors">
        </a>
        <div class="product-label">
          <span>Cleanroom Doors</span>
        </div>
      </div>
      <div class="product-card animate-on-scroll">
        <img src="<?php echo SITE_ROOT; ?>/images/products/air-handling-unit.png" alt="Disposables">
        <div class="product-overlay"></div>
        <a href="<?php echo SITE_ROOT; ?>/hvac-airflow-filtration-systems.php" class="product-arrow"
          aria-label="View HVAC, Airflow and Filtration Systems">
          <img src="<?php echo SITE_ROOT; ?>/images/arrow-icon-2.svg" alt="View HVAC and filtration systems">
        </a>
        <div class="product-label">
          <span>HVAC, Airflow & Filtration Systems</span>
        </div>
      </div>
      <div class="product-card product-card-wide animate-on-scroll">
        <img src="<?php echo SITE_ROOT; ?>/images/products/led-surgical-lights.png" alt="Clean Room Equipment">
        <div class="product-overlay"></div>
        <a href="<?php echo SITE_ROOT; ?>/ot-equipment-control-systems.php" class="product-arrow"
          aria-label="View OT Equipment and Control Systems">
          <img src="<?php echo SITE_ROOT; ?>/images/arrow-icon-2.svg" alt="View OT equipment and control systems">
        </a>
        <div class="product-label">
          <span>OT Equipment & Control Systems</span>
        </div>
      </div>
      <div class="products-more-grid">
        <div class="product-card animate-on-scroll">
          <img src="<?php echo SITE_ROOT; ?>/images/products/pass-box.png" alt="HVAC, Airflow and Filtration Systems">
          <div class="product-overlay"></div>
          <a href="<?php echo SITE_ROOT; ?>/pass-boxes-air-showers.php" class="product-arrow"
            aria-label="View Pass Boxes and Air Showers">
            <img src="<?php echo SITE_ROOT; ?>/images/arrow-icon-2.svg" alt="View pass boxes and air showers">
          </a>
          <div class="product-label">
            <span>Pass Boxes & Air Showers</span>
          </div>
        </div>
        <div class="product-card animate-on-scroll">
          <img src="<?php echo SITE_ROOT; ?>/images/products/medical-gas-pipeline.png"
            alt="OT Equipment and Control Systems">
          <div class="product-overlay"></div>
          <a href="<?php echo SITE_ROOT; ?>/medical-gas-pipeline-systems.php" class="product-arrow"
            aria-label="View Medical Gas Pipeline Systems">
            <img src="<?php echo SITE_ROOT; ?>/images/arrow-icon-2.svg" alt="View medical gas pipeline systems">
          </a>
          <div class="product-label">
            <span>Medical Gas Pipeline Systems</span>
          </div>
        </div>
        <div class="product-card animate-on-scroll">
          <img src="<?php echo SITE_ROOT; ?>/images/products/garment-storage-cabinet.png"
            alt="Pass Boxes and Air Showers">
          <div class="product-overlay"></div>
          <a href="<?php echo SITE_ROOT; ?>/cleanroom-furniture-laboratory-equipment.php" class="product-arrow"
            aria-label="View Cleanroom Furniture and Laboratory Equipment">
            <img src="<?php echo SITE_ROOT; ?>/images/arrow-icon-2.svg" alt="View cleanroom furniture and laboratory equipment">
          </a>
          <div class="product-label">
            <span>Cleanroom Furniture</span>
          </div>
        </div>
        <div class="product-card animate-on-scroll">
          <img src="<?php echo SITE_ROOT; ?>/images/products/ot-2.png" alt="Medical Gas Pipeline Systems">
          <div class="product-overlay"></div>
          <a href="<?php echo SITE_ROOT; ?>/turnkey-projects-validation.php" class="product-arrow"
            aria-label="View Turnkey Projects and Validation">
            <img src="<?php echo SITE_ROOT; ?>/images/arrow-icon-2.svg" alt="View turnkey projects and validation">
          </a>
          <div class="product-label">
            <span>
              Turnkey Projects & Validation</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<?php include 'includes/testimonials.php'; ?>

<!-- Trusted Clients Section -->
<section class="trusted-clients" aria-labelledby="trustedClientsTitle">
  <div class="trusted-clients-inner">
    <h2 id="trustedClientsTitle" class="animate-on-scroll">Our Trusted Clients</h2>
    <div class="trusted-clients-marquee animate-on-scroll" aria-label="Our trusted clients">
      <div class="trusted-clients-viewport">
        <div class="trusted-clients-track">
          <div class="trusted-clients-group">
            <div class="trusted-client-slide"><img src="<?php echo SITE_ROOT; ?>/images/railways.png"
                alt="Indian Railways logo with a locomotive and the Ashoka emblem"></div>
            <div class="trusted-client-slide"><img src="<?php echo SITE_ROOT; ?>/images/holy-cross.jpg"
                alt="Holy Cross Hospital logo with a dove and the words Service in Love" loading="lazy"></div>
            <div class="trusted-client-slide"><img src="<?php echo SITE_ROOT; ?>/images/cardiac.png"
                alt="Smt. S. R. Mehta and Sir K. P. Cardiac Institute logo with a heart emblem" loading="lazy"></div>
            <div class="trusted-client-slide"><img src="<?php echo SITE_ROOT; ?>/images/hinduja.png"
                alt="P. D. Hinduja Hospital and Medical Research Center logo with the Quality Healthcare for All tagline" loading="lazy"></div>
            <div class="trusted-client-slide"><img src="<?php echo SITE_ROOT; ?>/images/saifee.png"
                alt="Saifee Hospital logo with a stylized gold and gray emblem" loading="lazy"></div>
            <div class="trusted-client-slide"><img src="<?php echo SITE_ROOT; ?>/images/breachcandy.png"
                alt="Breach Candy Hospital logo with a blue circular wave emblem" loading="lazy"></div>
          </div>
          <!-- Duplicate set makes the marquee loop without a visible jump. -->
          <div class="trusted-clients-group" aria-hidden="true">
            <div class="trusted-client-slide"><img src="<?php echo SITE_ROOT; ?>/images/railways.png" alt="railway logo"></div>
            <div class="trusted-client-slide"><img src="<?php echo SITE_ROOT; ?>/images/holy-cross.jpg" alt="holy cross logo"></div>
            <div class="trusted-client-slide"><img src="<?php echo SITE_ROOT; ?>/images/cardiac.png" alt="cardiac logo"></div>
            <div class="trusted-client-slide"><img src="<?php echo SITE_ROOT; ?>/images/hinduja.png" alt="hinduja logo"></div>
            <div class="trusted-client-slide"><img src="<?php echo SITE_ROOT; ?>/images/saifee.png" alt="saifee logo"></div>
            <div class="trusted-client-slide"><img src="<?php echo SITE_ROOT; ?>/images/breachcandy.png" alt="breachcandy logo"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
