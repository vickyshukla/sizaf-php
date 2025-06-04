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
          <img src="<?= $img ?>" alt="<?= $title ?>" class="wp-post-image w-full !h-[30rem] object-cover rounded-lg" loading="lazy">
        </div>
      <?php endif; ?>
      <div class="entry-content wordpressContent">
        <?= $content ?>
      </div>
    </article>
  <?php
  } else {
    echo "<div class='container mx-auto px-4 py-10 flex flex-col gap-4 items-center justify-center h-screen'>
              <h1 class='text-4xl font-bold text-red-600'>404 - Page Not Found</h1>
              <p class='text-lg text-gray-600'>Oops! The page you&apos;re looking for does not exist.</p>
              <a href='/sizaf-php' class='px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700'>Go back home</a>
          </div>";
  }
  ?>
</main>

<?php include 'footer.php'; ?>
