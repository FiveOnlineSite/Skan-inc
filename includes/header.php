<?php
require_once __DIR__ . '/config.php';

$currentPage = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo isset($pageTitle) ? $pageTitle . ' | Skan Inc.' : 'Skan Inc. - Advanced Hygiene & Disinfection Solutions'; ?>
  </title>
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
                    <img src="<?php echo SITE_ROOT; ?>/images/products/ulv-skd1100-plastic.png" alt="Fogging Machine">
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
                    <img src="<?php echo SITE_ROOT; ?>/images/products/ot-2.png" alt="Disposables">
                  </div>
                  <h5>Turnkey Projects &amp; Validation</h5>
                </a>
              </div>
            </div>
          </div>
          <a href="<?php echo SITE_ROOT; ?>/media.php" class="nav-link<?php echo navActiveClass($currentPage === 'media.php'); ?>"<?php echo ariaCurrent($currentPage === 'media.php'); ?>>Media</a>
        </nav>
        <a href="<?php echo SITE_ROOT; ?>/contact.php" class="btn btn-primary nav-cta<?php echo navActiveClass($currentPage === 'contact.php'); ?>"<?php echo ariaCurrent($currentPage === 'contact.php'); ?>>Contact Us</a>
      </div>
    </div>
  </header>
