<?php
$metaTitle = "Blogs";
$metaDescription = "Blogs Page.";
$metaKeywords = "IT solutions, software development, consultancy";
$metaImage = "https://yourdomain.com/images/og-governance.jpg";
$canonicalURL = "https://sizaf.com/blog.php"; 
?>
<?php
include 'header.php';
include 'functions.php';

// Get current page from URL, default is 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

// Fetch all blog posts with pagination
$blogData = getBlogs($page);  // You can specify the number of posts per page
$blogs = $blogData['blogs'];
$totalPages = $blogData['totalPages'];
?>

<main class="max-w-[1460px] container mx-auto">
  <!-- Hero Section -->
   <div class=" mx-auto">
        <!-- Hero Section with SEO-rich content -->
        <div class="relative rounded-b-3xl overflow-hidden mb-16 shadow-2xl">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-purple-900/90 z-10"></div>
            <img 
                src="./assest/bg.jpeg" 
                alt="Technology blog hero " 
                width="1200" 
                height="400" 
                class="w-full h-[400px] object-cover"
                loading="lazy"
            />
            <div class="absolute inset-0 z-20 flex flex-col justify-center px-8 md:px-16">
                <span class="mb-4 bg-white/10 backdrop-blur-sm text-white border-white/20 w-fit px-3 py-1 rounded-full text-sm font-medium">
                    SIZAF Tech Blog
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4">
                    Let's improve sales, revenue & build a 
                    <span class="bg-gradient-to-r from-pink-400 to-purple-400 bg-clip-text text-transparent">
                        stronger brand
                    </span>
                </h1>
                <p class="text-xl text-white/90 mb-8 max-w-2xl">
                    & improved customer satisfaction through technology insights and industry expertise.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="global-network.php" class="bg-pink-500 hover:bg-pink-600 text-white px-8 py-4 text-lg rounded-lg font-medium text-center transition-colors">
                        PAY PER USE RM 1.99
                    </a>
                    <a href="global-network.php" class="border border-white/30 text-white hover:bg-white/10 px-8 py-4 text-lg rounded-lg font-medium text-center transition-colors backdrop-blur-sm flex items-center justify-center">
                        Browse Plans
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
     </div>
  <!-- Main Content -->
  <div class="flex flex-col lg:flex-row">
    <?php include 'mini-sidebar.php'; ?>

    <!-- Blog Section -->
    <div class="flex-1 lg:max-h-[80vh] lg:overflow-y-auto p-4 sm:p-6">
      <header class="mb-8">
        <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4 text-center">BLOGS</h1>
        <p class="text-lg text-slate-600 text-center max-w-3xl mx-auto">
            Stay updated with the latest trends, insights, and innovations in technology, security, and business solutions.
        </p>
      </header>
      <?php if (!empty($blogs)): ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php foreach ($blogs as $blog): 
            $title = $blog['title']['rendered'];
            $excerpt = strip_tags($blog['excerpt']['rendered']);
            $id = $blog['id'];
            $img = getFeaturedImage($blog);
            $date = date('F j, Y', strtotime($blog['date']));
            $slug = $blog['slug'];
          ?>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col h-full">
              <img src="<?= $img ?>" alt="<?= $title ?>" class="w-full h-48 object-cover" loading="lazy">
              <div class="p-4 flex flex-col h-full">
                <h3 class="text-lg md:text-xl font-semibold mb-2"><?= $title ?></h3>
                <p class="text-sm text-gray-500 mb-2"><?= $date ?></p>
                <p class="text-gray-600 mb-4"><?= substr($excerpt, 0, 100) ?>...</p>
                <a href="<?= $slug ?>" class="bg-primary-gradient text-white w-28 py-2 rounded mt-auto text-center">Read More</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php else: ?>
        <div class="text-center text-red-600 py-8 flex-1 h-full">
            <p>No news articles available at the moment. Please check back later.</p>
        </div>
      <?php endif; ?>

      <!-- Pagination -->
      <div class="mt-10 flex flex-wrap justify-center gap-2 md:gap-3">
        <?php if ($page > 1): ?>
          <a href="?page=<?= $page - 1 ?>" class="px-4 py-2 rounded bg-primary-gradient text-white">&laquo; Prev</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
          <a href="?page=<?= $i ?>" class="h-8 w-8 rounded-full text-center leading-8 <?= $i == $page ? 'bg-primary-gradient text-white' : 'bg-white hover:bg-gray-200' ?>">
            <?= $i ?> 
          </a>
        <?php endfor; ?>

        <?php if ($page < $totalPages): ?>
          <a href="?page=<?= $page + 1 ?>" class="px-4 py-2 rounded bg-primary-gradient text-white">Next &raquo;</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>