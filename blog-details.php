<?php include 'header.php'; include 'functions.php'; ?>

<main class="container mx-auto p-8">
  <?php
  if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $blog = fetchFromWP("posts/$id?_embed=true");
    $title = $blog['title']['rendered'];
    $content = $blog['content']['rendered'];
    $img = $blog['_embedded']['wp:featuredmedia'][0]['source_url'] ?? '';
  ?>
    <h2 class="text-3xl font-bold mb-4"><?= $title ?></h2>
    <?php if ($img): ?>
      <img src="<?= $img ?>" alt="<?= $title ?>" class="w-full h-64 object-cover rounded-lg mb-6">
    <?php endif; ?>
    <div class="prose max-w-none"><?= $content ?></div>
  <?php } else { ?>
    <p>Blog post not found.</p>
  <?php } ?>
</main>

<?php include 'footer.php'; ?>
