<?php
$pageTitle = 'Cleanroom Panels & Flooring';

$tabs = [
  [
    'id' => 'modular-wall-ceiling-panels',
    'label' => 'Modular Wall & Ceiling Panels',
    'title' => 'Modular Wall & Ceiling Panel Systems',
    'description' => 'Panels are built as a core (insulation, fire behaviour) bonded between two skins (chemical resistance, cleanability, wear). The same core can carry different skins depending on what the room needs, so these are not independent product choices, they are two specs made together.',
    'products' => [
      [
        'title' => 'PUF (Polyurethane Foam) Insulated Panels',
        'image' => 'images/products/puf-pannels.png',
        'desc' => 'Rigid foam core, strong thermal insulation for its weight. Standard choice where fire rating is not the primary driver. Available in 30mm, 50mm, 80mm, and 100mm, selected by insulation need and structural span. Skin options: PPGI — cost-effective, general manufacturing areas. Stainless steel (304/316L) — frequent washdown, high corrosion exposure, areas near autoclaves. HPL (antibacterial) — smoother finish, more common in hospital/OT interiors than heavy industrial pharma. The skin is a specification decision based on the room&apos;s use, not a finish preference. We work through this with the client and consultant during design.',
        'variants' => [],
      ],
      [
        'title' => 'Rockwool High-Density Mineral Wool Panels (Fire Rated)',
        'image' => 'images/products/rockwool.png',
        'desc' => 'Mineral wool core, non-combustible as a material property (not a Skan-applied certification). Specified wherever fire codes or risk assessments call for a fire-resistant envelope. Same 30–100mm thickness range and PPGI/SS/HPL skin options as PUF. Trade-off: heavier and costlier than PUF at the same thickness. Specify it where fire rating is a genuine requirement, not as a default across a whole facility.',
        'variants' => [],
      ],
      [
        'title' => 'PVC Panels',
        'image' => 'images/products/pvc-pannel.png',
        'desc' => 'Lighter, simpler than a sandwich panel; smooth and moisture-resistant. No meaningful thermal insulation value. Used in lab interiors, smaller cleanroom cabins, and lower-classification areas where speed or budget matters more than insulation. Not a substitute for PUF/Rockwool in classified envelopes needing thermal control',
        'variants' => [],
      ],
      [
        'title' => 'Aluminium Clip-In Tiles (Ceiling only)',
        'image' => 'images/products/aluminium-clip-tiles.png',
        'desc' => 'Ceiling only, not used for walls. Grid-suspended: individual tiles lift out for access to ducting, lighting, filter housings above. Chosen for light weight, corrosion resistance, and service access, not insulation.',
        'variants' => [],
      ],
    ],
  ],
  [
    'id' => 'cleanroom-modular-ot-flooring',
    'label' => 'Cleanroom & Modular OT Flooring',
    'title' => 'Cleanroom & Modular OT Flooring',
    'description' => 'Cleanroom flooring has to be seamless (no particle traps), chemically resistant to daily disinfection, and in some applications, static-dissipative. Coving (It is the curved wall-to-floor transition that removes the 90° junction where contamination collects) is standard on every flooring installation we do. It is a small line on a drawing and a common shortcut on lower-quality installs.',
    'products' => [
      [
        'title' => 'Vinyl Flooring',
        'image' => 'images/products/vinyl-flooring.png',
        'desc' => 'Vinyl flooring is supplied in sheet form and welded at the seams to create a continuous, monolithic surface with no open joints for contamination to collect in. We generally install vinyl flooring at 2mm thickness, which is standard for this category of product. Conductive / anti-static vinyl — controls static discharge to protect equipment or reduce ignition risk around fine powders and solvents. Surface resistance depends on the specific brand and product used per project; we confirm the figure against the material actually specified, rather than quote one number for every job. Homogeneous vinyl — uniform composition through its full depth, so wear doesn&apos;t expose a different layer underneath. Standard choice for general cleanroom areas, corridors, and non-OT hospital zones.',
        'variants' => ['Mopping', 'Fogging'],
      ],
      [
        'title' => 'Epoxy & Specialized Flooring',
        'image' => 'images/products/epoxy-flooring.png',
        'desc' => 'Self-levelling epoxy — poured and trowelled, fully seamless including into the coving detail. Common for OT flooring and sterile manufacturing where seam-free continuity matters. Good chemical resistance to disinfectants. PU coating — protective topcoat over epoxy or as a standalone finish, applied thinner than the base flooring system. Adds abrasion, chemical, or UV resistance depending on formulation and expected wear profile.',
        'variants' => [],
      ],
    ],
  ],
];

$comparisonColumns = ['Core Type', 'Fire Behaviour', 'Weight / Cost', 'Best For'];

