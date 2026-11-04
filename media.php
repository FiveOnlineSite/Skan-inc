<?php
$pageTitle = 'Media';

$galleryImages = [
  'images/products/ot-1.png',
  'images/products/ot-2.png',
  'images/products/ot-3.png',
  'images/products/ot-4.png',
  'images/products/ot-5.png',
  'images/products/ot-6.png',
  'images/products/ot-7.png',
  'images/products/ot-8.png',
  'images/products/ot-9.png',
  'images/products/ot-10.png',
  'images/products/ot-11.png',
  'images/products/ot-12.png',
  'images/products/ot-13.png',
  'images/products/ot-14.png',
  'images/products/ot-15.png',
  'images/products/ot-16.png',
  'images/products/ot-17.png',
  'images/products/ot-18.png',
];

$videos = [
  ['youtube_id' => '62AdOKjyFWs', 'title' => 'Skan Inc. Media Video 1'],
  ['youtube_id' => 'Li-JwdqOmZA', 'title' => 'Skan Inc. Media Video 2'],
  ['youtube_id' => 'XvoBACxf84g', 'title' => 'Skan Inc. Media Video 3'],
  ['youtube_id' => '5hhrrES-U6s', 'title' => 'Skan Inc. Media Video 4'],
  ['youtube_id' => '8SE0EwKnuBg', 'title' => 'Skan Inc. Media Video 5'],
  ['youtube_id' => 'UxcMQs9DcAY', 'title' => 'Skan Inc. Media Video 6'],
  ['youtube_id' => 'qzVrUs-Z9Uk', 'title' => 'Skan Inc. Media Video 7'],
  ['youtube_id' => 'Ar1RBO6AFGs', 'title' => 'Skan Inc. Media Video 8'],
];
?>
<?php include 'includes/header.php'; ?>

<main class="media-page">
  <section class="media-hero animate-fade-up">
    <img src="<?php echo SITE_ROOT; ?>/images/banner-media.png" alt="Skan Inc. controlled environment facility">
    <div class="media-hero-overlay"></div>
    <div class="media-hero-content">
      <h1>Media Gallery</h1>
    </div>
  </section>

  <section class="media-content-section">
    <div class="media-container">
      <div class="media-section-heading media-content-heading animate-on-scroll">
        <h2>Explore Our Project Gallery</h2>
        <p>Click one of the tabs below to explore our project images and videos.</p>
      </div>

      <div class="media-tabs" data-media-tabs>
        <div class="media-tab-list" role="tablist" aria-label="Media type">
          <button class="media-tab active" type="button" role="tab" id="media-images-tab"
            aria-selected="true" aria-controls="media-images-panel">Images</button>
          <button class="media-tab" type="button" role="tab" id="media-videos-tab"
            aria-selected="false" aria-controls="media-videos-panel" tabindex="-1">Videos</button>
        </div>

        <div class="media-tab-panel" id="media-images-panel" role="tabpanel" aria-labelledby="media-images-tab">
          <div class="media-gallery-grid">
            <?php foreach ($galleryImages as $image): ?>
              <a href="<?php echo htmlspecialchars(SITE_ROOT . '/' . $image); ?>"
                class="media-gallery-card animate-on-scroll" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo htmlspecialchars(SITE_ROOT . '/' . $image); ?>"
                  alt="Skan Inc. project gallery image" loading="lazy">
              </a>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="media-tab-panel" id="media-videos-panel" role="tabpanel" aria-labelledby="media-videos-tab" hidden>
          <?php if (!empty($videos)): ?>
            <div class="media-video-grid">
              <?php foreach ($videos as $video): ?>
                <article class="media-video-card animate-on-scroll">
                  <?php if (!empty($video['youtube_id'])): ?>
                    <iframe src="https://www.youtube-nocookie.com/embed/<?php echo rawurlencode($video['youtube_id']); ?>"
                      title="<?php echo htmlspecialchars($video['title']); ?>" loading="lazy"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  <?php else: ?>
                    <video controls preload="metadata" <?php echo !empty($video['poster']) ? ' poster="' . htmlspecialchars(SITE_ROOT . '/' . $video['poster']) . '"' : ''; ?>>
                      <source src="<?php echo htmlspecialchars(SITE_ROOT . '/' . $video['src']); ?>" type="video/mp4">
                      Your browser does not support the video element.
                    </video>
                  <?php endif; ?>
                </article>
              <?php endforeach; ?>
            </div>
          <?php else: ?>
            <div class="media-video-empty animate-on-scroll">
              <div class="media-play-icon" aria-hidden="true">
                <span></span>
              </div>
              <h3>Videos coming soon</h3>
              <p>We are preparing product demonstrations and project walkthroughs. Check back soon.</p>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
  (function () {
    var tabGroup = document.querySelector('[data-media-tabs]');
    if (!tabGroup) return;

    var tabs = Array.prototype.slice.call(tabGroup.querySelectorAll('[role="tab"]'));
    var panels = Array.prototype.slice.call(tabGroup.querySelectorAll('[role="tabpanel"]'));

    function selectTab(tab, moveFocus) {
      tabs.forEach(function (item) {
        var selected = item === tab;
        item.classList.toggle('active', selected);
        item.setAttribute('aria-selected', String(selected));
        item.tabIndex = selected ? 0 : -1;
      });

      panels.forEach(function (panel) {
        var selected = panel.id === tab.getAttribute('aria-controls');
        panel.hidden = !selected;
        if (selected) {
          panel.querySelectorAll('.animate-on-scroll').forEach(function (element) {
            element.classList.add('visible');
          });
        }
      });

      if (moveFocus) tab.focus();
    }

    tabs.forEach(function (tab, index) {
      tab.addEventListener('click', function () {
        selectTab(tab, false);
      });

      tab.addEventListener('keydown', function (event) {
        if (!['ArrowLeft', 'ArrowRight', 'Home', 'End'].includes(event.key)) return;
        event.preventDefault();
        var nextIndex = event.key === 'Home' ? 0 : event.key === 'End' ? tabs.length - 1 : (index + (event.key === 'ArrowRight' ? 1 : -1) + tabs.length) % tabs.length;
        selectTab(tabs[nextIndex], true);
      });
    });
  })();
</script>

<?php include 'includes/footer.php'; ?>
