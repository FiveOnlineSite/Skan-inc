<?php
require_once __DIR__ . '/config.php';

$currentPage = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
$metaDefaults = [
  'index.php' => [
    'title' => 'Cleanroom, Modular OT & Hygiene Solutions | Skan Inc.',
    'description' => 'Skan Inc. manufactures fogging machines and delivers cleanroom, modular OT, HVAC, medical gas and hygiene solutions for critical spaces.',
  ],
  'about.php' => [
    'title' => 'About Skan Inc. | Cleanroom & Hygiene Experts',
    'description' => 'Learn about Skan Inc., a Mumbai-based manufacturer and turnkey solution provider for fogging, cleanroom, modular OT and hygiene systems since 2002.',
  ],
  'contact.php' => [
    'title' => 'Contact Skan Inc. | Cleanroom & OT Solutions',
    'description' => 'Contact Skan Inc. for cleanrooms, modular operation theatres, laboratories, fogging machines, medical gas systems and hygiene solutions.',
  ],
  'media.php' => [
    'title' => 'Cleanroom & Modular OT Projects | Skan Inc. Media Gallery',
    'description' => 'Explore Skan Inc. project images and videos featuring modular OTs, cleanrooms, fogging equipment and controlled-environment solutions.',
  ],
  'blog.php' => [
    'title' => 'Cleanroom & Hygiene Insights | Skan Inc. Blog',
    'description' => 'Read Skan Inc. insights on cleanrooms, modular operation theatres, decontamination, HVAC, medical gas systems and infection control.',
  ],
  'blog-detail.php' => [
    'title' => 'Skan Inc. Blog',
    'description' => 'Practical insights from Skan Inc. on cleanroom design, hygiene, decontamination and critical healthcare environments.',
  ],
  'fogging-machine-decontamination.php' => [
    'title' => 'Fogging Machines & Decontamination | Skan Inc.',
    'description' => 'Browse SKANFOG ULV, vapor and power-jet fogging machines for disinfection, fumigation and air sterilisation in OTs, hospitals, pharma and food facilities.',
  ],
  'cleanroom-panels-flooring.php' => [
    'title' => 'Panels & Flooring for Pharma, OT & Labs | Skan Inc.',
    'description' => 'Specify modular OT and cleanroom wall, ceiling and flooring systems with PUF, rockwool, PVC and aluminium panel solutions from Skan Inc.',
  ],
  'cleanroom-doors.php' => [
    'title' => 'Cleanroom & OT Doors for Pharma, Hospitals and Labs | Skan Inc.',
    'description' => 'Explore hygienic swing, sliding, hermetic and specialty cleanroom doors designed for pharma, hospitals, laboratories and modular OTs.',
  ],
  'hvac-airflow-filtration-systems.php' => [
    'title' => 'HVAC, Airflow & Filtration Systems | Skan Inc.',
    'description' => 'Skan Inc. designs AHUs, laminar airflow units and HEPA filtration systems for cleanrooms, modular OTs, laboratories and controlled environments.',
  ],
  'ot-equipment-control-systems.php' => [
    'title' => 'OT Equipment & Control Systems | Skan Inc.',
    'description' => 'Find surgical lights, surgeon control panels, OT pendants and supporting operation theatre equipment from Skan Inc.',
  ],
  'pass-boxes-air-showers.php' => [
    'title' => 'Cleanroom Pass Boxes & Air Showers | Skan Inc.',
    'description' => 'Improve cleanroom material and personnel transfer with static and dynamic pass boxes, air showers and tunnels from Skan Inc.',
  ],
  'medical-gas-pipeline-systems.php' => [
    'title' => 'Medical Gas Pipeline Systems | Skan Inc.',
    'description' => 'Plan reliable hospital medical gas infrastructure with manifolds, alarm valve boxes, outlets and bed head panels from Skan Inc.',
  ],
  'cleanroom-furniture-laboratory-equipment.php' => [
    'title' => 'Cleanroom Furniture & Laboratory Equipment | Skan Inc.',
    'description' => 'Equip cleanrooms and laboratories with stainless steel furniture, benches, cabinets, lockers, trolleys and specialist equipment from Skan Inc.',
  ],
  'turnkey-projects-validation.php' => [
    'title' => 'Turnkey Cleanroom & OT Projects | Skan Inc.',
    'description' => 'Skan Inc. delivers turnkey pharma cleanrooms, modular OTs, BSL laboratories, IVF environments, CSSD projects and validation support.',
  ],
  'product-detail.php' => [
    'title' => 'Fogging Machines & Disinfection Equipment | Skan Inc.',
    'description' => 'Compare SKANFOG vapor, ULV and power-jet fogging machines for reliable space treatment and disinfection across critical environments.',
  ],
];
$categoryPages = [
  'fogging-machine-decontamination.php',
  'cleanroom-panels-flooring.php',
  'cleanroom-doors.php',
  'hvac-airflow-filtration-systems.php',
  'ot-equipment-control-systems.php',
  'pass-boxes-air-showers.php',
  'medical-gas-pipeline-systems.php',
  'cleanroom-furniture-laboratory-equipment.php',
  'turnkey-projects-validation.php',
  'product-detail.php',
];

