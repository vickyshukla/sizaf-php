<?php
include 'header.php'; 
include 'functions.php'; 

$slug = $_GET['slug'] ?? null;

if (!isset($_SESSION['news_articles']) || !$slug) {
    show404();
    exit;
}

$articles = $_SESSION['news_articles'];
$article = $articles[$slug] ?? null;

if (!$article) {
    show404();
    exit;
}

function show404() {
    http_response_code(404);
    include('404.php');
}
?>


<main class="max-w-4xl mx-auto p-6">
    <article>
        <h1 class="text-3xl font-bold mb-4"><?= htmlspecialchars($article['title']) ?></h1>
        <p class="text-sm text-muted-foreground mb-4">Published on: <?= date('F j, Y', strtotime($article['publishedAt'])) ?></p>

        <?php if (!empty($article['image'])): ?>
            <img src="<?= htmlspecialchars($article['image']) ?>" alt="Article Image" class="w-full h-auto rounded-lg mb-4" loading="lazy">
        <?php endif; ?>

        <p class="text-lg text-muted-foreground mb-6">
            <?= nl2br(strip_tags($article['content'] ?? $article['description'])) ?>
        </p>

        <a href="<?= htmlspecialchars($article['url']) ?>" target="_blank" rel="noopener noreferrer" class="text-primary underline">
            Read Full Article
        </a>
    </article>
</main>

<?php include 'footer.php'; ?>
