<?php
$pageTitle = 'Medical Gas Pipeline Systems';

$solutions = [
  [
    'title' => 'Gas Manifold Systems',
    'image' => 'images/product-ulv-skd1100.jpg',
    'description' => 'Gas manifold systems regulate and switch between primary and reserve gas cylinder banks at the source. They ensure supply continues uninterrupted if the primary bank runs low or needs replacement.',
  ],
  [
    'title' => 'Area Alarm Valve Boxes',
    'image' => 'images/product-power-jet.jpg',
    'description' => 'Area alarm valve boxes are positioned at zone entry points along the pipeline. They allow a section to be isolated for maintenance without shutting off supply to the rest of the facility, monitor line pressure, and trigger an alarm if it falls outside the expected range.',
  ],
  [
    'title' => 'Medical Gas Outlets (BS / DIN / American Standards)',
    'image' => 'images/product-vapor-jet.jpg',
    'description' => 'Outlet and equipment connectors are not interchangeable across standards, so the outlet configuration is matched to what the hospital\'s existing equipment is already built to accept.',
  ],
  [
    'title' => 'Bed Head Panels (Integrated Outlets & Electricals)',
    'image' => 'images/product-ulv-tantra.jpg',
    'description' => 'Bed head panels combine gas outlets, electrical sockets, lighting controls, and communication points in a single wall-mounted unit above the bed. They keep the area around the patient clear of separate fittings and cabling while simplifying routine use and future servicing, since outlets and electrical points are accessed from one panel rather than scattered across the wall.',
  ],
];

$standards = [
  ['BS', 'Selected to match existing British-standard equipment and fittings already in use at the facility'],
  ['DIN', 'Selected to match existing German/European-standard equipment and fittings'],
  ['American', 'Selected to match existing US-standard equipment and fittings'],
];

$faqs = [
  [
    'question' => 'What does a gas manifold system actually do?',
    'answer' => 'It switches between primary and reserve gas cylinder banks automatically, so supply to the hospital continues without interruption when the primary bank needs replacing.',
  ],
  [
    'question' => 'Why do medical gas outlets come in different standards?',
    'answer' => 'BS, DIN, and American outlet and connector geometries are not interchangeable. The standard used is matched to the equipment the hospital already has in service, not chosen independently.',
  ],
  [
    'question' => 'What does a bed head panel typically include?',
    'answer' => 'Gas outlets, electrical sockets, lighting controls, and communication points, combined into one wall-mounted unit above the bed instead of separate fittings scattered across the wall.',
  ],
];
?>
<?php include 'includes/header.php'; ?>

<style>
  .mgps-standards {
    padding-top: 16px;
    padding-bottom: 56px;
  }

  @media (max-width: 768px) {
    .mgps-standards {
      padding-top: 0;
      padding-bottom: 40px;
    }
  }
</style>

<section class="product-hero animate-fade-up">
  <img src="<?php echo SITE_ROOT; ?>/images/product-detail-hero.jpg" alt="<?php echo htmlspecialchars($pageTitle); ?>">
  <div class="product-hero-overlay"></div>
  <div class="product-hero-content">
    <h1><?php echo htmlspecialchars($pageTitle); ?></h1>
  </div>
</section>

<section class="product-intro">
  <div class="product-intro-inner animate-on-scroll">
    <h2>What are Medical Gas Pipeline Systems?</h2>
    <p>A medical gas pipeline system (MGPS) delivers oxygen, medical air, nitrous oxide, vacuum, and other gases from a central source to the point of use at a patient's bedside or within the OT. It is one of the few hospital systems where a design or installation fault has an immediate, direct impact on patient safety rather than a gradual one.</p>
    <p>Skan Inc designs and installs MGPS as part of hospital infrastructure and modular OT projects, sourcing valves, alarm panels, and outlet fittings and integrating them into a pipeline system engineered around each facility's gas requirements, bed count, and layout.</p>
  </div>
</section>

<section class="product-list pb-0">
  <div class="product-list-inner">
    <h2 class="animate-on-scroll">Purpose-Built Solutions in this Category</h2>

    <?php foreach ($solutions as $index => $solution): ?>
      <div class="product-row<?php echo $index % 2 === 1 ? ' reverse' : ''; ?> animate-on-scroll">
        <div class="product-row-image">
          <img src="<?php echo htmlspecialchars(SITE_ROOT . '/' . ltrim($solution['image'], '/')); ?>"
            alt="<?php echo htmlspecialchars($solution['title']); ?>">
        </div>
        <div class="product-row-info">
          <h3><?php echo htmlspecialchars($solution['title']); ?></h3>

          <?php if (!empty($solution['description'])): ?>
            <p><?php echo htmlspecialchars($solution['description']); ?></p>
          <?php endif; ?>

          <a href="#" class="btn-outline">
            Download Brochure
            <img src="<?php echo SITE_ROOT; ?>/images/icon-download.svg" alt="">
          </a>
        </div>
      </div>

      <?php if ($index === 2): ?>
        <section class="comparison mgps-standards">
          <div class="comparison-inner">
            <h2 class="animate-on-scroll">Medical Gas Outlet Standards at a Glance</h2>
            <div class="comparison-table-wrap animate-on-scroll">
              <table class="comparison-table">
                <thead>
                  <tr>
                    <th>Standard</th>
                    <th>Key Point</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($standards as $standard): ?>
                    <tr>
                      <td class="comparison-feature-col"><?php echo htmlspecialchars($standard[0]); ?></td>
                      <td><?php echo htmlspecialchars($standard[1]); ?></td>
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
</section>

<section class="faq-section animate-on-scroll">
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

<?php include 'includes/testimonials.php'; ?>

<?php include 'includes/footer.php'; ?>