function navActiveClass(bool $isActive): string
{
  return $isActive ? ' active' : '';
}

function ariaCurrent(bool $isActive): string
{
  return $isActive ? ' aria-current="page"' : '';
}

$pageLabels = [
  'about.php' => 'About Us',
  'blog.php' => 'Blogs',
  'contact.php' => 'Contact Us',
  'media.php' => 'Media',
];

function seoMetaTrim(string $value, int $limit): string
{
  $value = trim(preg_replace('/\s+/', ' ', $value));

  if (mb_strlen($value) <= $limit) {
    return $value;
  }

  $trimmed = mb_substr($value, 0, $limit - 3);
  $lastSpace = mb_strrpos($trimmed, ' ');

  if ($lastSpace !== false) {
    $trimmed = mb_substr($trimmed, 0, $lastSpace);
  }

  return rtrim($trimmed, '.,:;|-') . '...';
}

$breadcrumbTitle = $pageTitle ?? ($pageLabels[$currentPage] ?? ucwords(str_replace(['-', '.php'], [' ', ''], $currentPage)));
$metaTitleLimit = in_array($currentPage, ['index.php', 'media.php'], true) ? 70 : 60;
$metaTitle = seoMetaTrim($metaTitle ?? ($metaDefaults[$currentPage]['title'] ?? ($pageTitle ?? 'Skan Inc.')), $metaTitleLimit);
$metaDescription = seoMetaTrim($metaDescription ?? ($metaDefaults[$currentPage]['description'] ?? 'Skan Inc. provides hygiene, cleanroom, modular OT and disinfection solutions for critical spaces.'), 160);
$canonicalBase = 'https://www.skaninc.com';
$canonicalPaths = [
  'index.php' => '/',
  'about.php' => '/about.php',
  'media.php' => '/media.php',
  'blog.php' => '/blog.php',
  'contact.php' => '/contact.php',
  'fogging-machine-decontamination.php' => '/fogging-machine-decontamination.php',
  'cleanroom-panels-flooring.php' => '/cleanroom-panels-flooring.php',
  'cleanroom-doors.php' => '/cleanroom-doors.php',
  'hvac-airflow-filtration-systems.php' => '/hvac-airflow-filtration-systems.php',
  'ot-equipment-control-systems.php' => '/ot-equipment-control-systems.php',
  'pass-boxes-air-showers.php' => '/pass-boxes-air-showers.php',
  'medical-gas-pipeline-systems.php' => '/medical-gas-pipeline-systems.php',
  'cleanroom-furniture-laboratory-equipment.php' => '/cleanroom-furniture-laboratory-equipment.php',
  'turnkey-projects-validation.php' => '/turnkey-projects-validation.php',
  'product-detail.php' => '/product-detail.php',
];
$canonicalPath = $canonicalPaths[$currentPage] ?? '/';

if ($currentPage === 'blog-detail.php' && !empty($_GET['post'])) {
  $canonicalPath = '/blog-detail.php?post=' . rawurlencode((string) $_GET['post']);
} elseif ($currentPage === 'blog-detail.php') {
  $canonicalPath = '/blog-detail.php';
}

$canonicalUrl = $canonicalBase . $canonicalPath;
$breadcrumbParent = null;

