<?php
$metaTitle = "Global Network";
$metaDescription = "This is global network page.";
$metaKeywords = "IT solutions, software development, consultancy";
$metaImage = "https://yourdomain.com/images/og-governance.jpg";
$canonicalURL = "https://yourdomain.com/governance"; 
include('header.php');
?>

<div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100">
    <!-- Header -->
    <header class="bg-gradient-to-r from-purple-600 to-purple-700 text-white">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <!-- Breadcrumb -->
            <nav class="flex items-center gap-2 text-sm mb-6 text-purple-200" aria-label="Breadcrumb">
                <a href="/" class="flex items-center gap-1 hover:text-white">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span>Sizaf</span>
                </a>
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="text-white">Privacy Policy</span>
            </nav>

            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Privacy Policy</h1>
                    <p class="text-xl text-purple-100 max-w-2xl">
                      We're committed to protecting your privacy. Learn how we collect, use, and safeguard your personal information.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="/terms.pdf" download class="bg-white/10 backdrop-blur-sm text-white border border-white/20 px-4 py-2 rounded-md inline-flex items-center justify-center text-sm hover:bg-white/20 transition-colors">
                        <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        Download PDF
                    </a>
                    <button onclick="sharePage()" class="bg-white/10 backdrop-blur-sm text-white border border-white/20 px-4 py-2 rounded-md inline-flex items-center justify-center text-sm hover:bg-white/20 transition-colors">
                        <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                        </svg>
                        Share
                    </button>
                </div>
            </div>

            <!-- Last Updated -->
            <div class="mt-8 flex flex-wrap items-center gap-6 text-sm text-purple-100">
                <div class="flex items-center gap-2">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span>Effective date: January 1, 2021</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>8 min read</span>
                </div>
                <span class="bg-green-500/20 text-green-300 border border-green-500/30 rounded-full px-3 py-1 text-xs font-medium">Current Version</span>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-8">
        <div class="grid lg:grid-cols-12 gap-8">
            <!-- Sidebar -->
            <div class="lg:col-span-3">
                <div class="bg-white shadow-lg border border-slate-200 rounded-lg sticky top-8">
                    <div class="p-6 border-b border-slate-200">
                        <h2 class="flex items-center gap-2 text-lg font-bold text-slate-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield h-5 w-5 text-purple-600">
                             <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                            </svg>
                            Privacy Sections
                        </h2>
                    </div>
                    <div class="p-0">
                        <div class="h-[300px] overflow-y-auto">
                            <nav class="p-4 space-y-2">
                                <?php
                                $tableOfContents = [
                                                ['id' => 'introduction', 'title' => "Introduction", 'icon' => 'file-text'],
                                                ['id' => 'definitions', 'title' => "Definitions", 'icon' => 'book'],
                                                ['id' => 'information', 'title' => "Information Collection", 'icon' => 'database'],
                                                ['id' => 'datatypes', 'title' => "Types Of Data", 'icon' => 'layers'],
                                                ['id' => 'datause', 'title' => "Use Of Data", 'icon' => 'activity'],
                                                ['id' => 'retention', 'title' => "Data Retention", 'icon' => 'clock'],
                                                ['id' => 'transfer', 'title' => "Data Transfer", 'icon' => 'share'],
                                                ['id' => 'disclosure', 'title' => "Data Disclosure", 'icon' => 'unlock'],
                                                ['id' => 'security', 'title' => "Data Security", 'icon' => 'shield'],
                                                ['id' => 'rights', 'title' => "Your Rights", 'icon' => 'check-circle'],
                                                ['id' => 'providers', 'title' => "Service Providers", 'icon' => 'building'],
                                                ['id' => 'analytics', 'title' => "Analytics", 'icon' => 'bar-chart'],
                                                ['id' => 'tools', 'title' => "CI/CD Tools", 'icon' => 'terminal'],
                                                ['id' => 'advertising', 'title' => "Advertising", 'icon' => 'megaphone'],
                                                ['id' => 'remarketing', 'title' => "Behavioral Remarketing", 'icon' => 'repeat'],
                                                ['id' => 'payments', 'title' => "Payments", 'icon' => 'credit-card'],
                                                ['id' => 'links', 'title' => "Links To Other Sites", 'icon' => 'link'],
                                                ['id' => 'privacy', 'title' => "Children's Privacy", 'icon' => 'shield-question'],
                                                ['id' => 'policychanges', 'title' => "Policy Changes", 'icon' => 'file-pen'],
                                                ['id' => 'contact', 'title' => "Contact Us", 'icon' => 'mail']
                                ];

                                
                                $activeSection = isset($_GET['section']) ? $_GET['section'] : 'introduction';
                                
                                foreach ($tableOfContents as $index => $item): ?>
                                    <a 
                                        href="?section=<?= $item['id'] ?>#<?= $item['id'] ?>" 
                                        onclick="scrollToSection('<?= $item['id'] ?>'); return false;"
                                        class="w-full flex items-center gap-3 p-3 rounded-lg text-left transition-all <?= $activeSection === $item['id'] ? 'bg-gradient-to-r from-purple-600 to-purple-700 text-white' : 'hover:bg-slate-100 text-slate-700' ?>"
                                    >
                                        <span class="text-sm font-medium"><?= $index + 1 ?>.</span>
                                        <i  data-lucide="<?= $item['icon'] ?>"  class="w-4 h-4 <?= $activeSection === $item['id'] ? 'text-white' : 'text-slate-500' ?>"></i>
                                        <span class="font-medium"><?= $item['title'] ?></span>
                                    </a>
                                <?php endforeach; ?>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Contact Card -->
                <div class="bg-white shadow-lg border border-slate-200 rounded-lg mt-6">
                    <div class="p-6">
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield h-8 w-8 text-green-600 mx-auto mb-3">
                                <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                            </svg>
                            <h3 class="font-bold text-slate-900 mb-2">Your Privacy Matters</h3>
                            <p class="text-slate-600 text-sm mb-4">We use industry-standard security measures to protect your personal information.</p>
                                <div class="grid grid-cols-2 gap-2 text-xs">
                                <div class="bg-green-50 p-2 rounded">
                                    <div class="text-green-600 font-semibold">✓ Encrypted</div>
                                </div>
                                <div class="bg-blue-50 p-2 rounded">
                                    <div class="text-blue-600 font-semibold">✓ Secure</div>
                                </div>
                                <div class="bg-purple-50 p-2 rounded">
                                    <div class="text-purple-600 font-semibold">✓ Compliant</div>
                                </div>
                                <div class="bg-orange-50 p-2 rounded">
                                    <div class="text-orange-600 font-semibold">✓ Transparent</div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-lg border border-slate-200 rounded-lg mt-6">
                    <div class="p-6">
                        <div class="text-center">
                            <svg class="h-8 w-8 text-purple-600 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <h3 class="font-bold text-slate-900 mb-2">Privacy Questions</h3>
                            <p class="text-slate-600 text-sm mb-4">
                               Contact our privacy team for any questions about your data.
                            </p>
                            <a href="/contact" class="w-full bg-gradient-to-r from-purple-600 to-purple-700 text-white px-4 py-2 rounded-md inline-flex items-center justify-center text-sm">
                                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Contact Privacy Team
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-9">
                <!--Privacy at a glance-->
                <div class="rounded-lg border bg-card text-card-foreground shadow-lg border-slate-200 overflow-hidden mb-4">
                    <div class="bg-gradient-to-r from-blue-50 to-purple-50 p-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full flex items-center justify-center text-white flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info h-6 w-6">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 16v-4"></path>
                                    <path d="M12 8h.01"></path>
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-slate-900 mb-2">🔒 Privacy at a Glance</h2>
                                <p class="text-slate-700 mb-4">We collect minimal data to provide our services, never sell your information, and give you control over your privacy settings.</p>
                                <div class="grid grid-cols-1 sm:grid-cols-4 gap-3">
                                    <div class="bg-white rounded-lg p-3 text-center">
                                        <div class="text-2xl mb-1">🛡️</div>
                                        <div class="text-sm font-medium text-slate-700">Data Protected</div>
                                    </div>
                                    <div class="bg-white rounded-lg p-3 text-center">
                                        <div class="text-2xl mb-1">🚫</div>
                                        <div class="text-sm font-medium text-slate-700">Never Sold</div>
                                    </div>
                                    <div class="bg-white rounded-lg p-3 text-center">
                                        <div class="text-2xl mb-1">⚙️</div>
                                        <div class="text-sm font-medium text-slate-700">You Control</div>
                                    </div>
                                    <div class="bg-white rounded-lg p-3 text-center">
                                        <div class="text-2xl mb-1">📧</div>
                                        <div class="text-sm font-medium text-slate-700">Easy Opt-out</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-y-8">
                    <!-- Introduction Section -->
                    <section id="introduction" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">1. Introduction</h2>
                                    <p class="text-slate-600 mt-1">Welcome to Sizaf.com and our privacy comitment</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="space-y-6">
                                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info h-5 w-5 text-blue-600 mt-0.5 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M12 16v-4"></path>
                                            <path d="M12 8h.01"></path>
                                        </svg>
                                        <div>
                                            <h4 class="font-semibold text-blue-900 mb-2">Welcome to sizaf.com</h4>
                                            <p class="text-blue-800 text-sm">sizaf.com ("us", "we", or "our") offers various information &amp; offers (hereinafter referred to as "Service").</p>
                                        </div>
                                     </div>
                                </div>
                                <div class>
                                    <p class="text-slate-700">Our Privacy Policy governs your visit to 
                                        <a href="https://sizaf.com" class="text-purple-600 hover:underline">sizaf.com</a>,
                                        and explains how we collect, safeguard and disclose information that results from your use of our Service.</p>
                                    <p class="text-slate-700  pt-4">We use your data to provide and improve Service. By using Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, the terms used in this Privacy Policy have the same meanings as in our Terms and Conditions.</p>
                                    <p class="text-slate-700  pt-4">Our Terms and Conditions ("Terms") govern all use of our Service and together with the Privacy Policy constitutes your agreement with us ("agreement").</p>
                                 </div>
                            </div>
                        </div>
                    </section>

                    <!-- Definitions Section -->
                    <section id="definitions" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info h-5 w-5">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M12 16v-4"></path>
                                        <path d="M12 8h.01"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">2. Definitions</h2>
                                    <p class="text-slate-600 mt-1">Key terms used throughout this privacy policy</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="space-y-4">
                                    <div class="bg-slate-50 border border-slate-200 rounded-lg p-4">
                                        <h4 class="font-semibold text-slate-900 mb-2 flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe h-4 w-4 text-blue-500">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                                <path d="M2 12h20"></path>
                                            </svg>SERVICE
                                        </h4>
                                        <p class="text-slate-700 text-sm">Means the sizaf.com website operated by sizaf.com.</p>
                                    </div>
                                    <div class="bg-slate-50 border border-slate-200 rounded-lg p-4">
                                        <h4 class="font-semibold text-slate-900 mb-2 flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-4 w-4 text-green-500">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            </svg>PERSONAL DATA
                                        </h4>
                                        <p class="text-slate-700 text-sm">Means data about a living individual who can be identified from those data.</p>
                                    </div>
                                    <div class="bg-slate-50 border border-slate-200 rounded-lg p-4">
                                        <h4 class="font-semibold text-slate-900 mb-2 flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bar-chart3 h-4 w-4 text-purple-500">
                                                <path d="M3 3v18h18"></path>
                                                <path d="M18 17V9"></path>
                                                <path d="M13 17V5"></path>
                                                <path d="M8 17v-3"></path>
                                            </svg>USAGE DATA
                                        </h4>
                                        <p class="text-slate-700 text-sm">Data collected automatically either generated by the use of Service or from Service infrastructure itself.</p>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="bg-slate-50 border border-slate-200 rounded-lg p-4">
                                        <h4 class="font-semibold text-slate-900 mb-2 flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cookie h-4 w-4 text-orange-500">
                                                <path d="M12 2a10 10 0 1 0 10 10 4 4 0 0 1-5-5 4 4 0 0 1-5-5"></path>
                                                <path d="M8.5 8.5v.01"></path>
                                                <path d="M16 15.5v.01"></path>
                                                <path d="M12 12v.01"></path>
                                                <path d="M11 17v.01"></path>
                                                <path d="M7 14v.01"></path>
                                            </svg>COOKIES
                                        </h4>
                                        <p class="text-slate-700 text-sm">Small files stored on your device (computer or mobile device).</p>
                                    </div>
                                    <div class="bg-slate-50 border border-slate-200 rounded-lg p-4">
                                        <h4 class="font-semibold text-slate-900 mb-2 flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock h-4 w-4 text-red-500">
                                            <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>DATA CONTROLLER
                                    </h4>
                                    <p class="text-slate-700 text-sm">A natural or legal person who determines the purposes for which and the manner in which any personal data are processed.</p>
                                </div>
                                <div class="bg-slate-50 border border-slate-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-slate-900 mb-2 flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings h-4 w-4 text-indigo-500">
                                            <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>DATA PROCESSORS
                                    </h4>
                                    <p class="text-slate-700 text-sm">Any natural or legal person who processes the data on behalf of the Data Controller.</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </section>

                    <!-- information Coleection & Use Section -->
                    <section id="information" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-database h-5 w-5">
                                        <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                        <path d="M3 5V19A9 3 0 0 0 21 19V5"></path>
                                        <path d="M3 12A9 3 0 0 0 21 12"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">3. Information Collection and Use</h2>
                                    <p class="text-slate-600 mt-1">How and why we collect your information</p>
                                </div>
                            </div>
                        </div>
                       <div class="p-8">
                            <div>
                                <p class="text-slate-700">We collect several different types of information for various purposes to provide and improve our Service to you.</p>
                            </div>
                        </div>                                            
                    </section> 
                    
                    <!-- Types Of Data Collected Section-->
                    <section id="datatypes" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye h-5 w-5">
                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">4. Types of Data Collected</h2>
                                    <p class="text-slate-600 mt-1">What information we collect and how we use it</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                                <div class="space-y-8">
                                    <div>
                                        <h3 class="text-xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-5 w-5 text-blue-600">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg>Personal Data
                                    </h3>
                                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-4">
                                        <p class="text-blue-800 text-sm">While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you ("Personal Data"). Personally identifiable information may include, but is not limited to:</p>
                                    </div>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail h-4 w-4 text-slate-500">
                                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                            </svg><span class="text-sm text-slate-700">Email address</span>
                                        </div>
                                        <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-4 w-4 text-slate-500">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            </svg><span class="text-sm text-slate-700">First name and last name</span>
                                        </div>
                                        <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-smartphone h-4 w-4 text-slate-500">
                                                <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                                                <path d="M12 18h.01"></path>
                                            </svg>
                                            <span class="text-sm text-slate-700">Phone number</span>
                                        </div>
                                        <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin h-4 w-4 text-slate-500">
                                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                                <circle cx="12" cy="10" r="3"></circle>
                                            </svg>
                                            <span class="text-sm text-slate-700">Address, Country, State, Province, ZIP/Postal code</span>
                                        </div>
                                        <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cookie h-4 w-4 text-slate-500">
                                                <path d="M12 2a10 10 0 1 0 10 10 4 4 0 0 1-5-5 4 4 0 0 1-5-5"></path>
                                                <path d="M8.5 8.5v.01"></path>
                                                <path d="M16 15.5v.01"></path>
                                                <path d="M12 12v.01"></path>
                                                <path d="M11 17v.01"></path>
                                                <path d="M7 14v.01"></path>
                                            </svg>
                                            <span class="text-sm text-slate-700">Cookies and Usage Data</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bar-chart3 h-5 w-5 text-purple-600">
                                            <path d="M3 3v18h18"></path>
                                            <path d="M18 17V9"></path>
                                            <path d="M13 17V5"></path>
                                            <path d="M8 17v-3"></path>
                                        </svg>Usage Data
                                    </h3>
                                    <div class="bg-purple-50 border border-purple-200 rounded-lg p-4 mb-4">
                                        <p class="text-purple-800 text-sm">We may also collect information that your browser sends whenever you visit our Service or when you access Service by or through any device ("Usage Data").</p>
                                    </div>
                                    <div>
                                        <p class="text-slate-700">This Usage Data may include information such as your computer's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin h-5 w-5 text-green-600">
                                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>Location Data
                                    </h3>
                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <p class="text-green-800 text-sm">We may use and store information about your location if you give us permission to do so ("Location Data"). We use this data to provide features of our Service, to improve and customize our Service. You can enable or disable location services when you use our Service at any time by way of your device settings.</p>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cookie h-5 w-5 text-orange-600">
                                            <path d="M12 2a10 10 0 1 0 10 10 4 4 0 0 1-5-5 4 4 0 0 1-5-5"></path>
                                            <path d="M8.5 8.5v.01"></path>
                                            <path d="M16 15.5v.01"></path>
                                            <path d="M12 12v.01"></path>
                                            <path d="M11 17v.01"></path>
                                            <path d="M7 14v.01"></path>
                                        </svg>Tracking Cookies Data
                                    </h3>
                                    <div class="bg-orange-50 border border-orange-200 rounded-lg p-4 mb-4">
                                        <p class="text-orange-800 text-sm">We use cookies and similar tracking technologies to track the activity on our Service and we hold certain information. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent.</p>
                                    </div>
                                    <div class="grid md:grid-cols-3 gap-3">
                                        <div class="bg-slate-50 border border-slate-200 rounded-lg p-4">
                                            <h4 class="font-semibold text-slate-900 mb-2">Session Cookies</h4>
                                            <p class="text-slate-700 text-sm">We use Session Cookies to operate our Service.</p>
                                        </div>
                                        <div class="bg-slate-50 border border-slate-200 rounded-lg p-4">
                                            <h4 class="font-semibold text-slate-900 mb-2">Preference Cookies</h4>
                                            <p class="text-slate-700 text-sm">We use Preference Cookies to remember your preferences and various settings.</p>
                                        </div>
                                        <div class="bg-slate-50 border border-slate-200 rounded-lg p-4">
                                            <h4 class="font-semibold text-slate-900 mb-2">Security Cookies</h4>
                                            <p class="text-slate-700 text-sm">We use Security Cookies for security purposes.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                              
                    </section>
                    
                    <!--Use Of Data Section-->
                    <section id="datause" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings h-5 w-5">
                                        <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">5. Use of Data</h2>
                                    <p class="text-slate-600 mt-1">How we use your collected information</p>
                                </div>
                            </div>
                        </div>
                       <div class="p-8">
                        <div class="space-y-6">
                            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                <h4 class="font-semibold text-blue-900 mb-2">Data Usage Purposes</h4>
                                <p class="text-blue-800 text-sm">sizaf.com uses the collected data for various purposes:</p>
                            </div>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="space-y-3">
                                    <div class="flex items-start gap-3 p-3 bg-slate-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-green-500 mt-0.5 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <span class="text-sm text-slate-700">To provide and maintain our Service</span>
                                    </div>
                                    <div class="flex items-start gap-3 p-3 bg-slate-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-green-500 mt-0.5 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <span class="text-sm text-slate-700">To notify you about changes to our Service</span>
                                    </div>
                                    <div class="flex items-start gap-3 p-3 bg-slate-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-green-500 mt-0.5 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <span class="text-sm text-slate-700">To allow you to participate in interactive features when you choose to do so</span>
                                    </div>
                                    <div class="flex items-start gap-3 p-3 bg-slate-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-green-500 mt-0.5 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <span class="text-sm text-slate-700">To provide customer support</span>
                                    </div>
                                    <div class="flex items-start gap-3 p-3 bg-slate-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-green-500 mt-0.5 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <span class="text-sm text-slate-700">To gather analysis or valuable information so that we can improve our Service</span>
                                    </div>
                                    <div class="flex items-start gap-3 p-3 bg-slate-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-green-500 mt-0.5 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <span class="text-sm text-slate-700">To monitor the usage of our Service</span>
                                    </div>
                                    <div class="flex items-start gap-3 p-3 bg-slate-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-green-500 mt-0.5 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <span class="text-sm text-slate-700">To detect, prevent and address technical issues</span>
                                    </div>
                                </div>
                                <div class="space-y-3">
                                    <div class="flex items-start gap-3 p-3 bg-slate-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-green-500 mt-0.5 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <span class="text-sm text-slate-700">To fulfill any other purpose for which you provide it</span>
                                    </div>
                                    <div class="flex items-start gap-3 p-3 bg-slate-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-green-500 mt-0.5 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <span class="text-sm text-slate-700">To carry out our obligations and enforce our rights arising from any contracts</span>
                                    </div>
                                    <div class="flex items-start gap-3 p-3 bg-slate-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-green-500 mt-0.5 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <span class="text-sm text-slate-700">To provide you with notices about your account and/or subscription</span>
                                    </div>
                                    <div class="flex items-start gap-3 p-3 bg-slate-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-green-500 mt-0.5 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <span class="text-sm text-slate-700">To provide you with news, special offers and general information about other goods and services</span>
                                    </div>
                                    <div class="flex items-start gap-3 p-3 bg-slate-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-green-500 mt-0.5 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <span class="text-sm text-slate-700">In any other way we may describe when you provide the information</span>
                                    </div>
                                    <div class="flex items-start gap-3 p-3 bg-slate-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-green-500 mt-0.5 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <span class="text-sm text-slate-700">For any other purpose with your consent</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                          
                    </section>

                    <!--Retention Of Data  Section-->
                     <section id="retention" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw h-5 w-5">
                                        <path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
                                        <path d="M21 3v5h-5"></path>
                                        <path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
                                        <path d="M8 16H3v5"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">6. Retention Of Data</h2>
                                    <p class="text-slate-600 mt-1">How long we keep your information</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="space-y-6">
                                <div class="bg-amber-50 border border-amber-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-amber-900 mb-2">Data Retention Policy</h4>
                                    <p class="text-amber-800 text-sm">We will retain your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use your Personal Data to the extent necessary to comply with our legal obligations, resolve disputes, and enforce our legal agreements and policies.</p>
                                </div>
                                <div>
                                    <p class="text-slate-700">We will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period, except when this data is used to strengthen the security or to improve the functionality of our Service, or we are legally obligated to retain this data for longer time periods.</p>
                                </div>
                            </div>
                        </div>                                          
                    </section>

                    <!--Transfer Of Data Section-->
                    <section id="transfer" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right-left h-5 w-5">
                                        <path d="m16 3 4 4-4 4"></path>
                                        <path d="M20 7H4"></path>
                                        <path d="m8 21-4-4 4-4"></path>
                                        <path d="M4 17h16"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">7. Transfer Of Data</h2>
                                    <p class="text-slate-600 mt-1">International data transfers and security</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="space-y-6">
                                <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-5 w-5 text-red-600 mt-0.5 flex-shrink-0">
                                            <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                                            <path d="M12 9v4"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                        <div>
                                            <h4 class="font-semibold text-red-900 mb-2">International Transfers</h4>
                                            <p class="text-red-800 text-sm">Your information, including Personal Data, may be transferred to — and maintained on — computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ from those of your jurisdiction.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <p class="text-slate-700">If you are located inside or outside Malaysia and choose to provide information to us, please note that we transfer the data, including Personal Data, to Malaysia or other safe locations and process it there.</p>
                                    <p class="text-slate-700">Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.</p>
                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <h4 class="font-semibold text-green-900 mb-2">Security Commitment</h4>
                                        <p class="text-green-800 text-sm">sizaf.com will take all the steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of your data and other personal information.</p>
                                    </div>
                                </div>
                            </div>
                        </div>                                          
                    </section>

                    <!--Disclosure Of Data Section--> 
                    <section id="disclosure" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-share2 h-5 w-5">
                                        <circle cx="18" cy="5" r="3"></circle>
                                        <circle cx="6" cy="12" r="3"></circle>
                                        <circle cx="18" cy="19" r="3"></circle>
                                        <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                                        <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">8. Disclosure of Data</h2>
                                    <p class="text-slate-600 mt-1">When we may share your personal information</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="space-y-6">
                                <div class="bg-amber-50 border border-amber-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-amber-900 mb-2">Data Disclosure Policy</h4>
                                    <p class="text-amber-800 text-sm">We may disclose personal information that we collect, or you provide:</p>
                                </div>
                                <div class="space-y-4">
                                    <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                                        <h5 class="font-semibold text-red-900 mb-2">0.1 Disclosure for Law Enforcement</h5>
                                        <p class="text-red-800 text-sm">Under certain circumstances, we may be required to disclose your Personal Data if required to do so by law or in response to valid requests by public authorities.</p>
                                    </div>
                                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                        <h5 class="font-semibold text-blue-900 mb-2">0.2 Business Transaction</h5>
                                        <p class="text-blue-800 text-sm">If we or our subsidiaries are involved in a merger, acquisition or asset sale, your Personal Data may be transferred.</p>
                                    </div>
                                    <div class="bg-slate-50 border border-slate-200 rounded-lg p-4">
                                        <h5 class="font-semibold text-slate-900 mb-3">0.3 Other cases. We may disclose your information also:</h5>
                                        <div class="grid md:grid-cols-2 gap-3 text-sm text-slate-700">
                                            <div class="flex items-start gap-2">
                                                <span class="text-purple-500 mt-1">•</span>
                                                <span>to our subsidiaries and affiliates</span>
                                            </div>
                                            <div class="flex items-start gap-2">
                                                <span class="text-purple-500 mt-1">•</span>
                                                <span>to contractors, service providers, and other third parties we use to support our business</span>
                                            </div>
                                            <div class="flex items-start gap-2">
                                                <span class="text-purple-500 mt-1">•</span>
                                                <span>to fulfill the purpose for which you provide it</span>
                                            </div>
                                            <div class="flex items-start gap-2">
                                                <span class="text-purple-500 mt-1">•</span>
                                                <span>for the purpose of including your company's logo on our website</span>
                                            </div>
                                            <div class="flex items-start gap-2">
                                                <span class="text-purple-500 mt-1">•</span>
                                                <span>for any other purpose disclosed by us when you provide the information</span>
                                            </div>
                                            <div class="flex items-start gap-2">
                                                <span class="text-purple-500 mt-1">•</span>
                                                <span>with your consent in any other cases</span>
                                            </div>
                                            <div class="flex items-start gap-2">
                                                <span class="text-purple-500 mt-1">•</span>
                                                <span>if we believe disclosure is necessary or appropriate to protect the rights, property, or safety of the Company, our customers, or others</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                          
                    </section>

                    <!--Data Security Section--> 
                     <section id="security" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield h-5 w-5">
                                        <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">9. Security of Data</h2>
                                    <p class="text-slate-600 mt-1">How we protect your information</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="bg-amber-50 border border-amber-200 rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-5 w-5 text-amber-600 mt-0.5 flex-shrink-0">
                                        <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                                        <path d="M12 9v4"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-semibold text-amber-900 mb-2">Security Commitment</h4>
                                        <p class="text-amber-800 text-sm">The security of your data is important to us but remember that no method of transmission over the Internet or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                                
                    </section>

                    <!--Your Rights Section--> 
                    <section id="rights" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-5 w-5">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">10. Your Data Protection Rights Under PDPA</h2>
                                    <p class="text-slate-600 mt-1">Your rights under Malaysian data protection laws</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="space-y-6">
                                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-blue-900 mb-2">Personal Data Protection Act 2010 ("PDPA")</h4>
                                    <p class="text-blue-800 text-sm">This Privacy Policy sets out how sizaf.com collects, stores and handles personal information (as defined below) of individuals in accordance with the Personal Data Protection Act 2010 ("PDPA") and the laws of Malaysia.</p>
                                </div>
                                <div >
                                        <p class="text-slate-700">We aim to take reasonable steps to allow you to correct, amend, delete, or limit the use of your Personal Data.</p>
                                        <p class="text-slate-700">If you wish to be informed what Personal Data we hold about you and if you want it to be removed from our systems, please email us at
                                            <a href="mailto:info@sizaf.com" class="text-purple-600 hover:underline">info@sizaf.com</a>.</p>
                                            <p class="text-slate-700">In certain circumstances, you have the following data protection rights:</p>
                                        </div>
                                        <div class="grid md:grid-cols-2 gap-4">
                                            <div class="space-y-3">
                                                <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                                    <h5 class="font-semibold text-green-900 mb-2">0.1 Right to Access</h5>
                                                    <p class="text-green-800 text-sm">The right to access, update or to delete the information we have on you.</p>
                                                </div>
                                                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                                    <h5 class="font-semibold text-blue-900 mb-2">0.2 Right of Rectification</h5>
                                                    <p class="text-blue-800 text-sm">You have the right to have your information rectified if that information is inaccurate or incomplete.</p>
                                                </div>
                                                <div class="bg-purple-50 border border-purple-200 rounded-lg p-4">
                                                    <h5 class="font-semibold text-purple-900 mb-2">0.3 Right to Object</h5>
                                                    <p class="text-purple-800 text-sm">You have the right to object to our processing of your Personal Data.</p>
                                                </div>
                                            </div>
                                            <div class="space-y-3">
                                                <div class="bg-orange-50 border border-orange-200 rounded-lg p-4">
                                                    <h5 class="font-semibold text-orange-900 mb-2">0.4 Right of Restriction</h5>
                                                    <p class="text-orange-800 text-sm">You have the right to request that we restrict the processing of your personal information.</p>
                                                </div>
                                                <div class="bg-pink-50 border border-pink-200 rounded-lg p-4">
                                                    <h5 class="font-semibold text-pink-900 mb-2">0.5 Right to Data Portability</h5>
                                                    <p class="text-pink-800 text-sm">You have the right to be provided with a copy of your Personal Data in a structured, machine-readable and commonly used format.</p>
                                                </div>
                                                <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                                                    <h5 class="font-semibold text-red-900 mb-2">0.6 Right to Withdraw Consent</h5>
                                                    <p class="text-red-800 text-sm">You also have the right to withdraw your consent at any time where we rely on your consent to process your personal information.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-amber-50 border border-amber-200 rounded-lg p-4">
                                            <p class="text-amber-800 text-sm">Please note that we may ask you to verify your identity before responding to such requests. Please note, we may not able to provide Service without some necessary data.</p>
                                        </div>
                                    </div>
                                </div>                                        
                    </section>
                    
                    <!--Service Providers Section--> 
                     <section id="providers" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe h-5 w-5">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                        <path d="M2 12h20"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">11. Service Providers</h2>
                                    <p class="text-slate-600 mt-1">Third-party companies that help us provide our service</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="space-y-4">
                                <p class="text-slate-700">We may employ third party companies and individuals to facilitate our Service ("Service Providers"), provide Service on our behalf, perform Service-related services or assist us in analysing how our Service is used.</p>
                                <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-green-900 mb-2">Data Access Limitation</h4>
                                    <p class="text-green-800 text-sm">These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</p>
                                </div>
                            </div>
                        </div>                                         
                    </section>
                    <!--Analytics Section-->
                    <section id="analytics" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bar-chart3 h-5 w-5">
                                    <path d="M3 3v18h18"></path>
                                    <path d="M18 17V9"></path>
                                    <path d="M13 17V5"></path>
                                    <path d="M8 17v-3"></path>
                                </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">12. Analytics</h2>
                                    <p class="text-slate-600 mt-1">How we monitor and analyze service usage</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="space-y-4">
                               <p class="text-slate-700">We may use third-party Service Providers to monitor and analyze the use of our Service.</p>
                            </div>
                        </div>                                            
                    </section>

                    <!--CI/CD Tools Section--> 
                    <section id="tools" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings h-5 w-5">
                                        <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">13. CI/CD Tools</h2>
                                    <p class="text-slate-600 mt-1">Development and deployment automation</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div>
                                <p class="text-slate-700">We may use third-party Service Providers to automate the development process of our Service.</p>
                            </div>
                        </div>                                       
                    </section>

                    <!--Advertising Section-->
                      <section id="advertising" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-megaphone h-5 w-5">
                                        <path d="m3 11 18-5v12L3 14v-3z"></path>
                                        <path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">14. Advertising</h2>
                                    <p class="text-slate-600 mt-1">Third Party Advertising Services</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div>
                                <p class="text-slate-700">We may use third-party Service Providers to show advertisements to you to help support and maintain our Service.</p>
                            </div>
                        </div>                                       
                    </section>

                    <!--Behavioral Remarketing Section--> 
                    <section id="remarketing" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target h-5 w-5">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <circle cx="12" cy="12" r="6"></circle>
                                        <circle cx="12" cy="12" r="2"></circle>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">15. Behavioral Remarketing</h2>
                                    <p class="text-slate-600 mt-1">Targeted advertising based on your activity</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div>
                                <p class="text-slate-700">We may use remarketing services to advertise on third party websites to you after you visited our Service. We and our third-party vendors use cookies to inform, optimise and serve ads based on your past visits to our Service.</p>
                            </div>
                        </div>                                 
                    </section>

                    <!--Payments  Section--> 
                     <section id="payments" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card h-5 w-5">
                                        <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                        <line x1="2" x2="22" y1="10" y2="10"></line>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">16. Payments</h2>
                                    <p class="text-slate-600 mt-1">Payment processing and security</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="space-y-6">
                                <div>
                                    <p class="text-slate-700">We may provide paid products and/or services within Service. In that case, we use third-party services for payment processing (e.g. payment processors).</p>
                                </div>
                                <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-green-900 mb-2">Payment Security</h4>
                                    <p class="text-green-800 text-sm">We will not store or collect your payment card details. That information is provided directly to our third-party payment processors whose use of your personal information is governed by their Privacy Policy.
                                     These payment processors adhere to the standards set by the PCI Security Standards Council, which is a joint effort of brands like Visa, Mastercard, American Express and Discover. 
                                     PCI-DSS requirements help ensure the secure handling of payment information.</p>
                                </div>
                            </div>
                        </div>                              
                    </section>

                    <!--Links To Other Sites Section--> 
                     <section id="links" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link h-5 w-5"><path d="M15 3h6v6"></path>
                                        <path d="M10 14 21 3"></path>
                                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">17. Links To Other Sites</h2>
                                    <p class="text-slate-600 mt-1">Third-party websites and external links</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="space-y-6">
                                <div>
                                    <p class="text-slate-700">Our Service may contain links to other sites that are not operated by us. If you click a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy of every site you visit.</p>
                                </div>
                                <div class="bg-amber-50 border border-amber-200 rounded-lg p-4">
                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-5 w-5 text-amber-600 mt-0.5 flex-shrink-0">
                                            <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                                            <path d="M12 9v4"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                        <div>
                                            <h4 class="font-semibold text-amber-900 mb-2">Third-Party Disclaimer</h4>
                                            <p class="text-amber-800 text-sm">We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                               
                    </section>

                    <!--Children's Privacy Section--> 
                    <section id="privacy" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-x h-5 w-5">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <line x1="17" x2="22" y1="8" y2="13"></line>
                                        <line x1="22" x2="17" y1="8" y2="13"></line>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">18. Children's Privacy</h2>
                                    <p class="text-slate-600 mt-1">Protection of minors' personal information</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="space-y-6">
                                    <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                                        <div class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-5 w-5 text-red-600 mt-0.5 flex-shrink-0">
                                                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                                                <path d="M12 9v4"></path>
                                                <path d="M12 17h.01"></path>
                                            </svg>
                                            <div>
                                                <h4 class="font-semibold text-red-900 mb-2">Age Restriction</h4>
                                                <p class="text-red-800 text-sm">Our Services are not intended for use by children under the age of 18 ("Child" or "Children").</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-slate-700">We do not knowingly collect personally identifiable information from Children under 18. If you become aware that a Child has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from Children without verification of parental consent, we take steps to remove that information from our servers.</p>
                                    </div>
                            </div>
                        </div>                           
                    </section>
                    
                    <!--Changes To This Privacy Policy Section--> 
                      <section id="policychanges" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen h-5 w-5">
                                        <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.375 2.625a2.121 2.121 0 1 1 3 3L12 15l-4 1 1-4Z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">19. Changes to This Privacy Policy</h2>
                                    <p class="text-slate-600 mt-1">How we handle policy updates</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div>
                                <p class="text-slate-700">We may update our Privacy Policy from time to time. You are advised to review this Privacy Policy periodically for any changes. 
                                Changes to this Privacy Policy are effective when they are posted on this page.</p>
                            </div>
                        </div>                                 
                    </section>

                    <!--Contact Us Section--> 
                     <section id="contact" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail h-5 w-5">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">20. Contact Us</h2>
                                    <p class="text-slate-600 mt-1">Get in touch about privacy concerns</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail h-8 w-8 text-blue-600 mx-auto mb-4">
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                </svg>
                                <h4 class="font-semibold text-blue-900 mb-2">Privacy Questions?</h4>
                                <p class="text-blue-800 text-sm mb-4">If you have any questions about this Privacy Policy, please contact us by email:</p>
                                <a href="mailto:info@sizaf.com" class="inline-flex items-center gap-2 bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail h-4 w-4">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>info@sizaf.com
                                </a>
                            </div>
                        </div>                             
                    </section>
                </div>
            </div>   
        </div>
    </main>
</div>
<?php include 'footer.php'; ?>
<script>
  window.addEventListener('DOMContentLoaded', () => {
    lucide.createIcons();
  });
</script>
