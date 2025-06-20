<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="author" content="SizaF Net With Tech">
     <!-- Favicon -->
     <link rel="icon" type="image/png" href="./assest/sizaf-favicon.png">

    <!-- Dynamic Title -->
    <title><?php echo $metaTitle ?? 'Default Page Title'; ?></title>


    <!-- Meta Description -->
    <meta name="description" content="<?php echo $metaDescription ?? 'Default description for the page.'; ?>">
   <!-- Meta Keywords -->
    <meta name="keywords" content="<?php echo $metaKeywords ?? 'default, keywords'; ?>">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $canonicalURL ?? 'https://sizaf.com/index.php'; ?>" />

   <!-- Primary Meta Tags (Open Graph - Facebook, LinkedIn, etc.) -->
<meta property="og:url" content="https://sizaf.com">
<meta property="og:type" content="website">
<meta property="og:title" content="Innovative IT Solutions for Your Business Needs - Sizaf">
<meta property="og:description" content="Sizaf delivers cutting-edge IT solutions tailored to your business goals. From software development to IT consultancy, we provide reliable and efficient services to drive growth.">
<meta property="og:image" content="https://sizaf.com/assest/sizaflogo.png">
<meta property="og:image:width" content="1200"> <!-- Recommended: Specify image dimensions -->
<meta property="og:image:height" content="630">
<meta property="og:site_name" content="Sizaf"> <!-- Optional but recommended -->

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Innovative IT Solutions for Your Business Needs - Sizaf">
<meta name="twitter:description" content="Sizaf delivers cutting-edge IT solutions tailored to your business goals. From software development to IT consultancy, we provide reliable and efficient services to drive growth.">
<meta name="twitter:image" content="https://sizaf.com/assest/sizaflogo.png">
<meta name="twitter:site" content="@YourTwitterHandle"> <!-- Replace with your Twitter handle -->

  <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
  <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

  <!-- TailwindCSS -->
  <link href="./input.css" rel="stylesheet">
  <link href="./assest/output.css" rel="stylesheet">

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
 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/684a6c8147f3b9190b9fcaa4/1ithbfnes';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</head>
<body>
<?php include 'nav.php'; ?>




