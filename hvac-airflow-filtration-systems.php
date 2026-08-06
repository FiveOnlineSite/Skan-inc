<?php
$pageTitle = 'HVAC, Airflow & Filtration Systems';

$tabs = [
  [
    'id' => 'air-handling-units-ahu',
    'label' => 'Air Handling Units (AHU)',
    'title' => 'Air Handling Units (AHU)',
    'description' => 'An AHU\'s specification is really three separate decisions made together, not three alternative products. Casing construction, cooling mechanism, and airflow type are each chosen independently based on what the room needs.',
    'products' => [],
  ],
  [
    'id' => 'laminar-airflow-laf-units',
    'label' => 'Laminar Airflow (LAF) Units',
    'title' => 'Laminar Airflow (LAF) Units',
    'description' => 'LAF systems deliver a unidirectional stream of filtered air across a defined work zone, maintaining a consistently clean environment at the point where it matters most, a workbench or an entire operating field.',
    'products' => [
      [
        'title' => 'Vertical Laminar Airflow Benches',
        'image' => 'images/product-infekto-cide-n.png',
        'desc' => 'Used in laboratories and smaller cleanroom operations where a specific work area, not the whole room, needs a higher cleanliness standard. Air drawn through a HEPA filter at the top, delivered downward across the work surface in a steady, unidirectional stream. Keeps particles from settling on the process happening at the bench.',
        'variants' => ['Mopping', 'Fogging'],
      ],
      [
        'title' => 'Ceiling Suspended LAF (Modular OT)',
        'image' => 'images/product-infekto-derm-bkc.png',
        'desc' => 'Same principle at a larger scale; the standard air delivery method over an operating table in a modular OT. Positioned directly above the surgical field, delivering continuous downward filtered airflow. Keeps the immediate surgical field cleaner than surrounding room air, even during an active procedure with staff movement nearby.',
        'variants' => [],
      ],
      [
        'title' => 'HEPA Filter Modules (Mini-Pleat, Gel Seal)',
        'image' => 'images/product-infekto-derm-bkc.png',
        'desc' => 'HEPA filter modules are the filtration component that makes both LAF systems above work, not a separate category of unit. Mini-pleat construction packs more filter media into a compact housing, increasing effective filtration area without increasing footprint, useful where space above the OT ceiling is limited. Gel seal closes the filter pack into its frame using a gel-filled channel the filter\'s knife-edges seat into, eliminating the gap air could otherwise bypass through. A HEPA filter is only as effective as its seal. Excellent filter media with a poor frame seal will still leak unfiltered air around its edges.',
        'variants' => [],
      ],
    ],
  ],
  [
    'id' => 'hvac-distribution-components',
    'label' => 'HVAC Distribution & Components',
    'title' => 'HVAC Distribution & Components',
    'description' => 'Getting conditioned, filtered air from the AHU to the room and back depends on distribution components that rarely get attention until one fails or is undersized.',
    'products' => [
      [
        'title' => 'Ducting (GI / Aluminium)',
        'image' => 'images/product-infekto-cide-n.png',
        'desc' => 'Carries air between the AHU and terminal outlets in the cleanroom or OT. Choice between galvanised iron and aluminium comes down to weight, cost, and corrosion exposure. Aluminium is the lighter option where weight matters for installation or structural reasons.',
        'variants' => ['Mopping', 'Fogging'],
      ],
      [
        'title' => 'FRP Ducting',
        'image' => 'images/product-infekto-derm-bkc.png',
        'desc' => 'Used where the airstream carries corrosive fumes or the environment itself is corrosive. Fibre-reinforced plastic resists chemical attack that would degrade GI or aluminium over time. More common in specific pharmaceutical fume extraction than general supply/return ductwork.',
        'variants' => [],
      ],
      [
        'title' => 'Volume Control Dampers (VCD)',
        'image' => 'images/product-infekto-derm-bkc.png',
        'desc' => 'Regulate airflow quantity through a duct section. Balance the system so each room or zone gets the airflow it was designed for, rather than air following the path of least resistance.',
        'variants' => [],
      ],
      [
        'title' => 'Motorised Fire & Smoke Dampers',
        'image' => 'images/product-infekto-derm-bkc.png',
        'desc' => 'Installed where ductwork passes through fire-rated walls or floors. Close automatically on fire or smoke detection, stopping flame and smoke travelling through the duct network. A life safety component as much as an HVAC one; placement is typically dictated by the building\'s fire safety design.',
        'variants' => [],
      ],
      [
        'title' => 'Return Air Risers',
        'image' => 'images/product-infekto-derm-bkc.png',
        'desc' => 'Carry air back from the room to the AHU, completing the airflow loop. Sizing and placement affect how evenly a room\'s pressure and airflow pattern hold up in practice. Poorly placed risers are a common reason a room fails to hold its intended pressure cascade, even with a correctly sized AHU.',
        'variants' => [],
      ],
    ],
  ],
];

