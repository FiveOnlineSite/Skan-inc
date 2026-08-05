<?php
$pageTitle = 'Turnkey Projects & Validation';

$tabs = [
  [
    'id' => 'project-solutions',
    'label' => 'Project Solutions',
    'title' => 'Project Solutions',
    'description' => 'Coordinated turnkey delivery brings cleanroom, modular OT, laboratory, and hospital infrastructure systems together around one performance target and one project timeline.',
    'products' => [
      [
        'title' => 'Turnkey Pharma Cleanroom Projects',
        'image' => 'images/product-ulv-skd1100.jpg',
        'description' => 'A turnkey pharmaceutical cleanroom project starts from the classification the space needs to hold, whether an ISO 14644 class or GMP grade, and works backward to the panel specification, HVAC capacity, utilities, and layout. Civil work, panel installation, HVAC integration, and utilities are planned against the same classification target from the outset rather than allowing each trade to work from separate assumptions.',
      ],
      [
        'title' => 'Modular Operation Theatre Turnkey Setup',
        'image' => 'images/product-power-jet.jpg',
        'description' => 'A modular operation theatre turnkey setup brings together panels and flooring, hermetically sealed doors, HVAC and laminar airflow, OT equipment and control panels, and medical gas outlets in one room designed around the surgical workflow. It is delivered as one coordinated build because a modular OT rarely performs as intended when these systems are assembled without considering how they interact.',
      ],
      [
        'title' => 'BSL-2 / BSL-3 Laboratory Infrastructure',
        'image' => 'images/product-vapor-jet.jpg',
        'description' => 'Biosafety-level laboratories are built around containment, not just cleanliness. The correct infrastructure is selected against the risk of the biological agents involved and the facility-specific containment standard, with BSL-3 environments requiring considerably more demanding engineering controls than a standard pharmaceutical cleanroom.',
        'comparison' => 'bsl',
      ],
      [
        'title' => 'IVF Lab Controlled Environments',
        'image' => 'images/product-ulv-tantra.jpg',
        'description' => 'IVF laboratory controlled environments account for embryo sensitivity to air quality, temperature stability, and volatile organic compound levels beyond standard cleanroom particle counts. They are built with tighter VOC filtration and environmental stability control than a general pharmaceutical cleanroom.',
      ],
      [
        'title' => 'CSSD',
        'image' => 'images/product-roto-matic.jpg',
        'description' => 'A Central Sterile Services Department handles the receiving, cleaning, sterilisation, and storage of surgical instruments for an entire hospital. Its layout follows a strict one-directional flow from dirty to clean to sterile storage so instruments never move backward through a completed stage. A poorly planned flow creates cross-contamination risk regardless of the quality of the sterilisation equipment.',
      ],
    ],
  ],
  [
    'id' => 'validation-services',
    'label' => 'Validation & Services',
    'title' => 'Validation & Services',
    'description' => 'Commissioning, qualification, periodic testing, and scheduled maintenance demonstrate that a critical facility was built correctly and continues to perform within its intended operating limits.',
    'products' => [
      [
        'title' => 'DQ / IQ / OQ / PQ Documentation Services',
        'image' => 'images/product-infekto-cide-n.png',
        'description' => 'DQ, IQ, OQ, and PQ form the standard validation lifecycle a pharmaceutical cleanroom or critical facility follows before approval for use. Documentation through each stage is what a regulatory inspection or internal quality audit reviews, so the paperwork matters as much as the physical testing behind it.',
        'comparison' => 'qualification',
      ],
      [
        'title' => 'HEPA Filter Integrity Testing (DOP)',
        'image' => 'images/product-infekto-derm-bkc.png',
        'description' => 'HEPA filter integrity testing is commonly called DOP testing after the dispersed oil particulate method historically used. A generated aerosol is introduced upstream of the filter and downstream air is scanned for particle concentration above the allowed threshold, indicating a breach in the filter media or a gap at the frame seal. Testing is repeated at defined intervals throughout a cleanroom\'s operational life because filter integrity degrades over time.',
      ],
      [
        'title' => 'Particle Count Mapping & Air Velocity Tests',
        'image' => 'images/product-infekto-derm-chg.png',
        'description' => 'Particle count mapping measures airborne particle concentration at multiple points to confirm that the room meets its intended ISO or GMP classification. Air velocity testing checks whether airflow at HEPA filter faces or within a laminar flow zone falls inside the design range. Both are performed at commissioning and repeated periodically because a room can drift out of classification over time without an obvious change in use.',
      ],
      [
        'title' => 'AMC (Annual Maintenance Contracts)',
        'image' => 'images/product-infekto-zyme-multi.png',
        'description' => 'Annual maintenance contracts cover scheduled servicing, filter changes, damper checks, AHU servicing, and periodic testing rather than reactive repair after failure. Cleanrooms and OTs degrade quietly, and airflow, pressure, or filtration problems are not always obvious in daily use, which makes scheduled maintenance especially important in critical facilities.',
      ],
    ],
  ],
];

