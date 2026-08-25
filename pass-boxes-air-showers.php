<?php
$pageTitle = 'Pass Boxes & Air Showers';

$tabs = [
  [
    'id' => 'pass-boxes',
    'label' => 'Pass Boxes',
    'title' => 'Pass Boxes',
    'description' => 'A pass box is a two-door transfer chamber built into the wall between two spaces. Regardless of type, the core function is the same: the two doors can never be open at once, so the box never creates a direct, uncontrolled air path between the rooms it connects.',
    'table_title' => 'Pass Box Types at a Glance',
    'columns' => ['Type', 'Mechanism', 'Specified When'],
    'rows' => [
      [
        'Static',
        'Electromagnetic interlock, no active air treatment',
        'Controlling cross-contamination between rooms of different classification is the only requirement',
      ],
      [
        'Dynamic',
        'Interlock plus HEPA filter and motor-driven blower, actively filtering air inside the chamber',
        'There is a larger classification gap between rooms, or the material itself needs active air cleaning during transfer',
      ],
    ],
    'note' => '',
  ],
  [
    'id' => 'air-showers-tunnels',
    'label' => 'Air Showers & Tunnels',
    'title' => 'Air Showers & Tunnels',
    'description' => 'Gowning alone does not fully solve surface contamination. Loose particles and fibres can cling to the outside of a gown, or to equipment being wheeled in, even when garment protocol is followed correctly. Air showers and tunnels strip that contamination off at the last point of entry using high-velocity HEPA-filtered air jets, rather than letting it travel into the room.',
    'table_title' => 'Air Cleaning Systems at a Glance',
    'columns' => ['Type', 'Used For'],
    'rows' => [
      [
        'Air shower',
        'Personnel and smaller trolleys; high-velocity HEPA-filtered jets strip loose particles before entry',
      ],
      [
        'Air tunnel',
        'Equipment, trolleys, or larger volumes of material needing the same particle-removal step',
      ],
    ],
    'note' => 'Both systems are interlocked in the same way as pass boxes: the entry and exit doors cannot open simultaneously, preserving the pressure boundary of the room they lead into.',
  ],
];

$faqs = [
  [
    'question' => 'Static or dynamic pass box, which do I need?',
    'answer' => 'Static is sufficient where the goal is simply preventing cross-contamination between two rooms of different classification. Dynamic is worth the added cost where the classification gap is larger, or the material itself needs active air filtering during the transfer, not just isolation.',
  ],
  [
    'question' => 'Do I need an air shower or an air tunnel?',
    'answer' => 'An air shower covers personnel and smaller trolleys. An air tunnel is sized for equipment or larger volumes of material that need the same particle-removal step before entering the cleanroom or OT complex.',
  ],
  [
    'question' => 'If staff are already gowned correctly, why do they still need an air shower?',
    'answer' => 'Gowning protects against contamination coming from the person; it does not remove particles that have already settled on the outside of the gown itself before entering the cleanroom. The air shower handles that last step.',
  ],
];
?>
<?php include 'includes/header.php'; ?>

<section class="product-hero animate-fade-up">
  <img src="<?php echo SITE_ROOT; ?>/images/banner-pass-box.png" alt="<?php echo htmlspecialchars($pageTitle); ?>">
  <div class="product-hero-overlay"></div>
  <div class="product-hero-content">
    <h1><?php echo htmlspecialchars($pageTitle); ?></h1>
  </div>
</section>

<section class="product-intro">
  <div class="product-intro-inner animate-on-scroll">
    <h2>What are Pass Boxes &amp; Air Showers?</h2>
    <p>Every cleanroom eventually needs to move something across its boundary—a component, a document, a sample, or a person—and each transfer is a potential entry point for contamination if it is not controlled. Pass boxes and air showers manage that moment, letting material and people cross from an uncontrolled or lower-classification area into a cleanroom without compromising the room's pressure differential or particle count.</p>
    <p>Skan Inc supplies pass boxes and air showers as standalone units and as part of larger cleanroom and modular OT projects, sized and configured against the classification of the rooms they connect and the traffic passing through them.</p>
  </div>
</section>

<section class="product-list product-list--tables-before-faq">
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
          aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">
          <?php echo htmlspecialchars($tab['label']); ?>
        </button>
      <?php endforeach; ?>
    </div>

    <?php foreach ($tabs as $index => $tab): ?>
      <div class="tab-panel<?php echo $index === 0 ? ' active' : ''; ?>"
        id="<?php echo htmlspecialchars($tab['id']); ?>" role="tabpanel">
        <div class="tab-panel-intro animate-on-scroll">
          <h3><?php echo htmlspecialchars($tab['title']); ?></h3>
          <p><?php echo htmlspecialchars($tab['description']); ?></p>
        </div>

        <section class="comparison">
          <div class="comparison-inner">
            <h2 class="animate-on-scroll"><?php echo htmlspecialchars($tab['table_title']); ?></h2>
            <div class="comparison-table-wrap animate-on-scroll">
              <table class="comparison-table">
                <thead>
                  <tr>
                    <?php foreach ($tab['columns'] as $column): ?>
                      <th><?php echo htmlspecialchars($column); ?></th>
                    <?php endforeach; ?>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($tab['rows'] as $row): ?>
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
            <div class="tab-panel-intro animate-on-scroll">
              <p><?php echo htmlspecialchars($tab['note']); ?></p>
            </div>
          </div>
        </section>
      </div>
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
