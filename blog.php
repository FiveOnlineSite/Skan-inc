<?php
$pageTitle = 'Blogs';

$posts = require __DIR__ . '/includes/blog-posts.php';
?>
<?php include 'includes/header.php'; ?>

<main class="blog-page">
  <section class="blog-hero animate-fade-up">
    <img src="<?php echo SITE_ROOT; ?>/images/products/pvc-pannel.png" alt="Skan Inc. facility">
    <div class="blog-hero-content">
      <h1>Blogs</h1>
    </div>
  </section>

  <section class="blog-listing">
    <div class="blog-container">
      <div class="blog-heading animate-on-scroll">
        <p class="blog-eyebrow">Latest insights</p>
        <h2>Insights for Safer, Smarter Environments</h2>
      </div>

      <div class="blog-grid">
        <?php foreach ($posts as $post): ?>
          <article class="animate-on-scroll">
            <a class="blog-card" href="<?php echo htmlspecialchars(SITE_ROOT . '/blog-detail.php?post=' . rawurlencode($post['slug'])); ?>">
              <div class="blog-card-image">
              <img src="<?php echo htmlspecialchars(SITE_ROOT . '/' . $post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" loading="lazy">
              </div>
              <div class="blog-card-content">
              <p class="blog-card-category"><?php echo htmlspecialchars($post['category']); ?></p>
              <h3><?php echo htmlspecialchars($post['title']); ?></h3>
              <p class="blog-card-excerpt"><?php echo htmlspecialchars($post['excerpt']); ?></p>
              <span class="blog-card-link">Explore now <span class="blog-card-link-icon" aria-hidden="true">
                <svg viewBox="0 0 20 20" focusable="false"><path d="M4 10h11M11 5l5 5-5 5" /></svg>
              </span></span>
              </div>
            </a>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
