<?php
$pageTitle = 'OT Equipment & Control Systems';

$tabs = [
  [
    'id' => 'surgeon-control-panels',
    'label' => 'Surgeon Control Panels',
    'title' => 'Surgeon Control Panels (Digital Membrane / Touchscreen)',
    'description' => 'A surgeon control panel lets the operating team adjust room conditions, lighting, and connected equipment from within the OT itself, without stepping away from the table. It is typically wall or pendant mounted within reach of the team and wired into the room\'s lighting, HVAC, and equipment control circuits.',
    'comparison_title' => 'Control Panel Interfaces at a Glance',
    'comparison_columns' => ['Interface', 'Strength', 'Preferred When'],
    'comparison_rows' => [
      ['Digital membrane', 'Simple, tactile, easier long-term cleaning', 'The facility prioritises durability and straightforward operation'],
      ['Touchscreen', 'Finer control, easier reconfiguration without rewiring', 'The facility wants more granular control or expects settings to change over time'],
    ],
    'products' => [],
  ],
  [
    'id' => 'ot-equipment',
    'label' => 'OT Equipment',
    'title' => 'OT Equipment',
    'description' => '',
    'products' => [
      [
        'title' => 'LED Surgical Lights',
        'image' => 'images/product-ulv-skd1100.jpg',
        'desc' => 'LED lighting has largely replaced halogen for surgical use: it runs cooler at the point of use and gives more consistent output over the length of a procedure. The dome mounts on an arm system so the team can reposition it mid-procedure without adjusting the whole fixture.',
        'spec_columns' => ['Configuration', 'Typical Use'],
        'spec_rows' => [
          ['Single dome', 'Smaller OTs or secondary procedure rooms'],
          ['Double dome', 'Wider surgical fields, or where a second source reduces shadowing from hands and instruments'],
        ],
      ],
      [
        'title' => 'OT Pendants (Anaesthesia / Surgical / Endoscopy)',
        'image' => 'images/product-power-jet.jpg',
        'desc' => 'Pendants suspend equipment, gas outlets, and power from the ceiling instead of routing them along the floor, keeping the area around the table clear of cables and trip hazards. A single OT may use more than one pendant type depending on the range of procedures it supports.',
        'spec_columns' => ['Pendant Type', 'Brings to the Table', 'Positioned At'],
        'spec_rows' => [
          ['Anaesthesia', 'Gas lines, monitoring equipment, power', 'Head of the table, anaesthetist\'s working position'],
          ['Surgical', 'Equipment and connections for the operating field', 'Directly over the surgical field'],
          ['Endoscopy', 'Monitors and imaging equipment for minimally invasive procedures', 'Positioned to support endoscopic workflow'],
        ],
      ],
      [
        'title' => 'LED X-Ray View Boxes (Slim Digital)',
        'image' => 'images/product-vapor-jet.jpg',
        'desc' => 'Useful in the OT for quickly displaying film or printed imaging mid-procedure, without bringing in a workstation or monitor. Slim digital LED replaces older fluorescent-backlit versions, offering more even illumination and a lower profile. It mounts flush or near-flush to the wall, which is relevant where wall space and cleanability are both at a premium.',
      ],
      [
        'title' => 'Medical Scrub Stations (1 / 2 / 3 Bay)',
        'image' => 'images/product-ulv-tantra.jpg',
        'desc' => 'Bay count is selected based on how many staff need to scrub simultaneously, driven by surgical team size and how quickly the OT turns over between cases. Operation type is a separate decision from bay count.',
        'spec_columns' => ['Operation Type', 'Mechanism', 'Preferred When'],
        'spec_rows' => [
          ['Automatic', 'Sensor-operated, no hand contact with taps or controls', 'The priority is avoiding recontamination of just-cleaned hands'],
          ['Foot-operated', 'Mechanical pedal, hands-free without electronics', 'The facility prefers simplicity and lower servicing dependency'],
        ],
      ],
    ],
  ],
];

$faqs = [
  ['question' => 'Membrane or touchscreen control panel, which should I choose?', 'answer' => 'Membrane panels suit facilities that want simple, durable, easy-to-clean operation. Touchscreens suit facilities that want finer control or expect to reconfigure settings over time without rewiring.'],
  ['question' => 'Do I need single or double dome surgical lights?', 'answer' => 'Single dome is sufficient for smaller OTs or secondary procedure rooms. Double dome is worth specifying for wider surgical fields or where shadowing from the team\'s hands and instruments is a recurring issue.'],
  ['question' => 'How many scrub station bays do I need?', 'answer' => 'Base it on how many staff scrub simultaneously ahead of a typical case, which comes down to your surgical team size and case turnover pace, not a fixed rule.'],
  ['question' => 'Automatic or foot-operated scrub station?', 'answer' => 'Both are equally hands-free. Automatic stations depend on sensors and electronics; foot-operated stations are mechanical and simpler to service long-term. The choice usually comes down to facility preference rather than a performance difference.'],
];
?>
<?php include 'includes/header.php'; ?>

