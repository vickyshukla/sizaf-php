<?php 
include 'header.php'; 
include 'functions.php'; 

// Current page from URL ?page=, default 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

// REST API URL with embedded featured media, 10 posts per page
$apiUrl = "https://backendcms.sizaf.com/wp-json/wp/v2/posts?_embed&per_page=10&page={$page}";

// Use cURL to get response and headers (for total pages)
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => $apiUrl,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => true,
    CURLOPT_FOLLOWLOCATION => true,
]);

$response = curl_exec($curl);

if ($response === false) {
    die("Error fetching posts: " . curl_error($curl));
}

// Separate headers and body
$headerSize = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
$headers = substr($response, 0, $headerSize);
$body = substr($response, $headerSize);

// Get total pages from headers
$totalPages = 1;
if (preg_match('/X-WP-TotalPages:\s*(\d+)/i', $headers, $matches)) {
    $totalPages = (int)$matches[1];
}

curl_close($curl);

// Decode JSON body to array
$blogs = json_decode($body, true);

// Function to get featured image or fallback
function getFeaturedImage($blog) {
    if (isset($blog['_embedded']['wp:featuredmedia'][0]['source_url'])) {
        return $blog['_embedded']['wp:featuredmedia'][0]['source_url'];
    }
    return 'https://via.placeholder.com/500x300?text=No+Image';
}
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

    <!-- Blog Section -->
    <div class="flex-1 lg:max-h-[80vh] lg:overflow-y-auto p-4 sm:p-6">
      <h2 class="text-2xl md:text-3xl font-bold mb-6 text-center">BLOGS</h2>
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