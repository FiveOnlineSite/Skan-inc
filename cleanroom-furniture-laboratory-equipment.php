<?php
$pageTitle = 'Cleanroom Furniture & Laboratory Equipment';

$tabs = [
  [
    'id' => 'cleanroom-stainless-steel-furniture',
    'label' => 'Cleanroom SS Furniture',
    'title' => 'Cleanroom Stainless Steel Furniture',
    'description' => 'Stainless steel holds up to repeated washdown and chemical disinfection without corroding, and does not harbour bacteria the way porous or seamed materials can.',
    'products' => [
      [
        'title' => 'SS Perforated & Cross-Over Benches',
        'image' => 'images/product-ulv-skd1100.jpg',
        'description' => 'SS perforated and cross-over benches are positioned at cleanroom entry points, where personnel change footwear or gowning between classification zones. The perforated top lets air pass through rather than settle on the surface, while the cross-over design enforces one-directional movement between the clean and less-clean sides so contamination does not travel back across the boundary.',
      ],
      [
        'title' => 'Sterile Garment Storage Cabinets',
        'image' => 'images/product-power-jet.jpg',
        'description' => 'Sterile garment storage cabinets hold gowning, masks, and sterile apparel in a closed unit until needed. They keep cleaned garments protected between uses rather than exposed on open shelving and are typically positioned close to the gowning area for direct storage-to-changing movement.',
      ],
      [
        'title' => 'SS Cleanroom Lockers & Writing Desks',
        'image' => 'images/product-vapor-jet.jpg',
        'description' => 'SS cleanroom lockers and writing desks provide personal storage and workspace built to the same hygiene standard as fixed cleanroom furniture. Unlike standard office furniture, they avoid seams, joints, and absorbent surfaces that would make wipe-down and disinfection difficult.',
      ],
      [
        'title' => 'Instrument & Dressing Trolleys',
        'image' => 'images/product-ulv-tantra.jpg',
        'description' => 'Instrument and dressing trolleys are mobile units for moving sterile instruments, dressings, and supplies within the OT or cleanroom. They use smooth, easily wiped surfaces with locking castors for stability while stationary and are built to the same cleanability standard as fixed furniture because they may move between classification zones during a single shift.',
      ],
    ],
  ],
  [
    'id' => 'equipment-accessories',
    'label' => 'Equipment & Accessories',
    'title' => 'Equipment & Accessories',
    'description' => 'Purpose-built laboratory equipment supports effective cleaning, safe chemical handling, and controlled biological work while protecting personnel, products, and the surrounding environment.',
    'products' => [
      [
        'title' => 'Industrial Ultrasonic Cleaners',
        'image' => 'images/product-roto-matic.jpg',
        'description' => 'Industrial ultrasonic cleaners use high-frequency sound waves in a liquid bath to dislodge contamination from instruments and components. They reach gaps, threads, and cavities that manual scrubbing cannot access reliably and are commonly used ahead of sterilisation in CSSD and in pharmaceutical settings requiring thorough between-batch cleaning.',
      ],
      [
        'title' => 'Fume Hoods & Chemical Storage Cabinets',
        'image' => 'images/product-infekto-cide-n.png',
        'description' => 'A fume hood draws air through the work opening and exhausts it outside the building, protecting staff from hazardous vapour exposure during active work. Chemical storage cabinets provide ventilated, contained storage matched to the specific chemical class, because flammable, corrosive, and toxic materials each carry different storage requirements.',
      ],
      [
        'title' => 'Bio-Safety Cabinets (Class II, Type A2 / B1 / B2)',
        'image' => 'images/product-infekto-derm-bkc.png',
        'description' => 'Bio-safety cabinets protect the operator, the sample, and the environment at once, using HEPA-filtered airflow to contain biological material while supplying clean air to the work surface. The A2, B1, and B2 types differ mainly in how they handle exhaust air. A cabinet rated for biological containment alone does not protect against chemical vapour exposure the way a properly ducted B1 or B2 unit does, so selecting the correct type matters.',
      ],
    ],
  ],
];

