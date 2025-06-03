

<header class="bg-white shadow z-50 " x-data="{ mobileMenu: false }" role="banner">
  <!-- Top Bar -->
  <div class="bg-[#000322] text-sm font-semibold text-[#9ca3af]">
    <div class="max-w-[1480px] mx-auto px-4 py-4 flex justify-between items-center">
      <div class="flex space-x-4">
        <a href="http://122.170.111.109:8002/customer-enquiry-form/new" target="_blank" class="hover:text-blue-300 transition">Enquiry</a>
        <a href="ticket.php" class="hover:text-blue-300 transition">Submit a Ticket</a>
        <a href="admin-login.php" class="hover:text-blue-300 transition">Admin Login</a>
        <a href="./jobs.php" class="hover:text-blue-300 transition">Career</a>
        <a href="contact.php" class="hover:text-blue-300 transition">Contact Us</a>
      </div>
      <div class="flex space-x-4 items-center">
        <a href="mailto:info@sizaf.com" class="flex items-center hover:text-blue-300 transition">
          <svg class="w-4 h-4 mr-1 text-pink-500" fill="currentColor" viewBox="0 0 24 24"><path d="M2 4v16h20V4H2zm10 7L4 6h16l-8 5z"/></svg>
          info@sizaf.com
        </a>
        <a href="speed-test.php" class="hover:text-blue-300 transition">Speed Test</a>
        <button class="hover:text-blue-300 transition">
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
    <button @click="mobileMenu = !mobileMenu" class="md:hidden focus:outline-none" aria-label="Toggle menu">
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

    <!-- Desktop Navigation -->
    <nav class="hidden md:flex space-x-6 items-center" role="navigation" aria-label="Main navigation">
      <a href="about.php" class="hover:text-[#ff156e] transition">About Us</a>

      <!-- Technology Dropdown - Improved Hover Version -->
      <div class="relative group">
        <button class="flex items-center hover:text-[#ff156e] transition-colors duration-200">
          Technology Services
          <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="2"
              viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div class="absolute left-0  hidden group-hover:block bg-white shadow-lg rounded-md w-48 z-50 overflow-hidden transition-all duration-200 origin-top transform opacity-0 group-hover:opacity-100 group-hover:scale-100">
          <a href="web-media.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-[#ff156e] transition-colors duration-150">Web Media</a>
          <a href="tech.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-[#ff156e] transition-colors duration-150">Tech</a>
          <a href="network.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-[#ff156e] transition-colors duration-150">Network</a>
        </div>
      </div>

      <!-- Industry Dropdown -->
      <div class="relative group">
        <button class="flex items-center hover:text-[#ff156e] transition-colors duration-200">
          Industries and Sectors
          <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="2"
              viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div class="absolute left-0  hidden group-hover:block bg-white shadow-lg rounded-md w-60 z-50 overflow-hidden transition-all duration-200 origin-top transform opacity-0 group-hover:opacity-100 group-hover:scale-100">
          <a href="web-media.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-[#ff156e] transition-colors duration-150">Governance & Security</a>
          <a href="tech.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-[#ff156e] transition-colors duration-150">Health & Education</a>
          <a href="network.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-[#ff156e] transition-colors duration-150">Non Profit Organization</a>
          <a href="network.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-[#ff156e] transition-colors duration-150">Travel & Leisure</a>
          <a href="network.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-[#ff156e] transition-colors duration-150">Construction & Real Estate</a>
          <a href="network.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-[#ff156e] transition-colors duration-150">Media & Advertising</a>
          <a href="network.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-[#ff156e] transition-colors duration-150">Retail & E-Commerce</a>
          <a href="network.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-[#ff156e] transition-colors duration-150">Production, Engg & Pharma</a>
          <a href="network.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-[#ff156e] transition-colors duration-150">Transport & Logistics</a>
          <a href="network.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-[#ff156e] transition-colors duration-150">Agri, Fisheries & Climate</a>
          <a href="network.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-[#ff156e] transition-colors duration-150">Finance & Banking</a>     
        </div>
      </div>


      <a href="global-network.php" class="hover:text-[#ff156e] transition">Global Networks</a>

      <!-- Blog Dropdown -->
       <div class="relative group">
        <button class="flex items-center hover:text-[#ff156e] transition-colors duration-200">
          News and Blogs
          <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="2"
              viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div class="absolute left-0  hidden group-hover:block bg-white shadow-lg rounded-md w-40 z-50 overflow-hidden transition-all duration-200 origin-top transform opacity-0 group-hover:opacity-100 group-hover:scale-100">
          <a href="./news.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-[#ff156e] transition-colors duration-150">News</a>
          <a href="./blog.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-[#ff156e] transition-colors duration-150">Blogs</a>
        </div>
      </div>

    </nav>
  </div>

  <!-- Mobile Navigation -->
  <div x-show="mobileMenu" x-transition class="md:hidden bg-white px-4 pb-4 space-y-2" role="navigation">
    <a href="about.php" class="block hover:text-[#ff156e]">About Us</a>

    <div>
      <p class="font-medium mt-2">Technology</p>
      <a href="web-media.php" class="block ml-4 hover:text-[#ff156e]">Web Media</a>
      <a href="tech.php" class="block ml-4 hover:text-[#ff156e]">Tech</a>
      <a href="network.php" class="block ml-4 hover:text-[#ff156e]">Network</a>
    </div>

    <div>
      <p class="font-medium mt-2">Industries and Sectors</p>
      <a href="governance.php" class="block ml-4 hover:text-[#ff156e]">Governance</a>
      <a href="profit-organisation.php" class="block ml-4 hover:text-[#ff156e]">Profit Organisation</a>
      <a href="travel.php" class="block ml-4 hover:text-[#ff156e]">Travel</a>
      <a href="finance.php" class="block ml-4 hover:text-[#ff156e]">Finance</a>
    </div>

    <a href="global-network.php" class="block hover:text-[#ff156e] mt-2">Global Networks</a>

    <div>
      <p class="font-medium mt-2">News & Blogs</p>
      <a href="news.php" class="block ml-4 hover:text-[#ff156e]">News</a>
      <a href="blog.php" class="block ml-4 hover:text-[#ff156e]">Blogs</a>
    </div>
  </div>
</header>
