<?php include 'header.php'; ?>
<style>
  /* Highlight Styles */
  .highlight-text {
    position: relative;
  }
  
  .highlight-trigger {
    position: relative;
    display: inline-block;
  }
  
  .highlight-trigger::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 3px;
    background-color: #ec4899; /* Pink color to match your theme */
    transition: width 0.3s ease;
  }
  
  .highlight-text:hover .highlight-trigger::after {
    width: 100%;
  }
  
  /* Animation container */
  .gsap-animate-container {
    perspective: 1000px;
  }
</style>

<!-- Hero Section with Transparent Box -->
<section class="relative w-full h-screen">
  <!-- Background Video -->
  <video
    autoplay
    muted
    loop
    playsinline
    class="absolute inset-0 w-full h-full object-cover z-0"
    preload="auto"
    poster="assets/fallback.jpg"
  >
    <source src="https://wnhq4j5mc7yjym73.public.blob.vercel-storage.com/sizaf/world-j2jEAUUa6vmMNRDhlnikI5Pm9UBHxP.mp4" type="video/mp4" />
    Your browser does not support the video tag.
  </video>

  <!-- Overlay Content Box -->
  <div class="relative z-10 flex items-center justify-center h-full px-4">
    <div class="bg-white/90 absolute -bottom-30 backdrop-blur-md rounded-xl shadow-2xl p-8 max-w-6xl w-full grid md:grid-cols-2 gap-8 items-center">
      <!-- Left Text Content -->
      <div>
        <h1 class="text-4xl font-extrabold text-gray-800 mb-4">
          Enjoy The <span class="text-pink-600">Net With Tech</span>
        </h1>
        <p class="text-gray-700 mb-6">
          At Sizaf Infocomm, we are entirely focused on meeting your needs, whether you require Internet services for yourself, your family, your office, or your business and factories within the city or anywhere in the world. We assure you of the best service at all times.
        </p>
        <ul class="grid grid-cols-2 gap-4 text-sm font-bold text-gray-800">
          <li class="flex items-center gap-2">
            <img src="./assest/Free-30-days-white.svg" alt="30 Days Free" width=40 height="40" loading="lazy"class="w-10 h-10" />
            FREE 30 DAYS
          </li>
          <li class="flex items-center gap-2">
            <img src="./assest/Zero-connection-fee-white.svg" alt="No Contract" width=40 height="40" loading="lazy"class="w-10 h-10" />
            NO CONTRACT
          </li>
          <li class="flex items-center gap-2">
            <img src="./assest/No-contract-white.svg" alt="Zero Connection" width=40 height="40" loading="lazy"class="w-10 h-10" />
            ZERO CONNECTION FEE
          </li>
          <li class="flex items-center gap-2">
            <img src="./assest/zero-termination-fee-white.svg" alt="Zero Termination" width=40 height="40" loading="lazy"class="w-10 h-10" />
            ZERO TERMINATION FEE
          </li>
        </ul>
      </div>

      <!-- Logo Image -->
      <div class="flex justify-center">
        <img src="./assest/sizaflogo.png" alt="Sizaf Logo" class="w-[80%] max-w-md" />
      </div>
    </div>
  </div>
