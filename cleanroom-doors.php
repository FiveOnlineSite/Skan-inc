<?php
$pageTitle = 'Cleanroom Doors';

$tabs = [
  [
    'id' => 'cleanroom-swing-doors',
    'label' => 'Cleanroom Swing Doors',
    'title' => 'Cleanroom Swing Doors',
    'description' => 'Swing doors are the standard for most cleanroom and pharmaceutical applications: simple, reliable, and easier to seal effectively than sliding mechanisms. A gasket seal around the frame maintains the pressure differential between adjoining rooms, a basic requirement wherever airflow direction matters.',
    'products' => [
      [
        'title' => 'Single Leaf Cleanroom Doors',
        'image' => 'images/product-ulv-skd1100.jpg',
        'desc' => 'Standard specification for most cleanroom openings: manufacturing rooms, airlocks, general labs. Leaf built as a sandwich panel, matching the wall panels around it, so the door isn&apos;t the weak point in an otherwise sealed, insulated room. Used wherever traffic and equipment/personnel size don&apos;t require a wider opening.',
        'variants' => [],
      ],
      [
        'title' => 'Double Leaf Cleanroom Doors',
        'image' => 'images/product-power-jet.jpg',
        'desc' => 'Wider clear opening for equipment, trolleys, or hospital beds. Used at material transfer points and entrances to larger cleanrooms or OT complexes. Active/passive leaf convention: the passive leaf stays closed in normal use, opening only when full width is needed, preserving seal integrity for routine traffic',
        'variants' => [],
      ],
      [
        'title' => 'SS 304 Pharma Grade Swing Doors',
        'image' => 'images/product-vapor-jet.jpg',
        'desc' => 'Stainless steel 304 finish in place of painted or laminate surfaces. Specified for frequent washdown, corrosive cleaning agents, or higher hygiene requirements. Common in wet-process pharma areas, CSSD, and zones adjoining autoclave rooms',
        'variants' => ['Plastic', 'Stainless Steel'],
      ],
    ],
  ],
  [
    'id' => 'sliding-specialty-doors',
    'label' => 'Sliding & Specialty Doors',
    'title' => 'Sliding & Specialty Doors',
    'description' => 'Certain rooms need a different door type altogether, either because hygiene requirements make hands-free operation necessary, or because the application carries a specific regulatory or functional demand a standard swing door cannot meet.',
    'products' => [
      [
        'title' => 'Hermetically Sealed OT Doors (Automatic/Manual)',
        'image' => 'images/product-infekto-cide-n.png',
        'desc' => 'Full compression seal around the frame, beyond what a gasketed swing door provides. Protects the OT&apos;s pressure cascade, where even small air leakage at the door can let contaminated air reach the sterile field. Automatic version preferred in OT settings, since it lets staff move between rooms without touching the door, important when hand contact needs to be minimised.',
        'variants' => ['Mopping', 'Fogging'],
      ],
      [
        'title' => 'Automatic Sensor-Based Sliding Doors',
        'image' => 'images/product-infekto-derm-bkc.png',
        'desc' => 'Motion or proximity sensors for hands-free operation. Used where hands-free movement matters but a full hermetic seal isn&apos;t the primary requirement. Typical in general hospital corridors and non-critical cleanroom transitions.',
        'variants' => [],
      ],
      [
        'title' => 'Lead-Lined Radiation Shielding Doors',
        'image' => 'images/product-infekto-derm-bkc.png',
        'desc' => 'Shielding layer, typically lead, contains radiation within the room during operation. Required shielding level is determined by the equipment type and output inside the room. Specified as part of the facility&apos;s radiation safety design, in line with AERB requirements. Lead equivalence varies by application and is confirmed against the specific room and equipment during project planning, not supplied as a fixed standard specification.',
        'variants' => [],
      ],
      [
        'title' => 'ICU Glass Sliding Doors',
        'image' => 'images/product-infekto-derm-bkc.png',
        'desc' => 'Glass panel allows visual monitoring from the nursing station or corridor without entering the room. Supports frequent patient observation in ICU settings without unnecessary door traffic. Sliding and sealing specification follows the same considerations as other cleanroom sliding doors, adapted for visibility.',
        'variants' => [],
      ],
    ],
  ],
];

$comparisonColumns = ['Door Type', 'Hands-Free', 'Hands-Free', 'Typical Use'];

$comparisonRows = [
  'Single Leaf Swing' => ['Yes (auto version)', 'Gasket', 'Standard cleanroom entries, airlocks, labs, CSSD'],
  'Double Leaf Swing' => ['Yes (auto version)', 'Gasket', 'Equipment/trolley/bed transfer, larger openings'],
  'Hermetic OT Door' => ['Yes (auto version)', 'Full compression seal', 'OT entries, sterile field boundaries'],
  'Sensor Sliding Door' => ['Yes', 'Standard', 'Corridors, non-critical transitions'],
  'Lead-Lined Door' => ['No', 'Radiation shielding', 'Radiology, radiotherapy, nuclear medicine'],
  'ICU Glass Sliding Door' => ['Optional', 'Standard', 'ICU rooms needing visual monitoring'],
];
?>
<?php include 'includes/header.php'; ?>

<!-- Product Hero -->
<section class="product-hero animate-fade-up">
  <img src="<?php echo SITE_ROOT; ?>/images/product-detail-hero.jpg" alt="<?php echo $pageTitle; ?>">
  <div class="product-hero-overlay"></div>
  <div class="product-hero-content">
    <h1><?php echo $pageTitle; ?></h1>
  </div>
