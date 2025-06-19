<?php
$metaTitle = "Comprehensive Technology Services - Sizaf";
$metaDescription = "Explore Sizaf's wide range of technology services designed to drive innovation, efficiency, and growth across various industries. Tailored solutions for your business needs.";
$metaKeywords = "governance security, public sector IT solutions, secure infrastructure, government technology, network services";
$metaImage = "https://yourdomain.com/images/og-governance.jpg";
$canonicalURL = "https://sizaf.com/technology-services.php"; 
include('header.php');
?>
<?php
$services = [
    [
        'icon' => 'Globe',
        'title' => "WEB & MEDIA SERVICES",
        'color' => "from-blue-600 to-purple-600",
        'features' => [
            "Websites, Domains & Emails",
            "Digital Marketing",
            "Data Scrapping",
            "Animation, VFX, Adverts",
            "Creative Content & Production",
        ],
        'image' => "./assest/gallery1.jpg?height=300&width=400",
    ],
    [
        'icon' => 'Server',
        'title' => "TECH INFRA SERVICES",
        'color' => "from-purple-600 to-pink-600",
        'features' => [
            "Hardware Services",
            "Security Solutions",
            "Storage Solutions",
            "Cloud Infrastructure",
            "System Integration",
        ],
        'image' => "./assest/gallery2.jpeg?height=300&width=400",
    ],
    [
        'icon' => 'Network',
        'title' => "NETWORK SERVICES",
        'color' => "from-green-600 to-blue-600",
        'features' => [
            "Network Design & Setup",
            "WiFi Solutions",
            "VPN Configuration",
            "Network Security",
            "Performance Monitoring",
        ],
        'image' => "/placeholder.svg?height=300&width=400",
    ],
    [
        'icon' => 'Settings',
        'title' => "MANAGED IT SERVICES",
        'color' => "from-orange-600 to-red-600",
        'features' => ["24/7 IT Support", "System Maintenance", "Backup Solutions", "IT Consulting", "Remote Monitoring"],
        'image' => "/placeholder.svg?height=300&width=400",
    ],
];

