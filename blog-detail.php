<?php
$posts = require __DIR__ . '/includes/blog-posts.php';
$slug = $_GET['post'] ?? '';
$post = null;
$postIndex = null;

foreach ($posts as $index => $item) {
  if ($item['slug'] === $slug) {
    $post = $item;
    $postIndex = $index;
    break;
  }
}

$previousPost = $postIndex !== null && $postIndex > 0 ? $posts[$postIndex - 1] : null;
$nextPost = $postIndex !== null && $postIndex < count($posts) - 1 ? $posts[$postIndex + 1] : null;

if ($post === null) {
  http_response_code(404);
  $pageTitle = 'Blog Post Not Found';
} else {
  $pageTitle = $post['title'];
}
?>
<?php include 'includes/header.php'; ?>

<main class="blog-detail-page">
  <?php if ($post === null): ?>
    <section class="blog-detail-not-found">
      <div>
        <h1>Blog post not found</h1>
        <p>The post you are looking for is unavailable.</p>
        <a class="btn btn-primary" href="<?php echo SITE_ROOT; ?>/blog.php">Back to Blogs</a>
      </div>
    </section>
  <?php else: ?>
    <article class="blog-article">
      <div class="blog-article-content">
        <a class="blog-back-link" href="<?php echo SITE_ROOT; ?>/blog.php">
          <svg viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="M16 10H5M9 5l-5 5 5 5" /></svg>
          Back to Blogs
        </a>
        <h1 class="blog-article-title"><?php echo htmlspecialchars($post['title']); ?></h1>
        <img class="blog-article-feature-image" src="<?php echo htmlspecialchars(SITE_ROOT . '/' . $post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>">
        <p class="blog-article-intro"><?php echo htmlspecialchars($post['excerpt']); ?></p>
        <?php foreach ($post['content'] as $paragraph): ?>
          <p><?php echo htmlspecialchars($paragraph); ?></p>
        <?php endforeach; ?>
        <?php if ($previousPost !== null || $nextPost !== null): ?>
          <nav class="blog-article-pagination" aria-label="Blog post navigation">
            <?php if ($previousPost !== null): ?>
              <a class="blog-article-pagination-link blog-article-pagination-previous" href="<?php echo htmlspecialchars(SITE_ROOT . '/blog-detail.php?post=' . rawurlencode($previousPost['slug'])); ?>">
                <svg viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="m11.5 4.5-5 5 5 5M7 9.5h7" /></svg> Previous
              </a>
            <?php else: ?>
              <span class="blog-article-pagination-link is-disabled" aria-disabled="true"><svg viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="m11.5 4.5-5 5 5 5M7 9.5h7" /></svg> Previous</span>
            <?php endif; ?>
            <?php if ($nextPost !== null): ?>
              <a class="blog-article-pagination-link blog-article-pagination-next" href="<?php echo htmlspecialchars(SITE_ROOT . '/blog-detail.php?post=' . rawurlencode($nextPost['slug'])); ?>">
                Next <svg viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="m8.5 4.5 5 5-5 5M13 9.5H6" /></svg>
              </a>
            <?php else: ?>
              <span class="blog-article-pagination-link is-disabled" aria-disabled="true">Next <svg viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="m8.5 4.5 5 5-5 5M13 9.5H6" /></svg></span>
            <?php endif; ?>
          </nav>
        <?php endif; ?>
      </div>
    </article>
  <?php endif; ?>
</main>

<?php include 'includes/footer.php'; ?>
