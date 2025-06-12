<?php
$metaTitle = "Global Network";
$metaDescription = "This is global network page.";
$metaKeywords = "IT solutions, software development, consultancy";
$metaImage = "https://yourdomain.com/images/og-governance.jpg";
$canonicalURL = "https://yourdomain.com/governance"; 
include('header.php');
?>
<?php $regions = [
  "North America" => [
    ["country" => "Canada", "count" => 118],
    ["country" => "United States", "count" => 1808]
  ],
  "Central America" => [
    ["country" => "Costa Rica", "count" => 7],
    ["country" => "Dominican Republic", "count" => 1],
    ["country" => "Guatemala", "count" => 1],
    ["country" => "Mexico", "count" => 23],
    ["country" => "Netherlands Antilles", "count" => 4],
    ["country" => "Puerto Rico", "count" => 2],
    ["country" => "Panama", "count" => 7],
    ["country" => "Trinidad and Tobago", "count" => 1]
  ],
  "South America"=> [
   [ "country"=> "Argentina", "count"=> 10],
   [ "country"=> "Bolivia", "count"=> 1],
   [ "country"=> "Brazil", "count"=> 132],
   [ "country"=> "Colombia", "count"=> 8],
   [ "country"=> "Chile", "count"=> 7],
   [ "country"=> "Ecuador", "count"=> 3],
   [ "country"=> "Peru", "count"=> 4],
   [ "country"=> "Uruguay", "count"=> 5],
   [ "country"=> "Venezuela", "count"=> 1]
  ],
  "Oceania"=> [
   [ "country"=> "Australia", "count"=> 152],
   [ "country"=> "French Polynesia", "count"=> 1],
   [ "country"=> "Guam", "count"=> 4],
   [ "country"=> "New Zealand", "count"=> 21]
  ],
  "Asia" => [
   [ "country"=> "Azerbaijan", "count"=> 2],
   [ "country"=> "Bahrain", "count"=> 2],
   [ "country"=> "China", "count"=> 79],
   [ "country"=> "Cambodia", "count"=> 4],
   [ "country"=> "Georgia", "count"=> 1],
   [ "country"=> "Hong Kong", "count"=> 56],
   [ "country"=> "Israel", "count"=> 6],
   [ "country"=> "Iran", "count"=> 5],
   [ "country"=> "India", "count"=> 100],
   [ "country"=> "Indonesia", "count"=> 32],
   [ "country"=> "Jordan", "count"=> 3],
   [ "country"=> "Japan", "count"=> 79],
   [ "country"=> "Kazakhstan", "count"=> 1],
   [ "country"=> "Kuwait", "count"=> 1],
   [ "country"=> "Lebanon", "count"=> 1],
   [ "country"=> "Myanmar", "count"=> 1],
   [ "country"=> "Malaysia", "count"=> 46],
   [ "country"=> "Nepal", "count"=> 1],
   [ "country"=> "Oman", "count"=> 2],
   [ "country"=> "Philippines", "count"=> 8],
   [ "country"=> "Pakistan", "count"=> 13],
   [ "country"=> "Qatar", "count"=> 4],
   [ "country"=> "South Korea", "count"=> 18],
   [ "country"=> "Saudi Arabia", "count"=> 15],
   [ "country"=> "Singapore", "count"=> 50],
   [ "country"=> "Taiwan", "count"=> 9],
   [ "country"=> "Thailand", "count"=> 12],
   [ "country"=> "United Arab Emirates", "count"=> 8],
   [ "country"=> "Vietnam", "count"=> 7]
  ],
  "Africa"=> [
   [ "country"=> "Angola", "count"=> 1],
   [ "country"=> "Cayman Islands", "count"=> 1],
   [ "country"=> "Djibouti", "count"=> 1],
   [ "country"=> "Egypt", "count"=> 10],
   [ "country"=> "Ethiopia", "count"=> 1],
   [ "country"=> "Ghana", "count"=> 3],
   [ "country"=> "Ivory Coast", "count"=> 1],
   [ "country"=> "Kenya", "count"=> 17],
   [ "country"=> "Libya", "count"=> 1],
   [ "country"=> "Morocco", "count"=> 3],
   [ "country"=> "Mozambique", "count"=> 3],
   [ "country"=> "Mauritius", "count"=> 8],
   [ "country"=> "Malawi", "count"=> 1],
   [ "country"=> "Nigeria", "count"=> 9],
   [ "country"=> "South Africa", "count"=> 33],
   [ "country"=> "Sierra Leone", "count"=> 1],
   [ "country"=> "Tanzania", "count"=> 2],
   [ "country"=> "Tunisia", "count"=> 1]
  ],
  "Europe"=> [
   [ "country"=> "Austria", "count"=> 30],
   [ "country"=> "Armenia", "count"=> 4],
   [ "country"=> "Belarus", "count"=> 3],
   [ "country"=> "Belgium", "count"=> 54],
   [ "country"=> "Bulgaria", "count"=> 31],
   [ "country"=> "Czech Republic", "count"=> 22],
   [ "country"=> "Croatia", "count"=> 6],
   [ "country"=> "Cyprus", "count"=> 7],
   [ "country"=> "Denmark", "count"=> 29],
   [ "country"=> "Estonia", "count"=> 8],
   [ "country"=> "France", "count"=> 212],
   [ "country"=> "Finland", "count"=> 28],
   [ "country"=> "Gibraltar", "count"=> 4],
   [ "country"=> "Greece", "count"=> 5],
   [ "country"=> "Greenland", "count"=> 1],
   [ "country"=> "Germany", "count"=> 171],
   [ "country"=> "Hungary", "count"=> 13],
   [ "country"=> "Italy", "count"=> 81],
   [ "country"=> "Ireland", "count"=> 50],
   [ "country"=> "Iceland", "count"=> 3],
   [ "country"=> "Latvia", "count"=> 18],
   [ "country"=> "Liechtenstein", "count"=> 4],
   [ "country"=> "Lithuania", "count"=> 8],
   [ "country"=> "Luxembourg", "count"=> 29],
   [ "country"=> "Monaco", "count"=> 1],
   [ "country"=> "Moldova", "count"=> 1],
   [ "country"=> "Macedonia", "count"=> 1],
   [ "country"=> "Malta", "count"=> 11],
   [ "country"=> "Netherlands", "count"=> 274],
   [ "country"=> "Norway", "count"=> 21],
   [ "country"=> "Poland", "count"=> 48],
   [ "country"=> "Portugal", "count"=> 30],
   [ "country"=> "Russia", "count"=> 57],
   [ "country"=> "Romania", "count"=> 28],
   [ "country"=> "Spain", "count"=> 69],
   [ "country"=> "Switzerland", "count"=> 73],
   [ "country"=> "Sweden", "count"=> 55],
   [ "country"=> "Slovakia", "count"=> 15],
   [ "country"=> "Slovenia", "count"=> 8],
   [ "country"=> "Serbia and Montenegro", "count"=> 2],
   [ "country"=> "Turkey", "count"=> 36],
   [ "country"=> "United Kingdom", "count"=> 342],
   [ "country"=> "Ukraine", "count"=> 28]
  ],

];?>
<head>
  <!-- amCharts dependencies -->
  <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
