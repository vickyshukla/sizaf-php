<?php
// Current path for active class logic
$currentPath = $_SERVER['REQUEST_URI'];

// Function to check if a URL is the current page
function isActive($path, $currentPath) {
    return strpos($currentPath, $path) === 0 ? 'text-pink-500' : '';
}
?>
<!-- Sidebar -->
<div class="w-70 bg-[#000327] text-white flex flex-col justify-center items-start gap-10 px-10 rounded-r-3xl">
    <div>
        <h2 class="text-2xl font-bold mb-5 tracking-wider">COMPANY</h2>
        <ul class="list-disc pl-4 space-y-6">
            <?php
            $companyLinks = [
                ['name' => 'Global Networks', 'href' => 'global-network.php'],
                ['name' => 'News', 'href' => 'news.php'],
                ['name' => 'Blogs', 'href' => 'blog.php'],
                ['name' => 'Contact Us', 'href' => 'about.php']
            ];
            foreach ($companyLinks as $item) {
                $activeClass = isActive($item['href'], $currentPath);
                echo "<li class='font-normal text-lg hover:text-[#FF156E] {$activeClass}'>
                        <a href='{$item['href']}'>{$item['name']}</a>
                    </li>";
            }
            ?>
        </ul>
    </div>
    <div>
        <h2 class="text-2xl font-bold mb-5 tracking-wider uppercase">Services</h2>
        <ul class="list-disc pl-4 space-y-6">
            <?php
            $serviceLinks = [
                ['name' => 'Industries & Sectors', 'href' => '/industries-sectors'],
                ['name' => 'Technology Services', 'href' => '/technology-services']
            ];
            foreach ($serviceLinks as $item) {
                $activeClass = isActive($item['href'], $currentPath);
                echo "<li class='font-normal text-lg hover:text-[#FF156E] {$activeClass}'>
                        <a href='{$item['href']}'>{$item['name']}</a>
                    </li>";
            }
            ?>
        </ul>
    </div>

    <div class="mt-4">
        <a href="about.php">
            <button class="bg-primary-gradient px-6 py-2 text-sm sm:text-base text-white shadow-lg shadow-pink-400/60 hover:shadow-pink-600/70 focus:outline-none focus:ring-2 focus:ring-pink-500">
            Place Order / Enquiry
            <span class="icon icon-move-right"></span>
            </button>
        </a>
    </div>
</div>
