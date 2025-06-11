<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Dynamic Title -->
    <title><?php echo $metaTitle ?? 'Default Page Title'; ?></title>

    <!-- Meta Description -->
    <meta name="description" content="<?php echo $metaDescription ?? 'Default description for the page.'; ?>">
   <!-- Meta Keywords -->
    <meta name="keywords" content="<?php echo $metaKeywords ?? 'default, keywords'; ?>">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $canonicalURL ?? 'https://yourdomain.com/current-page'; ?>" />

    <!-- Open Graph for Social Sharing -->
    <meta property="og:title" content="<?php echo $metaTitle ?? 'Default Page Title'; ?>">
    <meta property="og:description" content="<?php echo $metaDescription ?? 'Default description'; ?>">
    <meta property="og:url" content="<?php echo $canonicalURL ?? 'https://yourdomain.com'; ?>">
    <meta property="og:image" content="<?php echo $metaImage ?? 'https://yourdomain.com/default-og-image.jpg'; ?>">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $metaTitle ?? 'Default Page Title'; ?>">
    <meta name="twitter:description" content="<?php echo $metaDescription ?? 'Default description'; ?>">
    <meta name="twitter:image" content="<?php echo $metaImage ?? 'https://yourdomain.com/default-twitter-image.jpg'; ?>">

  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <!-- TailwindCSS -->
  <link href="./input.css" rel="stylesheet">

  <!-- AOS Animation CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <!-- Typography Plugin (if you’re using it) -->
  <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/typography@0.5.7/dist/typography.min.css" rel="stylesheet">

  <!-- AlpineJS -->
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  <!-- Lucide CDN -->
 <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

</head>
<body>
<?php include 'nav.php'; ?>