</section>
<section class="w-full py-16 mt-40">
  <div class="max-w-7xl mx-auto px-4 items-center sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-10">
    
    <!-- Left Block (unchanged) -->
    <div data-aos="fade-right">
      <div class="flex items-center mb-6">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-black mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <rect width="20" height="12" x="2" y="6" rx="2" ry="2" stroke-width="2"></rect>
          <circle cx="18" cy="12" r="1.5" fill="currentColor"/>
        </svg>
        <h2 class="text-3xl font-extrabold text-pink-600">SIZAF NET WITH TECH</h2>
      </div>
      <p class="text-gray-700 text-lg font-medium">
        Sizaf Infocomm offers customized solutions for every business need, catering to individuals, professional groups, and large organizations.
      </p>
    </div>

    <!-- Right Block with GSAP Animations -->
    <div class="space-y-10 gsap-animate-container">
      
      <!-- Belief -->
      <div class="belief-item highlight-text">
        <div class="flex items-start gap-4">
          <span class="pt-1 font-bold text-4xl"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" color="#000" style="color:#000" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M275.3 250.5c7 7.4 18.4 7.4 25.5 0l108.9-114.2c31.6-33.2 29.8-88.2-5.6-118.8-30.8-26.7-76.7-21.9-104.9 7.7L288 36.9l-11.1-11.6C248.7-4.4 202.8-9.2 172 17.5c-35.3 30.6-37.2 85.6-5.6 118.8l108.9 114.2zm290 77.6c-11.8-10.7-30.2-10-42.6 0L430.3 402c-11.3 9.1-25.4 14-40 14H272c-8.8 0-16-7.2-16-16s7.2-16 16-16h78.3c15.9 0 30.7-10.9 33.3-26.6 3.3-20-12.1-37.4-31.6-37.4H192c-27 0-53.1 9.3-74.1 26.3L71.4 384H16c-8.8 0-16 7.2-16 16v96c0 8.8 7.2 16 16 16h356.8c14.5 0 28.6-4.9 40-14L564 377c15.2-12.1 16.4-35.3 1.3-48.9z"></path></svg></span>
          <div>
            <h3 class="text-xl font-semibold highlight-trigger">Our Belief</h3>
            <p class="text-gray-700">
              At Sizaf, we believe internet service is a necessity in today's digital era. It enables businesses, education, farming, and healthcare access in both urban and rural areas through seamless connectivity.
            </p>
          </div>
        </div>
      </div>

      <!-- Strengths -->
      <div class="strengths-item highlight-text">
        <div class="flex items-start gap-4">
          <span class="pt-1 font-bold text-4xl"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" color="#000" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: rgb(0, 0, 0);"><path d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0z"></path></svg></span>
          <div>
            <h3 class="text-xl font-semibold highlight-trigger">Our Strengths</h3>
            <p class="text-gray-700">
              We help organizations grow by solving complex IT & communication challenges. Our 30+ years of expertise ensures tailored solutions for scalable, secure digital transformations.
            </p>
          </div>
        </div>
      </div>

      <!-- Goals -->
      <div class="goals-item highlight-text">
        <div class="flex items-start gap-4">
          <span class="pt-1 font-bold text-4xl"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" color="#000" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: rgb(0, 0, 0);"><path d="M20.172 6.75h-1.861l-4.566 4.564a1.874 1.874 0 1 1-1.06-1.06l4.565-4.565V3.828a.94.94 0 0 1 .275-.664l1.73-1.73a.249.249 0 0 1 .25-.063c.089.026.155.1.173.191l.46 2.301 2.3.46c.09.018.164.084.19.173a.25.25 0 0 1-.062.249l-1.731 1.73a.937.937 0 0 1-.663.275Z"></path><path d="M2.625 12A9.375 9.375 0 0 0 12 21.375 9.375 9.375 0 0 0 21.375 12c0-.898-.126-1.766-.361-2.587A.75.75 0 0 1 22.455 9c.274.954.42 1.96.42 3 0 6.006-4.869 10.875-10.875 10.875S1.125 18.006 1.125 12 5.994 1.125 12 1.125c1.015-.001 2.024.14 3 .419a.75.75 0 1 1-.413 1.442A9.39 9.39 0 0 0 12 2.625 9.375 9.375 0 0 0 2.625 12Z"></path><path d="M7.125 12a4.874 4.874 0 1 0 9.717-.569.748.748 0 0 1 1.047-.798c.251.112.42.351.442.625a6.373 6.373 0 0 1-10.836 5.253 6.376 6.376 0 0 1 5.236-10.844.75.75 0 1 1-.17 1.49A4.876 4.876 0 0 0 7.125 12Z"></path></svg></span>
          <div>
            <h3 class="text-xl font-semibold highlight-trigger">Our Goals</h3>
            <p class="text-gray-700">
              Our mission is to empower clients with agile and reliable tech solutions. We provide future-ready internet services tailored to your business innovation needs—anytime, anywhere.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="bg-white py-16 px-4" aria-labelledby="smart-plans-title">
  <div class="max-w-7xl mx-auto">
    <h2 id="smart-plans-title" class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
      SMART PLANS
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Card 1 -->
      <article class="rounded-xl overflow-hidden shadow-lg transition hover:shadow-2xl" data-aos="fade-up">
        <div class="relative">
          <img src="./assest/Net-for-Family-1.jpeg" alt="Internet for Business" class="w-full h-56 object-cover" loading="lazy" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent px-5 pt-10">
            <h3 class="text-xl font-bold text-white">
              <span class="text-blue-400">  Internet</span>
            <br>for Business
            </h3>
            <p class="text-white text-sm mt-1">STARTS FROM <span class="text-pink-400 font-bold">RM 69.99</span></p>
          </div>
        </div>
        <div class="bg-white p-6 flex flex-col justify-between h-[270px]">
          <div>
            <h4 class="text-lg font-semibold text-gray-900 mb-2">Fast & Secure Business net.</h4>
            <p class="text-sm text-gray-600">
              Sizaf Internet for home is a fast, affordable internet service offering reliable Wi-Fi for just RM 69.99/month with AutoPay.
            </p>
          </div>
          <a href="plan-details.php?plan=business" class="text-sm font-medium text-pink-600 mt-4 hover:underline inline-flex items-center">
            See more details <span class="ml-1">&rarr;</span>
          </a>
        </div>
      </article>

      <!-- Card 2 -->
      <article class="rounded-xl overflow-hidden shadow-lg transition hover:shadow-2xl" data-aos="fade-up" data-aos-delay="100">
        <div class="relative">
          <img src="./assest/Net-for-Business.jpeg" alt="Business Internet Services" class="w-full h-56 object-cover" loading="lazy" />
          <div class="absolute inset-0 bg-gradient-to-t from-purple-700/70 to-transparent px-5 pt-10">
            <h3 class="text-xl font-bold text-white">
               <span class="text-blue-400">Business</span> <br>Internet
            </h3>
            <p class="text-white text-sm mt-1">STARTS FROM <span class="text-pink-400 font-bold">RM 69.99</span></p>
          </div>
        </div>
        <div class="bg-white p-6 flex flex-col justify-between h-[270px]">
          <div>
            <h4 class="text-lg font-semibold text-gray-900 mb-2">Affordable Family Internet Services.</h4>
            <p class="text-sm text-gray-600">
              Sizaf Business Internet offers customized connectivity and flexible speed plans on a pay-per-use basis for just RM 69.99/month with AutoPay.
            </p>
          </div>
          <a href="plan-details.php?plan=family" class="text-sm font-medium text-pink-600 mt-4 hover:underline inline-flex items-center">
            See more details <span class="ml-1">&rarr;</span>
          </a>
        </div>
      </article>

      <!-- Card 3 -->
      <article class="rounded-xl overflow-hidden shadow-lg transition hover:shadow-2xl" data-aos="fade-up" data-aos-delay="200">
        <div class="relative">
          <img src="./assest/Technology-solution.jpg" alt="Technology Solution" class="w-full h-56 object-cover" loading="lazy" />
          <div class="absolute inset-0 bg-gradient-to-t from-blue-700/70 to-transparent px-5 pt-10">
            <h3 class="text-xl font-bold text-white">
              <span class="text-blue-400">Technology</span> <br>Solution
            </h3>
            <p class="text-white text-sm mt-1">STARTS FROM <span class="text-pink-400 font-bold">RM 69.99</span></p>
          </div>
        </div>
        <div class="bg-white p-6 flex flex-col justify-between h-[270px]">
          <div>
            <h4 class="text-lg font-semibold text-gray-900 mb-2">Safe & Cost effective Tech</h4>
            <p class="text-sm text-gray-600">
              Sizaf Tech provides broadband solutions tailored to your needs. Plans start as low as RM 1.99/month with AutoPay.
            </p>
          </div>
          <a href="plan-details.php?plan=tech" class="text-sm font-medium text-pink-600 mt-4 hover:underline inline-flex items-center">
            See more details <span class="ml-1">&rarr;</span>
          </a>
        </div>
      </article>
    </div>
  </div>
