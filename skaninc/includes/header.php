<?php if (!defined('SITE_ROOT')) define('SITE_ROOT', '/Skan-inc'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($pageTitle) ? $pageTitle . ' | Skan Inc.' : 'Skan Inc. - Advanced Hygiene & Disinfection Solutions'; ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&family=Montserrat:wght@500;600;700&family=Roboto:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo SITE_ROOT; ?>/css/style.css">
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
          <a href="<?php echo SITE_ROOT; ?>/" class="nav-link">Home</a>
          <a href="<?php echo SITE_ROOT; ?>/#about" class="nav-link">About</a>
          <div class="nav-dropdown" id="navDropdown">
            <button class="nav-link nav-link-dropdown" id="categoriesBtn">
              Categories
              <svg class="dropdown-arrow" width="10" height="6" viewBox="0 0 10 6" fill="none"><path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
            <div class="mega-menu" id="megaMenu">
              <div class="mega-menu-inner">
                <a href="#" class="mega-menu-card">
                  <div class="mega-menu-img">
                    <img src="<?php echo SITE_ROOT; ?>/images/product-fogging.jpg" alt="Fogging Machine">
                  </div>
                  <h5>Fogging Machine</h5>
                </a>
                <a href="#" class="mega-menu-card">
                  <div class="mega-menu-img">
                    <img src="<?php echo SITE_ROOT; ?>/images/product-mosquito.jpg" alt="Mosquito Fogging Machine">
                  </div>
                  <h5>Mosquito Fogging Machine</h5>
                </a>
                <a href="#" class="mega-menu-card">
                  <div class="mega-menu-img">
                    <img src="<?php echo SITE_ROOT; ?>/images/product-cleanroom.jpg" alt="Clean Room Equipment">
                  </div>
                  <h5>Clean Room Equipment</h5>
                </a>
                <a href="#" class="mega-menu-card">
                  <div class="mega-menu-img">
                    <img src="<?php echo SITE_ROOT; ?>/images/product-disposables.jpg" alt="Disinfectant &amp; Chemicals">
                  </div>
                  <h5>Disinfectant &amp; Chemicals</h5>
                </a>
                <a href="#" class="mega-menu-card">
                  <div class="mega-menu-img">
                    <img src="<?php echo SITE_ROOT; ?>/images/product-disposables2.jpg" alt="Disposables">
                  </div>
                  <h5>Disposables</h5>
                </a>
              </div>
            </div>
          </div>
          <a href="<?php echo SITE_ROOT; ?>/#testimonials" class="nav-link">Media</a>
        </nav>
        <a href="<?php echo SITE_ROOT; ?>/#contact" class="btn btn-primary nav-cta">Contact Us</a>
      </div>
    </div>
  </header>
