<?php
$metaTitle = "Terms-Conditions";
$metaDescription = "This is the terms and condition page .";
$metaKeywords = "IT solutions, software development, consultancy";
$metaImage = "https://yourdomain.com/images/og-governance.jpg";
$canonicalURL = "https://sizaf.com/terms-conditions.php"; 
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
                        <div class="p-8">
                            <div class="bg-slate-50 border border-slate-200 rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <div>
                                      <h4 class="font-semibold text-slate-900 mb-3">Required Purchase Information</h4>
                                      <p class="text-slate-700 text-sm leading-relaxed">If you wish to purchase any product or service made available through Service ("Purchases"), 
                                        you may be asked to supply certain information relevant to your Purchase including but not limited to,
                                        your credit or debit card number, the expiration date of your card, your CVV, and your billing address.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=" space-y-4 mt-6">
                                <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield h-5 w-5 text-green-600 mt-0.5 flex-shrink-0">
                                            <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                        </svg>
                                        <div>
                                            <h4 class="font-semibold text-green-900 mb-2 mt-4">Your Warranties</h4>
                                            <p class="text-green-800 text-sm">You represent and warrant that: (i) you have the legal right to use any card(s) or other payment method(s) in connection with any Purchase; and that (ii) the information you supply to us is true, correct and complete.</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-slate-700 leading-relaxed">We may employ the use of third party services for the purpose of facilitating payment and the completion of Purchases. By submitting your information, you grant us the right to provide the information to these third parties subject to our Privacy Policy.</p>
                                <div class="bg-amber-50 border border-amber-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-amber-900 mb-3">Order Cancellation Rights</h4>
                                    <div class="space-y-2 text-amber-800 text-sm">
                                        <p>We reserve the right to refuse or cancel your order at any time for reasons including:</p>
                                        <ul class="list-disc list-inside space-y-1 ml-4"><li>Product or service availability issues</li>
                                            <li>Errors in description or price</li>
                                            <li>Errors in your order</li>
                                            <li>Suspected fraud or unauthorized transactions</li>
                                        </ul>
                                     </div>
                                </div>
                            </div> 
                        </div>                                               
                    </section> 
                    
                    <!-- Contests & Promotions Section-->
                    <section id="contests" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gift h-5 w-5"><rect x="3" y="8" width="18" height="4" rx="1"></rect><path d="M12 8v13"></path><path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path>
                                   <path d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"></path>
                                </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">4. Contests, Sweepstakes and Promotions</h2>
                                    <p class="text-slate-600 mt-1">Rules for promotional activities and contests</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                           <p class="text-slate-700 leading-relaxed">Any contests, sweepstakes or other promotions (collectively, "Promotions") made available through Service may be governed by rules that
                             are separate from these Terms of Service. If you participate in any Promotions, please review the applicable rules as
                              well as our Privacy Policy.
                             If the rules for a Promotion conflict with these Terms of Service, Promotion rules will apply.</p>
                        </div>                                               
                    </section>
                    
                    <!--Subscriptions Section-->
                    <section id="subscriptions" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw h-5 w-5"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path><path d="M21 3v5h-5"></path>
                                   <path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path><path d="M8 16H3v5"></path>
                                </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">5. Subscriptions</h2>
                                    <p class="text-slate-600 mt-1">Billing cycles, payment methods, and subscription management</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="space-y-6">
                                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-blue-900 mb-2">Billing Cycles</h4>
                                    <p class="text-blue-800 text-sm">Some parts of Service are billed on a subscription basis ("Subscriptions"). You will be billed in advance on a recurring and periodic basis ("Billing Cycle"). Billing cycles will be set depending on the type of subscription plan you select when purchasing a Subscription.</p>
                                </div>
                                <div class="space-y-4">
                                    <p class="text-slate-700 leading-relaxed">At the end of each Billing Cycle, your Subscription will automatically renew under the exact same conditions unless you cancel it or sizaf.com cancels it. You may cancel your Subscription renewal either through your online account management page or by contacting info@sizaf.com customer support team.</p>
                                    <div class="bg-amber-50 border border-amber-200 rounded-lg p-4">
                                        <h4 class="font-semibold text-amber-900 mb-2">Payment Requirements</h4>
                                        <p class="text-amber-800 text-sm">A valid payment method is required to process the payment for your subscription. You shall provide sizaf.com with accurate and complete billing information that may include but not limited to full name, address, state, postal or zip code, telephone number, and a valid payment method information. By submitting such payment information, you automatically authorize sizaf.com to charge all Subscription fees incurred through your account to any such payment instruments.</p>
                                    </div>
                                    <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                                        <h4 class="font-semibold text-red-900 mb-2">Service Termination</h4>
                                        <p class="text-red-800 text-sm">Should automatic billing fail to occur for any reason, Sizaf.com reserves the right to terminate your access to the Service with immediate effect.</p>
                                    </div>
                                </div>
                            </div>
                        </div>                                             
                    </section>

                    <!--Free Trial Section-->
                     <section id="freetrial" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-5 w-5">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">6. Free Trial</h2>
                                    <p class="text-slate-600 mt-1">Trial period terms and automatic billing</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                <h4 class="font-semibold text-green-900 mb-2">Free Trial Offer</h4>
                                <p class="text-green-800 text-sm">Sizaf.com may, at its sole discretion, offer a Subscription with a free trial for a limited period of time ("Free Trial").</p>
                            </div>
                            <div class="space-y-4">
                                <p class="text-slate-700 leading-relaxed pt-4">You may be required to enter your billing information in order to sign up for Free Trial.</p>
                                <div class="bg-amber-50 border border-amber-200 rounded-lg p-6">
                                    <h4 class="font-semibold text-amber-900 mb-2">Important Notice</h4>
                                    <p class="text-amber-800 text-sm">If you do enter your billing information when signing up for Free Trial, you will not be charged by Sizaf.com until Free Trial has expired. On the last day of Free Trial period, unless you cancelled your Subscription, you will be automatically charged the applicable Subscription fees for the type of Subscription you have selected.</p>
                                </div>
                                <p class="text-slate-700 leading-relaxed">At any time and without notice, Sizaf.com reserves the right to (i) modify Terms of Service of Free Trial offer, or (ii) cancel such Free Trial offer.</p>
                            </div>
                        </div>                                             
                    </section>

                    <!--Fee Changes Section-->
                    <section id="feechanges" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign h-5 w-5"><line x1="12" x2="12" y1="2" y2="22"></line>
                                 <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">7. Fee Changes</h2>
                                    <p class="text-slate-600 mt-1">How subscription fees may be modified</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="space-y-4">
                                <p class="text-slate-700 leading-relaxed">Sizaf.com, at its sole discretion, may modify Subscription fees at any time. Any changes to the Subscription fee will take effect at the end of the current Billing Cycle.</p>
                                <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                                    <h4 class="font-semibold text-blue-900 mb-2">Advance Notice</h4>
                                    <p class="text-blue-800 text-sm">Sizaf.com will provide you with a reasonable prior notice of any change in Subscription fees to give you an opportunity to modify or terminate your Subscription before such change becomes effective.</p>
                                </div>
                                <p class="text-slate-700 leading-relaxed">Your continued use of Service after Subscription fee change comes into effect constitutes your agreement to pay the modified Subscription fee amount.</p>
                            </div>
                        </div>                                            
                    </section>

                    <!--Refunds Section--> 
                    <section id="refunds" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rotate-ccw h-5 w-5">
                                    <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                                    <path d="M3 3v5h5"></path>
                                </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">8. Refunds</h2>
                                    <p class="text-slate-600 mt-1">Refund policy and procedures</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="space-y-4">
                               <p class="text-slate-700">We issue refunds for Contracts within 30 days of the original purchase of the Contract.</p>
                            </div>
                        </div>                                            
                    </section>

                    <!--Content Section--> 
                     <section id="content" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen h-5 w-5"><path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                  <path d="M18.375 2.625a2.121 2.121 0 1 1 3 3L12 15l-4 1 1-4Z"></path>
                                </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">9. Content</h2>
                                    <p class="text-slate-600 mt-1">User-generated content and licensing terms</p>
                                </div>
                            </div>
                        </div>
                       <div class="p-8">
                        <div class="space-y-6">
                            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                <h4 class="font-semibold text-blue-900 mb-2">Content Responsibility</h4>
                                <p class="text-blue-800 text-sm">Our Service allows you to post, link, store, share and otherwise make available certain information, text, graphics, videos, or other material ("Content"). You are responsible for Content that you post on or through Service, including its legality, reliability, and appropriateness.</p></div>
                                <div class="prose prose-slate max-w-none space-y-4">
                                    <div class="bg-green-50 border border-green-200 rounded-lg p-6">
                                        <h4 class="font-semibold text-green-900 mb-2">Content License</h4>
                                        <p class="text-green-800 text-sm">By posting Content on or through Service, You represent and warrant that: (i) Content is yours (you own it) and/or you have the right to use it and the right to grant us the rights and license as provided in these Terms, and (ii) that the posting of your Content on or through Service does not violate the privacy rights, publicity rights, copyrights, contract rights or any other rights of any person or entity.</p>
                                    </div>
                                    <p class="text-slate-700 leading-relaxed">You retain any and all of your rights to any Content you submit, post or display on or through Service and you are responsible for protecting those rights. We take no responsibility and assume no liability for Content you or any third party posts on or through Service.</p>
                                    <div class="bg-amber-50 border border-amber-200 rounded-lg p-6">
                                        <h4 class="font-semibold text-amber-900 mb-2">Content Monitoring</h4>
                                        <p class="text-amber-800 text-sm">Sizaf.com has the right but not the obligation to monitor and edit all Content provided by users. In addition, Content found on or through this Service are the property of Sizaf.com or used with permission. You may not distribute, modify, transmit, reuse, download, repost, copy, or use said Content, whether in whole or in part, for commercial purposes or for personal gain, without express advance written permission from us.</p>
                                    </div>
                                </div>
                            </div>
                        </div>                                           
                    </section>

                    <!--Prohibited Uses Section--> 
                    <section id="prohibited" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-red-600 to-red-700 rounded-lg flex items-center justify-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-x h-5 w-5">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="m15 9-6 6"></path><path d="m9 9 6 6"></path>
                                </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">10. Prohibited Uses</h2>
                                    <p class="text-slate-600 mt-1">Activities that are not allowed on our service</p>
                                </div>
                            </div>
                        </div>
                       <div class="p-8">
                        <div class="space-y-6">
                            <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                                <h4 class="font-semibold text-red-900 mb-2">General Prohibition</h4>
                                <p class="text-red-800 text-sm">You may use Service only for lawful purposes and in accordance with Terms. You agree not to use Service:</p>
                            </div>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="space-y-3">
                                    <h5 class="font-semibold text-slate-900">Legal Violations</h5>
                                    <ul class="text-sm text-slate-700 space-y-2">
                                        <li class="flex items-start gap-2">
                                            <span class="text-red-500 mt-1">•</span>
                                            <span>In any way that violates any applicable national or international law or regulation</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-red-500 mt-1">•</span>
                                            <span>For the purpose of exploiting, harming, or attempting to exploit or harm minors in any way by exposing them to inappropriate content or otherwise</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-red-500 mt-1">•</span>
                                            <span>To transmit, or procure the sending of, any advertising or promotional material including any "junk mail", "chain letter," "spam," or any other similar solicitation</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="space-y-3">
                                    <h5 class="font-semibold text-slate-900">Harmful Activities</h5>
                                    <ul class="text-sm text-slate-700 space-y-2">
                                        <li class="flex items-start gap-2">
                                            <span class="text-red-500 mt-1">•</span>
                                            <span>To impersonate or attempt to impersonate Company, a Company employee, another user, or any other person or entity</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-red-500 mt-1">•</span>
                                            <span>In any way that infringes upon the rights of others, or in any way is illegal, threatening, fraudulent, or harmful</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-red-500 mt-1">•</span>
                                            <span>To engage in any other conduct that restricts or inhibits anyone's use or enjoyment of Service</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bg-slate-50 border border-slate-200 rounded-lg p-4">
                                <h5 class="font-semibold text-slate-900 mb-3">Technical Restrictions</h5>
                                <div class="grid md:grid-cols-2 gap-4 text-sm text-slate-700">
                                    <ul class="space-y-2">
                                        <li>• Use Service in any manner that could disable, overburden, damage, or impair Service</li>
                                        <li>• Use any robot, spider, or other automatic device, process, or means to access Service</li>
                                        <li>• Use any manual process to monitor or copy any of the material on Service</li>
                                        <li>• Use any device, software, or routine that interferes with the proper working of Service</li>
                                    </ul>
                                    <ul class="space-y-2">
                                        <li>• Introduce any viruses, trojan horses, worms, logic bombs, or other material which is malicious</li>
                                        <li>• Attempt to gain unauthorized access to, interfere with, damage, or disrupt any parts of Service</li>
                                        <li>• Attack Service via a denial-of-service attack or a distributed denial-of-service attack</li>
                                        <li>• Take any action that may damage or falsify Company rating</li>
                                    </ul>
                                 </div>
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
                                    <h2 class="text-2xl font-bold text-slate-900">11. Analytics</h2>
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

                    <!--No use by Minors Section--> 
                    <section id="minors" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-x h-5 w-5">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <line x1="17" x2="22" y1="8" y2="13"></line><line x1="22" x2="17" y1="8" y2="13"></line>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">12. No Use By Minors</h2>
                                    <p class="text-slate-600 mt-1">Age restrictions for service usage</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="bg-amber-50 border border-amber-200 rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-5 w-5 text-amber-600 mt-0.5 flex-shrink-0">
                                        <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                                        <path d="M12 9v4"></path><path d="M12 17h.01"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-semibold text-amber-900 mb-2">Age Requirement</h4>
                                        <p class="text-amber-800 text-sm">Service is intended only for access and use by individuals at least eighteen (18) years old. By accessing or using Service, you warrant and represent that you are at least eighteen (18) years of age and with the full authority, right, and capacity to enter into this agreement and abide by all of the terms and conditions of Terms. If you are not at least eighteen (18) years old, you are prohibited from both the access and usage of Service.</p>
                                    </div>
                                </div>
                            </div>
                        </div>                                        
                    </section>

                    <!--Accounts Section-->
                     <section id="accounts" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user h-5 w-5">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">13. Accounts</h2>
                                    <p class="text-slate-600 mt-1">Account creation, security, and management</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                             <div class="space-y-6">
                                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-blue-900 mb-2">Account Creation</h4>
                                    <p class="text-blue-800 text-sm">When you create an account with us, you guarantee that you are above the age of 18, and that the information you provide us is accurate, complete, and current at all times. Inaccurate, incomplete, or obsolete information may result in the immediate termination of your account on Service.</p>
                                </div>
                                <div class="prose prose-slate max-w-none space-y-4">
                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <h4 class="font-semibold text-green-900 mb-2">Account Security</h4>
                                        <p class="text-green-800 text-sm">You are responsible for maintaining the confidentiality of your account and password, including but not limited to the restriction of access to your computer and/or account. You agree to accept responsibility for any and all activities or actions that occur under your account and/or password, whether your password is with our Service or a third-party service. You must notify us immediately upon becoming aware of any breach of security or unauthorized use of your account.</p>
                                    </div>
                                    <div class="bg-amber-50 border border-amber-200 rounded-lg p-4">
                                        <h4 class="font-semibold text-amber-900 mb-2">Username Restrictions</h4>
                                        <p class="text-amber-800 text-sm">You may not use as a username the name of another person or entity or that is not lawfully available for use, a name or trademark that is subject to any rights of another person or entity other than you, without appropriate authorization. You may not use as a username any name that is offensive, vulgar or obscene.</p>
                                    </div>
                                    <p class="text-slate-700 leading-relaxed">We reserve the right to refuse service, terminate accounts, remove or edit content, or cancel orders in our sole discretion.</p>
                                </div>
                            </div>
                        </div>                                     
                    </section>

                    <!--Intellectual Property Section--> 
                    <section id="intellectual" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copyright h-5 w-5">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M14.83 14.83a4 4 0 1 1 0-5.66"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">14. Intellectual Property</h2>
                                    <p class="text-slate-600 mt-1">Copyright, trademarks, and proprietary rights</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div>
                                <p class="text-slate-700 leading-relaxed">Service and its original content (excluding Content provided by users), features and functionality are and will remain the exclusive property of Sizaf.com and its licensors. Service is protected by copyright, trademark, and other laws of both the Country and foreign countries. Our trademarks may not be used in connection with any product or service without the prior written consent of Sizaf.com.</p>
                            </div>
                        </div>                                 
                    </section>

                    <!--Error Reporting & Feedback Section--> 
                     <section id="feedback" class="bg-white shadow-lg border border-slate-200 rounded-lg">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle h-5 w-5">
                                        <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">15. Error Reporting and Feedback</h2>
                                    <p class="text-slate-600 mt-1">How to report issues and provide feedback</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <div>
                                <p class="text-slate-700 leading-relaxed">You may provide us with feedback, including suggestions for improvements, ideas, problems, and complaints, either directly at
                                <a href="mailto:info@sizaf.com" class="text-purple-600 hover:underline">info@sizaf.com</a> 
                                or via third-party sites and tools. You agree that: (i) you will not retain, acquire, or assert any intellectual property right or other right, title or interest in or to the feedback;
                                (ii) the Company may have development ideas similar to the feedback;
                                (iii) the feedback does not contain confidential or proprietary information from you or any third party;
                                and (iv) the Company has no obligation of confidentiality regarding your feedback. If transfer of ownership of the feedback is not possible due to applicable laws, you grant the Company
                                and its affiliates an exclusive, irrevocable, free-of-charge, transferable, sub-licensable, perpetual right to use, modify, publish, and commercialize the feedback in any way and for any purpose.</p>
                            </div>
                        </div>                                 
                    </section>

                    <!--External Links Section--> 
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
                                    <h2 class="text-2xl font-bold text-slate-900">16. External Links</h2>
                                    <p class="text-slate-600 mt-1">Third-party links and external websites</p>
                                </div>
                            </div>
                        </div>
                       <div class="p-8">
                            <div class="space-y-6">
                                <div class="prose prose-slate max-w-none">
                                    <p class="text-slate-700 leading-relaxed">Our Service may contain links to third party web sites or services that are not owned or controlled by sizaf.com.</p>
                                </div>
                                <div class="bg-amber-50 border border-amber-200 rounded-lg p-4">
                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-5 w-5 text-amber-600 mt-0.5 flex-shrink-0">
                                            <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                                            <path d="M12 9v4"></path><path d="M12 17h.01"></path>
                                        </svg>
                                        <div>
                                            <h4 class="font-semibold text-amber-900 mb-2">Third-Party Disclaimer</h4>
                                            <p class="text-amber-800 text-sm">Sizaf.com has no control over, and assumes no responsibility for the content, privacy policies, or practices of any third party web sites or services. We do not warrant the offerings of any of these entities/individuals or their websites.</p>
                                        </div>
                                    </div>
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