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
  <div class="relative flex items-center justify-center h-screen bg-cover bg-center bg-[url('assest/bg.jpeg')]">
    <div class="absolute inset-0 bg-[url('assest/color-bg.png')] opacity-80"></div>
    <div class="relative text-white text-center p-8 rounded-lg">
        <img src="assest/sizaflogo.png" alt="Sizaf Logo" width="240" height="600" class="mx-auto mb-4" loading="lazy"/>
        <h1 class="text-3xl md:text-4xl font-bold mb-4">
            Let's improve sales, revenue & build a stronger brand
            <br />& improved customer satisfaction.
        </h1>
        <p class="text-pink-500 text-lg md:text-xl mb-6">PAY PER USE RM 199 / MO</p>
        <a href="about.php">
            <button class="border border-white text-white px-16 py-5 text-lg hover-primary-gradient hover:text-white transition duration-300 cursor-pointer">
                Browse Plans
                <span class="ml-2 text-2xl">→</span>
            </button>
        </a>
    </div>
  </div>
  
  <div class="flex bg-gray-100">
    <?php 
    include 'mini-sidebar.php'; 
    ?>

    <!-- Blog Section -->
    <div class="flex-1 max-h-[80vh] overflow-y-auto p-6 ">
      <h2 class="text-3xl font-bold mb-8 text-center">BLOGS</h2>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 items-stretch">
        <?php foreach ($blogs as $blog): 
          $title = $blog['title']['rendered'];
          $excerpt = strip_tags($blog['excerpt']['rendered']);
          $id = $blog['id'];
          $img = $blog['_embedded']['wp:featuredmedia'][0]['source_url'] ?? '';
          $date = date('F j, Y', strtotime($blog['date']));
          $slug = $blog['slug'];
        ?>
          <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col h-full">
            <?php if ($img): ?>
              <img src="<?= $img ?>" alt="<?= $title ?>" class="w-full h-48 object-cover" loading="lazy">
            <?php else: ?>
              <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">No Image</div>
            <?php endif; ?>
            <div class="p-4 flex flex-col h-full">
              <h3 class="text-xl font-semibold mb-2"><?= $title ?></h3>
              <p class="text-sm text-gray-500 mb-2"><?= $date ?></p>
              <p class="text-gray-600 mb-4"><?= substr($excerpt, 0, 100) ?>...</p>
              <a href="<?= $slug ?>" class="bg-primary-gradient text-white w-28 py-2 rounded mt-auto text-center">Read More</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <!-- Pagination -->
      <div class="mt-8 flex justify-center gap-3">
        <?php if ($page > 1): ?>
          <a href="?page=<?= $page - 1 ?>" class="px-3 py-1 rounded bg-primary-gradient text-white">&laquo; Prev</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
          <a href="?page=<?= $i ?>" class="h-8 w-8 rounded-full text-center pt-0.5 <?= $i == $page ? 'bg-primary-gradient text-white' : 'bg-white hover-primary-gradient' ?>">
            <?= $i ?> 
          </a>
        <?php endfor; ?>

        <?php if ($page < $totalPages): ?>
          <a href="?page=<?= $page + 1 ?>" class="px-3 py-1 rounded bg-primary-gradient text-white">Next &raquo;</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>