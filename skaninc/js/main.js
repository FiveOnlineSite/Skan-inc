document.addEventListener('DOMContentLoaded', function () {

  // ── Sticky Header ──
  var header = document.getElementById('header');
  window.addEventListener('scroll', function () {
    header.classList.toggle('scrolled', window.scrollY > 80);
  });

  // ── Hamburger Menu ──
  var hamburger = document.getElementById('hamburger');
  var navWrapper = document.getElementById('navWrapper');
  var navOverlay = document.getElementById('navOverlay');

  function closeMenu() {
    hamburger.classList.remove('active');
    navWrapper.classList.remove('open');
    navOverlay.classList.remove('visible');
    document.body.style.overflow = '';
  }

  hamburger.addEventListener('click', function () {
    var isOpen = navWrapper.classList.contains('open');
    if (isOpen) {
      closeMenu();
    } else {
      hamburger.classList.add('active');
      navWrapper.classList.add('open');
      navOverlay.classList.add('visible');
      document.body.style.overflow = 'hidden';
    }
  });

  navOverlay.addEventListener('click', closeMenu);

  navWrapper.querySelectorAll('.nav-link:not(.nav-link-dropdown)').forEach(function (link) {
    link.addEventListener('click', function () {
      if (window.innerWidth <= 768) closeMenu();
    });
  });

  // ── Mega Menu (Categories) ──
  var categoriesBtn = document.getElementById('categoriesBtn');
  var megaMenu = document.getElementById('megaMenu');
  var megaMenuTimeout;

  // Desktop: hover behaviour on the dropdown area
  var navDropdown = document.getElementById('navDropdown');

  function openMega() {
    clearTimeout(megaMenuTimeout);
    megaMenu.classList.add('open');
    categoriesBtn.querySelector('.dropdown-arrow').style.transform = 'rotate(180deg)';
  }

  function closeMega() {
    megaMenuTimeout = setTimeout(function () {
      megaMenu.classList.remove('open');
      categoriesBtn.querySelector('.dropdown-arrow').style.transform = '';
    }, 200);
  }

  // Desktop hover
  navDropdown.addEventListener('mouseenter', function () {
    if (window.innerWidth > 768) openMega();
  });
  navDropdown.addEventListener('mouseleave', function () {
    if (window.innerWidth > 768) closeMega();
  });
  megaMenu.addEventListener('mouseenter', function () {
    if (window.innerWidth > 768) openMega();
  });
  megaMenu.addEventListener('mouseleave', function () {
    if (window.innerWidth > 768) closeMega();
  });

  // Click (works for both mobile and desktop)
  categoriesBtn.addEventListener('click', function (e) {
    e.preventDefault();
    e.stopPropagation();

    if (window.innerWidth <= 768) {
      // Mobile: toggle inside the drawer
      megaMenu.classList.toggle('open');
      var arrow = categoriesBtn.querySelector('.dropdown-arrow');
      arrow.style.transform = megaMenu.classList.contains('open') ? 'rotate(180deg)' : '';
    } else {
      // Desktop click toggle
      if (megaMenu.classList.contains('open')) {
        megaMenu.classList.remove('open');
        categoriesBtn.querySelector('.dropdown-arrow').style.transform = '';
      } else {
        openMega();
      }
    }
  });

  // Close mega menu when clicking outside
  document.addEventListener('click', function (e) {
    if (!megaMenu.contains(e.target) && !navDropdown.contains(e.target)) {
      megaMenu.classList.remove('open');
      categoriesBtn.querySelector('.dropdown-arrow').style.transform = '';
    }
  });

  // Close mega on Escape
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      megaMenu.classList.remove('open');
      categoriesBtn.querySelector('.dropdown-arrow').style.transform = '';
      closeMenu();
    }
  });

  // ── Testimonials Slider ──
  var track = document.getElementById('testimonialsTrack');
  var pagination = document.getElementById('sliderPagination');
  var cards = track.querySelectorAll('.testimonial-card');
  var currentPage = 0;

  function getCardWidth() {
    if (window.innerWidth <= 480) return 260 + 20;
    if (window.innerWidth <= 768) return 280 + 20;
    return 312 + 20;
  }

  function getCardsPerView() {
    var containerWidth = track.parentElement.offsetWidth;
    return Math.max(1, Math.floor(containerWidth / getCardWidth()));
  }

  function getTotalPages() {
    var perView = getCardsPerView();
    return Math.max(1, cards.length - perView + 1);
  }

  function buildPagination() {
    pagination.innerHTML = '';
    var total = getTotalPages();
    for (var i = 0; i < total; i++) {
      var dot = document.createElement('button');
      dot.className = 'slider-dot' + (i === currentPage ? ' active' : '');
      dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
      dot.dataset.index = i;
      dot.addEventListener('click', function () {
        goToPage(parseInt(this.dataset.index));
        resetAutoSlide();
      });
      pagination.appendChild(dot);
    }
  }

  function goToPage(page) {
    var total = getTotalPages();
    if (page < 0) page = 0;
    if (page >= total) page = total - 1;
    currentPage = page;

    var offset = -currentPage * getCardWidth();
    track.style.transform = 'translateX(' + offset + 'px)';

    pagination.querySelectorAll('.slider-dot').forEach(function (dot, i) {
      dot.classList.toggle('active', i === currentPage);
    });
  }

  // Auto-advance
  var autoSlideInterval;

  function startAutoSlide() {
    autoSlideInterval = setInterval(function () {
      var total = getTotalPages();
      goToPage((currentPage + 1) % total);
    }, 4000);
  }

  function resetAutoSlide() {
    clearInterval(autoSlideInterval);
    startAutoSlide();
  }

  track.addEventListener('mouseenter', function () { clearInterval(autoSlideInterval); });
  track.addEventListener('mouseleave', startAutoSlide);

  // Touch swipe
  var touchStartX = 0;
  track.addEventListener('touchstart', function (e) {
    touchStartX = e.changedTouches[0].screenX;
    clearInterval(autoSlideInterval);
  }, { passive: true });

  track.addEventListener('touchend', function (e) {
    var diff = touchStartX - e.changedTouches[0].screenX;
    if (Math.abs(diff) > 50) {
      goToPage(diff > 0 ? currentPage + 1 : currentPage - 1);
    }
    startAutoSlide();
  }, { passive: true });

  buildPagination();
  startAutoSlide();

  window.addEventListener('resize', function () {
    buildPagination();
    goToPage(Math.min(currentPage, getTotalPages() - 1));
  });

  // ── Scroll Animations ──
  var animateElements = document.querySelectorAll('.animate-on-scroll');

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.15,
    rootMargin: '0px 0px -50px 0px'
  });

  animateElements.forEach(function (el) {
    observer.observe(el);
  });

});