<style>
  .product-spec-table {
    width: 100%;
    max-width: 100%;
    margin-top: 24px;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }

  .product-spec-table .comparison-table {
    width: 100%;
    min-width: 700px;
  }

  @media (max-width: 768px) {
    .product-row-info {
      width: 100%;
      max-width: 100%;
    }

    .product-spec-table .comparison-table {
      min-width: 600px;
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
    <h2>What are OT Equipment &amp; Control Systems?</h2>
    <p>An operation theatre is built around the procedure at its centre, and the equipment surrounding it exists to
      support the surgical team without getting in the way. Lighting has to be even and shadow-free. Pendants need to
      bring gas, power, and equipment mounts to the table without cluttering the floor. Control systems need to let the
      team adjust the room from within the sterile field. None of this operates in isolation; it works as a coordinated
      system, usually specified and installed as part of a complete OT build rather than piece by piece.</p>
  </div>
</section>

<section class="product-list pb-0">
  <div class="product-list-inner">
    <h2 class="animate-on-scroll">Purpose-Built Solutions in this Category</h2>
    <p class="tabs-click-hint animate-on-scroll">
      <span>Select a tab below to explore the available products</span>
      <span class="tabs-click-arrow" aria-hidden="true">&#8595;</span>
    </p>

    <div class="tabs-nav animate-on-scroll" role="tablist">
      <?php foreach ($tabs as $index => $tab): ?>
        <button type="button" class="tab-btn<?php echo $index === 0 ? ' active' : ''; ?>"
          data-tab-target="<?php echo htmlspecialchars($tab['id']); ?>" role="tab"
          aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>"><?php echo htmlspecialchars($tab['label']); ?></button>
      <?php endforeach; ?>
    </div>

    <?php foreach ($tabs as $index => $tab): ?>
      <div class="tab-panel<?php echo $index === 0 ? ' active' : ''; ?>" id="<?php echo htmlspecialchars($tab['id']); ?>"
        role="tabpanel">
        <div class="tab-panel-intro animate-on-scroll">
          <h3><?php echo htmlspecialchars($tab['title']); ?></h3>
          <p><?php echo htmlspecialchars($tab['description']); ?></p>
        </div>

        <?php if (!empty($tab['comparison_rows'])): ?>
          <section class="comparison">
            <div class="comparison-inner">
              <h2 class="animate-on-scroll"><?php echo htmlspecialchars($tab['comparison_title']); ?></h2>
              <div class="comparison-table-wrap animate-on-scroll">
                <table class="comparison-table">
                  <thead>
                    <tr><?php foreach ($tab['comparison_columns'] as $column): ?>
                        <th><?php echo htmlspecialchars($column); ?></th><?php endforeach; ?>
                    </tr>
                  </thead>
                  <tbody><?php foreach ($tab['comparison_rows'] as $row): ?>
                      <tr><?php foreach ($row as $cellIndex => $cell): ?>
                          <td<?php echo $cellIndex === 0 ? ' class="comparison-feature-col"' : ''; ?>>
                            <?php echo htmlspecialchars($cell); ?></td><?php endforeach; ?>
                      </tr><?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </section>
        <?php endif; ?>

        <?php foreach ($tab['products'] as $productIndex => $product): ?>
          <div class="product-row<?php echo $productIndex % 2 === 1 ? ' reverse' : ''; ?> animate-on-scroll">
            <div class="product-row-image"><img src="<?php echo htmlspecialchars(SITE_ROOT . '/' . ltrim($product['image'], '/')); ?>"
                alt="<?php echo htmlspecialchars($product['title']); ?>"></div>
            <div class="product-row-info">
              <h3><?php echo htmlspecialchars($product['title']); ?></h3>
              <p><?php echo htmlspecialchars($product['desc']); ?></p>
              <?php if (!empty($product['spec_rows'])): ?>
                <div class="comparison-table-wrap product-spec-table">
                  <table class="comparison-table">
                    <thead>
                      <tr><?php foreach ($product['spec_columns'] as $column): ?>
                          <th><?php echo htmlspecialchars($column); ?></th><?php endforeach; ?>
                      </tr>
                    </thead>
                    <tbody><?php foreach ($product['spec_rows'] as $row): ?>
                        <tr><?php foreach ($row as $cellIndex => $cell): ?>
                            <td<?php echo $cellIndex === 0 ? ' class="comparison-feature-col"' : ''; ?>>
                              <?php echo htmlspecialchars($cell); ?></td><?php endforeach; ?>
                        </tr><?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              <?php endif; ?>
              <a href="#" class="btn-outline">Download Brochure <img src="<?php echo SITE_ROOT; ?>/images/icon-download.svg" alt=""></a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="faq-section animate-on-scroll">
  <h2>Frequently Asked Questions</h2>
  <?php foreach ($faqs as $faq): ?>
    <div class="faq-item">
      <button class="faq-question"><?php echo htmlspecialchars($faq['question']); ?><span>+</span></button>
      <div class="faq-answer">
        <p><?php echo htmlspecialchars($faq['answer']); ?></p>
      </div>
    </div>
  <?php endforeach; ?>
</section>

<?php include 'includes/testimonials.php'; ?>

<?php include 'includes/footer.php'; ?>