$comparisonRows = [
  'PUF' => ['Not fire-rated', 'Lighter, lower cost', 'General pharma & industrial cleanrooms'],
  'Rockwool' => ['Non-combustible (material property)', 'Heavier, higher cost', 'OT complexes, critical-care corridors, solvent zones'],
];
?>
<?php include 'includes/header.php'; ?>

<!-- Product Hero -->
<section class="product-hero animate-fade-up">
  <img src="<?php echo SITE_ROOT; ?>/images/banner-cleanroom.png" alt="<?php echo $pageTitle; ?>">
  <div class="product-hero-overlay"></div>
  <div class="product-hero-content">
    <h1><?php echo $pageTitle; ?></h1>
  </div>
</section>

<!-- Intro -->
<section class="product-intro">
  <div class="product-intro-inner animate-on-scroll">
    <h2>What is Cleanroom Panels & Flooring</h2>
    <p>Walls, ceilings, and floors in a cleanroom or OT aren't finishing elements. They're functional components that
      control particles, resist microbial growth, and hold up to years of washdown and cleaning cycles. Get the
      specification wrong for the room's classification and cleaning regime, and the weaknesses show up within a few
      years, sometimes sooner.
      At Skan Inc, panel and flooring selection starts with the application, not a fixed catalogue answer. A
      pharmaceutical manufacturing suite, a hospital operation theatre, and a research laboratory each place different
      demands on the same square metre of wall or floor, and the right specification reflects those requirements through
      our in-house manufactured panels.
    </p>
  </div>
</section>

<!-- Tabs -->
<section class="product-list">
  <div class="product-list-inner">
    <h2 class="animate-on-scroll">
      Purpose-Built Solutions in this Category
    </h2>

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
      <div class="tab-panel<?php echo $index === 0 ? ' active' : ''; ?>" id="<?php echo htmlspecialchars($tab['id']); ?>"
        role="tabpanel">

        <div class="tab-panel-intro animate-on-scroll">
          <h3><?php echo htmlspecialchars($tab['title']); ?></h3>
          <p><?php echo htmlspecialchars($tab['description']); ?></p>
        </div>

        <?php if ($index === 0): ?>
          <section class="comparison">
            <div class="comparison-inner">
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
        <?php endif; ?>

        <?php foreach ($tab['products'] as $pIndex => $product): ?>
          <div class="product-row<?php echo $pIndex % 2 === 1 ? ' reverse' : ''; ?> animate-on-scroll">
            <div class="product-row-image">
              <img src="<?php echo htmlspecialchars(SITE_ROOT . '/' . ltrim($product['image'], '/')); ?>"
                alt="<?php echo htmlspecialchars($product['title']); ?>">
            </div>

            <div class="product-row-info">
              <h3><?php echo htmlspecialchars($product['title']); ?></h3>
              <p><?php echo $product['desc']; ?></p>

              <?php if (!empty($product['variants'])): ?>
                <p class="variant-label">Available Variants:</p>

                <div class="variant-tags">
                  <?php foreach ($product['variants'] as $variant): ?>
                    <span class="variant-tag">
                      <?php echo htmlspecialchars($variant); ?>
                    </span>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>

              <?php if (!empty($product['brochure'])): ?>
                <a href="<?php echo htmlspecialchars($product['brochure']); ?>" class="btn-outline" target="_blank" rel="noopener noreferrer">
                  Download Brochure
                  <img src="<?php echo SITE_ROOT; ?>/images/icon-download.svg" alt="">
                </a>
              <?php endif; ?>
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
      Should I choose PUF or Rockwool panels?
      <span>+</span>
    </button>
    <div class="faq-answer">
      <p>Choose Rockwool where fire code or risk assessment specifically requires a non-combustible core, such as OT
        complexes or solvent-handling zones. PUF is the standard choice everywhere else, since it's lighter and lower
        cost with equivalent skin and thickness options.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      What panel thickness do I need?
      <span>+</span>
    </button>
    <div class="faq-answer">
      <p>Thickness is driven by insulation requirement and structural span, not room classification alone. We supply
        30mm, 50mm, 80mm, and 100mm for both PUF and Rockwool and confirm the right one against your project's HVAC load
        and wall height during design.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      Is conductive flooring required in every cleanroom?
      <span>+</span>
    </button>
    <div class="faq-answer">
      <p>No. It's specified where static discharge risk exists, near sensitive electronics or fine powder/solvent
        handling. General pharmaceutical and hospital cleanroom areas typically use homogeneous vinyl or epoxy instead.
      </p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      Why does coving matter if it's not visible in a spec sheet comparison?
      <span>+</span>
    </button>
    <div class="faq-answer">
      <p>A sharp wall-to-floor corner is where dust and microbial contamination collect and where a flat mop can't
        reach. Coving removes that corner entirely. Its absence is one of the easiest ways to spot a lower-quality
        cleanroom build.</p>
    </div>
  </div>
</section>

<!-- Testimonials Section -->

<?php include 'includes/testimonials.php'; ?>

<?php include 'includes/footer.php'; ?>
