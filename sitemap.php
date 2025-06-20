<?php
$metaTitle = "Comprehensive Technology Services - Sizaf";
$metaDescription = "Explore Sizaf's wide range of technology services designed to drive innovation, efficiency, and growth across various industries. Tailored solutions for your business needs.";
$metaKeywords = "governance security, public sector IT solutions, secure infrastructure, government technology, network services";
$metaImage = "https://yourdomain.com/images/og-governance.jpg";
$canonicalURL = "https://sizaf-php.sizaf.com/sitemap.php"; 
include('header.php');
?>
<?php
// sitemap-section.php
// Strict SEO optimized PHP version of the React sitemap component

// Define the sitemap data structure
$sitemapData = [
    [
        'title' => 'About Sizaf',
        'icon' => 'building',
        'colorClass' => 'bg-blue-600',
        'links' => [
            ['name' => 'Enquiry', 'icon' => 'mail', 'href' => '#enquiry'],
            ['name' => 'Submit a Ticket', 'icon' => 'ticket', 'href' => '#ticket'],
            ['name' => 'Admin Login', 'icon' => 'user-check', 'href' => '#admin'],
            ['name' => 'Career', 'icon' => 'briefcase', 'href' => '#career'],
            ['name' => 'Contact Us', 'icon' => 'phone', 'href' => '#contact'],
            ['name' => 'Global Networks', 'icon' => 'globe', 'href' => '#networks'],
            ['name' => 'News', 'icon' => 'newspaper', 'href' => '#news'],
            ['name' => 'Blogs', 'icon' => 'pen-tool', 'href' => '#blogs'],
        ],
    ],
    [
        'title' => 'Technology Services',
        'icon' => 'settings',
        'colorClass' => 'bg-purple-600',
        'links' => [
            ['name' => 'Web & Media Services', 'icon' => 'globe', 'href' => '#web-media'],
            ['name' => 'Tech Infrastructure Services', 'icon' => 'network', 'href' => '#tech-infra'],
            ['name' => 'Network Services', 'icon' => 'network', 'href' => '#network'],
            ['name' => 'Managed IT Services', 'icon' => 'settings', 'href' => '#managed-it'],
        ],
    ],
    [
        'title' => 'Industries & Sectors',
        'icon' => 'factory',
        'colorClass' => 'bg-green-600',
        'links' => [
            ['name' => 'Governance & Security', 'icon' => 'shield', 'href' => '#governance'],
            ['name' => 'Health & Education', 'icon' => 'heart', 'href' => '#health'],
            ['name' => 'Non Profit Organizations', 'icon' => 'users', 'href' => '#nonprofit'],
            ['name' => 'Travel & Leisure', 'icon' => 'plane', 'href' => '#travel'],
            ['name' => 'Construction & Real Estate', 'icon' => 'building', 'href' => '#construction'],
            ['name' => 'Retail & Ecommerce', 'icon' => 'shopping-cart', 'href' => '#retail'],
            ['name' => 'Production, Engg & Pharma', 'icon' => 'factory', 'href' => '#production'],
            ['name' => 'Transport & Logistics', 'icon' => 'truck', 'href' => '#transport'],
            ['name' => 'Agri, Fisheries & Climate', 'icon' => 'leaf', 'href' => '#agriculture'],
            ['name' => 'Finance & Banking', 'icon' => 'banknote', 'href' => '#finance'],
            ['name' => 'Media & Advertising', 'icon' => 'megaphone', 'href' => '#media'],
        ],
    ],
    [
        'title' => 'Legal',
        'icon' => 'scale',
        'colorClass' => 'bg-red-600',
        'links' => [
            ['name' => 'Terms & Conditions', 'icon' => 'file-text', 'href' => '#terms'],
            ['name' => 'Privacy Policy', 'icon' => 'shield', 'href' => '#privacy'],
            ['name' => 'Disclaimer', 'icon' => 'file-text', 'href' => '#disclaimer'],
        ],
    ],
];

