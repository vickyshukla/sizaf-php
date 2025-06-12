<?php
// Current path for active class logic
$currentPath = $_SERVER['REQUEST_URI'];

// Function to check if a URL is the current page
function isActive($path, $currentPath) {
    return strpos($currentPath, $path) !== false ? 'bg-gradient-to-r from-pink-500 to-purple-600 text-white' : 'text-slate-300 hover:text-white';
}
?>

<!-- Sidebar -->
<div class=" bg-slate-900 text-white rounded-xl shadow-lg overflow-hidden sticky top-8 hidden lg:block">
    <!-- COMPANY Section -->
    <div class="border-b border-slate-700">
        <div class="p-4 bg-slate-800">
            <h3 class="font-bold text-lg">COMPANY</h3>
        </div>
        <nav class="p-2">
            <?php
            $companyLinks = [
                [
                    'name' => 'Global Networks', 
                    'href' => 'global-network.php',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>'
                ],
                [
                    'name' => 'News', 
                    'href' => 'news.php',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>'
                ],
                [
                    'name' => 'Blogs', 
                    'href' => 'blog.php',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>'
                ],
                [
                    'name' => 'Contact Us', 
                    'href' => 'about.php',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>'
                ]
            ];
            
            foreach ($companyLinks as $item) {
                $activeClass = isActive($item['href'], $currentPath);
                $isActive = strpos($currentPath, $item['href']) !== false;
                echo '
                <a href="'.$item['href'].'" class="flex items-center gap-3 p-3 rounded-lg transition-all hover:bg-slate-800 '.$activeClass.'">
                    <div class="'.($isActive ? 'text-white' : 'text-slate-400').' transition-colors flex-shrink-0">
                        '.$item['icon'].'
                    </div>
                    <span class="font-medium text-sm">'.$item['name'].'</span>
                    '.($isActive ? '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-auto"><polyline points="9 18 15 12 9 6"></polyline></svg>' : '').'
                </a>';
            }
            ?>
        </nav>
    </div>

    <!-- SERVICES Section -->
    <div class="border-b border-slate-700">
        <div class="p-4 bg-slate-800">
            <h3 class="font-bold text-lg uppercase">SERVICES</h3>
        </div>
        <nav class="p-2">
            <?php
            $serviceLinks = [
                [
                    'name' => 'Industries & Sectors', 
                    'href' => '/industries-sectors',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-building"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect><rect x="9" y="6" width="6" height="6"></rect><line x1="9" y1="14" x2="9" y2="18"></line><line x1="15" y1="14" x2="15" y2="18"></line></svg>'
                ],
                [
                    'name' => 'Technology Services', 
                    'href' => '/technology-services',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>'
                ]
            ];
            
            foreach ($serviceLinks as $item) {
                $activeClass = isActive($item['href'], $currentPath);
                $isActive = strpos($currentPath, $item['href']) !== false;
                echo '
                <a href="'.$item['href'].'" class="flex items-center gap-3 p-3 rounded-lg transition-all hover:bg-slate-800 '.$activeClass.'">
                    <div class="'.($isActive ? 'text-white' : 'text-slate-400').' transition-colors flex-shrink-0">
                        '.$item['icon'].'
                    </div>
                    <span class="font-medium text-sm">'.$item['name'].'</span>
                    '.($isActive ? '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-auto"><polyline points="9 18 15 12 9 6"></polyline></svg>' : '').'
                </a>';
            }
            ?>
        </nav>
    </div>

    <!-- CTA Button -->
    <div class="p-4">
        <a href="about.php" class="w-full  bg-pink-500 hover:bg-pink-600 text-white font-semibold px-3 py-3 rounded-lg flex items-center justify-center transition-colors">
            Place Order / Enquiry
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
        </a>
    </div>
</div>