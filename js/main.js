document.addEventListener("DOMContentLoaded", function () {
  // ── Sticky Header ──
  var header = document.getElementById("header");
  window.addEventListener("scroll", function () {
    header.classList.toggle("scrolled", window.scrollY > 80);
  });

  // ── Hamburger Menu ──
  var hamburger = document.getElementById("hamburger");
  var navWrapper = document.getElementById("navWrapper");
  var navOverlay = document.getElementById("navOverlay");

  function closeMenu() {
    hamburger.classList.remove("active");
    navWrapper.classList.remove("open");
    navOverlay.classList.remove("visible");
    document.body.style.overflow = "";
  }

  hamburger.addEventListener("click", function () {
    var isOpen = navWrapper.classList.contains("open");
    if (isOpen) {
      closeMenu();
    } else {
      hamburger.classList.add("active");
      navWrapper.classList.add("open");
      navOverlay.classList.add("visible");
      document.body.style.overflow = "hidden";
    }
  });

  navOverlay.addEventListener("click", closeMenu);

  navWrapper
    .querySelectorAll(".nav-link:not(.nav-link-dropdown)")
    .forEach(function (link) {
      link.addEventListener("click", function () {
        if (window.innerWidth <= 768) closeMenu();
      });
    });

  // ── Mega Menu (Categories) ──
  var categoriesBtn = document.getElementById("categoriesBtn");
  var megaMenu = document.getElementById("megaMenu");
  var megaMenuTimeout;

  // Desktop: hover behaviour on the dropdown area
  var navDropdown = document.getElementById("navDropdown");

  function openMega() {
    clearTimeout(megaMenuTimeout);
    megaMenu.classList.add("open");
    categoriesBtn.querySelector(".dropdown-arrow").style.transform =
      "rotate(180deg)";
  }

  function closeMega() {
    megaMenuTimeout = setTimeout(function () {
      megaMenu.classList.remove("open");
      categoriesBtn.querySelector(".dropdown-arrow").style.transform = "";
    }, 200);
  }

  // Desktop hover
  navDropdown.addEventListener("mouseenter", function () {
    if (window.innerWidth > 768) openMega();
  });
  navDropdown.addEventListener("mouseleave", function () {
    if (window.innerWidth > 768) closeMega();
  });
  megaMenu.addEventListener("mouseenter", function () {
    if (window.innerWidth > 768) openMega();
  });
  megaMenu.addEventListener("mouseleave", function () {
    if (window.innerWidth > 768) closeMega();
  });

  // Click (works for both mobile and desktop)
  categoriesBtn.addEventListener("click", function (e) {
    e.preventDefault();
    e.stopPropagation();

    if (window.innerWidth <= 768) {
      // Mobile: toggle inside the drawer
      megaMenu.classList.toggle("open");
      var arrow = categoriesBtn.querySelector(".dropdown-arrow");
      arrow.style.transform = megaMenu.classList.contains("open")
        ? "rotate(180deg)"
        : "";
    } else {
      // Desktop click toggle
      if (megaMenu.classList.contains("open")) {
        megaMenu.classList.remove("open");
        categoriesBtn.querySelector(".dropdown-arrow").style.transform = "";
      } else {
        openMega();
      }
    }
  });

  // Close mega menu when clicking outside
  document.addEventListener("click", function (e) {
    if (!megaMenu.contains(e.target) && !navDropdown.contains(e.target)) {
      megaMenu.classList.remove("open");
      categoriesBtn.querySelector(".dropdown-arrow").style.transform = "";
    }
  });

  // Close mega on Escape
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      megaMenu.classList.remove("open");
      categoriesBtn.querySelector(".dropdown-arrow").style.transform = "";
      closeMenu();
    }
  });

  // ── Testimonials Slider ──
  var track = document.getElementById("testimonialsTrack");
  var pagination = document.getElementById("sliderPagination");

  if (track && pagination) {
    var cards = track.querySelectorAll(".testimonial-card");
    var currentPage = 0;

    function getCardWidth() {
      var cardWidth = cards[0].getBoundingClientRect().width;
      var gap = parseFloat(window.getComputedStyle(track).gap) || 0;
      return cardWidth + gap;
    }

    function getSliderViewportWidth() {
      var container = track.parentElement;
      var styles = window.getComputedStyle(container);
      return (
        container.clientWidth -
        parseFloat(styles.paddingLeft) -
        parseFloat(styles.paddingRight)
      );
    }

    function getCardsPerView() {
      return Math.max(
        1,
        Math.min(
          cards.length,
          Math.floor((getSliderViewportWidth() + 20) / getCardWidth()),
        ),
      );
    }

    function getTotalPages() {
      return Math.max(1, Math.ceil(cards.length / getCardsPerView()));
    }

    function buildPagination() {
      pagination.innerHTML = "";
      var total = getTotalPages();
      for (var i = 0; i < total; i++) {
        var dot = document.createElement("button");
        dot.className = "slider-dot" + (i === currentPage ? " active" : "");
        dot.setAttribute("aria-label", "Go to slide " + (i + 1));
        dot.dataset.index = i;
        dot.addEventListener("click", function () {
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

      var cardWidth = getCardWidth();
      var requestedOffset = currentPage * getCardsPerView() * cardWidth;
      var trackWidth = cards.length * cardWidth - 20;
      var maxOffset = Math.max(0, trackWidth - getSliderViewportWidth());
      var offset = -Math.min(requestedOffset, maxOffset);
      track.style.transform = "translateX(" + offset + "px)";

      pagination.querySelectorAll(".slider-dot").forEach(function (dot, i) {
        dot.classList.toggle("active", i === currentPage);
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

    track.addEventListener("mouseenter", function () {
      clearInterval(autoSlideInterval);
    });
    track.addEventListener("mouseleave", startAutoSlide);

    // Touch swipe
    var touchStartX = 0;
    track.addEventListener(
      "touchstart",
      function (e) {
        touchStartX = e.changedTouches[0].screenX;
        clearInterval(autoSlideInterval);
      },
      { passive: true },
    );

    track.addEventListener(
      "touchend",
      function (e) {
        var diff = touchStartX - e.changedTouches[0].screenX;
        if (Math.abs(diff) > 50) {
          goToPage(diff > 0 ? currentPage + 1 : currentPage - 1);
        }
        startAutoSlide();
      },
      { passive: true },
    );

    buildPagination();
    startAutoSlide();

    window.addEventListener("resize", function () {
      buildPagination();
      goToPage(Math.min(currentPage, getTotalPages() - 1));
    });
  }

  // ── Product Category Tabs ──
  var tabButtons = document.querySelectorAll(".tab-btn");
  if (tabButtons.length) {
    tabButtons.forEach(function (btn) {
      btn.addEventListener("click", function () {
        var target = btn.dataset.tabTarget;

        tabButtons.forEach(function (b) {
          b.classList.remove("active");
          b.setAttribute("aria-selected", "false");
        });
        btn.classList.add("active");
        btn.setAttribute("aria-selected", "true");

        document.querySelectorAll(".tab-panel").forEach(function (panel) {
          var isTarget = panel.id === target;
          panel.classList.toggle("active", isTarget);
          if (isTarget) {
            panel.querySelectorAll(".animate-on-scroll").forEach(function (el) {
              el.classList.add("visible");
            });
          }
        });

        var foggerComparison = document.getElementById("foggerComparison");
        if (foggerComparison) {
          foggerComparison.hidden = target === "decontamination-chemicals";
        }
      });
    });
  }

  // Product Category Tabs end
  var animateElements = document.querySelectorAll(".animate-on-scroll");

  var observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.15,
      rootMargin: "0px 0px -50px 0px",
    },
  );

  animateElements.forEach(function (el) {
    observer.observe(el);
  });
});

//-FAQ Section-//
const faqs = document.querySelectorAll(".faq-item");

faqs.forEach((item) => {
  const question = item.querySelector(".faq-question");

  question.addEventListener("click", () => {
    faqs.forEach((faq) => {
      if (faq !== item) {
        faq.classList.remove("active");
      }
    });

    item.classList.toggle("active");
  });
});

// Auto-dismiss contact form feedback after it has been read.
const formStatus = document.querySelector(".form-status");

if (formStatus) {
  window.setTimeout(() => {
    formStatus.classList.add("is-hiding");

    window.setTimeout(() => {
      formStatus.remove();
    }, 350);
  }, 5000);
}

// Scroll to Top Button Functionality
document.addEventListener("DOMContentLoaded", function () {
  const scrollBtn = document.getElementById("scrollToTopBtn");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 300) {
      scrollBtn.classList.add("show");
    } else {
      scrollBtn.classList.remove("show");
    }
  });

  scrollBtn.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});

