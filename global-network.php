<?php include 'header.php'; ?>
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
    <div class="min-h-[500px] w-full relative overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat bg-[url('./assest/global-network-main.jpeg')]">
            <div class="absolute inset-0 bg-black/40 bg-[url('./assest/business-internet-main-bg.png')]"></div>
        </div>

        <div class="relative z-10 container mx-auto px-4 py-20">
            <h2 class="text-center text-lg md:text-xl mb-6 fade-up fade-up-delay-1 text-white">
                Build business and grow with SIZAF NET WITH TECH
            </h2>

            <div class="flex flex-col md:flex-row justify-center items-center gap-4 mb-12">
                <h1 class="text-4xl lg:text-6xl font-bold fade-up fade-up-delay-2 text-white">
                    PAY PER USE
                </h1>
                <span class="text-4xl lg:text-6xl font-bold text-red-500 fade-up fade-up-delay-3">
                    RM 1.99 / MO
                </span>
            </div>

            <div class="flex flex-col md:flex-row justify-center items-center gap-8 mb-12 fade-up fade-up-delay-4">
                <div class="flex flex-col items-center gap-2 fade-up fade-up-delay-4">
                    <img src="./assest/super-fast.svg" height="80" width="80" alt="Super Fast" />
                    <span class="text-lg text-white">Super Fast</span>
                </div>

                <div class="flex flex-col text-4xl items-center gap-2 fade-up fade-up-delay-5 text-white">
                    +
                </div>

                <div class="flex flex-col items-center gap-2 fade-up fade-up-delay-6">
                    <img src="./assest/unlimited-data.svg" height="60" width="60" alt="Unlimited Data" />
                    <span class="text-lg text-white">Unlimited Data</span>
                </div>
            </div>

            <div class="flex justify-center fade-up fade-up-delay-6">
                <a href="contact.php" class="group relative inline-flex items-center gap-2 px-8 py-4 border border-white hover:border-none transition-colors text-white enquiry-btn">
                    <span>Enquiry/Order</span>
                    <span class="group-hover:translate-x-1 transition-transform">→</span>
                </a>
            </div>
        </div>
    </div>
    <div id="stats-section" class="max-w-7xl flex flex-col md:flex-row mx-auto px-4 py-12 sm:px-6 lg:px-8">
        <div class="space-y-12">
            <img src="./assest/sizaflogo.png" alt="Sizaf Logo" width="170" height="170" />
            <p class="text-xl font-semibold max-w-3xl mx-auto">
            THE POWER OF SIZAF GLOBAL PARTNER NETWORK LOADED WITH ALL THE TECH.
            </p>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3 mt-8">
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <span id="continents-count" class="text-4xl sm:text-5xl font-bold text-pink-500">0</span>
                    <p class="text-xl mt-2 text-gray-600">Continents</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <span id="countries-count" class="text-4xl sm:text-5xl font-bold text-cyan-400">0</span>
                    <p class="text-xl mt-2 text-gray-600">Countries</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <span id="locations-count" class="text-4xl sm:text-5xl font-bold text-blue-500">0</span>
                    <p class="text-xl mt-2 text-gray-600">Locations</p>
                </div>
            </div>
            <p class="text-center md:text-start text-gray-600 max-w-2xl text-base">
                Sizaf Tech Services are customized to fit every business situation, whether for individuals, professional groups, or large organizations.
            </p>
        </div>
        <div>
            <img src="./assest/global-network-pc.png" alt="World map showing SIZ@F global network" class="rounded-lg hidden lg:block" height="1000" width="1000"/>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">
        <div class="space-y-7">
            <p class="text-3xl sm:text-4xl font-semibold text-center">SIZAF GLOBAL NETWORK PARTNER</p>
            <p class="text-lg sm:text-base text-center font-semibold">
                With Sizaf's global partner network, you can reach and serve clients and customers across 7 continents, in 113 countries, and 4,905 locations.
            </p>
            <p class="text-gray-600 text-center max-w-8xl mx-auto">
            Sizaf is a three way allround service provider that thinks & acts like your extended internal team. It provides globally connected network, ready to deploy technology solutions and flexible commercial models based on the customer preferences.
            </p>
            <div id="chartdiv" class="w-full h-[300px] sm:h-[600px] bg-white rounded-lg"></div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        <?php foreach ($regions as $region => $countries): ?>
            <div class="bg-white shadow rounded overflow-hidden">
                <div class="bg-[#FF156E] text-white px-4 py-2 font-bold">
                    <?= htmlspecialchars($region) ?>
                </div>
                <div class="p-4">
                    <ul class="space-y-2 text-sm">
                    <?php foreach ($countries as $item): ?>
                        <li class="text-gray-700 font-medium">
                        <?= htmlspecialchars($item['country']) ?> (<?= $item['count'] ?>)
                        </li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
    <div class="relative w-full min-h-[600px] bg-white p-8">
        <div class="absolute inset-0 z-0 pointer-events-none bg-[url('./assest/testimonial-map.png')] bg-no-repeat bg-cover"></div>
            <p class="text-3xl sm:text-4xl font-semibold text-center z-10 relative">Sizaf Net with Tech.</p>
            <p class="text-base text-center py-5 z-10 relative">
                Sizaf Tech Services are customized for every business situation either for Individuals, Professional groups or Large organizations.
            </p>

            <div class="flex flex-col sm:flex-row justify-center items-start sm:max-w-7xl mx-auto gap-0 sm:gap-32 py-7 z-10 px-6 relative">
                <ul class="w-full md:w-1/2 space-y-10">
                <?php
                    $leftFeatures = [
                    "The SIZAF NET WITH TECH provides public sector with direct apps and helps them to take advantage of latest network technologies.",
                    "SIZAF NET WITH TECH along with the healthcare and educational organisations is ready to create tailor-made solutions as per customer needs.",
                    "All SIZAF NET WITH TECH solutions are being constantly reviewed & tested. It is ready for use for all organizations and respected worldwide."
                    ];
                    foreach ($leftFeatures as $feature) {
                    echo '<li class="flex gap-2 items-start">
                           <i class="fa-solid fa-circle-check text-[#ff156e] text-lg pt-1"></i>
                            ' . $feature . '
                            </li>';
                    }
                ?>
                </ul>

                <ul class="w-full md:w-1/2 space-y-10 mt-8 sm:mt-0">
                <?php
                    $rightFeatures = [
                    "At SIZAF NET WITH TECH all the latest innovations and new ICT and IOT trends are provided in budget friendly models.",
                    "SIZAF NET WITH TECH on demand services will be equipped with all the latest innovations in the transport & logistics industry to meet the present demands and future requirement.",
                    "SIZAF NET WITH TECH offers custom technology solutions to its clients in finance & banking sector with highly secure connections, reliable platforms & networks & easy to use apps."
                    ];
                    foreach ($rightFeatures as $feature) {
                    echo '<li class="flex gap-2 items-start">
                            <i class="fa-solid fa-circle-check text-[#ff156e] text-lg pt-1"></i>
                            ' . $feature . '
                            </li>';
                    }
                ?>
                </ul>
            </div>

            <div class="flex items-center justify-center mt-8 z-20 relative">
                <a href="contact.php">
                <button
                    class="bg-primary-gradient px-14 py-3 text-sm sm:text-base flex items-center justify-center gap-2 shadow-lg text-white shadow-pink-400/60 hover:shadow-pink-600/70 focus:outline-none focus:ring-pink-500 focus:ring-offset-2"
                    aria-label="Place Order or Make an Inquiry">
                    Place Order / Enquiry
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </button>
                </a>
            </div>
        </div>
    </div>
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