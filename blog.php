<?php include 'header.php'; include 'functions.php'; ?>

<main class="container mx-auto p-8">
  <h2 class="text-3xl font-bold mb-6">Latest Blogs</h2>
  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php
    $blogs = fetchFromWP('posts?_embed=true');
    foreach ($blogs as $blog):
      $title = $blog['title']['rendered'];
      $excerpt = strip_tags($blog['excerpt']['rendered']);
      $id = $blog['id'];
      $img = $blog['_embedded']['wp:featuredmedia'][0]['source_url'] ?? '';
    ?>
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <?php if ($img): ?>
          <img src="<?= $img ?>" alt="<?= $title ?>" class="w-full h-48 object-cover">
        <?php endif; ?>
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2"><?= $title ?></h3>
          <p class="text-gray-600 mb-4"><?= substr($excerpt, 0, 100) ?>...</p>
          <a href="blog-details.php?id=<?= $id ?>" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Read More</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</main>

<?php include 'footer.php'; ?>