// Allow the continuously looping client-logo marquee to be dragged in either direction.
document.addEventListener("DOMContentLoaded", function () {
  var viewport = document.querySelector(".trusted-clients-viewport");
  var track = document.querySelector(".trusted-clients-track");
  var group = document.querySelector(".trusted-clients-group");

  if (!viewport || !track || !group) return;

  var startX = 0;
  var startOffset = 0;
  var offset = 0;
  var isDragging = false;
  var animationDuration = 28;

  function getGroupWidth() {
    return group.getBoundingClientRect().width;
  }

  function wrapOffset(value) {
    var width = getGroupWidth();
    if (!width) return value;
    return ((value % width) + width) % width - width;
  }

  function getCurrentOffset() {
    var transform = window.getComputedStyle(track).transform;
    if (!transform || transform === "none") return 0;
    var matrix = transform.match(/^matrix\((.+)\)$/);
    return matrix ? parseFloat(matrix[1].split(",")[4]) || 0 : 0;
  }

  function resumeAnimation() {
    var width = getGroupWidth();
    if (!width) return;

    offset = wrapOffset(offset);
    track.style.transform = "";
    track.style.animation = "";
    track.style.animationDelay = (offset / width) * animationDuration + "s";
  }

  viewport.addEventListener("pointerdown", function (event) {
    if (event.pointerType === "mouse" && event.button !== 0) return;

    event.preventDefault();
    isDragging = true;
    startX = event.clientX;
    startOffset = wrapOffset(getCurrentOffset());
    offset = startOffset;
    track.style.animation = "none";
    track.style.animationDelay = "";
    track.style.transform = "translateX(" + startOffset + "px)";
    viewport.classList.add("is-dragging");
    viewport.setPointerCapture(event.pointerId);
  });

  viewport.addEventListener("pointermove", function (event) {
    if (!isDragging) return;
    offset = wrapOffset(startOffset + event.clientX - startX);
    track.style.transform = "translateX(" + offset + "px)";
  });

  function stopDragging(event) {
    if (!isDragging) return;
    isDragging = false;
    viewport.classList.remove("is-dragging");
    if (viewport.hasPointerCapture(event.pointerId)) viewport.releasePointerCapture(event.pointerId);
    resumeAnimation();
  }

  viewport.addEventListener("pointerup", stopDragging);
  viewport.addEventListener("pointercancel", stopDragging);
  viewport.addEventListener("dragstart", function (event) {
    event.preventDefault();
  });
});

