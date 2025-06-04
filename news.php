<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
include 'header.php';
include 'functions.php';

// Load .env variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Define sensitive keywords
const SENSITIVE_KEYWORDS = [
    "violence", "explicit", "vulgar", "controversy", "terror", "drugs",
    "abuse", "offensive", "porn", "adult", "crime", "scandal", "murder", "death"
];

// GNews API Key from .env
$apiKey = $_ENV['GNEWS_API_KEY'] ?? null;
if (!$apiKey) {
    die("API key not found. Please set GNEWS_API_KEY in your .env file.");
}

// GNews API URL (fetch 10 results)
$apiUrl = "https://gnews.io/api/v4/search?q=IPT%20OR%20ICT%20OR%20ISP%20OR%20Broadband&in=title&lang=en&category=technology&apikey={$apiKey}&max=10";

// Fetch news data
$response = file_get_contents($apiUrl);
if ($response === false) {
    die("Error fetching news.");
}

$newsData = json_decode($response, true);
$_SESSION['news_articles'] = $newsData['articles'];

// Filter out articles containing sensitive keywords
$filteredNews = array_filter($newsData['articles'], function ($article) {
    foreach (SENSITIVE_KEYWORDS as $keyword) {
        if (
            stripos($article['title'], $keyword) !== false ||
            stripos($article['description'], $keyword) !== false
        ) {
            return false;
        }
    }
    return true;
});
?>

<main class="container mx-auto">
    <!-- Hero Section -->
    <div class="relative flex items-center justify-center min-h-[80vh] md:h-screen bg-cover bg-center bg-[url('assest/bg.jpeg')]">
        <div class="absolute inset-0 bg-[url('assest/color-bg.png')] opacity-80"></div>
        <div class="relative text-white text-center p-6 md:p-8 rounded-lg max-w-3xl mx-auto">
            <img src="assest/sizaflogo.png" alt="Sizaf Logo" width="200" class="mx-auto mb-4" loading="lazy"/>
            <h1 class="text-2xl md:text-4xl font-bold mb-4 leading-relaxed">
                Let's improve sales, revenue & build a stronger brand
                <br />& improved customer satisfaction.
            </h1>
            <p class="text-pink-500 text-lg md:text-xl mb-6">PAY PER USE RM 199 / MO</p>
            <a href="about.php">
                <button class="border border-white text-white px-6 py-3 md:px-16 md:py-5 text-base md:text-lg hover-primary-gradient hover:text-white transition duration-300 cursor-pointer">
                    Browse Plans
                    <span class="ml-2 text-xl md:text-2xl">→</span>
                </button>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex flex-col lg:flex-row bg-gray-100">
        <?php include 'mini-sidebar.php'; ?>

        <!-- News Section -->
        <div class="flex-1 lg:max-h-[80vh] lg:overflow-y-auto p-4 sm:p-6">
            <h1 class="text-2xl md:text-3xl font-bold mb-6 text-center">NEWS</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($filteredNews as $news): ?>
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col h-full">
                        <?php if (!empty($news['image'])): ?>
                            <img src="<?= $news['image'] ?>" alt="<?= htmlspecialchars($news['title']) ?>" class="w-full h-48 object-cover" loading="lazy">
                        <?php else: ?>
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">No Image</div>
                        <?php endif; ?>
                        <div class="p-4 flex flex-col h-full">
                            <h3 class="text-lg md:text-xl font-semibold mb-2"><?= htmlspecialchars($news['title']) ?></h3>
                            <p class="text-sm text-gray-500 mb-2"><?= date('F j, Y', strtotime($news['publishedAt'])) ?></p>
                            <p class="text-gray-600 mb-4"><?= substr(strip_tags($news['description']), 0, 100) ?>...</p>
                            <?php 
                                $slug = slugify($news['title']); 
                                $news['slug'] = $slug;
                                $_SESSION['news_articles'][$slug] = $news; 
                            ?>
                            <a href="<?= $slug ?>" class="bg-primary-gradient text-white w-28 py-2 rounded mt-auto text-center">Read More</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>