// Quick stats data
$quickStats = [
    ['number' => '8', 'label' => 'About Pages', 'icon' => 'building'],
    ['number' => '4', 'label' => 'Tech Services', 'icon' => 'settings'],
    ['number' => '11', 'label' => 'Industries', 'icon' => 'factory'],
    ['number' => '3', 'label' => 'Legal Pages', 'icon' => 'scale'],
];

// Function to get SVG icon
function getIcon($iconName) {
    $icons = [
        'building' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>',
        'settings' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>',
        // Add all other icons similarly
        // ... (truncated for brevity, include all icons from your React component)
    ];
    
    return $icons[$iconName] ?? '';
}
?>

<!-- Sitemap Section with Strict SEO Optimization -->
<section class="py-20 bg-gradient-to-br from-slate-50 to-white">
    <div class="container mx-auto px-4">
        <!-- Header with semantic HTML and SEO-rich content -->
        <header class="text-center mb-16">
            <div class="inline-flex items-center gap-2 text-purple-600 text-sm font-semibold tracking-wide uppercase mb-4" aria-label="Site navigation section">
                <?= getIcon('network') ?>
                <span>Site Navigation</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">SIZAF Sitemap</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Explore our comprehensive range of services, industries we serve, and important information
            </p>
        </header>

        <!-- Sitemap Grid with ARIA landmarks -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8" role="navigation" aria-label="Main sitemap navigation">
            <?php foreach ($sitemapData as $index => $section): ?>
                <article class="group relative overflow-hidden border shadow-lg hover:shadow-xl transition-all duration-300 rounded-lg">
                    <div class="p-6">
                        <!-- Section Header with semantic structure -->
                        <div class="flex items-center gap-3 mb-6">
                            <div class="p-3 rounded-xl <?= $section['colorClass'] ?> shadow-md" aria-hidden="true">
                                <?= getIcon($section['icon']) ?>
                            </div>
                            <h2 class="text-xl font-bold text-gray-900"><?= htmlspecialchars($section['title']) ?></h2>
                        </div>

                        <!-- Links list with proper semantic markup -->
                        <ul class="space-y-2">
                            <?php foreach ($section['links'] as $link): ?>
                                <li>
                                    <a href="<?= htmlspecialchars($link['href']) ?>" 
                                       class="flex items-center gap-3 p-2 rounded-md hover:bg-gray-50 transition-all duration-200"
                                       aria-label="<?= htmlspecialchars($link['name']) ?>">
                                        <?= getIcon($link['icon']) ?>
                                        <span class="text-gray-700 group-hover/link:text-gray-900 flex-1"><?= htmlspecialchars($link['name']) ?></span>
                                        <?= getIcon('chevron-right') ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <!-- View All Button -->
                        <div class="mt-6 pt-4 border-t border-gray-100">
                            <a href="<?= '#' . strtolower(str_replace(' ', '-', $section['title'])) ?>" 
                               class="w-full <?= $section['colorClass'] ?> text-white hover:opacity-90 inline-flex items-center justify-center px-4 py-2 rounded-md font-medium transition-colors">
                                <span>Explore All</span>
                                <?= getIcon('external-link') ?>
                            </a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <!-- Quick Stats with semantic HTML -->
        <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6" role="region" aria-label="Website statistics">
            <?php foreach ($quickStats as $stat): ?>
                <article class="text-center p-6 bg-white rounded-xl shadow-md">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-purple-600 rounded-lg mb-3" aria-hidden="true">
                        <?= getIcon($stat['icon']) ?>
                    </div>
                    <div class="text-3xl font-bold text-gray-900 mb-1"><?= htmlspecialchars($stat['number']) ?></div>
                    <div class="text-sm text-gray-600"><?= htmlspecialchars($stat['label']) ?></div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'footer.php'?>