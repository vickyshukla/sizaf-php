<?php
$metaTitle = "Web & Media Services for Enhanced Digital Presence - Sizaf";
$metaDescription = "Boost your online presence with Sizaf's web and media services. From website development to digital marketing, we provide tailored solutions to elevate your brand.";
$metaKeywords = "governance security, public sector IT solutions, secure infrastructure, government technology, network services";
$metaImage = "https://yourdomain.com/images/og-governance.jpg";
$canonicalURL = "https://sizaf-php.sizaf.com/web-media.php"; 
include('header.php');
?>
<div class="w-full h-36 bg-[#4d346d] text-center py-8 text-white">
            <h1 class="text-lg md:text-xl lg:text-3xl font-bold uppercase tracking-wide pb-3">Web & Media Services</h1>
            <h3 class="flex items-center justify-center gap-4 text-base font-medium">
                <a href="./index.php"> <span class="hover:text-[#ff156e]">Sizaf</span> </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>
                <a href="./"><span class="hover:text-[#ff156e]">Technology Services</span>
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>
                <a href="./web-media.php"><span class="hover:text-[#ff156e]">Web & Media Services</span>
                </a>
            </h3>
</div>

<section class="py-16 px-4 bg-gradient-to-br from-slate-50 to-slate-100">
  <div class="max-w-7xl mx-auto">
    <!-- Header Section -->
    <div class="text-center mb-16">
      <span class="inline-flex items-center rounded-full px-3 py-1 text-sm font-medium mb-4 bg-gradient-to-r from-pink-500 to-purple-600 text-white">
        Infrastructure Excellence
      </span>
      <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6">Web & Media Services</h1>
      <p class="text-lg text-slate-600 max-w-3xl mx-auto leading-relaxed">
      We at Sizaf infocomm realize the importance of the web & media services required by you. We deliver interactive communication and draw creative solutions. Our services will begin to boost your selling efforts, reaching more prospective customers and convert into profitable numbers.
      </p>
    </div>

    <!-- Main Content Section -->
    <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
      <!-- Left Content -->
      <div class="space-y-6">
        <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white px-4 py-2 rounded-full text-sm font-medium">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
            <line x1="6" y1="6" x2="6.01" y2="6"></line>
            <line x1="6" y1="18" x2="6.01" y2="18"></line>
          </svg>
          Experience Innovation
        </div>

        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 leading-tight">
          NOW EXPERIENCE, 
          <span class="bg-gradient-to-r from-purple-600 to-pink-500 bg-clip-text text-transparent">
          SIZAF NET WITH TECH
        </span>
        </h2>

        <p class="text-slate-600 leading-relaxed text-lg">
        With Sizaf Web & Media Services, you can share your message with the world-whether you’re a freelancer or a large corporation. Regardless of your business size or budget, we provide customized services on a fixed or monthly cost basis to suit your needs and convenience. 
        </p>

        <p class="text-slate-600 leading-relaxed">
        Our services open up tremendous possibilities to reach millions of internet users daily, bringing your product or service to those who want or need it.
        </p>

        <button class="bg-pink-500 hover:bg-pink-600 text-white px-8 py-3 rounded-lg font-medium inline-flex items-center gap-2 transition-colors duration-300">
          Get Started Today
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </button>
      </div>

      <!-- Right Image -->
      <div class="relative">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-purple-600/20 rounded-2xl transform rotate-3"></div>
        <img 
          src="./assest/web-media.jpg" 
          alt="Web media" 
          width="600" 
          height="400" 
          class="relative rounded-2xl shadow-2xl object-cover w-full h-[400px]"
          loading="lazy"
        >
      </div>
    </div>

    <!-- Services Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php
      $services = [
        [
          'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>',
          'title' => 'Websites, Domains & Emails',
          'color' => 'bg-blue-500',
          'items' => [
            'Website Domain Registration',
            'Website Domain Transfer Domains - .MY / ICANN / Country',
            'Virtualization - across multiple Technologies such as Windows & Linux',
            'Email hosting and management',
          ],
        ],
        [
          'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>',
          'title' => 'Digital Marketing',
          'color' => 'bg-green-500',
          'items' => [
            'SEO & Digital Marketing', 
          ],
        ],
        [
          'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>',
          'title' => 'Data Scraping Services',
          'color' => 'bg-red-500',
          'items' => [
            'Get Any Custom Information from Web',
          ],
        ],
        [
          'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8"><line x1="22" y1="12" x2="2" y2="12"></line><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path><line x1="6" y1="16" x2="6.01" y2="16"></line><line x1="10" y1="16" x2="10.01" y2="16"></line></svg>',
          'title' => 'Creative Content, Animation, VFX, Adverts',
          'color' => 'bg-purple-500',
          'items' => [
            'Creative Media Designs, Animation / VFX Videos & Content Development, Production and Publishing across all Platforms', 
          ],
        ],
      ];

      foreach ($services as $index => $service) {
      ?>
      <div class="group hover:shadow-xl transition-all duration-300 border-0 shadow-lg hover:-translate-y-2 rounded-lg bg-white">
        <div class="p-6 pb-4">
          <div class="<?php echo $service['color']; ?> w-16 h-16 rounded-xl flex items-center justify-center text-white mb-4 group-hover:scale-110 transition-transform duration-300">
            <?php echo $service['icon']; ?>
          </div>
          <h3 class="text-xl font-bold text-slate-900 group-hover:text-pink-600 transition-colors">
            <?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?>
          </h3>
        </div>
        <div class="px-6 pb-6">
          <ul class="space-y-3">
            <?php foreach ($service['items'] as $itemIndex => $item) { ?>
            <li class="flex items-start gap-3 text-slate-600">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mt-0.5 flex-shrink-0">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
              </svg>
              <span class="text-sm leading-relaxed"><?php echo htmlspecialchars($item, ENT_QUOTES, 'UTF-8'); ?></span>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <?php } ?>
    </div>

  </div>
</section>

<section class="py-20 px-4 bg-white">
  <div class="max-w-7xl mx-auto">
    <!-- Header -->
    <div class="text-center mb-16">
      <span class="inline-flex items-center rounded-full px-3 py-1 text-sm font-medium mb-4 bg-gradient-to-r from-pink-500 to-purple-600 text-white">
        Service Excellence
      </span>
      <h2 class="text-3xl md:text-3xl lg:text-4xl font-bold text-slate-900 mb-6 leading-tight">
        IMPRESSED WITH SERVICES BY 
        <span class="bg-gradient-to-r from-purple-600 to-pink-500 bg-clip-text text-transparent">
          SIZAF NET WITH TECH
        </span>
      </h2>
      <p class="text-lg text-slate-600 max-w-3xl mx-auto leading-relaxed">
        Please allow us the opportunity to offer you a service experience that meets your requirements and budget.
      </p>
    </div>

    <!-- Main Content Grid -->
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <!-- Left Content -->
      <div class="space-y-6">
        <div class="bg-gradient-to-br from-slate-50 to-slate-100 rounded-2xl p-8">
          <h2 class="text-2xl font-bold text-slate-900 mb-4">Our Approach</h2>
          <p class="text-slate-600 leading-relaxed text-lg">
            SIZAF Tech Services focuses on issues that require urgent attention. We follow industry best practices,
            work with customers to set priorities, and develop, evaluate, analyze, and optimize potential solutions.
          </p>
          <p class="text-slate-600 leading-relaxed mt-4">
            We continue to collaborate closely with our customers to enhance implemented solutions, delivering
            improved results over the long term.
          </p>

          <div class="mt-6 flex items-center gap-3">
            <div class="flex -space-x-2">
              <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full border-2 border-white"></div>
              <div class="w-8 h-8 bg-gradient-to-r from-green-500 to-blue-500 rounded-full border-2 border-white"></div>
              <div class="w-8 h-8 bg-gradient-to-r from-pink-500 to-red-500 rounded-full border-2 border-white"></div>
            </div>
            <span class="text-sm text-slate-500 font-medium">Trusted by 500+ clients</span>
          </div>
        </div>
      </div>

      <!-- Right Services List -->
      <div class="space-y-4">
        <?php
        $services = [
          [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>',
            'title' => 'WEB & MEDIA SERVICES',
            'description' => 'Custom web development and digital media solutions',
          ],
          [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>',
            'title' => 'TECH INFRA SERVICES',
            'description' => 'Complete infrastructure setup and management',
          ],
          [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>',
            'title' => 'NETWORK SERVICES',
            'description' => 'Network design, implementation, and optimization',
          ],
          [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path d="M12 2a10 10 0 0 0-7 17"></path><path d="M12 2a10 10 0 0 1 7 17"></path><circle cx="12" cy="12" r="3"></circle><circle cx="12" cy="12" r="1"></circle><path d="M7 12h10"></path></svg>',
            'title' => 'MANAGED IT SERVICES',
            'description' => '24/7 IT support and maintenance solutions',
          ],
        ];

        foreach ($services as $index => $service) {
        ?>
        <div class="group bg-white border border-slate-200 rounded-xl p-6 hover:shadow-lg hover:border-pink-200 transition-all duration-300 hover:-translate-y-1">
          <div class="flex items-start gap-4">
            <div class="flex-shrink-0">
              <div class="w-12 h-12 bg-gradient-to-r from-pink-500 to-purple-600 rounded-lg flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300">
                <?php echo $service['icon']; ?>
              </div>
            </div>
            <div class="flex-1">
              <div class="flex items-center gap-3 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                  <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                  <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
                <h3 class="font-bold text-slate-900 group-hover:text-pink-600 transition-colors">
                  <?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?>
                </h3>
              </div>
              <p class="text-slate-600 text-sm leading-relaxed">
                <?php echo htmlspecialchars($service['description'], ENT_QUOTES, 'UTF-8'); ?>
              </p>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>

    <!-- Call to Action -->
    <div class="mt-16 text-center">
      <div class="inline-flex flex-col sm:flex-row gap-4 items-center">
        <a href="./about.php">
          <button class="bg-pink-500 hover:bg-pink-600 text-white px-8 py-4 text-lg font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 inline-flex items-center gap-3">
            Place Order / Enquiry
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </button>
        </a>
        <a href="./about.php">
          <button class="border-2 border-slate-300 text-slate-700 hover:bg-slate-50 px-8 py-4 text-lg font-semibold rounded-xl transition-colors duration-300">
            Schedule Consultation
          </button>
        </a>
      </div>

      <div class="mt-8 flex flex-wrap justify-center gap-6 text-sm text-slate-500">
        <div class="flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
            <polyline points="22 4 12 14.01 9 11.01"></polyline>
          </svg>
          <span>Free Consultation</span>
        </div>
        <div class="flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
            <polyline points="22 4 12 14.01 9 11.01"></polyline>
          </svg>
          <span>24/7 Support</span>
        </div>
        <div class="flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
            <polyline points="22 4 12 14.01 9 11.01"></polyline>
          </svg>
          <span>Custom Solutions</span>
        </div>
      </div>
    </div>
            
  </div>
</section>



<script>
// Animation Scripts
document.addEventListener('DOMContentLoaded', function() {
  // Scroll animation for service cards
  const serviceCards = document.querySelectorAll('.service-card');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-fadeInUp');
      }
    });
  }, { threshold: 0.1 });

  serviceCards.forEach(card => {
    card.classList.add('opacity-0', 'translate-y-6');
    observer.observe(card);
  });

  // Hover animation for CTA buttons
  const ctaButtons = document.querySelectorAll('.cta-button');
  ctaButtons.forEach(button => {
    button.addEventListener('mouseenter', () => {
      button.classList.add('shadow-lg', 'scale-105');
    });
    button.addEventListener('mouseleave', () => {
      button.classList.remove('shadow-lg', 'scale-105');
    });
  });
});
</script>

<style>
/* Animation Styles */
.animate-fadeInUp {
  animation: fadeInUp 0.6s ease-out forwards;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Performance Optimizations */
@media (prefers-reduced-motion: reduce) {
  * {
    animation-duration: 0.01ms !important;
    animation-iteration-count: 1 !important;
    transition-duration: 0.01ms !important;
    scroll-behavior: auto !important;
  }
}
</style>

<script>
// Add any JavaScript for animations here
document.addEventListener('DOMContentLoaded', function() {
  // Example animation - fade in elements on scroll
  const observerOptions = {
    threshold: 0.1
  };

  const observer = new IntersectionObserver(function(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-fadeIn');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // Observe all elements you want to animate
  document.querySelectorAll('.service-card, .cta-section').forEach(card => {
    card.classList.add('opacity-0', 'transition-opacity', 'duration-500');
    observer.observe(card);
  });
});
</script>

<style>
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

.animate-fadeIn {
  animation: fadeIn 0.6s ease-out forwards;
}
</style>
<?php include 'footer.php'; ?>