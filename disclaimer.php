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
                <span class="text-white">Website Disclaimer</span>
            </nav>

            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Website Disclaimer</h1>
                    <p class="text-xl text-purple-100 max-w-2xl">
                     Important legal disclaimers and limitations regarding the use of our website and services.
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
                    <span>Last updated: January 1, 2021</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>6 min read</span>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-5 w-5 text-amber-600">
                                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                                <path d="M12 9v4"></path><path d="M12 17h.01"></path>
                            </svg>
                            Disclaimer Sections
                        </h2>
                    </div>
                    <div class="p-0">
                        <div class="h-[300px] overflow-y-auto">
                            <nav class="p-4 space-y-2">
                                <?php
                                $tableOfContents = [
                                    ['id' => 'webdisclaimer', 'title' => "Website Disclaimer", 'icon' => 'file-text'],
                                    ['id' => 'links', 'title' => "External Links", 'icon' => 'message-square'],
                                    ['id' => 'proffdisclaimer', 'title' => "Professional Disclaimer", 'icon' => 'credit-card'],
                                    ['id' => 'affiliatedisclaimer', 'title' => "Affiliates Disclaimer", 'icon' => 'gift'],
                                    ['id' => 'testimonialdisclaimer', 'title' => "Testimonials Disclaimer", 'icon' => 'refresh-cw'],
                                    ['id' => 'errors', 'title' => "Errors & Omissions", 'icon' => 'clock'],
                                    ['id' => 'contributors', 'title' => "Guest Contributors", 'icon' => 'dollar-sign'],
                                    ['id' => 'logos', 'title' => "Logos & Trademarks", 'icon' => 'external-link'],
                                    ['id' => 'contact', 'title' => "Contact Us", 'icon' => 'external-link']
                                ];
                                
                                $activeSection = isset($_GET['section']) ? $_GET['section'] : 'introduction';
                                
                                foreach ($tableOfContents as $index => $item): ?>
                                    <a 
                                        href="?section=<?= $item['id'] ?>#<?= $item['id'] ?>" 
                                        onclick="scrollToSection('<?= $item['id'] ?>'); return false;"
                                        class="w-full flex items-center gap-3 p-3 rounded-lg text-left transition-all <?= $activeSection === $item['id'] ? 'bg-gradient-to-r from-purple-600 to-purple-700 text-white' : 'hover:bg-slate-100 text-slate-700' ?>"
                                    >
                                        <span class="text-sm font-medium"><?= $index + 1 ?>.</span>
                                        <svg class="h-4 w-4 <?= $activeSection === $item['id'] ? 'text-white' : 'text-slate-500' ?> transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= 
                                                $item['icon'] === 'file-text' ? 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"' : 
                                                ($item['icon'] === 'message-square' ? 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"' : 
                                                ($item['icon'] === 'credit-card' ? 'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"' : 
                                                ($item['icon'] === 'gift' ? 'M12 8v13m8-8v7a2 2 0 01-2 2H6a2 2 0 01-2-2v-7m14 0H2m12 0a2 2 0 100-4 2 2 0 000 4zM6 8a2 2 0 100-4 2 2 0 000 4z"' : 
                                                ($item['icon'] === 'refresh-cw' ? 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"' : 
                                                ($item['icon'] === 'clock' ? 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"' : 
                                                ($item['icon'] === 'dollar-sign' ? 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"' : 
                                                ($item['icon'] === 'rotate-ccw' ? 'M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"' : 
                                                ($item['icon'] === 'edit' ? 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"' : 
                                                ($item['icon'] === 'x-circle' ? 'M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"' : 
                                                ($item['icon'] === 'bar-chart-3' ? 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"' : 
                                                ($item['icon'] === 'user-x' ? 'M13 7a4 4 0 11-8 0 4 4 0 018 0zM9 14a6 6 0 00-6 6v1h12v-1a6 6 0 00-6-6zM17 8l2 2m0 0l2 2m-2-2l-2 2m2-2l2-2"' : 
                                                ($item['icon'] === 'user' ? 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"' : 
                                                ($item['icon'] === 'copyright' ? 'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"' : 
                                                ($item['icon'] === 'message-circle' ? 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"' : 
                                                'M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"'))))))))))))))
                                            ?>"></path>
                                        </svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-8 w-8 text-amber-600 mx-auto mb-3">
                                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                                <path d="M12 9v4"></path>
                                <path d="M12 17h.01"></path>
                            </svg>
                            <h3 class="font-bold text-slate-900 mb-2">Important Notice</h3>
                            <p class="text-slate-600 text-sm mb-4">Please read all disclaimers carefully before using our services.</p>
                            <div class="grid grid-cols-2 gap-2 text-xs">
                                <div class="bg-amber-50 p-2 rounded">
                                    <div class="text-amber-600 font-semibold">⚠️ No Warranty</div>
                                </div>
                                <div class="bg-red-50 p-2 rounded">
                                    <div class="text-red-600 font-semibold">🚫 No Liability</div>
                                </div>
                                <div class="bg-blue-50 p-2 rounded">
                                    <div class="text-blue-600 font-semibold">ℹ️ Informational</div>
                                </div>
                                <div class="bg-purple-50 p-2 rounded">
                                    <div class="text-purple-600 font-semibold">👤 Your Risk</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-lg border border-slate-200 rounded-lg mt-6">
                    <div class="p-6">
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail h-8 w-8 text-orange-600 mx-auto mb-3">
                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                            </svg>
                            <h3 class="font-bold text-slate-900 mb-2">Questions?</h3>
                            <p class="text-slate-600 text-sm mb-4">Contact us if you have questions about these disclaimers.</p>
                            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary hover:bg-primary/90 h-10 px-4 py-2 w-full bg-gradient-to-r from-purple-600 to-purple-700 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail h-4 w-4 mr-2">
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                </svg>Contact Support
                            </button>
                        </div>
                    </div>
                    </div>
                 </div>

            <!-- Main Content -->
            <div class="lg:col-span-9">
                <!--Disclaimer Summary Section-->
               <div class="bg-gradient-to-r from-amber-50 to-orange-50 p-6 mb-4 shadow-lg rounded-lg">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-amber-600 to-orange-600 rounded-full flex items-center justify-center text-white flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-6 w-6">
                                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                                <path d="M12 9v4"></path>
                                <path d="M12 17h.01"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-xl font-bold text-slate-900 mb-2">⚠️ Disclaimer Summary</h2>
                            <p class="text-slate-700 mb-4">This website provides information for general purposes only. Use at your own risk and always consult professionals for specific advice.</p>
                            <div class="grid grid-cols-1 sm:grid-cols-4 gap-3">
                                <div class="bg-white rounded-lg p-3 text-center">
                                    <div class="text-2xl mb-1">ℹ️</div>
                                    <div class="text-sm font-medium text-slate-700">Informational Only</div>
                                </div>
                                <div class="bg-white rounded-lg p-3 text-center">
                                    <div class="text-2xl mb-1">🚫</div>
                                    <div class="text-sm font-medium text-slate-700">No Warranties</div>
                                </div>
                                <div class="bg-white rounded-lg p-3 text-center">
                                    <div class="text-2xl mb-1">👤</div>
                                    <div class="text-sm font-medium text-slate-700">Your Responsibility</div>
                                </div>
                                <div class="bg-white rounded-lg p-3 text-center">
                                    <div class="text-2xl mb-1">⚖️</div>
                                    <div class="text-sm font-medium text-slate-700">Limited Liability</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-y-8">
                    <!-- Website Disclaimer Section -->
                    <section id="webdisclaimer" class="bg-white shadow-lg border border-slate-200 rounded-lg">
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
                                    <h2 class="text-2xl font-bold text-slate-900">1. Website Disclaimer</h2>
                                    <p class="text-slate-600 mt-1">General information and warranty disclaimers</p>
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
                                            <h4 class="font-semibold text-blue-900 mb-2">Informational Purpose</h4>
                                            <p class="text-blue-800 text-sm">The information provided by 
                                            <strong>Sizaf</strong> ("Company", "we", "our", "us") on 
                                            <strong>Sizaf.com</strong> (the "Site") is for general informational purposes only.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-slate-700">All information on the Site is provided in good faith, however, we make no representation or warranty of any kind, express or implied, regarding the accuracy, adequacy, validity, reliability, availability, or completeness of any information on the Site. 
                                    Any information is subject to change as per our discretion without notice. Visitors are requested to check the latest info as required to keep themselves updated.</p>
                                </div>
                                <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-5 w-5 text-red-600 mt-0.5 flex-shrink-0">
                                            <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                                            <path d="M12 9v4"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                        <div>
                                            <h4 class="font-semibold text-red-900 mb-2">No Liability</h4>
                                            <p class="text-red-800 text-sm">
                                                <strong>UNDER NO CIRCUMSTANCES SHALL WE BE LIABLE TO YOU FOR ANY LOSS OR DAMAGE OF ANY KIND INCLUDING WITHOUT LIMITATION, ANY DIRECT, INDIRECT, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING OUT OF THE USE OF THE SITE OR YOUR 
                                                RELIANCE ON ANY INFORMATION PROVIDED ON THE SITE. YOUR USE OF THE SITE AND YOUR RELIANCE ON ANY INFORMATION ON THE SITE ARE SOLELY AT YOUR OWN RISK.</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--External Links Disclaimer Section -->
                    <section id="links" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link h-5 w-5">
                                        <path d="M15 3h6v6"></path>
                                        <path d="M10 14 21 3"></path>
                                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">2. External Links Disclaimer</h2>
                                    <p class="text-slate-600 mt-1">Third-party websites and external content</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="space-y-6">
                                <div>
                                    <p class="text-slate-700">The Site may contain (or you may be sent through the Site) links to other websites or content belonging to or originating from third parties or links to websites and features. Such external links are not investigated, monitored, or checked for accuracy, adequacy, validity, reliability, availability, or completeness by us.</p>
                                </div>
                                <div class="bg-amber-50 border border-amber-200 rounded-lg p-4">
                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-5 w-5 text-amber-600 mt-0.5 flex-shrink-0">
                                            <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                                            <path d="M12 9v4"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                        <div>
                                            <h4 class="font-semibold text-amber-900 mb-2">Third-Party Content Disclaimer</h4>
                                            <p class="text-amber-800 text-sm">
                                                <strong>WE DO NOT WARRANT, ENDORSE, GUARANTEE, OR ASSUME RESPONSIBILITY FOR THE ACCURACY OR RELIABILITY OF ANY INFORMATION OFFERED BY THIRD-PARTY WEBSITES LINKED THROUGH THE SITE OR ANY WEBSITE OR OTHER ADVERTISING. 
                                                WE WILL NOT BE A PARTY TO OR IN ANY WAY BE RESPONSIBLE FOR MONITORING ANY TRANSACTION BETWEEN YOU AND THIRD-PARTY PROVIDERS OF PRODUCTS OR SERVICES.</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--Professional Disclaimer Section -->
                    <section id="proffdisclaimer" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign h-5 w-5">
                                        <line x1="12" x2="12" y1="2" y2="22"></line>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">3. Professional Disclaimer</h2>
                                    <p class="text-slate-600 mt-1">Financial and professional advice limitations</p>
                                </div>
                            </div>
                        </div>
                      <div class="p-8">
                        <div class="space-y-6">
                            <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                                <h4 class="font-semibold text-red-900 mb-2">No Financial Advice</h4>
                                <p class="text-red-800 text-sm">The Site cannot and does not contain financial advice. The information is provided for general informational and educational purposes only and is not a substitute for professional financial advice.
                                 Accordingly, before taking any actions based upon such information, we encourage you to consult with the appropriate professionals. We do not provide any kind of financial advice.</p>
                                </div>
                                <div class="prose prose-slate max-w-none">
                                    <p class="text-slate-700 leading-relaxed">Content published on Sizaf.com is intended to be used and must be used for informational purposes only. 
                                    It is very important to do your own analysis before making any decision based on your own personal circumstances. You should take independent financial
                                    advice from a professional or independently research and verify any information that you find on our Website and wish to rely upon.</p>
                                </div>
                                <div class="bg-amber-50 border border-amber-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-amber-900 mb-2">Your Own Risk</h4>
                                    <p class="text-amber-800 text-sm">
                                    `<strong>THE USE OR RELIANCE OF ANY INFORMATION CONTAINED ON THIS SITE IS SOLELY AT YOUR OWN RISK.</strong>
                                    </p>
                                </div>
                            </div>
                        </div>                                           
                    </section> 
                    
                    <!--Affiliates Disclaimer Section-->
                    <section id="affiliatedisclaimer" class="bg-white shadow-lg border border-slate-200 rounded-lg">
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
                                    <h2 class="text-2xl font-bold text-slate-900">4. Affiliates Disclaimer</h2>
                                    <p class="text-slate-600 mt-1">Affiliate links and commission disclosure</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign h-5 w-5 text-blue-600 mt-0.5 flex-shrink-0">
                                        <line x1="12" x2="12" y1="2" y2="22"></line>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-semibold text-blue-900 mb-2">Affiliate Commission Disclosure</h4>
                                        <p class="text-blue-800 text-sm">The Site may contain links to affiliate websites, and we may receive an affiliate commission for any purchases or actions made by you on the affiliate websites using such links.</p>
                                    </div>
                                </div>
                            </div>
                        </div>                                           
                    </section>
                    
                    <!--Testimonials Disclaimer Section-->
                    <section id="testimonialdisclaimer" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square h-5 w-5">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">5. Testimonials Disclaimer</h2>
                                    <p class="text-slate-600 mt-1">User testimonials and experience disclaimers</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="bg-purple-50 border border-purple-200 rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square h-5 w-5 text-purple-600 mt-0.5 flex-shrink-0">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-semibold text-purple-900 mb-2">Personal Experiences</h4>
                                        <p class="text-purple-800 text-sm">The Site may contain testimonials by users of our products and/or services. These testimonials reflect the real-life experiences and opinions of such users. However, the experiences are personal to those particular users, and may not necessarily 
                                        be representative of all users of our products and/or services. We do not claim, and you should not assume that all users will have the same experiences.</p>
                                    </div>
                                </div>
                            </div>
                        </div>                                   
                    </section>

                    <!--Errors & Omissins Section-->
                     <section id="errors" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-alert h-5 w-5">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" x2="12" y1="8" y2="12"></line>
                                        <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">6. Errors and Omissions Disclaimer</h2>
                                    <p class="text-slate-600 mt-1">Information accuracy and liability limitations</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="space-y-6">
                                <div class="bg-amber-50 border border-amber-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-amber-900 mb-2">Information Accuracy</h4>
                                    <p class="text-amber-800 text-sm">While we have made every attempt to ensure that the information contained in this site has been obtained from reliable sources, Sizaf.com is not responsible for any errors or omissions or for the 
                                    results obtained from the use of this information. All information in this site is provided "as is", with no guarantee of completeness, accuracy, timeliness or of the results obtained from the use of this information, and without warranty of 
                                    any kind, express or implied, including, but not limited to warranties of performance, merchantability and fitness for a particular purpose.</p>
                                </div>
                                <div class="prose prose-slate max-w-none">
                                    <p class="text-slate-700 leading-relaxed">In no event will Sizaf.com, its related partnerships or corporations, or the partners, agents or employees thereof be liable to you or anyone else for any decision made or action taken in reliance on the
                                    information in this Site or for any consequential, special or similar damages, even if advised of the possibility of such damages.</p>
                                </div>
                            </div>
                        </div>                                        
                    </section>

                    <!--Guest Contributors Section-->
                    <section id="contributors" class="bg-white shadow-lg border border-slate-200 rounded-lg">
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
                                    <h2 class="text-2xl font-bold text-slate-900">7. Guest Contributors Disclaimer</h2>
                                    <p class="text-slate-600 mt-1">Third-party content and opinions</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="bg-slate-50 border border-slate-200 rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-5 w-5 text-slate-600 mt-0.5 flex-shrink-0">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-semibold text-slate-900 mb-2">Guest Content Disclaimer</h4>
                                        <p class="text-slate-700 text-sm">This Site may include content from guest contributors and any views or opinions expressed in such posts are personal and do not represent those of Sizaf.com or any of its staff or affiliates unless explicitly stated.</p>
                                    </div>
                                </div>
                            </div>
                        </div>                                         
                    </section>

                    <!--Logos & Trademarks Section--> 
                    <section id="logos" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copyright h-5 w-5">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M14.83 14.83a4 4 0 1 1 0-5.66"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">8. Logos and Trademarks Disclaimer</h2>
                                    <p class="text-slate-600 mt-1">Third-party intellectual property rights</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copyright h-5 w-5 text-green-600 mt-0.5 flex-shrink-0">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M14.83 14.83a4 4 0 1 1 0-5.66"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-semibold text-green-900 mb-2">Trademark Rights</h4>
                                        <p class="text-green-800 text-sm">All logos and trademarks of third parties referenced on sizaf.com are the trademarks and logos of their respective owners. Any inclusion of such trademarks or logos does not imply or constitute any approval, endorsement or sponsorship of Sizaf.com by such owners.</p>
                                    </div>
                                </div>
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
                                    <h2 class="text-2xl font-bold text-slate-900">9. Contact Us</h2>
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
                                <h4 class="font-semibold text-blue-900 mb-2">Questions About Our Disclaimers?</h4>
                                <p class="text-blue-800 text-sm mb-4">Should you have any feedback, comments, requests for technical support or other inquiries, please contact us by email:</p>
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