</head>
<div class='container mx-auto'>
  <?php
/**
 * Pricing Hero Section
 * 
 * @package YourThemeName
 */
?>

<section class="relative py-16 px-4 overflow-hidden flex items-center">
    <!-- Background with Network Pattern -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-blue-900 to-purple-900">
        <div class="absolute inset-0 opacity-20">
            <img 
                src="./assest/global-network-main.jpeg" 
                alt="Network connectivity background showing digital connections" 
                class="object-cover w-full h-full"
                loading="lazy"
                width="1200"
                height="650"
            />
        </div>
        <!-- Animated Network Lines -->
        <div class="absolute inset-0">
            <svg class="w-full h-full" viewBox="0 0 1200 650" fill="none" aria-hidden="true">
                <defs>
                    <linearGradient id="lineGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="rgba(59, 130, 246, 0)" />
                        <stop offset="50%" stop-color="rgba(59, 130, 246, 0.8)" />
                        <stop offset="100%" stop-color="rgba(59, 130, 246, 0)" />
                    </linearGradient>
                </defs>
                <path
                    d="M0,325 Q300,125 600,325 T1200,325"
                    stroke="url(#lineGradient)"
                    stroke-width="2"
                    class="animate-pulse"
                />
                <path
                    d="M0,225 Q400,425 800,225 T1200,225"
                    stroke="url(#lineGradient)"
                    stroke-width="2"
                    class="animate-pulse"
                    style="animation-delay: 1s"
                />
                <path
                    d="M0,425 Q200,225 400,425 T800,425 T1200,425"
                    stroke="url(#lineGradient)"
                    stroke-width="2"
                    class="animate-pulse"
                    style="animation-delay: 2s"
                />
            </svg>
        </div>
        <!-- Floating Particles -->
        <div class="absolute inset-0">
            <?php for ($i = 0; $i < 15; $i++): ?>
                <div
                    class="absolute w-2 h-2 bg-blue-400 rounded-full opacity-30 animate-pulse"
                    style="
                        left: <?= rand(0, 100) ?>%;
                        top: <?= rand(0, 100) ?>%;
                        animation-delay: <?= rand(0, 3) ?>s;
                        animation-duration: <?= 2 + rand(0, 2) ?>s;
                    "
                    aria-hidden="true"
                ></div>
            <?php endfor; ?>
        </div>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto w-full">
        <div class="text-center">
            <!-- Top Badge -->
            <span class="inline-flex items-center mb-4 bg-gradient-to-r from-blue-500 to-purple-600 text-white border-0 px-4 py-1 text-sm font-medium rounded-full">
                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                </svg>
                Limited Time Offer
            </span>

            <!-- Main Heading -->
            <h1 class="text-base md:text-lg text-blue-200 mb-3 font-medium">
                Build business and grow with SIZAF NET WITH TECH
            </h1>

            <!-- Pricing Display -->
            <div class="mb-6">
                <h2 class="text-3xl md:text-5xl lg:text-6xl font-bold text-white mb-2">
                    PAY PER USE 
                    <span class="bg-gradient-to-r from-orange-400 to-red-500 bg-clip-text text-transparent"> RM 1.99</span>
                    <span class="text-xl md:text-2xl lg:text-3xl text-orange-400"> / MO</span>
                </h2>
                <p class="text-blue-200 text-sm md:text-base">
                    No contracts, no commitments - pay only for what you use
                </p>
            </div>

            <!-- Feature Cards -->
            <div class="grid md:grid-cols-3 gap-4 mb-6 max-w-4xl mx-auto">
                <?php
                $features = [
                    [
                        'icon' => 'zap',
                        'title' => 'Super Fast',
                        'description' => 'Lightning-fast connectivity',
                        'color' => 'text-yellow-400'
                    ],
                    [
                        'icon' => 'database',
                        'title' => 'Unlimited Data',
                        'description' => 'No caps, no limits',
                        'color' => 'text-blue-400'
                    ],
                    [
                        'icon' => 'wifi',
                        'title' => '24/7 Uptime',
                        'description' => 'Reliable service guaranteed',
                        'color' => 'text-green-400'
                    ]
                ];
                
                foreach ($features as $feature): ?>
                    <div class="bg-white/10 backdrop-blur-sm border-white/20 hover:bg-white/15 transition-all duration-300 rounded-lg">
                        <div class="p-4 text-center">
                            <div class="w-12 h-12 mx-auto mb-3 bg-white/10 rounded-full flex items-center justify-center">
                                <svg class="h-6 w-6 <?= $feature['color'] ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= 
                                        $feature['icon'] === 'zap' ? 'M13 10V3L4 14h7v7l9-11h-7z"' : 
                                        ($feature['icon'] === 'database' ? 'M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"' : 
                                        'M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"')
                                    ?>"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-1"><?= $feature['title'] ?></h3>
                            <p class="text-blue-200 text-xs"><?= $feature['description'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Benefits List -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-2 mb-6 max-w-3xl mx-auto">
                <?php
                $benefits = ["No setup fees", "Cancel anytime", "24/7 support", "Enterprise-grade security"];
                
                foreach ($benefits as $benefit): ?>
                    <div class="flex items-center text-white/90 justify-center md:justify-start">
                        <svg class="h-4 w-4 text-green-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-sm"><?= $benefit ?></span>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-3 justify-center items-center mb-4">
                <a 
                    href="./about.php" 
                    class="bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white px-6 py-3 text-base font-semibold shadow-lg hover:shadow-xl transition-all duration-300 rounded-md inline-flex items-center"
                    aria-label="Enquire or Order our services"
                >
                    Enquiry/Order
                    <svg class="h-4 w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
                <a 
                    href="./about.php" 
                    class="border border-white/30 text-white hover:bg-white/10 px-6 py-3 text-base font-semibold backdrop-blur-sm rounded-md inline-flex items-center"
                    aria-label="Learn more about our pricing"
                >
                    Learn More
                </a>
            </div>

            <!-- Trust Indicators -->
            <div class="flex flex-wrap justify-center items-center gap-6 text-blue-200 text-xs">
                <div class="flex items-center">
                    <svg class="h-3 w-3 text-green-400 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Trusted by 1000+ businesses</span>
                </div>
                <div class="flex items-center">
                    <svg class="h-3 w-3 text-green-400 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>99.9% uptime guarantee</span>
                </div>
                <div class="flex items-center">
                    <svg class="h-3 w-3 text-green-400 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>ISO certified</span>
                </div>
            </div>
        </div>
    </div>
</section>
    <div id="stats-section" class="relative bg-gradient-to-br from-white via-gray-100 to-gray-50 py-16 px-6 sm:px-10 lg:px-20">
      <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div class="space-y-10">
          <img src="./assest/sizaflogo.png" alt="Sizaf Logo" width="150" height="150" class="mx-auto lg:mx-0" loading="lazy"/>
          <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 tracking-tight text-center lg:text-left">The Power of  <span class="bg-primary-gradient text-transparent bg-clip-text">SIZAF</span> Global Partner Network Loaded With All The Tech.</h1>
          <p class="text-gray-600 text-base lg:text-lg max-w-xl text-center lg:text-left mx-auto lg:mx-0">Sizaf Tech Services are customized to fit every business situation, whether for individuals, professional groups, or large organizations.</p>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <div class="backdrop-blur-md bg-white/70 border border-white/40 rounded-2xl shadow-md p-6 text-center hover:scale-105 transition">
              <div class="text-5xl font-extrabold text-pink-500 drop-shadow-md" id="continents-count">0</div>
              <p class="text-lg font-medium text-gray-700 mt-2">Continents</p>
            </div>
            <div class="backdrop-blur-md bg-white/70 border border-white/40 rounded-2xl shadow-md p-6 text-center hover:scale-105 transition">
              <div class="text-5xl font-extrabold text-cyan-400 drop-shadow-md" id="countries-count">0</div>
              <p class="text-lg font-medium text-gray-700 mt-2">Countries</p>
            </div>
            <div class="backdrop-blur-md bg-white/70 border border-white/40 rounded-2xl shadow-md p-6 text-center hover:scale-105 transition">
              <div class="text-5xl font-extrabold text-blue-500 drop-shadow-md" id="locations-count">0</div>
              <p class="text-lg font-medium text-gray-700 mt-2">Locations</p>
            </div>
          </div>
        </div>
        <div class="flex justify-center lg:justify-end">
          <img src="./assest/global-network-pc.png" alt="Global Network Map" class="rounded-3xl w-full max-w-xl shadow-xl" loading="lazy" />
        </div>
      </div>
    </div>
    <section class="bg-gradient-to-b from-white to-gray-50 py-16 px-6 sm:px-10 lg:px-20">
        <div class="max-w-7xl mx-auto space-y-7 text-center">
          <h2 class="text-3xl sm:text-4xl font-semibold">SIZAF GLOBAL NETWORK PARTNER</h2>
          <p class="text-lg sm:text-base text-center font-semibold">With Sizaf's global partner network, you can reach and serve clients and customers across 7 continents, in 113 countries, and 4,905 locations.</p>
          <p class="text-gray-600 text-center max-w-8xl mx-auto">Sizaf is a three way allround service provider that thinks & acts like your extended internal team. It provides globally connected network, ready to deploy technology solutions and flexible commercial models based on the customer preferences.</p>
          <div id="chartdiv" class="w-full h-[300px] sm:h-[600px] bg-white rounded-lg"></div>
        </div>
    </section>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        <?php foreach ($regions as $region => $countries): ?>
            <section class="bg-white rounded-md shadow-md overflow-hidden transition hover:shadow-lg hover:scale-102">
                <header class="bg-[#FF156E] text-white text-base font-semibold px-4 py-3">
                    <?= htmlspecialchars($region) ?>
                </header>
                <div class="p-4">
                    <ul class="space-y-2 text-sm">
                    <?php foreach ($countries as $item): ?>
                        <li class="text-gray-700 font-medium">
                        <?= htmlspecialchars($item['country']) ?> (<?= $item['count'] ?>)
                        </li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            </section>
        <?php endforeach; ?>
        </div>
    </div>
<section class="py-20 px-4 bg-gradient-to-br from-slate-50 via-white to-slate-100 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <span class="inline-flex items-center mb-4 text-sm font-medium bg-gradient-to-r from-pink-500 to-purple-600 text-white border-0 px-4 py-1 rounded-full">
                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                </svg>
                Technology Excellence
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-6">
                <span class="bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">
                    SizaF Net with Tech.
                </span>
            </h1>
            <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed">
                Sizaf Tech Services are customized for every business situation either for 
                <span class="font-semibold text-blue-600"> Individuals</span>, 
                <span class="font-semibold text-purple-600"> Professional groups</span> or 
                <span class="font-semibold text-pink-600"> Large organizations</span>.
            </p>
        </div>

        <!-- Client Types Stats -->
        <div class="grid md:grid-cols-3 gap-6 mb-16">
            <?php
            $clientTypes = [
                ['icon' => 'users', 'name' => "Individuals", 'count' => "1000+"],
                ['icon' => 'building', 'name' => "Professional Groups", 'count' => "500+"],
                ['icon' => 'globe', 'name' => "Large Organizations", 'count' => "200+"]
            ];
            
            foreach ($clientTypes as $type): ?>
                <div class="bg-white/80 backdrop-blur-sm border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300 text-center rounded-lg">
                    <div class="p-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= 
                                    $type['icon'] === 'users' ? 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"' : 
                                    ($type['icon'] === 'building' ? 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"' : 
                                    'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"')
                                ?>"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-1"><?= $type['name'] ?></h3>
                        <div class="text-2xl font-bold text-blue-600"><?= $type['count'] ?></div>
                        <p class="text-slate-500 text-sm">Satisfied Clients</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Features Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <?php
            $features = [
                [
                    'icon' => 'building',
                    'title' => "Public Sector Solutions",
                    'description' => "The SIZAF NET WITH TECH provides public sector with direct apps and helps them to take advantage of latest network technologies.",
                    'category' => "Government",
                    'color' => "from-blue-500 to-cyan-500",
                    'iconColor' => "text-blue-600"
                ],
                [
                    'icon' => 'trending-up',
                    'title' => "Latest ICT Innovations",
                    'description' => "At SIZAF NET WITH TECH all the latest innovations and new ICT and IOT trends are provided in budget friendly models.",
                    'category' => "Innovation",
                    'color' => "from-purple-500 to-pink-500",
                    'iconColor' => "text-purple-600"
                ],
                [
                    'icon' => 'graduation-cap',
                    'title' => "Healthcare & Education",
                    'description' => "SIZAF NET WITH TECH along with the healthcare and educational organisations is ready to create tailor-made solutions as per customer needs.",
                    'category' => "Healthcare",
                    'color' => "from-green-500 to-emerald-500",
                    'iconColor' => "text-green-600"
                ],
                [
                    'icon' => 'truck',
                    'title' => "Transport & Logistics",
                    'description' => "SIZAF NET WITH TECH on demand services will be equipped with all the latest innovations in the transport & logistics industry to meet the present demands and future requirement.",
                    'category' => "Logistics",
                    'color' => "from-orange-500 to-red-500",
                    'iconColor' => "text-orange-600"
                ],
                [
                    'icon' => 'shield',
                    'title' => "Tested & Reliable",
                    'description' => "All SIZAF NET WITH TECH solutions are being constantly reviewed & tested. It is ready for use for all organizations and respected worldwide.",
                    'category' => "Quality",
                    'color' => "from-indigo-500 to-purple-500",
                    'iconColor' => "text-indigo-600"
                ],
                [
                    'icon' => 'banknote',
                    'title' => "Finance & Banking",
                    'description' => "SIZAF NET WITH TECH offers custom technology solutions to its clients in finance & banking sector with highly secure connections, reliable platforms & networks & easy to use to apps that can be used in every location & devises.",
                    'category' => "Finance",
                    'color' => "from-amber-500 to-orange-500",
                    'iconColor' => "text-amber-600"
                ]
            ];
            
            foreach ($features as $feature): ?>
                <div class="group overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-slate-200 rounded-lg">
                    <div class="relative">
                        <!-- Background Gradient -->
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r <?= $feature['color'] ?>"></div>

                        <div class="p-6">
                            <!-- Category Badge -->
                            <span class="inline-flex items-center mb-4 bg-slate-100 text-slate-700 hover:bg-slate-200 rounded-full px-3 py-1 text-xs font-medium">
                                <?= $feature['category'] ?>
                            </span>

                            <!-- Icon -->
                            <div class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="h-6 w-6 <?= $feature['iconColor'] ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?=
                                $feature['icon'] === 'building' ? 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4' :
                                ($feature['icon'] === 'trending-up' ? 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6' :
                                ($feature['icon'] === 'graduation-cap' ? 'M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222' :
                                ($feature['icon'] === 'truck' ? 'M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0zM12 16h4m-9-5h10m2-6H7a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2z' :
                                ($feature['icon'] === 'shield' ? 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z' :
                                'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z'))))
                                  ?>"></path>
                                </svg>
                            </div>


                            <!-- Title -->
                            <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-600 transition-colors">
                                <?= $feature['title'] ?>
                            </h3>

                            <!-- Description -->
                            <p class="text-slate-600 leading-relaxed mb-4"><?= $feature['description'] ?></p>

                            <!-- Check Icon -->
                            <div class="flex items-center text-green-600">
                                <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-sm font-medium">Verified Solution</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Key Benefits Section -->
        <!-- <div class="bg-gradient-to-r from-slate-900 to-slate-800 rounded-2xl p-8 md:p-12 text-white shadow-xl mb-16">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="h-6 w-6 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                        <span class="bg-pink-500/20 text-pink-300 border border-pink-500/30 rounded-full px-3 py-1 text-xs font-medium">Our Promise</span>
                    </div>
                    <h3 class="text-3xl font-bold mb-4">Why Choose SIZAF NET WITH TECH?</h3>
                    <p class="text-slate-300 mb-6 leading-relaxed">
                        We deliver cutting-edge technology solutions that are constantly reviewed, tested, and trusted by
                        organizations worldwide. Our commitment to excellence ensures your success.
                    </p>
                    <div class="space-y-3">
                        <?php
                        $benefits = [
                            "Constantly reviewed & tested solutions",
                            "Ready for use across all organizations",
                            "Respected and trusted worldwide",
                            "Budget-friendly innovative models"
                        ];
                        
                        foreach ($benefits as $benefit): ?>
                            <div class="flex items-center gap-3">
                                <svg class="h-5 w-5 text-green-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-slate-200"><?= $benefit ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="text-center">
                    <div class="w-48 h-48 bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="h-24 w-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <p class="text-slate-300 text-lg">Serving clients globally with excellence</p>
                </div>
            </div>
        </div> -->

        <!-- Call to Action -->
        <div class="text-center">
            <h3 class="text-2xl font-bold text-slate-900 mb-4">Ready to Transform Your Business?</h3>
            <p class="text-slate-600 mb-8 max-w-2xl mx-auto">
                Join thousands of satisfied clients who trust SIZAF NET WITH TECH for their technology solutions.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a 
                    href="/get-started" 
                    class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 text-lg font-semibold shadow-lg hover:shadow-xl transition-all duration-300 rounded-md inline-flex items-center justify-center"
                >
                    Get Started Today
                    <svg class="h-5 w-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                <a 
                    href="./web-media.php" 
                    class="border border-slate-300 text-slate-700 hover:bg-slate-100 px-8 py-4 text-lg font-semibold rounded-md inline-flex items-center justify-center"
                >
                    Learn More About Our Services
                </a>
            </div>
        </div>
    </div>
</section>

</div>

<script>
    const observerTarget = document.getElementById("stats-section");
      let started = false;

      const animateCount = (el, target, step, delay) => {
        let count = 0;
        const interval = setInterval(() => {
          count += step;
          if (count >= target) {
            count = target;
            clearInterval(interval);
          }
          el.textContent = count;
        }, delay);
      };

      const observer = new IntersectionObserver(
        (entries) => {
          if (entries[0].isIntersecting && !started) {
            started = true;
            animateCount(document.getElementById("continents-count"), 7, 1, 200);
            animateCount(document.getElementById("countries-count"), 113, 2, 20);
            animateCount(document.getElementById("locations-count"), 4905, 30, 1);
          }
        },
        { threshold: 0.5 }
      );

      observer.observe(observerTarget);

      am5.ready(function () {
        const root = am5.Root.new("chartdiv");
        root.setThemes([am5themes_Animated.new(root)]);

        const chart = root.container.children.push(
          am5map.MapChart.new(root, {
            panX: "translateX",
            panY: "translateY",
            projection: am5map.geoMercator(),
          })
        );

        const polygonSeries = chart.series.push(
          am5map.MapPolygonSeries.new(root, {
            geoJSON: am5geodata_worldLow,
            exclude: ["AQ"],
            fill: am5.color(0xeeeeee),
            stroke: am5.color(0xffffff),
          })
        );

        polygonSeries.mapPolygons.template.setAll({
          tooltipText: "{name}",
          interactive: true,
        });

        const pointSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

        pointSeries.bullets.push(() => {
          const mainCircle = am5.Circle.new(root, {
            radius: 4,
            fill: am5.color(0xff6b6b),
            tooltipText: "{title}",
          });

          const expandingCircle = am5.Circle.new(root, {
            radius: 4,
            fill: am5.color(0xff6b6b),
            opacity: 0.5,
          });

          expandingCircle.animate({
            key: "radius",
            to: 10,
            duration: 800,
            easing: am5.ease.out(am5.ease.cubic),
            loops: Infinity,
            from: 4,
          });

          expandingCircle.animate({
            key: "opacity",
            to: 0,
            duration: 900,
            easing: am5.ease.out(am5.ease.cubic),
            loops: Infinity,
          });

          const container = am5.Container.new(root, {});
          container.children.push(mainCircle);
          container.children.push(expandingCircle);

          return am5.Bullet.new(root, {
            sprite: container,
          });
        });

        pointSeries.data.setAll([
        { geometry: { type: "Point", coordinates: [-71.0589, 42.3601] }, title: "United States - Boston" },
        { geometry: { type: "Point", coordinates: [-3.7038, 40.4168] }, title: "Spain - Madrid" },
        { geometry: { type: "Point", coordinates: [2.3522, 48.8566] }, title: "France - Paris" },
        { geometry: { type: "Point", coordinates: [139.6917, 35.6895] }, title: "Japan - Tokyo" },
        { geometry: { type: "Point", coordinates: [0.1276, 51.5074] }, title: "United Kingdom - London" }, 
        { geometry: { type: "Point", coordinates: [116.4074, 39.9042] }, title: "China - Beijing" },
        { geometry: { type: "Point", coordinates: [78.9629, 20.5937] }, title: "India - New Delhi" },
        { geometry: { type: "Point", coordinates: [13.4050, 52.5200] }, title: "Germany - Berlin" },
        { geometry: { type: "Point", coordinates: [18.4241, -33.9249] }, title: "South Africa - Cape Town" },
        { geometry: { type: "Point", coordinates: [36.8219, -1.2864] }, title: "Kenya - Nairobi" },
        { geometry: { type: "Point", coordinates: [30.0444, 31.2357] }, title: "Egypt - Cairo" },
        { geometry: { type: "Point", coordinates: [151.2093, -33.8688] }, title: "Australia - Sydney" },
        { geometry: { type: "Point", coordinates: [-58.4173, -34.6118] }, title: "Argentina - Buenos Aires" },
        { geometry: { type: "Point", coordinates: [14.2350, 51.9253] }, title: "Czech Republic - Prague" },
        { geometry: { type: "Point", coordinates: [-100.4429, 39.0119] }, title: "Mexico - Mexico City" },
        { geometry: { type: "Point", coordinates: [9.0820, 8.6753] }, title: "Nigeria - Abuja" },
        { geometry: { type: "Point", coordinates: [77.1025, 28.6139] }, title: "India - New Delhi" },
        { geometry: { type: "Point", coordinates: [12.4964, 41.9028] }, title: "Italy - Rome" },
        { geometry: { type: "Point", coordinates: [103.8198, 1.3521] }, title: "Singapore - Singapore" },
        { geometry: { type: "Point", coordinates: [4.3517, 50.8503] }, title: "Belgium - Brussels" },
        { geometry: { type: "Point", coordinates: [77.0369, 38.9072] }, title: "United States - Washington, D.C." }, 
        { geometry: { type: "Point", coordinates: [79.3832, 43.6532] }, title: "Canada - Toronto" }, 
        { geometry: { type: "Point", coordinates: [104.1954, 35.8617] }, title: "China - Beijing" }, 
        { geometry: { type: "Point", coordinates: [73.8567, 18.5204] }, title: "India - Mumbai" }, 
        { geometry: { type: "Point", coordinates: [19.4334, 50.0614] }, title: "Poland - Krakow" }, 
        { geometry: { type: "Point", coordinates: [14.5501, 46.0569] }, title: "Slovenia - Ljubljana" }, 
        { geometry: { type: "Point", coordinates: [-74.0060, 40.7128] }, title: "United States - New York" }, 
        { geometry: { type: "Point", coordinates: [151.2153, -33.8568] }, title: "Australia - Sydney" },
        { geometry: { type: "Point", coordinates: [55.7558, 37.6173] }, title: "Russia - Moscow" }, 
        { geometry: { type: "Point", coordinates: [-68.1193, -16.5000] }, title: "Bolivia - La Paz" }, 
        { geometry: { type: "Point", coordinates: [77.4445, 28.4082] }, title: "India - Delhi" }, 
        { geometry: { type: "Point", coordinates: [25.276987, 54.5744] }, title: "Latvia - Riga" }, 
        { geometry: { type: "Point", coordinates: [16.3738, 48.2082] }, title: "Austria - Vienna" }, 
        { geometry: { type: "Point", coordinates: [31.0461, 38.9637] }, title: "Turkey - Ankara" }, 
        { geometry: { type: "Point", coordinates: [77.5999, 12.9716] }, title: "India - Bangalore" }, 
        { geometry: { type: "Point", coordinates: [99.9066, 7.0050] }, title: "Thailand - Bangkok" }, 
        { geometry: { type: "Point", coordinates: [-61.2248, 10.6918] }, title: "Trinidad and Tobago - Port of Spain" },
        { geometry: { type: "Point", coordinates: [-68.1193, -16.5000] }, title: "Chile - Santiago" }, 
        { geometry: { type: "Point", coordinates: [2.3510, 48.8566] }, title: "France - Paris" }, 
        { geometry: { type: "Point", coordinates: [-63.5887, -34.9003] }, title: "Argentina - Buenos Aires" },
        { geometry: { type: "Point", coordinates: [77.5946, 12.9716] }, title: "India - Bengaluru" }, 
        { geometry: { type: "Point", coordinates: [31.2304, 121.4737] }, title: "China - Shanghai" }, 
        { geometry: { type: "Point", coordinates: [78.9629, 20.5937] }, title: "India - Delhi" }, 
        { geometry: { type: "Point", coordinates: [29.9511, 31.0201] }, title: "Egypt - Cairo" }, 
        { geometry: { type: "Point", coordinates: [120.9842, 14.5995] }, title: "Philippines - Manila" }, 
        { geometry: { type: "Point", coordinates: [100.5167, 13.7563] }, title: "Thailand - Bangkok" },
        { geometry: { type: "Point", coordinates: [4.9041, 52.3676] }, title: "Netherlands - Amsterdam" }, 
        { geometry: { type: "Point", coordinates: [98.9624, 19.9206] }, title: "Laos - Vientiane" }, 
        { geometry: { type: "Point", coordinates: [7.4979, 50.7369] }, title: "Germany - Bonn" }, 
        { geometry: { type: "Point", coordinates: [15.9805, 45.8964] }, title: "Croatia - Zagreb" }, 
        { geometry: { type: "Point", coordinates: [-2.9705, 12.6354] }, title: "Ghana - Accra" }, 
        { geometry: { type: "Point", coordinates: [-43.1729, -22.9068] }, title: "Brazil - Rio de Janeiro" }, 
        { geometry: { type: "Point", coordinates: [55.9533,  -3.1883] }, title: "Scotland - Edinburgh" }, 
        { geometry: { type: "Point", coordinates: [0.1276, 51.5074] }, title: "United Kingdom - London" }, 
        { geometry: { type: "Point", coordinates: [-61.0224, 13.4125] }, title: "Jamaica - Kingston" }, 
        { geometry: { type: "Point", coordinates: [-103.2573, 45.0739] }, title: "USA - South Dakota" }, 
        { geometry: { type: "Point", coordinates: [28.9784, 41.0082] }, title: "Turkey - Istanbul" }, 
        { geometry: { type: "Point", coordinates: [80.2707, 13.0827] }, title: "India - Chennai" }, 
        { geometry: { type: "Point", coordinates: [-80.1918, 25.7617] }, title: "USA - Miami" }, 
        { geometry: { type: "Point", coordinates: [39.9042, 32.8597] }, title: "Turkey - Ankara" },
        { geometry: { type: "Point", coordinates: [-92.8731, 14.6349] }, title: "Guatemala - Guatemala City" },
        { geometry: { type: "Point", coordinates: [73.6100, 30.1575] }, title: "Bangladesh - Dhaka" },
        { geometry: { type: "Point", coordinates: [-60.6508, -3.0348] }, title: "Guyana - Georgetown" }, 
        { geometry: { type: "Point", coordinates: [121.0697, 14.6286] }, title: "Philippines - Quezon City" }, 
        { geometry: { type: "Point", coordinates: [78.9629, 20.5937] }, title: "India - Delhi" }, 
        { geometry: { type: "Point", coordinates: [-68.1193, -16.5000] }, title: "Chile - Santiago" }, 
        { geometry: { type: "Point", coordinates: [-98.4936, 29.4241] }, title: "USA - San Antonio" }, 
        { geometry: { type: "Point", coordinates: [114.1694, -8.4095] }, title: "Indonesia - Denpasar" }, 
        { geometry: { type: "Point", coordinates: [54.5892, 24.4795] }, title: "United Arab Emirates - Abu Dhabi" }, 
        { geometry: { type: "Point", coordinates: [15.5000, 43.9159] }, title: "Serbia - Belgrade" },
        { geometry: { type: "Point", coordinates: [28.5633, 77.2090] }, title: "India - Delhi" }, 
        { geometry: { type: "Point", coordinates: [47.3769, 8.5417] }, title: "Switzerland - Zurich" },
        ]);
      });
</script>
<?php include 'footer.php'; ?>