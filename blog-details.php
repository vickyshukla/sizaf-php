
<?php include 'header.php'; include 'functions.php'; ?>

<link
  rel="stylesheet"
  href="https://backendcms.sizaf.com/wp-includes/css/dist/block-library/style.min.css"
/>
<link
  rel="stylesheet"
  href="https://backendcms.sizaf.com/wp-content/themes/twentytwentyfour/style.css"
/>

<main class="max-w-4xl mx-auto p-6">
  <?php
  $slug = basename($_SERVER['REQUEST_URI']);
  $blog = fetchFromWP("posts?slug=$slug&_embed=true");

  if (!empty($blog)) {
    $blog = $blog[0];
    $title = $blog['title']['rendered'];
    $content = $blog['content']['rendered'];
    $img = $blog['_embedded']['wp:featuredmedia'][0]['source_url'] ?? '';
  ?>
    <article id="post-<?= $blog['id'] ?>" class="post type-post status-publish format-standard hentry">
      <header class="entry-header mb-10">
        <h1 class="entry-title text-4xl font-bold"><?= $title ?></h1>
      </header>

      <?php if ($img): ?>
        <div class="post-thumbnail mb-6">
          <img src="<?= $img ?>" alt="<?= $title ?>" class="wp-post-image w-full !h-[30rem] object-cover rounded-lg" loading="lazy">
        </div>
      <?php endif; ?>
      <div class="entry-content wordpressContent">
        <?= $content ?>
      </div>
    </article>
  <?php
  } else {
    echo '<div class="max-w-7xl mx-auto px-6 py-20">
        <div class="text-center">
            <!-- Animated 404 graphic -->
            <div class="relative max-w-md mx-auto mb-5">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full blur-3xl opacity-20 animate-pulse"></div>
                <div class="relative flex flex-col items-center justify-center">
                    <div class="text-9xl font-bold gradient-text animate-float">404</div>
                    <i data-lucide="alert-circle" class="w-32 h-32 text-red-500 mt-8 animate-bounce"></i>
                </div>
            </div>

            <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-6">
                Oops! Page Not Found
            </h1>
            
            <p class="text-xl text-slate-600 max-w-2xl mx-auto mb-8">
                The page you are looking for does not exist or has been moved. 
                Here are some helpful links instead:
            </p>
            
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <a href="./index.php" class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-6 py-3 rounded-lg font-medium inline-flex items-center transition-colors duration-200">
                    <i data-lucide="home" class="w-5 h-5 mr-2"></i>
                    Return Home
                </a>
                
                <a href="./technology-services.php" class="border border-slate-300 bg-white hover:bg-slate-50 text-slate-800 px-6 py-3 rounded-lg font-medium inline-flex items-center transition-colors duration-200">
                    <i data-lucide="server" class="w-5 h-5 mr-2"></i>
                    Our Services
                </a>
                
                <a href="./about.php" class="border border-slate-300 bg-white hover:bg-slate-50 text-slate-800 px-6 py-3 rounded-lg font-medium inline-flex items-center transition-colors duration-200">
                    <i data-lucide="mail" class="w-5 h-5 mr-2"></i>
                    Contact Support
                </a>
            </div>
            
        </div>
    </div>';
  }
  ?>
</main>

<?php include 'footer.php'; ?>