$comparisonColumns = ['Core Type', 'Fire Behaviour', 'Weight / Cost'];

$comparisonRows = [
  'Casing construction' => ['Double skin, thermal break', 'Standard for all pharma/cleanroom AHUs — prevents condensation a single-skin casing would allow'],
  'Cooling mechanism' => ['DX (direct expansion) / Chilled water coil', 'DX: smaller sites, no chilled water plant. Chilled water: larger facilities drawing off a central plant'],
  'Airflow type' => ['Recirculating / FAHU (100% fresh air)', 'FAHU: once-through ventilation, isolation areas, or a defined fresh air makeup independent of the main system'],
];
$ahuTableNote = 'Double skin, thermal break casings are now the standard specification for pharma and cleanroom AHUs, since a single-skin casing is more prone to sweating and energy loss. DX units are practical where a facility has no chilled water infrastructure, since they carry their own refrigerant circuit and don\'t depend on a central plant. FAHUs are specified specifically where a room\'s design calls for once-through ventilation rather than recirculation, such as certain isolation areas or spaces with a defined fresh air requirement independent of the rest of the facility.';

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
    <h2>What is HVAC, Airflow & Filtration Systems</h2>
    <p>Airflow is what actually makes a cleanroom a cleanroom. Panels and doors create the enclosure, but the HVAC
      system, the air handling units, ducting, filtration, and dampers, establishes and holds the pressure cascade, air
      change rate, and particle count the space is built to maintain. A well-built room with an undersized or poorly
      configured HVAC system will never hold its classification, regardless of how good the walls and floor are.Skan Inc
      designs and supplies HVAC systems for cleanrooms, pharmaceutical facilities, and modular OTs, covering air
      handling units, laminar airflow systems, and the ducting and distribution components that connect them. Some
      components are manufactured in-house; others, such as certain dampers, or specialised filter media, are sourced
      through established supplier relationships and integrated as part of the system we deliver.
    </p>
  </div>
</section>

<!-- Tabs -->
<section class="product-list pb-0">
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
              <p class="comparison-note animate-on-scroll"><?php echo htmlspecialchars($ahuTableNote); ?></p>
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
      Should I choose a DX or chilled water AHU?
      <span>+</span>
    </button>
    <div class="faq-answer">
      <p>DX units make sense where there's no existing chilled water plant, since they're self-contained. If the
        facility already has a central chilled water plant, a chilled water coil AHU is generally the more efficient
        option at scale.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      What is an FAHU and when do I need one?
      <span>+</span>
    </button>
    <div class="faq-answer">
      <p>A Fresh Air Handling Unit handles only outside air, with no recirculation. It's specified where a room's design
        calls for once-through ventilation, such as isolation areas or spaces with a fresh air requirement kept
        independent of the rest of the facility's recirculating system.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      Vertical LAF bench or ceiling suspended LAF, which one do I need?
      <span>+</span>
    </button>
    <div class="faq-answer">
      <p>A vertical bench suits a defined work area within a lab or smaller cleanroom. Ceiling suspended LAF is the
        standard choice for an OT, where the entire surgical field, not just a bench, needs continuous filtered airflow
        from above.
      </p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      Why does HEPA filter seal type matter as much as filter grade?
      <span>+</span>
    </button>
    <div class="faq-answer">
      <p>Filter media only stops particles that actually pass through it. A gap at the frame lets air bypass the media
        entirely, regardless of how fine the filter grade is. Gel seal construction is what closes that gap.</p>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<?php include 'includes/testimonials.php'; ?>

<?php include 'includes/footer.php'; ?>