</section>

<!-- Intro -->
<section class="product-intro">
  <div class="product-intro-inner animate-on-scroll">
    <h2>What is Cleanroom Doors</h2>
    <p>Doors are one of the most heavily used and most overlooked components of a cleanroom or OT. A wall panel is
      installed once and rarely touched again; a door cycles hundreds of times a day, and every cycle is a chance for
      particle ingress, pressure loss, or seal wear. Leaf material, frame detailing, seal type, and operating mechanism
      all determine how well the opening holds its classification over years of use, not just on installation day.
      Skan Inc provides cleanroom doors from standard single leaf swing doors for general pharma and industrial
      cleanrooms to specialised systems for OTs, radiology areas, and ICUs. Selection is driven by room function,
      traffic, whether hands-free operation is required, and, in some cases, regulatory requirements specific to the
      application, such as radiation shielding.
    </p>
  </div>
</section>

<!-- Comparison At A Glance -->
<section class="comparison">
  <div class="comparison-inner">
    <h2 class="animate-on-scroll">Door Types at a Glance</h2>

    <div class="comparison-table-wrap animate-on-scroll">
      <table class="comparison-table">
        <thead>
          <tr>
            <?php foreach ($comparisonColumns as $col): ?>
              <th><?php echo htmlspecialchars($col); ?></th>
            <?php endforeach; ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($comparisonRows as $feature => $values): ?>
            <tr>
              <td class="comparison-feature-col"><?php echo htmlspecialchars($feature); ?></td>
              <?php foreach ($values as $value): ?>
                <td><?php echo htmlspecialchars($value); ?></td>
              <?php endforeach; ?>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Tabs -->
<section class="product-list">
  <div class="product-list-inner">
    <h2 class="animate-on-scroll">Purpose-Built Solutions in this Category</h2>

    <p class="tabs-click-hint animate-on-scroll">

      <span>Select a tab below to explore the available products</span>

      <span class="tabs-click-arrow" aria-hidden="true">&#8595;</span>

    </p>


    <div class="tabs-nav animate-on-scroll" role="tablist">
      <?php foreach ($tabs as $index => $tab): ?>
        <button type="button" class="tab-btn<?php echo $index === 0 ? ' active' : ''; ?>"
          data-tab-target="<?php echo $tab['id']; ?>" role="tab"
          aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">
          <?php echo htmlspecialchars($tab['label']); ?>
        </button>
      <?php endforeach; ?>
    </div>

    <?php foreach ($tabs as $index => $tab): ?>
      <div class="tab-panel<?php echo $index === 0 ? ' active' : ''; ?>" id="<?php echo $tab['id']; ?>" role="tabpanel">
        <div class="tab-panel-intro animate-on-scroll">
          <h3><?php echo htmlspecialchars($tab['title']); ?></h3>
          <p><?php echo htmlspecialchars($tab['description']); ?></p>
        </div>
        <?php foreach ($tab['products'] as $pIndex => $product): ?>
          <div class="product-row<?php echo $pIndex % 2 === 1 ? ' reverse' : ''; ?> animate-on-scroll">
            <div class="product-row-image">
              <img src="<?php echo htmlspecialchars(SITE_ROOT . '/' . ltrim($product['image'], '/')); ?>" alt="<?php echo htmlspecialchars($product['title']); ?>">
            </div>
            <div class="product-row-info">
              <h3><?php echo htmlspecialchars($product['title']); ?></h3>
              <p><?php echo $product['desc']; ?></p>
              <?php if (!empty($product['variants'])): ?>
                <p class="variant-label">Available Variants:</p>
                <div class="variant-tags">
                  <?php foreach ($product['variants'] as $variant): ?>
                    <span class="variant-tag"><?php echo htmlspecialchars($variant); ?></span>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
              <a href="#" class="btn-outline">
                Download Brochure
                <img src="<?php echo SITE_ROOT; ?>/images/icon-download.svg" alt="">
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- FAQ Section -->
<section class="faq-section animate-on-scroll">
  <h2>Frequently Asked Questions</h2>

  <div class="faq-item">
    <button class="faq-question">
      Should I specify a swing door or a sliding door?
      <span>+</span>
    </button>
    <div class="faq-answer">
      <p>Swing doors are the default for most cleanroom and pharma openings, since they seal more reliably and cost
        less. Sliding or hermetic doors are worth the added cost specifically where hands-free operation or a stronger
        seal is a functional requirement, such as OT entries or high-traffic corridors.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      Does every OT need a hermetically sealed door?
      <span>+</span>
    </button>
    <div class="faq-answer">
      <p>Yes, in practice. The pressure cascade an OT depends on to keep contaminated air out of the sterile field is
        only as good as its weakest seal, and a standard gasketed swing door is more prone to leakage at the frame than
        a compression-sealed hermetic door.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      What lead thickness do I need for a radiation shielding door?
      <span>+</span>
    </button>
    <div class="faq-answer">
      <p>It depends on the type and output of the equipment in the room and is set by the facility's radiation safety
        design. This is confirmed project by project rather than fixed as a standard specification.
      </p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      Can ICU glass doors be automated?
      <span>+</span>
    </button>
    <div class="faq-answer">
      <p>Yes. They can be specified with the same sliding and sensor mechanisms used elsewhere in the facility, with the
        glass panel added for visual monitoring.</p>
    </div>
  </div>
</section>

<!-- Testimonials Section -->

<?php include 'includes/testimonials.php'; ?>

<?php include 'includes/footer.php'; ?>
