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
                <span class="text-white">Terms & Conditions</span>
            </nav>

            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Terms & Conditions</h1>
                    <p class="text-xl text-purple-100 max-w-2xl">
                        Please read these terms carefully before using our services. They outline your rights and
                        responsibilities when using Sizaf.com.
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
                    <span>Last updated: January 1, 2023</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>5 min read</span>
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
                            <svg class="h-5 w-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Table of Contents
                        </h2>
                    </div>
                    <div class="p-0">
                        <div class="h-[300px] overflow-y-auto">
                            <nav class="p-4 space-y-2">
                                <?php
                                $tableOfContents = [
                                    ['id' => 'introduction', 'title' => "Introduction", 'icon' => 'file-text'],
                                    ['id' => 'communications', 'title' => "Communications", 'icon' => 'message-square'],
                                    ['id' => 'purchases', 'title' => "Purchases", 'icon' => 'credit-card'],
                                    ['id' => 'contests', 'title' => "Contests & Promotions", 'icon' => 'gift'],
                                    ['id' => 'subscriptions', 'title' => "Subscriptions", 'icon' => 'refresh-cw'],
                                    ['id' => 'freetrial', 'title' => "Free Trial", 'icon' => 'clock'],
                                    ['id' => 'feechanges', 'title' => "Fee Changes", 'icon' => 'dollar-sign'],
                                    ['id' => 'refunds', 'title' => "Refunds", 'icon' => 'rotate-ccw'],
                                    ['id' => 'content', 'title' => "Content", 'icon' => 'edit'],
                                    ['id' => 'prohibited', 'title' => "Prohibited Uses", 'icon' => 'x-circle'],
                                    ['id' => 'analytics', 'title' => "Analytics", 'icon' => 'bar-chart-3'],
                                    ['id' => 'minors', 'title' => "No Use By Minors", 'icon' => 'user-x'],
                                    ['id' => 'accounts', 'title' => "Accounts", 'icon' => 'user'],
                                    ['id' => 'intellectual', 'title' => "Intellectual Property", 'icon' => 'copyright'],
                                    ['id' => 'feedback', 'title' => "Error Reporting", 'icon' => 'message-circle'],
                                    ['id' => 'links', 'title' => "External Links", 'icon' => 'external-link']
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
                            <svg class="h-8 w-8 text-purple-600 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <h3 class="font-bold text-slate-900 mb-2">Need Help?</h3>
                            <p class="text-slate-600 text-sm mb-4">
                                Have questions about these terms? We're here to help clarify anything.
                            </p>
                            <a href="/contact" class="w-full bg-gradient-to-r from-purple-600 to-purple-700 text-white px-4 py-2 rounded-md inline-flex items-center justify-center text-sm">
                                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Contact Support
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-9">
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
                                    <p class="text-slate-600 mt-1">Welcome to Sizaf.com and overview of our terms</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="space-y-6">
                                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                    <div class="flex items-start gap-3">
                                        <svg class="h-5 w-5 text-blue-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-blue-900 mb-2">Welcome to Sizaf.com</h3>
                                            <p class="text-blue-800 text-sm">
                                                Welcome to Sizaf.com ("Company", "we", "our", "us")! These terms govern your use of our
                                                website and services.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="prose prose-slate max-w-none">
                                    <p class="text-slate-700 mb-3  leading-relaxed">
                                        These Terms of Service ("Terms", "Terms of Service") govern your use of our website located at{" "}
                                        <a href="https://sizaf.com" class="text-purple-600 hover:underline">
                                            sizaf.com
                                        </a>{" "}
                                        (together or individually "Service") operated by{" "}
                                        <span class="font-semibold">Sizaf.com</span>.
                                    </p>

                                    <p class="text-slate-700 mb-2 leading-relaxed">
                                        Our Privacy Policy also governs your use of our Service and explains how we collect, safeguard
                                        and disclose information that results from your use of our web pages.
                                    </p>

                                    <p class="text-slate-700 leading-relaxed">
                                        Your agreement with us includes these Terms and our Privacy Policy ("Agreements"). By visiting
                                        our website you acknowledge that you have read and understood Agreements, and agree to be bound
                                        by them.
                                    </p>
                                </div>

                                <div class="bg-amber-50 border border-amber-200 rounded-lg p-4">
                                    <div class="flex items-start gap-3">
                                        <svg class="h-5 w-5 text-amber-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                        </svg>
                                        <div>
                                            <h3 class="font-semibold text-amber-900 mb-2">Important Notice</h3>
                                            <p class="text-amber-800 text-sm">
                                                If you do not agree with (or cannot comply with) these Terms, you may not use the Service.
                                                However, please let us know by emailing{" "}
                                                <a href="mailto:info@sizaf.com" class="underline">
                                                    info@sizaf.com
                                                </a>
                                                , so we can try to find a solution. These Terms apply to all visitors, users, and others who
                                                wish to access or use the Service.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Communications Section -->
                    <section id="communications" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">2. Communications</h2>
                                    <p class="text-slate-600 mt-1">How we communicate with you and your preferences</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="space-y-6">
                                <div class="prose prose-slate max-w-none">
                                    <p class="text-slate-700 leading-relaxed">
                                        By using our Service, you agree to subscribe to newsletters, marketing or promotional materials
                                        and other information we may send. However, you may opt out of receiving any, or all, of these
                                        communications from us by following the unsubscribe link or by emailing at{" "}
                                        <a href="mailto:info@sizaf.com" class="text-purple-600 hover:underline">
                                            info@sizaf.com
                                        </a>
                                        .
                                    </p>
                                </div>

                                <div class="grid md:grid-cols-2 gap-4">
                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="h-5 w-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <h3 class="font-semibold text-green-900">What we send</h3>
                                        </div>
                                        <ul class="text-green-800 text-sm space-y-1">
                                            <li>• Service updates</li>
                                            <li>• Newsletter content</li>
                                            <li>• Promotional materials</li>
                                            <li>• Important announcements</li>
                                        </ul>
                                    </div>

                                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                            </svg>
                                            <h3 class="font-semibold text-blue-900">How to unsubscribe</h3>
                                        </div>
                                        <ul class="text-blue-800 text-sm space-y-1">
                                            <li>• Click unsubscribe link in emails</li>
                                            <li>• Email info@sizaf.com</li>
                                            <li>• Update preferences in account</li>
                                            <li>• Contact customer support</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Purchases Section -->
                    <section id="purchases" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">3. Purchases</h2>
                                    <p class="text-slate-600 mt-1">Terms related to purchasing our products and services</p>
                                </div>
                            </div>
                        </div>
                    </section>  
                </div>
            </div>   
        </div>
    </main>
</div>
<?php include 'footer.php'; ?>