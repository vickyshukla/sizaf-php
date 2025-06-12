<?php
function fetchFromWP($endpoint) {
    $url = 'https://backendcms.sizaf.com/wp-json/wp/v2/' . $endpoint;
    $response = file_get_contents($url);
    return json_decode($response, true);
}

// Convert text to a URL-friendly slug
function slugify($text) {
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, '-');
    $text = preg_replace('~-+~', '-', $text);
    $text = strtolower($text);
    return $text ?: 'n-a';
}

// Helper function to extract content by keyword
function extractByKeyword($keyword, $content) {
    $pattern = '/(?:<[^>]+>)?' . preg_quote($keyword, '/') . '[:：]?\s*(.*?)<\/p>/i';
    preg_match($pattern, $content, $match);
    return trim(strip_tags($match[1] ?? 'Not specified'));
}

function fetchFilteredNews()
{
    require_once __DIR__ . '/vendor/autoload.php';

    // Load .env variables
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $apiKey = $_ENV['GNEWS_API_KEY'] ?? null;
    if (!$apiKey) {
        error_log("API key not found. Please set GNEWS_API_KEY in your .env file.");
        return [];
    }

    // Sensitive Keywords
    $sensitiveKeywords = [
        "violence", "explicit", "vulgar", "controversy", "terror", "drugs",
        "abuse", "offensive", "porn", "adult", "crime", "scandal", "murder", "death"
    ];

    // API URL
    $apiUrl = "https://gnews.io/api/v4/search?q=IPT%20OR%20ICT%20OR%20ISP%20OR%20Broadband&in=title&lang=en&category=technology&apikey={$apiKey}&max=10";

    // Fetch data
    $response = @file_get_contents($apiUrl);
    if ($response === false) {
        error_log("Error fetching news from GNews API.");
        return [];
    }

    $newsData = json_decode($response, true);
    $articles = $newsData['articles'] ?? [];

    $_SESSION['news_articles'] = $articles;

    // Filter logic
    $filteredNews = array_filter($articles, function ($article) use ($sensitiveKeywords) {
        foreach ($sensitiveKeywords as $keyword) {
            if (
                stripos($article['title'], $keyword) !== false ||
                stripos($article['description'], $keyword) !== false
            ) {
                return false;
            }
        }
        return true;
    });

    return $filteredNews;
}

?>
