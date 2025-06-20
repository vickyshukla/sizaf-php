<?php
$metaTitle = "Finance & Banking| SIZAF NET WITH TECH";
$metaDescription = "Transform your finance and banking operations with Sizaf's innovative technology services. Enhance security, streamline processes, and improve customer experiences.";
$metaKeywords = "governance security, public sector IT solutions, secure infrastructure, government technology, network services";
$metaImage = "https://yourdomain.com/images/og-governance.jpg";
$canonicalURL = "https://sizaf.com/finance-banking.php"; 
include('header.php');
?>

<div class=' mx-auto'>

<section class="bg-gradient-to-br from-slate-50 to-slate-100 py-16 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-4 gap-8">
            <!-- Left Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-slate-900 border-0 shadow-xl text-white sticky top-8 rounded-lg">
                    <div class="p-6 pb-4">
                        <h2 class="text-lg font-bold">Industry Solutions</h2>
                    </div>
                    <div class="px-6 pb-6 space-y-2">
                        <?php
                        $industries = [
                            ['icon' => 'shield', 'name' => "Governance & Security", 'page' => 'governance-security.php'],
                            ['icon' => 'heart', 'name' => "Health & Education", 'page' => 'health-education.php'],
                            ['icon' => 'building', 'name' => "Non profit organization", 'page' => 'non-profit.php'],
                            ['icon' => 'plane', 'name' => "Travel & Leisure", 'page' => 'travel-leisure.php'],
                            ['icon' => 'construction', 'name' => "Construction & Real Estate", 'page' => 'construction-real-estate.php'],
                            ['icon' => 'megaphone', 'name' => "Media & Advertising", 'page' => 'media-advertising.php'],
                            ['icon' => 'shopping-cart', 'name' => "Retail & E-Commerce", 'page' => 'retail-ecommerce.php'],
                            ['icon' => 'factory', 'name' => "Production, Engg & Pharma", 'page' => 'production-pharma.php'],
                            ['icon' => 'truck', 'name' => "Transport & Logistics", 'page' => 'transport-logistics.php'],
                            ['icon' => 'leaf', 'name' => "Agri, Fisheries & Climate", 'page' => 'agri-climate.php'],
                            ['icon' => 'banknote', 'name' => "Finance & Banking", 'page' => 'finance-banking.php']
                        ];
                        
                        $currentPage = basename($_SERVER['PHP_SELF']);// Default selected
                        
                        foreach ($industries as $industry): $isActive = $industry['page'] === $currentPage; ?>
                            <a 
                                href="<?= $industry['page'] ?>"
                                class="flex items-center gap-3 p-3 rounded-lg transition-all cursor-pointer <?= $isActive ? 'bg-gradient-to-r from-pink-500 to-purple-600 text-white' : 'hover:bg-slate-800 text-slate-300 hover:text-white' ?>"
                            >
                                <svg 
                                    class="h-5 w-5 <?= $isActive ? 'text-white' : 'text-slate-400' ?>" 
                                    fill="none" 
                                    stroke="currentColor" 
                                    viewBox="0 0 24 24" 
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?=
                                        $industry['icon'] === 'shield' ? 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z' :
                                        ($industry['icon'] === 'heart' ? 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z' :
                                        ($industry['icon'] === 'building' ? 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4' :
                                        ($industry['icon'] === 'plane' ? 'M12 19l9 2-9-18-9 18 9-2zm0 0v-8' :
                                        ($industry['icon'] === 'construction' ? 'M13 10V3L4 14h7v7l9-11h-7z' :
                                        ($industry['icon'] === 'megaphone' ? 'M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z' :
                                        ($industry['icon'] === 'shopping-cart' ? 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z' :
                                        ($industry['icon'] === 'factory' ? 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10' :
                                        ($industry['icon'] === 'truck' ? 'M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0zM12 16h4m-9-5h10m2-6H7a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2z' :
                                        ($industry['icon'] === 'leaf' ? 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01' :
                                        'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z')))))))))
                                    ?>"></path>

                                </svg>
                                <span class="text-sm font-medium"><?= $industry['name'] ?></span>
                                <?php if ($isActive): ?>
                                    <svg class="h-4 w-4 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                <?php endif; ?>
                            </a>
                        <?php endforeach; ?>

                        <!-- Technology Solutions Card -->
                        <div class="mt-8 p-4 bg-gradient-to-br from-blue-600 to-purple-600 rounded-lg">
                            <div class="flex items-center gap-2 mb-3">
                                <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                                <h4 class="font-bold text-white">Technology Solutions</h4>
                            </div>
                            <p class="text-blue-100 text-sm mb-2">Comprehensive IT solutions</p>
                            <p class="text-white font-bold text-lg mb-4">STARTS FROM RM 1.99</p>
                            <a 
                                href="./about.php" 
                                class="w-full bg-pink-500 hover:bg-pink-600 text-white font-medium rounded-md px-4 py-2 inline-flex items-center justify-center text-sm"
                            >
                                Place Order / Enquiry
                                <svg class="h-4 w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-3 space-y-8">
                <?php if (basename($_SERVER['PHP_SELF']) === 'finance-banking.php'): ?>
                    <!-- Governance & Security Content -->
                    <div class="text-center">
                        <span class="inline-flex items-center mb-4 text-sm font-medium bg-gradient-to-r from-pink-500 to-purple-600 text-white border-0 px-4 py-1 rounded-full">
                            Public Sector Excellence
                        </span>
                        <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6">Finance & Banking</h1>

                        <div class="bg-white rounded-2xl p-8 shadow-lg border border-slate-200 mb-8">
                            <h2 class="text-2xl font-bold text-slate-900 mb-4">AN OVERVIEW</h2>
                            <p class="text-slate-600 leading-relaxed text-lg">
                            SIZAF NET WITH TECH empowers businesses in the finance and banking sectors to leverage state-of-the-art innovations, enhancing resource performance, payment networks, and custom financial systems and platforms within a highly secure environment. The advantages of emerging technology include super-customized platforms,
                             direct user access, insightful decision-making, and an effective response to client challenges.
                            SIZAF NET WITH TECH ensures that its customers and their end users stay informed about emerging technologies.
                             To mitigate the impact of new services and changing technologies, finance and banking suppliers must continually adapt to modern industrial advancements. The sector collaborates rapidly with SIZAF to remain competitive and meet customer demands. SIZAF NET WITH TECH facilitates the migration of banks and financial institutions to superior technology, faster processes, and enhanced customer satisfaction.
                            </p>
                            <p class="text-slate-600 leading-relaxed mt-4">
                                SIZAF NET WITH TECH Software provides a responsible partnership to public sector management, security and
                                enables systems to provide its citizens optimum services.
                            </p>
                        </div>
                    </div>

                    <!-- We Are Ready Section -->
                    <div class="bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden">
                        <div class="p-8">
                            <h2 class="text-3xl font-bold text-slate-900 mb-6 text-center">WE ARE READY</h2>

                            <!-- Hero Image -->
                            <div class="relative rounded-xl overflow-hidden mb-8">
                                <img 
                                    src="./assest/industry-sector11.jpeg" 
                                    alt="digital banking" 
                                    class="w-full backdrop-blur-xs h-[300px] object-cover"
                                    loading="lazy"
                                    width="800"
                                    height="300"
                                />
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-purple-600/20"></div>
                                <div class="backdrop-blur-xs absolute inset-0 flex items-center justify-center">
                                    <div class="text-center text-white">
                                        <h3 class="text-2xl font-bold mb-2">Digital Trust & Transformation</h3>
                                        <p class="text-lg">Driving Secure and Scalable Financial Innovation</p>
                                    </div>
                                </div>
                            </div>

                            <p class="text-slate-600 text-center mb-8 text-lg">
                          SIZAF NET WITH TECH offers software solutions to the finance and banking sector, providing highly secure connections, 
                          reliable club and mobile networks, and easy access from any location or smartphone.
                            </p>

                            <!-- Features Grid -->
                            <div class="grid md:grid-cols-3 gap-6 mb-8">
                                <?php
                                $governanceFeatures = [
                                    [
                                        'icon' => 'shield',
                                        'title' => "Secure Infrastructure",
                                        'description' => "Advanced security protocols and compliance frameworks"
                                    ],
                                    [
                                        'icon' => 'users',
                                        'title' => "Stakeholder Collaboration",
                                        'description' => "Seamless integration with government departments"
                                    ],
                                    [
                                        'icon' => 'globe',
                                        'title' => "Network Technologies",
                                        'description' => "Latest network solutions for public sector efficiency"
                                    ]
                                ];
                                
                                foreach ($governanceFeatures as $feature): ?>
                                    <div class="border border-slate-200 hover:shadow-md transition-shadow rounded-lg">
                                        <div class="p-6 text-center">
                                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white">
                                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= 
                                                        $feature['icon'] === 'shield' ? 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"' : 
                                                        ($feature['icon'] === 'users' ? 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"' : 
                                                        'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"')
                                                    ?>"></path>
                                                </svg>
                                            </div>
                                            <h4 class="font-semibold text-slate-900 mb-2"><?= $feature['title'] ?></h4>
                                            <p class="text-slate-600 text-sm"><?= $feature['description'] ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Two Column Section -->
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="border border-slate-200 shadow-lg rounded-lg">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-slate-900 flex items-center gap-2">
                                    <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    SIZAF will serve the needs.
                                </h3>
                                <div class="mt-4">
                                    <p class="text-slate-600 leading-relaxed">
                                  SIZAF NET WITH TECH technologies are designed to provide banking and finance institutions with cutting-edge 
                                  service and customer loyalty. This boosts the sector's competitiveness and enhances communication across all networks with consumers and suppliers. Our solutions also support investment banking and
                                   streamline processes like public bank housing loan services, ensuring consistent, secure operations for the industry.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="border border-slate-200 shadow-lg rounded-lg">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-slate-900 flex items-center gap-2">
                                    <svg class="h-5 w-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    A lifelong journey with SIZAF.
                                </h3>
                                <div class="mt-4">
                                    <p class="text-slate-600 leading-relaxed">
                                   SIZAF NET WITH TECH Innovations has gained considerable experience in the banking sector to help the finance industry meet the needs of consumers, administrators, workers, and technology clients. Their intelligent business model promises extremely 
                                   low latency and broad geographical reach, providing all customers with a stable and high-speed environment.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Services Content -->
                    <div class="text-center mb-12">
                        <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4">SIZAF NET WITH TECH</h1>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                            Technology Services Designed with your Business in Mind.
                        </p>
                    </div>

                    <!-- Services Grid -->
                    <div class="grid md:grid-cols-2 gap-6 mb-12">
                        <?php
                        $services = [
                            [
                                'icon' => 'globe',
                                'title' => "WEB & MEDIA SERVICES",
                                'description' => "Sizaf Web media services allow to receive best of media content produced & published across all mediums bringing better brand visibility & more profitable business."
                            ],
                            [
                                'icon' => 'server',
                                'title' => "TECH INFRA SERVICES",
                                'description' => "With Sizaf Tech Infra Services, you can experience the freedom of launching your business with zero capital expenditure. We operate as an in-house team, managing your systems, machines, and overall security."
                            ],
                            [
                                'icon' => 'network',
                                'title' => "NETWORK SERVICES",
                                'description' => "Sizaf Network Services provides you with unparalleled connectivity, unlimited speed, secure connections, and the latest wired and wireless solutions, available anywhere in the world."
                            ],
                            [
                                'icon' => 'settings',
                                'title' => "MANAGED IT SERVICES",
                                'description' => "The Sizaf Managed IT Services are ready for you to deploy solutions such as cloud, software, mobile technology and managed services in your business."
                            ]
                        ];
                        
                        foreach ($services as $service): ?>
                            <div class="bg-white shadow-md hover:shadow-lg transition-shadow p-8 rounded-md border border-slate-100">
                                <div class="flex items-start gap-4">
                                    <div class="flex-shrink-0 mt-1">
                                        <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= 
                                                $service['icon'] === 'globe' ? 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"' : 
                                                ($service['icon'] === 'server' ? 'M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"' : 
                                                ($service['icon'] === 'network' ? 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"' : 
                                                'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z'))
                                            ?>"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-bold text-slate-900 mb-3"><?= $service['title'] ?></h3>
                                        <p class="text-slate-600 text-sm leading-relaxed"><?= $service['description'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Call to Action -->
                    <div class="text-center">
                        <a 
                            href="./about.php" 
                            class="bg-pink-500 hover:bg-pink-600 text-white px-8 py-3 rounded-md inline-flex items-center gap-2 text-sm font-medium"
                        >
                            Place Order / Enquiry
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
</div>

<?php include 'footer.php'; ?>  