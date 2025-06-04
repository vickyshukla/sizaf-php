<?php
header('Content-Type: application/json');

$allPages = [
  ['title' => 'Home', 'url' => 'index.php'],
  ['title' => 'About Us', 'url' => 'about.php'],
  ['title' => 'Contact', 'url' => 'contact.php'],
  ['title' => 'Services', 'url' => 'services.php'],
  ['title' => 'Blog Post 1', 'url' => 'blog-post-1.php'],
];

$q = strtolower(trim($_GET['q'] ?? ''));

$filtered = array_filter($allPages, function ($page) use ($q) {
  return str_contains(strtolower($page['title']), $q);
});

echo json_encode(array_values($filtered));
