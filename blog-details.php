
<?php include 'header.php'; include 'functions.php'; ?>
<link
  rel="stylesheet"
  href="https://backendcms.sizaf.com/wp-includes/css/dist/block-library/style.min.css"
/>
<link
  rel="stylesheet"
  href="https://backendcms.sizaf.com/wp-content/themes/twentytwentyfour/style.css"
/>
<main class="max-w-4xl mx-auto p-6">
  <?php
  $slug = basename($_SERVER['REQUEST_URI']);
  $blog = fetchFromWP("posts?slug=$slug&_embed=true");

  if (!empty($blog)) {
    $blog = $blog[0];
    $title = $blog['title']['rendered'];
    $content = $blog['content']['rendered'];
    $img = $blog['_embedded']['wp:featuredmedia'][0]['source_url'] ?? '';
  ?>
    <article id="post-<?= $blog['id'] ?>" class="post type-post status-publish format-standard hentry">
      <header class="entry-header mb-10">
        <h1 class="entry-title text-4xl font-bold"><?= $title ?></h1>
      </header>

      <?php if ($img): ?>
        <div class="post-thumbnail mb-6">
          <img src="<?= $img ?>" alt="<?= $blog['id'] ?>" class="wp-post-image w-full !h-[30rem] object-cover rounded-lg" loading="lazy">
        </div>
      <?php endif; ?>
      <div class="entry-content wordpressContent">
        <?= $content ?>
      </div>
    </article>
  <?php
  } else {
      http_response_code(404);
      include('404.php');
  }
  ?>
</main>

<?php include 'footer.php'; ?>
