<?php
session_start();

$slug = $_GET['slug'] ?? '';

// Retrieve session data
$newsArticles = $_SESSION['news_articles'] ?? [];

// Check if it's a news slug
if (isset($newsArticles[$slug])) {
    $matchedArticle = $newsArticles[$slug];
    include 'newsdetail.php';
    exit;
}

// If not found in news, assume it's a blog slug
include 'blog-details.php';
