<?php
$metaTitle = " SizaF Net With Tech";
$metaDescription = "The page you're looking for doesn't exist. Explore our technology services or return to the homepage.";
include('header.php');
?>


    <div class="max-w-7xl mx-auto px-6 py-20">
        <div class="text-center">
            <!-- Animated 404 graphic -->
            <div class="relative max-w-md mx-auto mb-12">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full blur-3xl opacity-20 animate-pulse"></div>
                <div class="relative flex flex-col items-center justify-center">
                    <div class="text-9xl font-bold gradient-text animate-float">404</div>
                    <i data-lucide="alert-circle" class="w-32 h-32 text-red-500 mt-8 animate-bounce"></i>
                </div>
            </div>

            <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-6">
                Oops! Page Not Found
            </h1>
            
            <p class="text-xl text-slate-600 max-w-2xl mx-auto mb-8">
                The page you're looking for doesn't exist or has been moved. 
                Here are some helpful links instead:
            </p>
            
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <a href="./index.php" class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-6 py-3 rounded-lg font-medium inline-flex items-center transition-colors duration-200">
                    <i data-lucide="home" class="w-5 h-5 mr-2"></i>
                    Return Home
                </a>
                
                <a href="./technology-services.php" class="border border-slate-300 bg-white hover:bg-slate-50 text-slate-800 px-6 py-3 rounded-lg font-medium inline-flex items-center transition-colors duration-200">
                    <i data-lucide="server" class="w-5 h-5 mr-2"></i>
                    Our Services
                </a>
                
                <a href="./about.php" class="border border-slate-300 bg-white hover:bg-slate-50 text-slate-800 px-6 py-3 rounded-lg font-medium inline-flex items-center transition-colors duration-200">
                    <i data-lucide="mail" class="w-5 h-5 mr-2"></i>
                    Contact Support
                </a>
            </div>
            
        </div>
    </div>

    <!-- Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>

<?php
include 'footer.php';
?>