// Keep testimonial cards compact and show the complete review in a modal.
document.addEventListener("DOMContentLoaded", function () {
  var modal = document.getElementById("testimonialModal");
  var modalText = document.getElementById("testimonialModalText");
  var modalTitle = document.getElementById("testimonialModalTitle");
  var closeButton = modal && modal.querySelector(".testimonial-modal__close");
  var trigger = null;

  if (!modal || !modalText || !modalTitle || !closeButton) return;

  function updateReadMoreButtons() {
    document.querySelectorAll(".testimonial-toggle").forEach(function (button) {
      var text = document.getElementById(button.dataset.testimonialId);
      button.hidden = !text || text.scrollHeight <= text.clientHeight + 1;
    });
  }

  updateReadMoreButtons();
  window.addEventListener("resize", updateReadMoreButtons);

  function closeModal() {
    modal.hidden = true;
    document.body.style.overflow = "";
    if (trigger) trigger.focus();
  }

  document.querySelectorAll(".testimonial-toggle").forEach(function (button) {
    button.addEventListener("click", function () {
      var text = document.getElementById(button.dataset.testimonialId);
      if (!text) return;
      trigger = button;
      modalText.textContent = text.textContent;
      modalTitle.textContent = button.dataset.testimonialTitle;
      modal.hidden = false;
      document.body.style.overflow = "hidden";
      closeButton.focus();
    });
  });

  modal.querySelectorAll("[data-testimonial-close]").forEach(function (element) {
    element.addEventListener("click", closeModal);
  });

  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape" && !modal.hidden) closeModal();
  });
});

// Swap a product image when a variant has its own product photograph.
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".variant-tag[data-variant-image]").forEach(function (button) {
    button.addEventListener("click", function () {
      var productRow = button.closest(".product-row");
      var productImage = productRow && productRow.querySelector(".product-row-image img");
      if (!productImage) return;

      productImage.src = button.dataset.variantImage;
      productImage.alt = productRow.querySelector("h3").textContent + " — " + button.dataset.variantLabel;
      productRow.querySelectorAll(".variant-tag[data-variant-image]").forEach(function (variant) {
        variant.classList.toggle("is-active", variant === button);
      });
    });
  });
});