</section>
<section class="py-16 px-4 bg-white relative max-w-7xl m-auto overflow-hidden">
  <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-10 uppercase">
    Industries & Sectors
  </h2>

  <!-- Slider Wrapper -->
  <div class="relative">
    <!-- Left Arrow -->
    <button id="prevBtn" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white shadow p-2 z-10 rounded-full hover:bg-gray-100">
      &#8592;
    </button>

    <!-- Cards Container -->
    <div id="slider" class="flex transition-transform duration-500 ease-in-out overflow-hidden scroll-smooth">
      <?php
      $industries = [
        [
          'title' => 'Governance & Security',
          'description' => 'Using technology to improve governance and security capabilities.',
          'image' => '/images/governance.jpg',
          'hoverImage' => '/images/governance-bg.jpg',
          'link' => '/industries/governance-security',
        ],
        [
          'title' => 'Health & Education',
          'description' => 'Smart solutions in healthcare and education.',
          'image' => '/images/health.jpg',
          'hoverImage' => '/images/health-bg.jpg',
          'link' => '/industries/health-education',
        ],
        [
          'title' => 'Non Profit Organizations',
          'description' => 'Tech for low-budget, high-impact NGOs.',
          'image' => '/images/nonprofit.jpg',
          'hoverImage' => '/images/nonprofit-bg.jpg',
          'link' => '/industries/nonprofit',
        ],
        [
          'title' => 'Travel & Leisure',
          'description' => 'Digital transformation in travel and leisure.',
          'image' => '/images/travel.jpg',
          'hoverImage' => '/images/travel-bg.jpg',
          'link' => '/industries/travel-leisure',
        ],
        [
          'title' => 'Finance & Banking',
          'description' => 'Secure solutions for financial services.',
          'image' => '/images/finance.jpg',
          'hoverImage' => '/images/finance-bg.jpg',
          'link' => '/industries/finance-banking',
        ]
      ];

      foreach ($industries as $industry) :
      ?>
        <div class="group relative w-full md:w-1/3 flex-shrink-0 px-2">
          <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-[1.02] transition-transform">
            <div class="h-48 w-full overflow-hidden">
              <img src="<?= $industry['image'] ?>" alt="<?= $industry['title'] ?>" class="w-full h-full object-cover" loading="lazy" />
            </div>
            <div class="relative z-10 p-5 bg-white transition-all duration-500 ease-in-out group-hover:bg-cover group-hover:bg-center hover-text-bg"
              style="background-image: url('<?= $industry['hoverImage'] ?>'); background-size: 0%;">
              <h3 class="font-bold text-lg mb-2"><?= $industry['title'] ?></h3>
              <p class="text-sm text-gray-600 mb-4"><?= $industry['description'] ?></p>
              <a href="<?= $industry['link'] ?>" class="text-sm font-semibold text-blue-600 hover:underline">
                Learn More →
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Right Arrow -->
    <button id="nextBtn" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white shadow p-2 z-10 rounded-full hover:bg-gray-100">
      &#8594;
    </button>
  </div>
