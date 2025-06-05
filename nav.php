

<header class="bg-white shadow z-50 " x-data="{ mobileMenu: false }" role="banner">
  <!-- Top Bar -->
  <div class="bg-[#000322] font-semibold text-[#9ca3af]">
    <div class="max-w-[1480px] mx-auto px-2.5 sm:px-4 text-xs sm:text-sm py-4 flex flex-col gap-2 items-start lg:flex-row lg:justify-between lg:items-center">
      <div class="flex items-center justify-center gap-3.5 md:gap-6">
        <a href="http://122.170.111.109:8002/customer-enquiry-form/new" target="_blank" class="hover:text-blue-300 transition">Enquiry</a>
        <a href="ticket.php" class="hover:text-blue-300 transition">Submit a Ticket</a>
        <a href="admin-login.php" class="hover:text-blue-300 transition">Admin Login</a>
        <a href="./jobs.php" class="hover:text-blue-300 transition">Career</a>
        <a href="contact.php" class="hover:text-blue-300 transition">Contact Us</a>
      </div>
      <div class="flex items-center justify-between md:gap-5 text-gray-400 w-full md:w-80 pt-1.5 md:pt-0">
        <a href="mailto:info@sizaf.com" class="flex items-center hover:text-blue-300 transition">
          <svg class="w-4 h-4 mr-1 text-pink-500" fill="currentColor" viewBox="0 0 24 24"><path d="M2 4v16h20V4H2zm10 7L4 6h16l-8 5z"/></svg>
          info@sizaf.com
        </a>
        <span id="openSpeedTest" class="cursor-pointer flex items-center justify-center gap-2 hover:text-blue-300">
          <i class="fa-solid fa-wifi"></i>
          Speed Test
        </span>
        <button id="searchTrigger" class="hover:text-blue-300 transition">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M21 21l-4.35-4.35M11 18a7 7 0 1 1 0-14 7 7 0 0 1 0 14z"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Main Navigation -->
  <div class="max-w-[1480px] mx-auto px-4 py-4 flex items-center justify-between relative">
    <a href="index.php" class="text-xl font-bold">
      <img src="./assest/sizaflogo.png" alt="SIZAF Logo" width="120" height="120" loading="lazy">
    </a>

    <!-- Mobile Toggle Button -->
    <button @click="mobileMenu = !mobileMenu" class="lg:hidden focus:outline-none" aria-label="Toggle menu">
      <svg x-show="!mobileMenu" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <svg x-show="mobileMenu" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>

    <?php
      $currentPage = basename($_SERVER['PHP_SELF']);

      // Dropdown parent active checks
      $isTechActive = in_array($currentPage, ['web-media.php', 'tech.php', 'network.php']);
      $isIndustryActive = in_array($currentPage, [
        'governance-security.php', 'health-education.php', 'non-profit.php', 'travel-leisure.php',
        'construction-real-estate.php', 'media-advertising.php', 'retail-ecommerce.php',
        'production-pharma.php', 'transport-logistics.php', 'agri-climate.php', 'finance-banking.php'
      ]);
      $isBlogActive = in_array($currentPage, ['news.php', 'blog.php']);
    ?>

    <!-- Desktop Navigation -->
    <nav class="hidden lg:flex space-x-6 items-center" role="navigation" aria-label="Main navigation">
      <div>
        <a href="about.php" class="hover:text-[#ff156e] transition <?= $currentPage === 'about.php' ? 'text-[#ff156e]' : '' ?>">About Us</a>
        <?php if ($currentPage === 'about.php'): ?>
          <div class="w-full h-0.5 bg-[#ff156e] rounded"></div>
        <?php endif; ?>
      </div>

      <!-- Technology Dropdown - Improved Hover Version -->
      <div class="relative group">
        <button class="flex items-center transition-colors duration-200 <?= $isTechActive ? 'text-[#ff156e]' : 'hover:text-[#ff156e]' ?>">
          Technology Services
          <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="2"
              viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <?php if ($isTechActive): ?>
          <div class="w-full h-0.5 bg-[#ff156e] rounded"></div>
        <?php endif; ?>
        <div class="absolute left-0  hidden group-hover:block bg-white shadow-lg rounded-md w-48 z-50 overflow-hidden transition-all duration-200 origin-top transform opacity-0 group-hover:opacity-100 group-hover:scale-100">
          <a href="web-media.php" class="block px-4 py-2 transition-colors duration-150 <?= $currentPage === 'web-media.php' ? 'text-[#ff156e] font-medium' : 'hover:bg-blue-50 hover:text-[#ff156e]' ?>">Web Media</a>
          <a href="tech.php" class="block px-4 py-2 transition-colors duration-150 <?= $currentPage === 'tech.php' ? 'text-[#ff156e] font-medium' : 'hover:bg-blue-50 hover:text-[#ff156e]' ?>">Tech</a>
          <a href="network.php" class="block px-4 py-2 transition-colors duration-150 <?= $currentPage === 'network.php' ? 'text-[#ff156e] font-medium' : 'hover:bg-blue-50 hover:text-[#ff156e]' ?>">Network</a>
        </div>
      </div>

      <!-- Industry Dropdown -->
      <div class="relative group">
        <button class="flex items-center transition-colors duration-200 <?= $isIndustryActive ? 'text-[#ff156e]' : 'hover:text-[#ff156e]' ?>">
          Industries and Sectors
          <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="2"
              viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <?php if ($isIndustryActive): ?>
          <div class="w-full h-0.5 bg-[#ff156e] rounded"></div>
        <?php endif; ?>
        <div class="absolute left-0  hidden group-hover:block bg-white shadow-lg rounded-md w-60 z-50 overflow-hidden transition-all duration-200 origin-top transform opacity-0 group-hover:opacity-100 group-hover:scale-100">
          <a href="governance-security.php" class="block px-4 py-2 transition-colors duration-150 <?= $currentPage === 'governance-security.php' ? 'text-[#ff156e] font-medium' : 'hover:bg-blue-50 hover:text-[#ff156e]' ?>">Governance & Security</a>
          <a href="health-education.php" class="block px-4 py-2 transition-colors duration-150 <?= $currentPage === 'health-education.php' ? 'text-[#ff156e] font-medium' : 'hover:bg-blue-50 hover:text-[#ff156e]' ?>">Health & Education</a>
          <a href="non-profit.php" class="block px-4 py-2 transition-colors duration-150 <?= $currentPage === 'non-profit.php' ? 'text-[#ff156e] font-medium' : 'hover:bg-blue-50 hover:text-[#ff156e]' ?>">Non Profit Organization</a>
          <a href="travel-leisure.php" class="block px-4 py-2 transition-colors duration-150 <?= $currentPage === 'travel-leisure.php' ? 'text-[#ff156e] font-medium' : 'hover:bg-blue-50 hover:text-[#ff156e]' ?>">Travel & Leisure</a>
          <a href="construction-real-estate.php" class="block px-4 py-2 transition-colors duration-150 <?= $currentPage === 'construction-real-estate.php' ? 'text-[#ff156e] font-medium' : 'hover:bg-blue-50 hover:text-[#ff156e]' ?>">Construction & Real Estate</a>
          <a href="media-advertising.php" class="block px-4 py-2 transition-colors duration-150 <?= $currentPage === 'media-advertising.php' ? 'text-[#ff156e] font-medium' : 'hover:bg-blue-50 hover:text-[#ff156e]' ?>">Media & Advertising</a>
          <a href="retail-ecommerce.php" class="block px-4 py-2 transition-colors duration-150 <?= $currentPage === 'retail-ecommerce.php' ? 'text-[#ff156e] font-medium' : 'hover:bg-blue-50 hover:text-[#ff156e]' ?>">Retail & E-Commerce</a>
          <a href="production-pharma.php" class="block px-4 py-2 transition-colors duration-150 <?= $currentPage === 'production-pharma.php' ? 'text-[#ff156e] font-medium' : 'hover:bg-blue-50 hover:text-[#ff156e]' ?>">Production, Engg & Pharma</a>
          <a href="transport-logistics.php" class="block px-4 py-2 transition-colors duration-150 <?= $currentPage === 'transport-logistics.php' ? 'text-[#ff156e] font-medium' : 'hover:bg-blue-50 hover:text-[#ff156e]' ?>">Transport & Logistics</a>
          <a href="agri-climate.php" class="block px-4 py-2 transition-colors duration-150 <?= $currentPage === 'agri-climate.php' ? 'text-[#ff156e] font-medium' : 'hover:bg-blue-50 hover:text-[#ff156e]' ?>">Agri, Fisheries & Climate</a>
          <a href="finance-banking.php" class="block px-4 py-2 transition-colors duration-150 <?= $currentPage === 'finance-banking.php' ? 'text-[#ff156e] font-medium' : 'hover:bg-blue-50 hover:text-[#ff156e]' ?>">Finance & Banking</a>     
        </div>
      </div>

        <!-- Global Network -->
      <div>
        <a href="global-network.php" class="hover:text-[#ff156e] transition <?= $currentPage === 'global-network.php' ? 'text-[#ff156e]' : '' ?>">
          Global Networks
        </a>
        <?php if ($currentPage === 'global-network.php'): ?>
          <div class="w-full h-0.5 bg-[#ff156e] rounded"></div>
        <?php endif; ?>
      </div>

      <!-- Blog Dropdown -->
       <div class="relative group">
        <button class="flex items-center transition-colors duration-200 <?= $isBlogActive ? 'text-[#ff156e]' : 'hover:text-[#ff156e]' ?>">
          News and Blogs
          <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="2"
              viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <?php if ($isBlogActive): ?>
          <div class="w-full h-0.5 bg-[#ff156e] rounded"></div>
        <?php endif; ?>
        <div class="absolute left-0  hidden group-hover:block bg-white shadow-lg rounded-md w-40 z-50 overflow-hidden transition-all duration-200 origin-top transform opacity-0 group-hover:opacity-100 group-hover:scale-100">
          <a href="./news.php" class="block px-4 py-2 text-gray-700 <?= $currentPage === 'news.php' ? 'text-[#ff156e] font-medium' : 'hover:bg-blue-50 hover:text-[#ff156e]' ?> transition-colors duration-150">News</a>
          <a href="./blog.php" class="block px-4 py-2 text-gray-700 <?= $currentPage === 'blog.php' ? 'text-[#ff156e] font-medium' : 'hover:bg-blue-50 hover:text-[#ff156e]' ?> transition-colors duration-150">Blogs</a>
        </div>
      </div>

    </nav>
  </div>

  <!-- Mobile Navigation -->
  <div x-show="mobileMenu"  x-transition:enter="transition ease-out duration-300" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2" class="lg:hidden bg-white px-6 py-4 space-y-5 shadow-md rounded-b-md" role="navigation">
    <a href="about.php" class="block text-sm font-semibold text-gray-900 hover:text-[#ff156e]">About Us</a>

    <div>
      <p class="text-sm font-semibold text-gray-900 mb-2">Technology</p>
      <nav class="space-y-1 pl-4 border-l border-pink-200">
        <a href="web-media.php" class="block text-gray-600 hover:text-[#ff156e]">Web Media</a>
        <a href="tech.php" class="block text-gray-600 hover:text-[#ff156e]">Tech</a>
        <a href="network.php" class="block text-gray-600 hover:text-[#ff156e]">Network</a>
      </nav>
    </div>

    <div>
      <p class="text-sm font-semibold text-gray-900 mb-2">Industries & Sectors</p>
      <nav class="space-y-1 pl-4 border-l border-pink-200">
        <a href="governance-security.php" class="block text-gray-600 hover:text-[#ff156e]">Governance & Security</a>
        <a href="health-education.php" class="block text-gray-600 hover:text-[#ff156e]">Health & Education</a>
        <a href="non-profit.php" class="block text-gray-600 hover:text-[#ff156e]">Non Profit Organization</a>
        <a href="travel-leisure.php" class="block text-gray-600 hover:text-[#ff156e]">Travel & Leisure</a>
        <a href="construction-real-estate.php" class="block text-gray-600 hover:text-[#ff156e]">Construction & Real Estate</a>
        <a href="media-advertising.php" class="block text-gray-600 hover:text-[#ff156e]">Media & Advertising</a>
        <a href="retail-ecommerce.php" class="block text-gray-600 hover:text-[#ff156e]">Retail & E-Commerce</a>
        <a href="production-pharma.php" class="block text-gray-600 hover:text-[#ff156e]">Production, Engg & Pharma</a>
        <a href="transport-logistics.php" class="block text-gray-600 hover:text-[#ff156e]">Transport & Logistics</a>
        <a href="agri-climate.php" class="block text-gray-600 hover:text-[#ff156e]">Agri, Fisheries & Climate</a>
        <a href="finance-banking.php" class="block text-gray-600 hover:text-[#ff156e]">Finance & Banking</a>
      </nav>
    </div>

    <a href="global-network.php" class="block text-sm font-semibold text-gray-900 hover:text-[#ff156e]">Global Networks</a>

    <div>
      <p class="text-sm font-semibold text-gray-900 mb-2">News & Blogs</p>
      <nav class="space-y-1 pl-4 border-l border-pink-200">
        <a href="news.php" class="block text-gray-600 hover:text-[#ff156e]">News</a>
        <a href="blog.php" class="block text-gray-600 hover:text-[#ff156e]">Blogs</a>
      </nav>
    </div>
  </div>

  <!-- Speed Test Popup -->
  <div id="speedTestDialog" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 bg-opacity-60">
    <div class="w-full max-w-[90vw] h-auto max-h-[90vh] sm:max-w-[700px] sm:max-h-[500px] p-4 bg-white rounded-lg overflow-hidden relative">
      <!-- Close Button -->
      <button id="closeSpeedTest" class="absolute top-2 right-2 text-gray-600 hover:text-black text-2xl font-bold">&times;</button>

      <!-- Dialog Header -->
      <h2 class="text-center text-xl sm:text-3xl font-semibold mt-4">Internet Speed Test</h2>

      <!-- Iframe Area -->
      <div class="relative w-full h-[70vh] sm:h-[400px] mt-4 rounded-md overflow-hidden">
        <div id="speedTestLogo" class="hidden absolute bottom-7 left-1/2 -translate-x-1/2 sm:top-1 sm:left-1/2 z-10">
          <img src="./assest/sizaflogo.png" alt="Sizaf Logo" class="sm:w-16 w-24 h-auto" width="96" height="96">
        </div>
        <iframe
          id="speedTestIframe"
          src="https://openspeedtest.com/Get-widget.php"
          width="100%"
          height="100%"
          allowfullscreen
          class="border-none"
        ></iframe>
      </div>
    </div>
  </div>

  <!-- Search Popup -->
  <div id="searchPopover"
    class="hidden absolute right-4 top-16 z-50 w-full max-w-md p-5 bg-white rounded-2xl shadow-2xl border border-gray-200 transition-all duration-300 ease-out">
    <!-- Close Button -->
    <button
      class="closePopover absolute top-3 right-3 text-gray-400 hover:text-gray-600 text-lg font-bold focus:outline-none" aria-label="Close">
      <i class="fa-solid fa-xmark"></i>
    </button>

    <!-- Search Section -->
    <div class="flex flex-col gap-4 mt-4">
      <div class="flex gap-2">
        <input type="text" placeholder="Search..."
          class="searchInput w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-400 shadow-sm transition" />

        <button
          class="searchBtn px-4 py-2 rounded-lg text-white bg-gradient-to-r from-pink-500 to-red-500 hover:from-pink-600 hover:to-red-600 transition font-semibold shadow-md">
          Search
        </button>
      </div>

      <!-- Results -->
      <div class="searchResults max-h-60 overflow-y-auto mt-1 text-sm space-y-2"></div>
    </div>
  </div>
