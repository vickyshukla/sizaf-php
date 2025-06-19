<?php
$metaTitle = "Managed IT Services for Business Efficiency - Sizaf";
$metaDescription = "Maximize your business potential with Sizaf's managed IT services. Ensure seamless operations, proactive support, and optimized technology solutions for growth.";
$metaKeywords = "governance security, public sector IT solutions, secure infrastructure, government technology, network services";
$metaImage = "https://yourdomain.com/images/og-governance.jpg";
$canonicalURL = "https://sizaf-php.sizaf.com/managed-it-services.php"; 
include('header.php');
?>
<div class="w-full h-36 bg-[#4d346d] text-center py-8 text-white">
            <h1 class="text-lg md:text-xl lg:text-3xl font-bold uppercase tracking-wide pb-3">Managed IT Services</h1>
            <h3 class="flex items-center justify-center gap-4 text-base font-medium">
                <a href="./index.php"> <span class="hover:text-[#ff156e]">Sizaf</span> </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>
                <a href="./"><span class="hover:text-[#ff156e]">Technology Services</span>
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>
                <a href="./managed-it-services.php"><span class="hover:text-[#ff156e]">Managed IT Services</span>
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
      <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6">Managed IT Services</h1>
      <p class="text-lg text-slate-600 max-w-3xl mx-auto leading-relaxed">
     The Siz@f Managed IT service solutions offer enterprises a powerful way to improve their IT expertise comprehensively.
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
          Siz@f Managed IT Services empowers customers to maximize their profits and streamline operations through Managed IT Services for Small Businesses, 
          delivering cutting-edge solutions such as online and smartphone apps, portals, and web resources.
          As one of the Best IT Managed Service Companies, we are a qualified and approved team providing Managed IT Services Offerings based on industry best practices, 
          operating seamlessly across platforms and networks. Our advanced IT systems are designed to help your company expand. For end-to-end IT solutions that meet the highest standards, our remote IT department builds and adds significant value to your business.
        </p>

        <p class="text-slate-600 leading-relaxed">
          Our team achieves measurable results across IT services, adding value to a rapidly changing world. With
          responsive, professional support, we foster creativity and innovative business models to their fullest
          potential.
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
          src="./assest/managed-it1.jpeg" 
          alt="Tech professional working with network infrastructure" 
          width="600" 
          height="400" 
          class="relative rounded-2xl shadow-2xl object-cover w-full h-[400px]"
          loading="lazy"
        >
      </div>
    </div>

    <!-- Services Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php
      $services = [
        [
          'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="h-8 w-8"><path stroke-linecap="round" stroke-linejoin="round" d="M16 18l6-6-6-6M8 6l-6 6 6 6" /></svg>',
          'title' => 'IT Software  Services',
          'color' => 'bg-blue-500',
          'items' => [
            'IT Software Services',
            'IOT & Smart Condo & City Solutions',
            'Website Development with Creative Designs',
            'School or Any Asset Management / ERP Solutions',
            'Customized Application Solutions - Desktop, Enterprise & Cloud',
          ],
        ],
        [
          'icon' =>   '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="h-8 w-8"><rect x="6" y="2" width="12" height="20" rx="2" ry="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="18" r="1" /></svg>',
          'title' => 'Mobile Application Development',
          'color' => 'bg-green-500',
          'items' => [
            'iOS / Android Application Development'
          ],
        ],
        [
          'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="h-8 w-8"><path d="M7 20h10a2 2 0 002-2V6a2 2 0 00-2-2H7a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 10v4M12 8v6M15 12v2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
          'title' => 'Custom BI and AI Solutions',
          'color' => 'bg-red-500',
          'items' => [
            'Custom BI and AI Tools Development & Integration',
          ],
        ],
        [
          'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>',
          'title' => 'Security and Patch Management',
          'color' => 'bg-purple-500',
          'items' => [
            'Antivirus & Patch Management Across Any Size Network'
          ],
        ],
        [
          'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path d="M12 2a10 10 0 0 0-7 17"></path><path d="M12 2a10 10 0 0 1 7 17"></path><circle cx="12" cy="12" r="3"></circle><circle cx="12" cy="12" r="1"></circle><path d="M7 12h10"></path></svg>',
          'title' => 'Managed IT Support Services',
          'color' => 'bg-red-500',
          'items' => [
            'Managed Services',
            'Unlimited Onsite & Remote Support',
            'Substantial Cost-Saving Managed Services',
            'Specialized Support - 24/7/365 Service Desk (Human Support)',
          ],
        ],
        [
          'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 1L3 5V11C3 16.55 6.84 21.78 12 23C17.16 21.78 21 16.55 21 11V5L12 1ZM10 17L6 13L7.41 11.59L10 14.17L16.59 7.58L18 9L10 17Z" fill="currentColor"/></svg>',
          'title' => 'Facility Management Services (FMS)',
          'color' => 'bg-indigo-500',
          'items' => [
            'FMS (Facility Management Services)'
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