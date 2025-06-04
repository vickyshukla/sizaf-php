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


?>
