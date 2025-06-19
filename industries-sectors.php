<?php
$metaTitle = "Comprehensive Technology Solutions for Diverse Industries - Sizaf";
$metaDescription = "Maximize your business potential with Sizaf's managed IT services. Ensure seamless operations, proactive support, and optimized technology solutions for growth.";
$metaKeywords = "Explore Sizaf's industry-specific technology services designed to enhance efficiency and innovation across sectors like healthcare, finance, education, and more.";
$metaImage = "https://yourdomain.com/images/og-governance.jpg";
$canonicalURL = "https://sizaf.com/industries-sectors.php"; 
include('header.php');
?>
<!-- Hero Section -->
<section class="relative overflow-hidden min-h-[600px] flex items-center justify-center">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0">
        <img
            src="./assest/business-internet-main.jpg"
            alt="Business Communication Solutions"
            class="w-full h-full object-cover"
            loading="lazy"
        >
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900/90 via-gray-900/70 to-gray-900/90"></div>

        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-20 w-2 h-2 bg-purple-400 rounded-full animate-pulse"></div>
            <div class="absolute top-40 right-32 w-3 h-3 bg-purple-400 rounded-full animate-bounce"></div>
            <div class="absolute bottom-32 left-1/4 w-2 h-2 bg-pink-400 rounded-full animate-ping"></div>
            <div class="absolute bottom-20 right-20 w-4 h-4 bg-purple-400 rounded-full animate-pulse"></div>
        </div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- <span class="inline-flex mb-6 bg-purple-500/20 text-purple-300 border border-purple-400/30 backdrop-blur-sm rounded-full px-4 py-1 text-sm">
            Transform Your Business Communication
        </span> -->

        <h1 class="text-4xl md:text-6xl font-bold text-white mb-8 leading-tight">
            Increase Your Business
            <span class="block bg-gradient-to-r from-purple-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">
                Communication Power
            </span>
        </h1>

        <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-3xl mx-auto leading-relaxed">
            With our services today you can increase the ability of your business to communicate faster and more
            effectively.
        </p>

        <!-- Pricing -->
        <div class="mb-8">
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-6 py-3 border border-white/20">
                <span class="text-gray-300">Starts from</span>
                <span class="text-3xl font-bold text-pink-400">RM 69.99</span>
                <span class="text-gray-300">/month</span>
            </div>
        </div>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/plans" class="bg-pink-500 hover:bg-pink-600 text-white px-8 py-4 text-lg font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 inline-flex items-center">
                Browse Plans
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 w-5 h-5">
                    <path d="M5 12h14"/>
                    <path d="m12 5 7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="bg-gradient-to-br from-purple-600 via-purple-700 to-purple-800 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <span class="inline-flex mb-4 bg-white/20 text-white border border-white/30 backdrop-blur-sm rounded-full px-4 py-1 text-sm">
                Private. Secure. Super Fast
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Your business deserves
                <span class="block">Sizaf Net with Tech.</span>
            </h2>
        </div>

        <?php
        $services = [
            [
                'icon' => 'shield',
                'title' => 'Secure Internet',
                'description' => 'Enterprise-grade security protocols',
            ],
            [
                'icon' => 'zap',
                'title' => 'Pay Per Use',
                'description' => 'Flexible pricing based on usage',
            ],
            [
                'icon' => 'wifi',
                'title' => 'High Data Transmission',
                'description' => 'Ultra-fast connectivity solutions',
            ],
        ];
        ?>

        <!-- Service Features -->
        <div class="grid md:grid-cols-3 gap-8 mb-20">
            <?php foreach ($services as $index => $service): ?>
                <div class="text-center group">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-<?php echo $service['icon']; ?> w-10 h-10 text-white">
                                <?php if ($service['icon'] === 'shield'): ?>
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/>
                                <?php elseif ($service['icon'] === 'zap'): ?>
                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                                <?php elseif ($service['icon'] === 'wifi'): ?>
                                    <path d="M5 13a10 10 0 0 1 14 0"/>
                                    <path d="M8.5 16.5a5 5 0 0 1 7 0"/>
                                    <path d="M2 8.82a15 15 0 0 1 20 0"/>
                                    <line x1="12" x2="12.01" y1="20" y2="20"/>
                                <?php endif; ?>
                            </svg>
                        </div>
                        <?php if ($index < count($services) - 1): ?>
                            <div class="hidden md:block absolute top-10 left-full w-full h-0.5 bg-white/30">
                                
                            </div>
                        <?php endif; ?>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2"><?php echo $service['title']; ?></h3>
                    <p class="text-purple-100"><?php echo $service['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Internet Usage Statistics Section -->
        <div class="bg-gradient-to-br from-gray-900 via-gray-800 to-black py-20 relative overflow-hidden rounded-3xl mb-20">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fillRule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fillOpacity=\'0.1\'%3E%3Ccircle cx=\'30\' cy=\'30\' r=\'2\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div class="space-y-8">
                        <div>
                            <span class="inline-flex mb-4 bg-purple-500/20 text-purple-300 border border-purple-400/30 backdrop-blur-sm rounded-full px-4 py-1 text-sm">
                                Cutting-Edge Technology
                            </span>
                            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 leading-tight">
                                At SIZAF, we provide
                                <span class="block bg-gradient-to-r from-purple-400 to-purple-400 bg-clip-text text-transparent">
                                    affordable internet
                                </span>
                                powered by cutting-edge technology.
                            </h2>
                            <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                                Sizaf Services are uniquely designed for all industries, no setup cost & available in a
                                pay-per-use model.
                            </p>
                        </div>

                        <!-- Key Features -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <?php
                            $features = [
                                ['icon' => '🚀', 'title' => 'No Setup Cost', 'desc' => 'Get started immediately'],
                                ['icon' => '💰', 'title' => 'Pay-per-use', 'desc' => 'Only pay for what you use'],
                                ['icon' => '🏭', 'title' => 'All Industries', 'desc' => 'Tailored for every sector'],
                                ['icon' => '⚡', 'title' => 'Cutting-edge', 'desc' => 'Latest technology stack'],
                            ];
                            foreach ($features as $feature): ?>
                                <div class="bg-white/5 backdrop-blur-sm rounded-lg p-4 border border-white/10 hover:bg-white/10 transition-all duration-300">
                                    <div class="text-2xl mb-2"><?php echo $feature['icon']; ?></div>
                                    <h3 class="text-white font-semibold mb-1"><?php echo $feature['title']; ?></h3>
                                    <p class="text-gray-400 text-sm"><?php echo $feature['desc']; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <a href="./about.php" class="inline-flex items-center bg-pink-500 hover:bg-pink-600 text-white px-8 py-4 text-lg font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                            Place Order / Enquiry
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 w-5 h-5">
                                <path d="M5 12h14"/>
                                <path d="m12 5 7 7-7 7"/>
                            </svg>
                        </a>
                    </div>

                    <!-- Right Content - Usage Statistics -->
                    <div class="space-y-8">
                        <div class="text-center mb-8">
                            <h3 class="text-2xl font-bold text-white mb-2">Usage of Internet</h3>
                            <p class="text-gray-400">How people use internet services today</p>
                        </div>

                        <div class="space-y-6">
                            <?php
                            $usage_stats = [
                                ['label' => 'Social Media', 'percentage' => 74, 'color' => 'from-purple-400 to-purple-500', 'icon' => '📱'],
                                ['label' => 'Group Messaging', 'percentage' => 70, 'color' => 'from-purple-500 to-purple-600', 'icon' => '💬'],
                                ['label' => 'Private Messaging', 'percentage' => 47, 'color' => 'from-purple-400 to-purple-600', 'icon' => '✉️'],
                                ['label' => 'Email', 'percentage' => 16, 'color' => 'from-pink-400 to-pink-500', 'icon' => '📧'],
                                ['label' => 'Blog/Personal websites', 'percentage' => 6, 'color' => 'from-purple-300 to-purple-400', 'icon' => '🌐'],
                                ['label' => 'Forum/Others', 'percentage' => 4, 'color' => 'from-purple-500 to-purple-700', 'icon' => '🗣️'],
                            ];
                            foreach ($usage_stats as $index => $item): ?>
                                <div class="group">
                                    <div class="flex items-center justify-between mb-2">
                                        <div class="flex items-center gap-3">
                                            <span class="text-xl"><?php echo $item['icon']; ?></span>
                                            <span class="text-white font-medium"><?php echo $item['label']; ?></span>
                                        </div>
                                        <span class="text-white font-bold text-lg"><?php echo $item['percentage']; ?>%</span>
                                    </div>
                                    <div class="relative h-3 bg-gray-700 rounded-full overflow-hidden">
                                        <div
                                            class="h-full bg-gradient-to-r <?php echo $item['color']; ?> rounded-full transition-all duration-1000 ease-out transform origin-left group-hover:scale-x-105"
                                            style="width: <?php echo $item['percentage']; ?>%; animation: slideIn 1s ease-out <?php echo $index * 0.1; ?>s both"
                                        ></div>
                                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 animate-pulse"></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Summary Stats -->
                        <div class="bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-white/10 mt-8">
                            <div class="grid grid-cols-3 gap-4 text-center">
                                <div>
                                    <div class="text-2xl font-bold text-purple-400">99.9%</div>
                                    <div class="text-gray-400 text-sm">Uptime</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-purple-400">24/7</div>
                                    <div class="text-gray-400 text-sm">Support</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-purple-400">1000+</div>
                                    <div class="text-gray-400 text-sm">Clients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
        </div>

        <?php
        $benefits = [
            "99.9% Network Uptime",
            "24/7 Technical Support",
            "Scalable Solutions",
            "Enterprise Security",
            "Cost-Effective Plans",
            "Rapid Deployment",
        ];
        ?>

        <!-- Benefits Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-16">
            <?php foreach ($benefits as $benefit): ?>
                <div class="flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-lg p-4 hover:bg-white/20 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-circle w-5 h-5 text-purple-300 flex-shrink-0">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                    <span class="text-white font-medium"><?php echo $benefit; ?></span>
                </div>
            <?php endforeach; ?>
        </div>

        <?php
        $industries = [
            [
                'id' => 1,
                'title' => "Governance & Security",
                'description' => "It is now important to use this technology and improve governance and security capabilities.",
                'icon' => 'shield',
                'image' => '/assets/images/governance-security.jpg',
                'color' => "from-purple-500 to-purple-600",
            ],
            [
                'id' => 2,
                'title' => "Health & Education",
                'description' => "Healthcare & Education satisfies a variety of standards, including changing technology, to adapt to clients needs.",
                'icon' => 'heart',
                'image' => '/assets/images/health-education.jpg',
                'color' => "from-purple-500 to-purple-600",
            ],
            [
                'id' => 3,
                'title' => "Non Profit Organizations",
                'description' => "Non-profit enterprises with low budget but with best of technology strives for optimization and delivers best results.",
                'icon' => 'users',
                'image' => '/assets/images/non-profit.jpg',
                'color' => "from-purple-500 to-purple-600",
            ],
            [
                'id' => 4,
                'title' => "Travel & Leisure",
                'description' => "With the Covid-19 turnaround, there are many changes in travel and leisure industries, for which we provide requirement of advanced and specialized services.",
                'icon' => 'plane',
                'image' => '/assets/images/travel-leisure.jpg',
                'color' => "from-purple-500 to-purple-600",
            ],
        ];
        ?>

        <!-- Industry Cards -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php foreach ($industries as $industry): ?>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 cursor-pointer">
                    <div class="relative h-48 overflow-hidden">
                        <img
                            src="<?php echo $industry['image']; ?>"
                            alt="<?php echo $industry['title']; ?> Industry Solution"
                            class="w-full h-full object-cover"
                            loading="lazy"
                        >
                        <div class="absolute inset-0 bg-gradient-to-br <?php echo $industry['color']; ?> opacity-80"></div>
                        <div class="absolute top-4 left-4">
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-<?php echo $industry['icon']; ?> w-6 h-6 text-white">
                                    <?php if ($industry['icon'] === 'shield'): ?>
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/>
                                    <?php elseif ($industry['icon'] === 'heart'): ?>
                                        <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                                    <?php elseif ($industry['icon'] === 'users'): ?>
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                        <circle cx="9" cy="7" r="4"/>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                    <?php elseif ($industry['icon'] === 'plane'): ?>
                                        <path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/>
                                    <?php endif; ?>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-3"><?php echo $industry['title']; ?></h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3"><?php echo $industry['description']; ?></p>
                        <a href="/industries/<?php echo sanitize_title($industry['title']); ?>" class="inline-flex items-center text-purple-600 hover:text-purple-700 p-0 h-auto font-semibold">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 w-4 h-4">
                                <path d="M5 12h14"/>
                                <path d="m12 5 7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Bottom CTA -->
        <div class="text-center mt-16">
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                <h3 class="text-2xl font-bold text-white mb-4">Ready to Get Started?</h3>
                <p class="text-purple-100 mb-6 max-w-2xl mx-auto">
                    Join thousands of businesses that trust Sizaf for their communication infrastructure needs.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/consultation" class="bg-white text-purple-600 hover:bg-gray-100 px-8 py-3 font-semibold rounded-full inline-flex items-center">
                        Get Free Consultation
                    </a>
                    <a href="/plans" class="border border-white/30 text-white hover:bg-white/10 px-8 py-3 font-semibold rounded-full inline-flex items-center">
                        View All Plans
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

 <style>
                @keyframes slideIn {
                    from {
                        transform: scaleX(0);
                    }
                    to {
                        transform: scaleX(1);
                    }
                }
            </style>

<?php
include 'footer.php';
?>