if ($currentPage === 'blog-detail.php') {
  $breadcrumbParent = ['label' => 'Blogs', 'url' => SITE_ROOT . '/blog.php'];
} elseif (in_array($currentPage, $categoryPages, true)) {
  $breadcrumbParent = ['label' => 'Categories', 'url' => null];
}

$showBreadcrumbs = $currentPage !== 'index.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($metaTitle, ENT_QUOTES, 'UTF-8'); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="robots" content="<?php echo htmlspecialchars($robots ?? 'index, follow', ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Skan Inc.">
  <meta property="og:title" content="<?php echo htmlspecialchars($metaTitle, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:image" content="<?php echo $canonicalBase; ?>/images/logo.png">
  <meta property="og:image:alt" content="Skan Inc. logo">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($metaTitle, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="twitter:image" content="<?php echo $canonicalBase; ?>/images/logo.png">
  <meta name="twitter:image:alt" content="Skan Inc. logo">
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Skan Inc.",
    "url": "<?php echo $canonicalBase; ?>/",
    "logo": "<?php echo $canonicalBase; ?>/images/logo.png",
    "email": "info@skaninc.com",
    "telephone": "+91 9519336995",
    "sameAs": [
      "https://www.instagram.com/skaninc1/",
      "https://www.facebook.com/people/Skan-Inc/61579118570781/"
    ]
  }
  </script>
  <link rel="icon" type="image/png" href="<?php echo SITE_ROOT; ?>/images/products/glass-logo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400&family=Montserrat:wght@500;600;700&family=Roboto:wght@400;600&display=swap"
    rel="stylesheet">
  <link rel="stylesheet"
    href="<?php echo SITE_ROOT; ?>/css/style.css?v=<?php echo filemtime(__DIR__ . '/../css/style.css'); ?>">
</head>

