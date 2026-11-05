<?php
$posts = require __DIR__ . '/includes/blog-posts.php';
$slug = $_GET['post'] ?? '';
$post = null;

foreach ($posts as $item) {
  if ($item['slug'] === $slug) {
    $post = $item;
    break;
  }
}

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
        <img class="blog-article-feature-image" src="<?php echo htmlspecialchars(SITE_ROOT . '/' . ($post['detail_image'] ?? $post['image'])); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>">
        <p class="blog-article-intro"><?php echo htmlspecialchars($post['excerpt']); ?></p>
        <?php foreach ($post['content'] as $paragraph): ?>
          <p><?php echo htmlspecialchars($paragraph); ?></p>
        <?php endforeach; ?>
      </div>
    </article>
  <?php endif; ?>
</main>

<?php include 'includes/footer.php'; ?>