</header>
<script>
  const openBtn = document.getElementById('openSpeedTest');
  const dialog = document.getElementById('speedTestDialog');
  const closeBtn = document.getElementById('closeSpeedTest');
  const iframe = document.getElementById('speedTestIframe');
  const logo = document.getElementById('speedTestLogo');

  let iframeTimeout;

  openBtn.addEventListener('click', () => {
    // Reset iframe
    iframe.src = "https://openspeedtest.com/Get-widget.php";
    logo.classList.add('hidden');
    dialog.classList.remove('hidden');
    dialog.classList.add('flex');

    // Wait for iframe to load
    iframe.onload = () => {
      clearTimeout(iframeTimeout);
      logo.classList.remove('hidden');
    };

    // Set fallback timeout (10s)
    iframeTimeout = setTimeout(() => {
      if (!logo.classList.contains('hidden')) return;
      logo.innerHTML = `<p class="text-center text-red-600 font-semibold">Failed to load. Please try again.</p>`;
      logo.classList.remove('hidden');
    }, 10000);
  });

  closeBtn.addEventListener('click', () => {
    dialog.classList.add('hidden');
    iframe.src = ""; // Clear iframe
    logo.classList.add('hidden');
    clearTimeout(iframeTimeout);
  });
  
</script>
<script>
  const trigger = document.getElementById('searchTrigger');
  const popover = document.getElementById('searchPopover');
  const close = document.querySelector('.closePopover');
  const searchBtn = document.querySelector('.searchBtn');
  const searchInput = document.querySelector('.searchInput');
  const searchResults = document.querySelector('.searchResults');

  let hasSearched = false;

  trigger.addEventListener('click', () => {
    popover.classList.toggle('hidden');
    searchInput.focus();
  });

  close.addEventListener('click', () => {
    popover.classList.add('hidden');
    searchResults.innerHTML = '';
    hasSearched = false;
  });

  searchInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') handleSearch();
  });

  searchBtn.addEventListener('click', handleSearch);

  function handleSearch() {
    const query = searchInput.value.trim();
    if (query === '') {
      searchResults.innerHTML = '<div class="text-red-500">Please enter a search term.</div>';
      return;
    }

  fetch(`search.php?q=${encodeURIComponent(query)}`)
    .then(response => response.json())
    .then(results => {
      if (results.length === 0) {
        searchResults.innerHTML = `<div class="text-red-500 font-semibold">No results found for "${query}"</div>`;
      } else {
        const list = results.map(r =>
          `<li><a href="${r.url}" class="text-blue-600 hover:underline">${r.title}</a></li>`
        ).join('');
        searchResults.innerHTML = `
          <h3 class="font-semibold mb-1">Results:</h3>
          <ul class="list-disc pl-5">${list}</ul>
        `;
      }
    })
    .catch(error => {
      searchResults.innerHTML = `<div class="text-red-500">Error loading results</div>`;
      console.error(error);
    });
  }
</script>