<body>

  <!-- Header -->
  <header class="header" id="header">
    <div class="header-inner">
      <a href="<?php echo SITE_ROOT; ?>/" class="header-logo">
        <img src="<?php echo SITE_ROOT; ?>/images/logo.png" alt="Skan Inc.">
      </a>

      <!-- Hamburger Button (mobile) -->
      <button class="hamburger" id="hamburger" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <!-- Mobile overlay -->
      <div class="nav-overlay" id="navOverlay"></div>

      <!-- Nav + Contact -->
      <div class="nav-wrapper" id="navWrapper">
        <nav class="header-nav">
          <a href="<?php echo SITE_ROOT; ?>/" class="nav-link<?php echo navActiveClass($currentPage === 'index.php'); ?>"<?php echo ariaCurrent($currentPage === 'index.php'); ?>>Home</a>
          <a href="<?php echo SITE_ROOT; ?>/about.php" class="nav-link<?php echo navActiveClass($currentPage === 'about.php'); ?>"<?php echo ariaCurrent($currentPage === 'about.php'); ?>>About</a>
          <div class="nav-dropdown" id="navDropdown">
            <button class="nav-link nav-link-dropdown<?php echo navActiveClass(in_array($currentPage, $categoryPages, true)); ?>" id="categoriesBtn"<?php echo ariaCurrent(in_array($currentPage, $categoryPages, true)); ?>>
              Categories
              <svg class="dropdown-arrow" width="10" height="6" viewBox="0 0 10 6" fill="none">
                <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </button>
            <div class="mega-menu" id="megaMenu">
              <div class="mega-menu-inner">
                <a href="<?php echo SITE_ROOT; ?>/fogging-machine-decontamination.php" class="mega-menu-card">
                  <div class="mega-menu-img">
                    <img src="<?php echo SITE_ROOT; ?>/images/products/ulv-skd1100-steel.png" alt="Fogging Machine">
                  </div>
                  <h5>Fogging Machine</h5>
                </a>
                <a href="<?php echo SITE_ROOT; ?>/cleanroom-panels-flooring.php" class="mega-menu-card">
                  <div class="mega-menu-img">
                    <img src="<?php echo SITE_ROOT; ?>/images/products/puf-pannels.png" alt="Mosquito Fogging Machine">
                  </div>
                  <h5>Cleanroom Panels & Flooring</h5>
                </a>
                <a href="<?php echo SITE_ROOT; ?>/cleanroom-doors.php" class="mega-menu-card">
                  <div class="mega-menu-img">
                    <img src="<?php echo SITE_ROOT; ?>/images/products/single-leaf-cleanroom-doors.png" alt="Fogging Machine & Decontamination">
                  </div>
                  <h5>Cleanroom Doors</h5>
                </a>
                <a href="<?php echo SITE_ROOT; ?>/hvac-airflow-filtration-systems.php" class="mega-menu-card">
                  <div class="mega-menu-img">
                    <img src="<?php echo SITE_ROOT; ?>/images/products/air-handling-unit.png" alt="Disinfectant &amp; Chemicals">
                  </div>
                  <h5>HVAC, Airflow &amp; Filtration Systems</h5>
                </a>
                <a href="<?php echo SITE_ROOT; ?>/ot-equipment-control-systems.php" class="mega-menu-card">
                  <div class="mega-menu-img">
                    <img src="<?php echo SITE_ROOT; ?>/images/products/led-surgical-lights.png" alt="Disposables">
                  </div>
                  <h5>OT Equipment &amp; Control Systems</h5>
                </a>
                <a href="<?php echo SITE_ROOT; ?>/pass-boxes-air-showers.php" class="mega-menu-card">
                  <div class="mega-menu-img">
                    <img src="<?php echo SITE_ROOT; ?>/images/products/pass-box.png" alt="Disposables">
                  </div>
                  <h5>Pass Boxes &amp; Air Showers</h5>
                </a>
                <a href="<?php echo SITE_ROOT; ?>/medical-gas-pipeline-systems.php" class="mega-menu-card">
                  <div class="mega-menu-img">
                    <img src="<?php echo SITE_ROOT; ?>/images/products/medical-gas-pipeline.png" alt="Disposables">
                  </div>
                  <h5>Medical Gas Pipeline Systems</h5>
                </a>
                <a href="<?php echo SITE_ROOT; ?>/cleanroom-furniture-laboratory-equipment.php" class="mega-menu-card">
                  <div class="mega-menu-img">
                    <img src="<?php echo SITE_ROOT; ?>/images/products/cross-over-bench.png" alt="Disposables">
                  </div>
                  <h5>Cleanroom Furniture &amp; Laboratory Equipment</h5>
                </a>
                <a href="<?php echo SITE_ROOT; ?>/turnkey-projects-validation.php" class="mega-menu-card">
                  <div class="mega-menu-img">
                    <img src="<?php echo SITE_ROOT; ?>/images/banner-turnkey.png" alt="Disposables">
                  </div>
                  <h5>Turnkey Projects &amp; Validation</h5>
                </a>
              </div>
            </div>
          </div>
          <a href="<?php echo SITE_ROOT; ?>/media.php" class="nav-link<?php echo navActiveClass($currentPage === 'media.php'); ?>"<?php echo ariaCurrent($currentPage === 'media.php'); ?>>Media</a>
          <a href="<?php echo SITE_ROOT; ?>/blog.php" class="nav-link<?php echo navActiveClass($currentPage === 'blog.php'); ?>"<?php echo ariaCurrent($currentPage === 'blog.php'); ?>>Blogs</a>
        </nav>
        <a href="<?php echo SITE_ROOT; ?>/contact.php" class="btn btn-primary nav-cta<?php echo navActiveClass($currentPage === 'contact.php'); ?>"<?php echo ariaCurrent($currentPage === 'contact.php'); ?>>Contact Us</a>
      </div>
    </div>
  </header>

  <?php if ($showBreadcrumbs): ?>
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <div class="breadcrumbs-inner">
        <a href="<?php echo SITE_ROOT; ?>/">Home</a>
        <?php if ($breadcrumbParent !== null): ?>
          <span class="breadcrumbs-separator" aria-hidden="true">/</span>
          <?php if ($breadcrumbParent['url'] !== null): ?>
            <a href="<?php echo htmlspecialchars($breadcrumbParent['url']); ?>"><?php echo htmlspecialchars($breadcrumbParent['label']); ?></a>
          <?php else: ?>
            <span><?php echo htmlspecialchars($breadcrumbParent['label']); ?></span>
          <?php endif; ?>
        <?php endif; ?>
        <span class="breadcrumbs-separator" aria-hidden="true">/</span>
        <span aria-current="page"><?php echo htmlspecialchars($breadcrumbTitle); ?></span>
      </div>
    </nav>
  <?php endif; ?>
