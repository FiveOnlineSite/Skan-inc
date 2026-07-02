<?php
$pageTitle = 'Fogging Machine';

$products = [
  [
    'title' => 'SKANFOG VAPOR-JET',
    'image' => 'images/product-vapor-jet.jpg',
    'desc'  => 'SKANFOG Vapor-jet machine generates a consistent particle size of 0.3 to 1 Micron. It is suitable for up-to 16000 Cu ft of space treatment with a height cover of up-to 25 Ft. It comes with a Premium grade 5 L SS tank and a plastic tank option is available too. It is equipped with a high-quality double stage, tapered fan vacuum motor and a timer for auto switch off. This machine is suitable for OT, ICU, Cathlab, Pharma lab, food processing & packaging industry usage.',
    'variants' => ['Plastic', 'Stainless Steel'],
  ],
  [
    'title' => 'SKANFOG POWER-JET',
    'image' => 'images/product-power-jet.jpg',
    'desc'  => 'SKANFOG Power-jet an excellent product for air sterilization and disinfection. It is suitable for up-to 15000 Cu ft of space treatment with a height cover of up-to 20 Ft. It comes with a Premium grade 5 L SS tank and a plastic tank option is available too. Its specially designed double layer intake air filter prevents external dust/dirt entry which helps protect the motor. This machine is suitable for ICU, NICU, Vaccine Manufacturing, Hatchery & Poultry usage.',
    'variants' => ['Plastic', 'Stainless Steel'],
  ],
  [
    'title' => 'SKANFOG ULV SKD-1100',
    'image' => 'images/product-ulv-skd1100.jpg',
    'desc'  => 'SKANFOG ULV is a highly effective and economical product for vapor generation / dry fumigation. It is suitable for up-to 10000 Cu ft of space treatment with a height cover of up-to 20 Ft. It generates consistent submicron particle size to create a uniform spread & has enough contact time to achieve maximum disinfection. It comes with an easy to clean, non-corrosive 5 L SS tank. Plastic tank is optional. This machine is suitable for OT, Injectable Mfg., Vaccine Mfg. & Food processing industry usage.',
    'variants' => ['Plastic', 'Stainless Steel'],
  ],
  [
    'title' => 'SKAN FOG ROTO – MATIC TURN TABLE',
    'image' => 'images/product-roto-matic.jpg',
    'desc'  => 'The oscillating system in SKAN FOG ROTO-MATIC Table is specifically designed to extract better efficiency from our spot foggers. The table does not allow droplets to accumulate and condense and ensures that the fogger covers a large area with uniform fog particle distribution. Built with SS 304, it can easily carry 20kg. It rotates 360 Degree with the fogger machine placed on top at a speed of 2 RPM. A unique technical feature allows uninterrupted power supply to the fogger machine during continuous rotation.',
    'variants' => ['Plastic', 'Stainless Steel'],
  ],
  [
    'title' => 'SKAN FOG ULV (TANTRA)',
    'image' => 'images/product-ulv-tantra.jpg',
    'desc'  => 'SKAN FOG ULV TANTRA generates submicron size, non-wetting aerosol which can spread across 50ft and reach a height of 35 ft and is suitable for 50000 to 70000 Cu Ft of space treatment. It has a precision metering system & auto switch off timer with delay start facility. It creates a 360° contact with accuracy. It comes with a 14 L SS 304 solution tank assembly. It uses medical grade clean air for fog generation. This machine is built robustly and is extremely safe, reliable & efficient. It uses only 200ml of disinfectant solution for treating 1000 Cu ft of area. All the key components like nozzle assembly, rotator & strainer are made of SS.',
    'variants' => ['Plastic', 'Stainless Steel'],
  ],
];
?>
<?php include 'includes/header.php'; ?>

  <!-- Product Hero -->
  <section class="product-hero animate-fade-up">
    <img src="images/product-detail-hero.jpg" alt="<?php echo $pageTitle; ?>">
    <div class="product-hero-overlay"></div>
    <div class="product-hero-content">
      <h1><?php echo $pageTitle; ?></h1>
    </div>
  </section>

  <!-- Intro -->
  <section class="product-intro">
    <div class="product-intro-inner animate-on-scroll">
      <h2>What is Fogging Machine</h2>
      <p>Fogging Machine or Fumigation machine are equipment that are used to eradicate, germs, pests and other harmful foreign materials which cause problems to human habitation. This machine is used by people who work in disaster response, crime scenes, clean up industries, food industries, laboratories and much more. It finds prominent usage where the working area needs to be sanitized and hygiene needs to be maintained regularly.<br>
      We at Skan Inc., provide different varieties of best in class quality and affordable cleaning and sanitizing machines, which you can choose based on your requirements. As a result, we are one of the trusted suppliers to renowned health facilities in Mumbai.</p>
    </div>
  </section>

  <!-- Purpose-Built Solutions -->
  <section class="product-list">
    <div class="product-list-inner">
      <h2 class="animate-on-scroll">Purpose-Built Solutions in this Category</h2>

      <?php foreach ($products as $index => $product): ?>
      <div class="product-row<?php echo $index % 2 === 1 ? ' reverse' : ''; ?> animate-on-scroll">
        <div class="product-row-image">
          <img src="<?php echo $product['image']; ?>" alt="<?php echo htmlspecialchars($product['title']); ?>">
        </div>
        <div class="product-row-info">
          <h3><?php echo htmlspecialchars($product['title']); ?></h3>
          <p><?php echo $product['desc']; ?></p>
          <p class="variant-label">Available Variants:</p>
          <div class="variant-tags">
            <?php foreach ($product['variants'] as $variant): ?>
            <span class="variant-tag"><?php echo htmlspecialchars($variant); ?></span>
            <?php endforeach; ?>
          </div>
          <a href="#" class="btn-outline">
            Download Brochure
            <img src="images/icon-download.svg" alt="">
          </a>
        </div>
      </div>
      <?php endforeach; ?>
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
            <p class="testimonial-text">We are using SKAN FOG ULV fogging machine for 4 years now and the product quality and the service rendered by Skan Inc is satisfactory.</p>
            <div class="testimonial-author">
              <img src="images/avatar.png" alt="Holy Cross Hospital" class="testimonial-avatar">
              <div>
                <p class="testimonial-name">Holy Cross Hospital</p>
                <p class="testimonial-date">06th Apr 2010</p>
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