$comparisons = [
  'bsl' => [
    'title' => 'BSL-2 and BSL-3 at a Glance',
    'columns' => ['Level', 'Containment Approach', 'Typical Requirement'],
    'rows' => [
      ['BSL-2', 'Standard microbiological practice plus some engineering controls', 'Moderate-risk biological agents'],
      ['BSL-3', 'Directional airflow from low to high risk, sealed penetrations, and often dedicated exhaust filtration', 'Considerably more demanding than a standard pharma cleanroom and planned around the facility\'s specific containment standard'],
    ],
  ],
  'qualification' => [
    'title' => 'The Validation Lifecycle at a Glance',
    'columns' => ['Stage', 'Confirms'],
    'rows' => [
      ['DQ — Design Qualification', 'The design meets the intended requirement before construction begins'],
      ['IQ — Installation Qualification', 'The installed system matches the approved design'],
      ['OQ — Operational Qualification', 'The system operates correctly across its intended range'],
      ['PQ — Performance Qualification', 'The system performs consistently under real operating conditions'],
    ],
  ],
];

$faqs = [
  [
    'question' => 'What\'s the difference between a BSL-2 and BSL-3 laboratory?',
    'answer' => 'BSL-2 relies on standard microbiological practice with some engineering controls and is suited to moderate-risk agents. BSL-3 adds directional airflow, sealed penetrations, and typically dedicated exhaust filtration, making it a considerably more demanding containment standard planned around the specific facility requirement.',
  ],
  [
    'question' => 'What is DQ/IQ/OQ/PQ and why does it matter?',
    'answer' => 'It is the four-stage validation lifecycle—design, installation, operational, and performance qualification—that a pharmaceutical cleanroom or critical facility goes through before approval. Each stage\'s documentation is what a regulatory inspection or quality audit actually reviews.',
  ],
  [
    'question' => 'What is DOP testing?',
    'answer' => 'It is a HEPA filter integrity test that introduces a generated aerosol upstream and scans downstream air for any leak point in the filter media or at the frame seal. It is repeated periodically through a cleanroom\'s operational life, not just once at commissioning.',
  ],
  [
    'question' => 'Do I need an AMC if my cleanroom already passed commissioning tests?',
    'answer' => 'Yes. Commissioning confirms the room meets classification on day one. Airflow, pressure, and filtration performance can drift afterward without any visible sign, which is what scheduled maintenance under an AMC is built to catch before it becomes a compliance issue.',
  ],
];
?>
<?php include 'includes/header.php'; ?>

<section class="product-hero animate-fade-up">
  <img src="images/product-detail-hero.jpg" alt="<?php echo htmlspecialchars($pageTitle); ?>">
  <div class="product-hero-overlay"></div>
  <div class="product-hero-content">
    <h1><?php echo htmlspecialchars($pageTitle); ?></h1>
  </div>
</section>