$page_title = "SizaF Net With Tech - Premium Technology Solutions";
$page_description = "SizaF delivers cutting-edge technology services including web development, IT infrastructure, network solutions, and managed IT services starting at RM 1.99/month.";
$page_keywords = "technology services, web development, IT solutions, network services, managed IT, Malaysia tech services";
?>

    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img
                src="./assest/Technology-services-bg.jpeg"
                alt="Technology workspace with computers and servers"
                class="w-full h-full object-cover"
                loading="lazy"
            >
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-800/80 to-transparent"></div>
        </div>

        <!-- Floating Elements -->
        <div class="absolute top-20 right-20 w-20 h-20 bg-blue-500/20 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute bottom-40 left-10 w-32 h-32 bg-purple-500/20 rounded-full blur-2xl animate-bounce"></div>

        <!-- Hero Content -->
        <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">
            <!-- <span class="inline-flex items-center mb-6 bg-blue-600/20 text-blue-300 border border-blue-400/30 hover:bg-blue-600/30 px-3 py-1 rounded-full text-sm font-medium">
                <i data-lucide="zap" class="w-4 h-4 mr-2"></i>
                Premium Technology Solutions
            </span> -->

            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                At <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">SizaF</span> we deliver the
                <br>
                <span class="text-4xl md:text-6xl text-blue-300">best of Technology Services</span>
            </h1>

            <p class="text-xl md:text-2xl text-slate-300 mb-8 max-w-2xl mx-auto">
                Get Customized services starting at
                <span class="text-green-400 font-bold"> RM 1.99 / month</span>
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#contact" class="bg-pink-500 hover:bg-pink-600 text-white px-8 py-4 text-lg group rounded-lg font-medium inline-flex items-center transition-colors duration-200">
                    Get Started Today
                    <i data-lucide="arrow-right" class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                </a>

                <!-- <button class="border border-white/30 text-white hover:bg-white/10 px-8 py-4 text-lg group rounded-lg inline-flex items-center transition-colors duration-200">
                    <i data-lucide="play" class="mr-2 w-5 h-5"></i>
                    Watch Demo
                </button> -->
            </div>

            <!-- Stats -->
            <div class="flex justify-center gap-8 mt-12 text-center">
                <div class="text-white">
                    <div class="text-3xl font-bold text-blue-400">500+</div>
                    <div class="text-sm text-slate-300">Happy Clients</div>
                </div>
                <div class="text-white">
                    <div class="text-3xl font-bold text-purple-400">99.9%</div>
                    <div class="text-sm text-slate-300">Uptime</div>
                </div>
                <div class="text-white">
                    <div class="text-3xl font-bold text-green-400">24/7</div>
                    <div class="text-sm text-slate-300">Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Welcome Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div
                class="absolute inset-0"
                style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fillRule=\'evenodd\'%3E%3Cg fill=\'%23000000\' fillOpacity=\'0.1\'%3E%3Ccircle cx=\'30\' cy=\'30\' r=\'2\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')"
            ></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-16">
                <span class="inline-flex items-center mb-4 bg-blue-100 text-blue-700 hover:bg-blue-200 px-3 py-1 rounded-full text-sm font-medium">
                    <i data-lucide="star" class="w-4 h-4 mr-2"></i>
                    Welcome to the Future
                </span>

                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    WELCOME TO
                    <span class="bg-gradient-to-r from-pink-500 to-purple-600 bg-clip-text text-transparent">
                        SIZAF NET WITH TECH.
                    </span>
                </h2>

                <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                    Empowering businesses with cutting-edge technology solutions designed to accelerate growth and innovation.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <?php foreach ([
                    ['icon' => 'globe', 'title' => "WEB & MEDIA SERVICES", 'desc' => "Complete digital presence solutions"],
                    ['icon' => 'server', 'title' => "TECH INFRA SERVICES", 'desc' => "Robust infrastructure management"],
                    ['icon' => 'network', 'title' => "NETWORK SERVICES", 'desc' => "Seamless connectivity solutions"],
                    ['icon' => 'settings', 'title' => "MANAGED IT SERVICES", 'desc' => "Comprehensive IT support"],
                ] as $service): ?>
                <div class="group hover:shadow-xl transition-all duration-300 border-0 bg-gradient-to-br from-white to-slate-50 hover:scale-105 rounded-xl overflow-hidden">
                    <div class="p-6 text-center">
                        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i data-lucide="<?php echo $service['icon']; ?>" class="w-8 h-8 text-white"></i>
                        </div>
                        <h3 class="font-bold text-slate-800 mb-2 group-hover:text-blue-600 transition-colors">
                            <?php echo $service['title']; ?>
                        </h3>
                        <p class="text-sm text-slate-600"><?php echo $service['desc']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="flex justify-center">
                <div class="flex items-center gap-4">
                    <div class="text-center">
                        <a href="#services" class="bg-pink-500 hover:bg-pink-600 text-white px-8 py-3 rounded-lg inline-flex items-center font-medium">
                            Explore All Services
                            <i data-lucide="arrow-right" class="ml-2 w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Showcase -->
    <section id="services" class="py-20 bg-gradient-to-br from-pink-500 via-purple-600 to-blue-600 relative overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white/10 rounded-full blur-3xl -translate-x-48 -translate-y-48"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-400/20 rounded-full blur-3xl translate-x-48 translate-y-48"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-16">
                <span class="inline-flex items-center mb-4 bg-white/20 text-white border border-white/30 hover:bg-white/30 px-3 py-1 rounded-full text-sm font-medium">
                    <i data-lucide="trending-up" class="w-4 h-4 mr-2"></i>
                    Business-Focused Solutions
                </span>

                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                    SIZAF TECHNOLOGY SERVICES
                    <br>
                    <span class="text-3xl md:text-4xl text-blue-200">DESIGNED WITH YOUR BUSINESS IN MIND.</span>
                </h2>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">
                <?php foreach (array_slice($services, 0, 2) as $service): ?>
                <div class="group overflow-hidden border-0 bg-white/10 backdrop-blur-lg hover:bg-white/20 transition-all duration-500 hover:scale-105 rounded-xl">
                    <div class="relative h-48 overflow-hidden">
                        <img
                            src="<?php echo $service['image']; ?>"
                            alt="<?php echo $service['title']; ?> service"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                            loading="lazy"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t <?php echo $service['color']; ?> opacity-80"></div>

                        <div class="absolute top-4 left-4">
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                                <i data-lucide="<?php echo strtolower($service['icon']); ?>" class="w-6 h-6 text-white"></i>
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-4"><?php echo $service['title']; ?></h3>

                        <div class="space-y-3 mb-6">
                            <?php foreach ($service['features'] as $feature): ?>
                            <div class="flex items-center gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-green-400 flex-shrink-0"></i>
                                <span class="text-white/90"><?php echo $feature; ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <a href="#" class="w-full border border-white/30 text-white hover:bg-white/10 group px-4 py-2 rounded-lg inline-flex items-center justify-center transition-colors">
                            Service Details
                            <i data-lucide="arrow-right" class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Additional Services Preview -->
            <div class="grid md:grid-cols-2 gap-6 mt-12">
                <?php foreach (array_slice($services, 2) as $service): ?>
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 hover:bg-white/20 transition-all duration-300 group rounded-xl">
                    <div class="p-6">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br <?php echo $service['color']; ?> rounded-xl flex items-center justify-center">
                                <i data-lucide="<?php echo strtolower($service['icon']); ?>" class="w-6 h-6 text-white"></i>
                            </div>
                            <h3 class="text-lg font-bold text-white"><?php echo $service['title']; ?></h3>
                        </div>

                        <div class="grid grid-cols-2 gap-2">
                            <?php foreach (array_slice($service['features'], 0, 4) as $feature): ?>
                            <div class="flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-4 h-4 text-green-400"></i>
                                <span class="text-sm text-white/80"><?php echo $feature; ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <button class="w-full mt-4 text-white hover:bg-white/10 group px-4 py-2 rounded-lg inline-flex items-center justify-center transition-colors">
                            Learn More
                            <i data-lucide="arrow-right" class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- CTA Section -->
            <div id="contact" class="text-center mt-16">
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 max-w-2xl mx-auto">
                    <h3 class="text-2xl font-bold text-white mb-4">Ready to Transform Your Business?</h3>
                    <p class="text-white/80 mb-6">
                        Join hundreds of satisfied clients who trust SizaF for their technology needs.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#contact-form" class="bg-white text-purple-600 hover:bg-slate-100 px-8 py-3 rounded-lg inline-flex items-center font-medium">
                            Start Your Project
                            <i data-lucide="arrow-right" class="ml-2 w-5 h-5"></i>
                        </a>
                        <button class="border border-white/30 text-white hover:bg-white/10 px-8 py-3 rounded-lg inline-flex items-center font-medium">
                            Schedule Consultation
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "SizaF Net With Tech",
        "url": "https://sizaf.net",
        "logo": "https://sizaf.net/images/logo.png",
        "description": "Premium technology solutions provider offering web services, IT infrastructure, network solutions, and managed IT services.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "123 Tech Street",
            "addressLocality": "Kuala Lumpur",
            "addressCountry": "Malaysia"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+60 12-345 6789",
            "contactType": "customer service",
            "email": "info@sizaf.net",
            "areaServed": "MY"
        },
        "sameAs": [
            "https://facebook.com/sizaftech",
            "https://twitter.com/sizaftech",
            "https://linkedin.com/company/sizaftech"
        ]
    }
    </script>

    <!-- Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>

    <?php include 'footer.php'; ?>