</section>

<section class="bg-[#070C5A] text-white py-16 text-center px-4" role="region" aria-label="Global Network Stats">
  <div class="max-w-6xl mx-auto">

    <!-- Logo with aspect ratio and lazy loading -->
    <div class="mx-auto mb-6 w-80 aspect-[3/1] relative">
      <img src="./assest/sizaf_foot_white.png" alt="SIZAF - Net with Tech Logo" class="absolute inset-0 w-full h-full object-contain" loading="lazy" decoding="async" />
    </div>

    <!-- SEO Heading -->
    <h2 class="text-xl md:text-2xl font-bold mb-10 uppercase tracking-wide">
      The Power of Sizaf Global Partner Network Loaded With All the Tech.
    </h2>

    <!-- Animated Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mb-10" role="list">
      <?php
        $stats = [
          ['label' => 'Continents', 'count' => 7, 'color' => 'text-[#F64B7B]'],
          ['label' => 'Countries', 'count' => 113, 'color' => 'text-[#4EF8B5]'],
          ['label' => 'Locations', 'count' => 4905, 'color' => 'text-[#51A7FF]'],
        ];
        foreach ($stats as $index => $stat):
      ?>
        <div role="listitem" class="bg-[#070C5A] border border-[#101662] shadow-md p-6 rounded-md transition duration-300 hover:shadow-lg focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-[#F64B7B]">
          <div class="text-4xl font-extrabold <?= $stat['color'] ?>" id="counter<?= $index ?>">0</div>
          <p class="text-lg mt-2"><?= htmlspecialchars($stat['label']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- CTA Button -->
    <a href="/location-map" class="inline-block bg-[#F64B7B] text-white font-semibold px-6 py-3 rounded shadow hover:bg-[#e5406c] transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#e5406c]" role="button">
      See Location Map →
    </a>
  </div>
</section>

<script>
function animateCounter(id, endValue, duration = 2000) {
  const counter = document.getElementById(id);
  let start = 0;
  const increment = endValue / (duration / 16); // ~60fps
  function update() {
    start += increment;
    if (start < endValue) {
      counter.innerText = Math.floor(start).toLocaleString();
      requestAnimationFrame(update);
    } else {
      counter.innerText = endValue.toLocaleString();
    }
  }
  update();
}

// Trigger on load
document.addEventListener('DOMContentLoaded', () => {
  animateCounter("counter0", 7);
  animateCounter("counter1", 113);
  animateCounter("counter2", 4905);
});
</script>



<script>
document.addEventListener('DOMContentLoaded', function() {
  // Initialize GSAP animations
  gsap.registerPlugin(ScrollTrigger);
  
  // Animate each section sequentially
  gsap.utils.toArray('.belief-item, .strengths-item, .goals-item').forEach((item, i) => {
    gsap.from(item, {
      scrollTrigger: {
        trigger: item,
        start: "top 80%",
        toggleActions: "play none none none"
      },
      y: 50,
      opacity: 0,
      duration: 0.8,
      delay: i * 0.2,
      ease: "power2.out"
    });
  });
  
  // Add highlight animation on hover
  document.querySelectorAll('.highlight-text').forEach(item => {
    item.addEventListener('mouseenter', () => {
      gsap.to(item.querySelector('.highlight-trigger::after'), {
        width: '100%',
        duration: 0.3
      });
    });
    
    item.addEventListener('mouseleave', () => {
      gsap.to(item.querySelector('.highlight-trigger::after'), {
        width: '0%',
        duration: 0.3
      });
    });
  });
});
</script>


<?php include 'footer.php'; ?>