$cabinetColumns = ['Type', 'Exhaust Handling', 'Best For'];
$cabinetRows = [
  ['A2', 'Recirculates a portion of filtered air back into the room', 'Biological work involving only minimal chemical use'],
  ['B1', 'Ducts a portion outside the building and recirculates the rest', 'Biological work with some chemical vapour involvement'],
  ['B2', 'Exhausts all air outside with no recirculation', 'Larger quantities of volatile or hazardous chemicals alongside biological material'],
];

$faqs = [
  [
    'question' => 'Do I need a Type A2, B1, or B2 bio-safety cabinet?',
    'answer' => 'A2 is sufficient for biological work with only minimal chemical use. Move to B1 or B2 as soon as chemical vapours are genuinely part of the work, B2 specifically where volatile or hazardous chemical volumes are larger, since only B2 exhausts all air outside with no recirculation.',
  ],
  [
    'question' => 'Why can\'t I use standard office furniture in a cleanroom?',
    'answer' => 'Office furniture has seams, joints, and absorbent surfaces that make thorough wipe-down and disinfection difficult, and can themselves harbour contamination over time. Cleanroom furniture is built without these features specifically to hold up to repeated disinfection.',
  ],
  [
    'question' => 'What\'s the difference between a fume hood and a chemical storage cabinet?',
    'answer' => 'A fume hood protects staff during active work by exhausting vapours generated in real time. A chemical storage cabinet protects the facility when chemicals are not in use, with ventilation suited to the specific chemical class being stored.',
  ],
];
?>
<?php include 'includes/header.php'; ?>

<section class="product-hero animate-fade-up">
  <img src="<?php echo SITE_ROOT; ?>/images/product-detail-hero.jpg" alt="<?php echo htmlspecialchars($pageTitle); ?>">
  <div class="product-hero-overlay"></div>
  <div class="product-hero-content">
    <h1><?php echo htmlspecialchars($pageTitle); ?></h1>
  </div>
</section>

<section class="product-intro">
  <div class="product-intro-inner animate-on-scroll">
    <h2>What are Cleanroom Furniture &amp; Laboratory Equipment?</h2>
    <p>Furniture and equipment inside a cleanroom or lab have to meet the same standards as the room itself. A bench, cabinet, or trolley made from the wrong material, or with the wrong surface finish, becomes a source of contamination the moment it is wheeled in, regardless of how well the walls, floor, and HVAC are performing. Everything placed inside a classified space needs to be cleanable, non-shedding, and resistant to routine disinfectants.</p>
    <p>Skan Inc manufactures cleanroom furniture in stainless steel, built to the dimensions and configuration a given room requires. Laboratory safety equipment such as fume hoods and bio-safety cabinets is also part of the facility fit-out.</p>
  </div>
</section>

<section class="product-list pb-0 compact-table-spacing">
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

        <?php foreach ($tab['products'] as $productIndex => $product): ?>
          <div class="product-row<?php echo $productIndex % 2 === 1 ? ' reverse' : ''; ?> animate-on-scroll">
            <div class="product-row-image">
              <img src="<?php echo htmlspecialchars(SITE_ROOT . '/' . ltrim($product['image'], '/')); ?>"
                alt="<?php echo htmlspecialchars($product['title']); ?>">
            </div>
            <div class="product-row-info">
              <h3><?php echo htmlspecialchars($product['title']); ?></h3>
              <p><?php echo htmlspecialchars($product['description']); ?></p>
              <a href="#" class="btn-outline">
                Download Brochure
                <img src="<?php echo SITE_ROOT; ?>/images/icon-download.svg" alt="">
              </a>
            </div>
          </div>
        <?php endforeach; ?>

        <?php if ($tab['id'] === 'equipment-accessories'): ?>
          <section class="comparison">
            <div class="comparison-inner">
              <h2 class="animate-on-scroll">Bio-Safety Cabinet Types at a Glance</h2>
              <div class="comparison-table-wrap animate-on-scroll">
                <table class="comparison-table">
                  <thead>
                    <tr>
                      <?php foreach ($cabinetColumns as $column): ?>
                        <th><?php echo htmlspecialchars($column); ?></th>
                      <?php endforeach; ?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($cabinetRows as $row): ?>
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