<section class="product-intro">
  <div class="product-intro-inner animate-on-scroll">
    <h2>What are Turnkey Projects &amp; Validation?</h2>
    <p>Most cleanroom and hospital infrastructure projects fail not because a single component was wrong, but because components were not coordinated—a panel system installed before HVAC ductwork was finalised, or a room built to a classification that validation testing later shows it does not meet. A turnkey approach closes that gap, treating the project as one coordinated build from design through commissioning rather than a sequence of separately managed trades.</p>
    <p>Skan Inc undertakes turnkey pharmaceutical cleanroom, modular OT, and hospital infrastructure projects, drawing on the panel, HVAC, door, and equipment capabilities covered elsewhere on this site and coordinating them into a single project timeline. Where a project needs expertise or components outside our direct manufacturing scope, we work with established partners and take responsibility for how those pieces integrate into the finished facility.</p>
  </div>
</section>

<section class="product-list pb-0">
  <div class="product-list-inner">
    <h2 class="animate-on-scroll">Purpose-Built Solutions in this Category</h2>

    <div class="tabs-nav animate-on-scroll" role="tablist">
      <?php foreach ($tabs as $tabIndex => $tab): ?>
        <button type="button" class="tab-btn<?php echo $tabIndex === 0 ? ' active' : ''; ?>"
          data-tab-target="<?php echo htmlspecialchars($tab['id']); ?>" role="tab"
          aria-selected="<?php echo $tabIndex === 0 ? 'true' : 'false'; ?>">
          <?php echo htmlspecialchars($tab['label']); ?>
        </button>
      <?php endforeach; ?>
    </div>

    <?php foreach ($tabs as $tabIndex => $tab): ?>
      <div class="tab-panel<?php echo $tabIndex === 0 ? ' active' : ''; ?>"
        id="<?php echo htmlspecialchars($tab['id']); ?>" role="tabpanel">
        <div class="tab-panel-intro animate-on-scroll">
          <h3><?php echo htmlspecialchars($tab['title']); ?></h3>
          <p><?php echo htmlspecialchars($tab['description']); ?></p>
        </div>

        <?php foreach ($tab['products'] as $productIndex => $product): ?>
          <div class="product-row<?php echo $productIndex % 2 === 1 ? ' reverse' : ''; ?> animate-on-scroll">
            <div class="product-row-image">
              <img src="<?php echo htmlspecialchars($product['image']); ?>"
                alt="<?php echo htmlspecialchars($product['title']); ?>">
            </div>
            <div class="product-row-info">
              <h3><?php echo htmlspecialchars($product['title']); ?></h3>
              <p><?php echo htmlspecialchars($product['description']); ?></p>
              <a href="#" class="btn-outline">
                Download Brochure
                <img src="images/icon-download.svg" alt="">
              </a>
            </div>
          </div>

          <?php if (!empty($product['comparison'])): ?>
            <?php $comparison = $comparisons[$product['comparison']]; ?>
            <section class="comparison">
              <div class="comparison-inner">
                <h2 class="animate-on-scroll"><?php echo htmlspecialchars($comparison['title']); ?></h2>
                <div class="comparison-table-wrap animate-on-scroll">
                  <table class="comparison-table">
                    <thead>
                      <tr>
                        <?php foreach ($comparison['columns'] as $column): ?>
                          <th><?php echo htmlspecialchars($column); ?></th>
                        <?php endforeach; ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($comparison['rows'] as $row): ?>
                        <tr>
                          <?php foreach ($row as $cellIndex => $cell): ?>
                            <td<?php echo $cellIndex === 0 ? ' class="comparison-feature-col"' : ''; ?>>
                              <?php echo htmlspecialchars($cell); ?>
                            </td>
                          <?php endforeach; ?>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </section>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php include 'includes/testimonials.php'; ?>

<section class="faq-section">
  <h2>Frequently Asked Questions</h2>
  <?php foreach ($faqs as $faq): ?>
    <div class="faq-item">
      <button class="faq-question">
        <?php echo htmlspecialchars($faq['question']); ?>
        <span>+</span>
      </button>
      <div class="faq-answer">
        <p><?php echo htmlspecialchars($faq['answer']); ?></p>
      </div>
    </div>
  <?php endforeach; ?>
</section>

<?php include 'includes/footer.php'; ?>
