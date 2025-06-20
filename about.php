<?php
$metaTitle = "Contact";
$metaDescription = "This is contact page.";
$metaKeywords = "IT solutions, software development, consultancy";
$metaImage = "https://yourdomain.com/images/og-governance.jpg";
$canonicalURL = "https://sizaf-php.sizaf.com/about.php"; 
include('header.php');
?>
<div class=' mx-auto'>
  <div class="w-full h-36 bg-[#4d346d] text-center py-8 text-white">
    <h1 class="text-lg md:text-xl lg:text-3xl font-bold uppercase tracking-wide pb-3">Check coverage - contact us</h1>
    <h3 class="flex items-center justify-center gap-4 text-base font-medium">
        <a href="/"> <span class="hover:text-pinktext">Sizaf</span> </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>
        <a href="/contact"><span class="hover:text-pinktext">Contact Us</span>
        </a>
    </h3>
  </div>
  <div class="w-full h-96 bg-black">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127482.68825017956!2d101.60458758044088!3d3.138502660685048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc362abd08e7d3%3A0x232e1ff540d86c99!2sKuala%20Lumpur%2C%20Federal%20Territory%20of%20Kuala%20Lumpur%2C%20Malaysia!5e0!3m2!1sen!2sin!4v1730961006330!5m2!1sen!2sin" class="w-full h-full" frameborder="0" loading="lazy"></iframe>
  </div>

  <section class="w-full bg-gradient-to-br from-slate-900 to-slate-800 py-16 px-4" aria-labelledby="contact-heading">
    <div class="max-w-8xl px-4 mx-auto">
      <div class="grid lg:grid-cols-2 gap-8 items-start">
        <!-- Left Column - Contact Info -->
        <div class="space-y-8">
          <!-- Logo and Intro with structured data -->
          <div itemscope itemtype="https://schema.org/Organization">
            <div class="flex items-center mb-4">
              <div class="bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 p-0.5 rounded-lg">
                <div class="bg-slate-900 rounded-md p-3 flex items-center justify-center">
                  <!-- Replace with your actual logo image -->
                  <img 
                    src="./assest/sizaf_foot_white.png" 
                    alt="SIZAF NET WITH TECH Logo" 
                    class="h-8 w-auto" 
                    width="120" 
                    height="32"
                    loading="lazy"
                    itemprop="logo"
                  >
                </div>
              </div>
            </div>
            <div class="mb-8">
              <h1 id="contact-heading" class="text-3xl font-bold text-white mb-2">HELLO,</h1>
              <h2 class="text-2xl font-medium text-pink-400 mb-4">How can we help you today?</h2>
            </div>
          </div>

          <!-- Contact Cards with schema.org markup -->
          <div class="grid sm:grid-cols-2 gap-4">
            <!-- KL Location -->
            <div class="border border-slate-700 shadow-sm hover:shadow-md transition-shadow bg-slate-800/50 rounded-lg overflow-hidden" itemscope itemtype="https://schema.org/PostalAddress">
              <div class="p-6">
                <div class="flex items-start">
                  <div class="w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center mr-4 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#60A5FA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                  </div>
                  <div>
                    <h3 class="font-medium text-white mb-1" itemprop="addressCountry">Malaysia (KL)</h3>
                    <p class="text-slate-300 text-sm">
                      <span itemprop="streetAddress">M116, Jalan Mega Mendung, Off Jalan Klang Lama</span>, 
                      <span itemprop="postalCode">58200</span>, 
                      <span itemprop="addressLocality">Kuala Lumpur</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- PJ Location -->
            <div class="border border-slate-700 shadow-sm hover:shadow-md transition-shadow bg-slate-800/50 rounded-lg overflow-hidden" itemscope itemtype="https://schema.org/PostalAddress">
              <div class="p-6">
                <div class="flex items-start">
                  <div class="w-10 h-10 rounded-full bg-purple-500/20 flex items-center justify-center mr-4 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#A78BFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                  </div>
                  <div>
                    <h3 class="font-medium text-white mb-1" itemprop="addressCountry">Malaysia (PJ)</h3>
                    <p class="text-slate-300 text-sm">
                      <span itemprop="streetAddress">12-2, The Strand, Jalan PJU 5/20b, Kota Damansara</span>, 
                      <span itemprop="postalCode">47810</span>, 
                      <span itemprop="addressLocality">Petaling Jaya</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- USA Location -->
            <div class="border border-slate-700 shadow-sm hover:shadow-md transition-shadow bg-slate-800/50 rounded-lg overflow-hidden" itemscope itemtype="https://schema.org/PostalAddress">
              <div class="p-6">
                <div class="flex items-start">
                  <div class="w-10 h-10 rounded-full bg-pink-500/20 flex items-center justify-center mr-4 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#F472B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                  </div>
                  <div>
                    <h3 class="font-medium text-white mb-1" itemprop="addressCountry">USA</h3>
                    <p class="text-slate-300 text-sm" itemprop="streetAddress">218-10, Hillside Ave, Queens Village, New York, 11427</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Contact Numbers -->
            <div class="border border-slate-700 shadow-sm hover:shadow-md transition-shadow bg-slate-800/50 rounded-lg overflow-hidden" itemscope itemtype="https://schema.org/Organization">
              <div class="p-6">
                <div class="flex items-start">
                  <div class="w-10 h-10 rounded-full bg-green-500/20 flex items-center justify-center mr-4 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#34D399" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                      <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                  </div>
                  <div>
                    <h3 class="font-medium text-white mb-1">Contact Numbers</h3>
                    <ul class="space-y-2 text-sm text-slate-300">
                      <li class="flex items-center" itemprop="telephone">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-3 w-3 mr-2">
                          <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <span>Malaysia: <a href="tel:+60146600012" class="hover:text-white">+60 146600012</a></span>
                      </li>
                      <li class="flex items-center" itemprop="telephone">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-3 w-3 mr-2">
                          <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <span>USA: <a href="tel:+15168809996" class="hover:text-white">+1 516 880 9996</a></span>
                      </li>
                      <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-3 w-3 mr-2">
                          <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                        <span>WhatsApp: <a href="https://wa.me/60146600012" target="_blank" rel="noopener noreferrer" class="hover:text-white">+6 01466 00012</a></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Office Info -->
          <div class="border border-slate-700 shadow-sm bg-slate-800/50 rounded-lg overflow-hidden" itemscope itemtype="https://schema.org/Organization">
            <div class="p-6">
              <div class="flex items-start mb-4">
                <div class="w-10 h-10 rounded-full bg-slate-700 flex items-center justify-center mr-4 flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#E2E8F0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-white mb-1">Main Office</h3>
                  <p class="text-slate-300 text-sm" itemprop="telephone"><a href="tel:+60378901985" class="hover:text-white">+6 03 7890 1985</a></p>
                </div>
              </div>

              <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-sm">
                <div class="flex items-center p-3 bg-slate-700/50 rounded-lg">
                  <div class="w-8 h-8 rounded-full bg-blue-500/20 flex items-center justify-center mr-3 flex-shrink-0">
                    <span class="text-blue-400 font-medium">1</span>
                  </div>
                  <span class="text-slate-300">NOC Operations</span>
                </div>
                <div class="flex items-center p-3 bg-slate-700/50 rounded-lg">
                  <div class="w-8 h-8 rounded-full bg-purple-500/20 flex items-center justify-center mr-3 flex-shrink-0">
                    <span class="text-purple-400 font-medium">2</span>
                  </div>
                  <span class="text-slate-300">Sales/Billing</span>
                </div>
                <div class="flex items-center p-3 bg-slate-700/50 rounded-lg">
                  <div class="w-8 h-8 rounded-full bg-pink-500/20 flex items-center justify-center mr-3 flex-shrink-0">
                    <span class="text-pink-400 font-medium">3</span>
                  </div>
                  <span class="text-slate-300">Service Delivery</span>
                </div>
              </div>

              <div class="mt-4 flex items-center text-sm text-slate-400">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-2">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                <span itemprop="faxNumber">Fax: +6 03 7890 1986</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column - Contact Form -->
        <div>
          <div class="border-0 shadow-xl bg-pink-500 text-white overflow-hidden rounded-lg relative">
            <!-- Decorative background elements -->
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-pink-400 to-purple-600 rounded-full blur-3xl opacity-30 -mr-10 -mt-10"></div>
            <div class="absolute bottom-0 left-0 w-32 h-32 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-full blur-3xl opacity-20 -ml-10 -mb-10"></div>

            <div class="p-8 relative z-10">
              <h3 class="text-2xl font-bold mb-6">Send Us a Message</h3>
              <form id="contact-form" class="space-y-5" method="POST" itemscope itemtype="https://schema.org/ContactPage">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                  <div class="space-y-2">
                    <label for="fullName" class="text-sm font-medium text-white/90">Full Name</label>
                    <input
                      type="text"
                      id="fullName"
                      name="fullName"
                      placeholder="John Doe"
                      class="w-full bg-white/10 border border-white/30 text-white placeholder:text-white/60 focus:border-white focus:ring-0 rounded-md px-4 py-2"
                      required
                      itemprop="name"
                    >
                  </div>
                  <div class="space-y-2">
                    <label for="email" class="text-sm font-medium text-white/90">Email Address</label>
                    <input
                      type="email"
                      id="email"
                      name="email"
                      placeholder="john@example.com"
                      class="w-full bg-white/10 border border-white/30 text-white placeholder:text-white/60 focus:border-white focus:ring-0 rounded-md px-4 py-2"
                      required
                      itemprop="email"
                    >
                  </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                  <div class="space-y-2">
                    <label for="phone" class="text-sm font-medium text-white/90">Phone Number</label>
                    <input
                      type="tel"
                      id="phone"
                      name="phone"
                      placeholder="+1 (555) 000-0000"
                      class="w-full bg-white/10 border border-white/30 text-white placeholder:text-white/60 focus:border-white focus:ring-0 rounded-md px-4 py-2"
                      required
                      itemprop="telephone"
                    >
                  </div>
                  <div class="space-y-2">
                    <label for="country" class="text-sm font-medium text-white/90">Country</label>
                    <input
                      type="text"
                      id="country"
                      name="country"
                      placeholder="United States"
                      class="w-full bg-white/10 border border-white/30 text-white placeholder:text-white/60 focus:border-white focus:ring-0 rounded-md px-4 py-2"
                      required
                    >
                  </div>
                </div>

                <div class="space-y-2">
                  <label for="address" class="text-sm font-medium text-white/90">Address</label>
                  <input
                    type="text"
                    id="address"
                    name="address"
                    placeholder="123 Main St"
                    class="w-full bg-white/10 border border-white/30 text-white placeholder:text-white/60 focus:border-white focus:ring-0 rounded-md px-4 py-2"
                    itemprop="address"
                  >
                </div>

                <div class="space-y-2">
                  <label for="city" class="text-sm font-medium text-white/90">City</label>
                  <input
                    type="text"
                    id="city"
                    name="city"
                    placeholder="New York"
                    class="w-full bg-white/10 border border-white/30 text-white placeholder:text-white/60 focus:border-white focus:ring-0 rounded-md px-4 py-2"
                    itemprop="addressLocality"
                  >
                </div>

                <div class="space-y-2">
                  <label for="message" class="text-sm font-medium text-white/90">Your Message (Optional)</label>
                  <textarea
                    id="message"
                    name="message"
                    placeholder="Tell us how we can help you..."
                    class="w-full bg-white/10 border border-white/30 text-white placeholder:text-white/60 focus:border-white focus:ring-0 rounded-md px-4 py-2 min-h-[120px]"
                    itemprop="text"
                  ></textarea>
                </div>

                <div class="pt-2">
                  <button
                    type="submit"
                    id="submitButton"
                    class="w-full bg-slate-900 hover:bg-slate-800 text-white font-medium py-3 rounded-md flex items-center justify-center transition-colors cursor-pointer"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 mr-2 submitButtonText">
                      <line x1="22" y1="2" x2="11" y2="13"></line>
                      <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                    </svg>
                    <span class="submitButtonText">Submit</span>
                    <!-- Loader Spinner-->
                    <div id="loader" class="flex gap-1 hidden justify-center m-2">
                      <div class="w-2.5 h-2.5 bg-white rounded-full animate-bounce delay-100"></div>
                      <div class="w-2.5 h-2.5 bg-white rounded-full animate-bounce delay-200"></div>
                      <div class="w-2.5 h-2.5 bg-white rounded-full animate-bounce delay-300"></div>
                    </div>
                  </button>
                </div>
              </form>

              <!-- Toast Messages (Success & Error) -->
              <div id="toast-container" class="absolute top-10 left-1/2 transform -translate-x-1/2 z-50 space-y-3 w-full max-w-sm">
                <div id="success-message" class="toast-message hidden bg-green-500 text-white p-4 rounded-md shadow-md w-full flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  <span>Your application was successfully submitted!</span>
                </div>
                
                <div id="error-message" class="toast-message hidden bg-red-500 text-white p-4 rounded-md shadow-md w-full flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
                  <span>Something went wrong. Please try again!</span>
                </div>
              </div>

              <div class="mt-6 flex flex-col sm:flex-row items-center justify-center gap-6 text-sm text-white/80">
                <a href="mailto:info@sizaf.com" class="hover:text-white flex items-center" itemprop="email">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-2">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                  </svg>
                  info@sizaf.com
                </a>
                <a href="https://www.sizaf.com" target="_blank" rel="noopener noreferrer" class="hover:text-white flex items-center" itemprop="url">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="2" y1="12" x2="22" y2="12"></line>
                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                  </svg>
                  www.sizaf.com
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  /**
   * FAQ Section with SEO Optimization
   * 
   * @package YourThemeName
   */
  ?>

  <section class="py-16 px-4 bg-gradient-to-br from-slate-50 to-slate-100" aria-labelledby="faq-heading">
    <div class="max-w-7xl mx-auto">
      <!-- Header -->
      <div class="text-center mb-12">
        <span class="inline-flex items-center rounded-full px-3 py-1 text-sm font-medium mb-4 bg-gradient-to-r from-pink-500 to-purple-600 text-white">
          Frequently Asked Questions
        </span>
        <h1 id="faq-heading" class="text-4xl md:text-5xl font-bold mb-6">
          <span class="bg-gradient-to-r from-purple-600 to-pink-500 bg-clip-text text-transparent">SIZAF</span> FAQ'S
        </h1>
        <p class="text-lg text-slate-600 max-w-3xl mx-auto">
          Find answers to commonly asked questions about our services, support, and company information.
        </p>
      </div>

      <!-- Search Bar -->
      <div class="max-w-2xl mx-auto mb-12 relative">
        <div class="relative">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute left-3 top-1/2 transform -translate-y-1/2">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
          <input 
            type="text" 
            id="faq-search"
            placeholder="Search for questions or keywords..."
            class="w-full pl-10 py-4 text-lg border border-slate-300 rounded-lg focus:border-purple-500 focus:ring-purple-500"
            oninput="filterFAQs()"
          >
        </div>
        <div id="search-results" class="mt-2 text-sm text-slate-500 hidden">
          Showing <span id="results-count">0</span> results for "<span id="search-query"></span>"
        </div>
      </div>

      <!-- FAQ Categories -->
      <div class="flex flex-wrap justify-center gap-3 mb-12">
        <?php
        $faqCategories = ['company', 'services', 'terms', 'industries', 'support', 'billing', 'plans'];
        foreach ($faqCategories as $category) {
          echo '<button onclick="filterByCategory(\''.$category.'\')" class="px-4 py-2 bg-white hover:bg-slate-100 text-slate-700 border border-slate-200 rounded-full text-sm cursor-pointer transition-colors">'
            .ucfirst($category).
          '</button>';
        }
        ?>
        <button onclick="clearFilters()" class="px-4 py-2 bg-white hover:bg-slate-100 text-slate-700 border border-slate-300 rounded-full text-sm cursor-pointer transition-colors">
          View All
        </button>
      </div>

      <!-- FAQ Columns -->
      <div class="grid md:grid-cols-2 gap-8">
        <!-- Left Column -->
        <div class="space-y-4">
          <?php
          $faqs = [
          [
            'id' => 'company-about',
            'question' => 'What is your company about?',
            'answer' => 'SIZAF NET WITH TECH is a new age Tech solutions company. Its centered completely around your necessities no matter if you are getting services for yourself, your family, your office or for your business or factories located within the city or anywhere in the world. It assures you the best of services at all times. It provides globally connected network, ready to deploy technology solutions and flexible commercial models based on the customer preferences.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#8B5CF6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>',
            'category' => 'company'
          ],
          [
            'id' => 'services-offering',
            'question' => 'What kind of services is your company offering?',
            'answer' => 'SIZAF NET WITH TECH provides all Internet & Technology services. From delivering services such as Web & Media, Tech Infra, Network communication and Data management. SIZAF NET WITH TECH is one stop for all comprehensive IT solutions. SIZAF is a 360 degree service provider that thinks & acts like your extended internal team.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>',
            'category' => 'services'
          ],
          [
            'id' => 'terms-services',
            'question' => 'What are your terms of services?',
            'answer' => 'By accessing or using Sizaf.com (Service), you agree to the terms outlined in our Terms of Service and Privacy Policy, collectively referred to as Agreements. These govern your use of our website, purchases, subscriptions, and participation in promotions, while establishing guidelines for user content, prohibited activities, and account responsibilities. Sizaf.com reserves the right to modify its services, subscription fees, and terms without prior notice, and to terminate accounts for violations. Refunds, where applicable, adhere to agreed terms. Our Service is provided as is, disclaiming warranties, and limits liability to the amount paid for services. Governing law is Malaysian law, and unresolved issues can be addressed by contacting info@sizaf.com. By continuing to use the Service, you acknowledge acceptance of any changes to the Agreements and agree to use the Service responsibly. And you hereby confirm to agree to all the conditions at all times.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>',
            'category' => 'terms'
          ],
          [
            'id' => 'industries-benefit',
            'question' => 'Which industries can benefit from your solutions?',
            'answer' => 'SIZAF NET WITH TECH offers standard and custom solutions that can benefit all major industry players globally. They offer services to industries such as Governance & Security, Health & Education, Non Profit Organizations, Travel & Leisure, Construction & Real Estate, Media & Advertising, Retail & Ecommerce, Production, Engg & Pharma, Transport & Logistics, Agri, Fisheries & Climate & Finance & Banking.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>',
            'category' => 'industries'
          ],
          [
            'id' => 'change-services',
            'question' => 'Can customer change, upgrade or downgrade the services?',
            'answer' => 'SIZAF NET WITH TECH is a customer focused organization. Any customer can change, upgrade or downgrade the services plans. Standard & customized terms are offered to various customers per needs. At SIZAF NET WITH TECH all decisions are taken with customer in mind always.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#EC4899" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>',
            'category' => 'services'
          ],
          [
            'id' => 'report-loss',
            'question' => 'How can customer report loss of services?',
            'answer' => 'SIZAF NET WITH TECH operates 24 x 7 customer service systems. Each customer is offered a dedicated resource and communication channel through which they can report any service issues they experience. SIZAF NET WITH TECH works towards 99.99 SLA’s on its services.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>',
            'category' => 'support'
          ],
          [
            'id' => 'billing-grievances',
            'question' => 'How can customer register billing or payment grievances?',
            'answer' => 'SIZAF NET WITH TECH operates 24 x 7 customer service systems. Each customer is offered a dedicated resource and communication channel through which they can report any billing or payment issues they experience. SIZAF NET WITH TECH payment details are provided to each customer that subscribes to respective services. All commercial information are stored and shared with customer in secure & confidential manner.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#F59E0B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>',
            'category' => 'billing'
          ],
          [
            'id' => 'different-plans',
            'question' => 'Do you have different plans for business and home users?',
            'answer' => 'Yes, we offer specialized plans for both business and home users. Our business plans are scalable and feature-rich to meet enterprise requirements, while our home plans are optimized for personal use with competitive pricing and essential features. Both plan types come with dedicated support and flexible options.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>',
            'category' => 'plans'
          ],
          [
            'id' => 'transfer-services',
            'question' => 'How can customer transfer the services from one location to another?',
            'answer' => 'Service transfers between locations can be arranged through your account manager or our customer portal. We require at least 7 days\' notice for location changes. Our team will coordinate the transfer to minimize downtime and ensure continuity of service at your new location.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 3H3v18h18V3z"></path><path d="M9 15l6-6m0 0h-6m6 0v6"></path></svg>',
            'category' => 'services'
          ],
          [
            'id' => 'company-location',
            'question' => 'Where is your company located and where you offer the services?',
            'answer' => 'Our company has offices in Malaysia (Kuala Lumpur and Petaling Jaya) and the United States (New York). We offer our services globally, with strong presence in Southeast Asia, North America, and Europe. Our cloud-based solutions can be deployed anywhere with internet connectivity.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#8B5CF6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>',
            'category' => 'company'
          ]
        ];
          
          // Display first half of FAQs in left column
          $halfCount = ceil(count($faqs) / 2);
          for ($i = 0; $i < $halfCount; $i++) {
            $faq = $faqs[$i];
            echo '<div class="bg-white border border-slate-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow mb-4" data-category="'.$faq['category'].'">
              <button class="w-full px-6 py-4 text-left hover:bg-slate-50 flex items-center gap-3" onclick="toggleFAQ(\''.$faq['id'].'\')" aria-expanded="false" aria-controls="'.$faq['id'].'-content">
                '.$faq['icon'].'
                <span class="font-medium text-slate-800">'.$faq['question'].'</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-auto h-5 w-5 transform transition-transform duration-200">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </button>
              <div id="'.$faq['id'].'-content" class="hidden px-6 pb-4 pt-2 text-slate-600 bg-white">
                <div class="pl-8">'.$faq['answer'].'</div>
              </div>
            </div>';
          }
          ?>
        </div>

        <!-- Right Column -->
        <div class="space-y-4">
          <?php
          // Display second half of FAQs in right column
          for ($i = $halfCount; $i < count($faqs); $i++) {
            $faq = $faqs[$i];
            echo '<div class="bg-white border border-slate-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow mb-4" data-category="'.$faq['category'].'">
              <button class="w-full px-6 py-4 text-left hover:bg-slate-50 flex items-center gap-3" onclick="toggleFAQ(\''.$faq['id'].'\')" aria-expanded="false" aria-controls="'.$faq['id'].'-content">
                '.$faq['icon'].'
                <span class="font-medium text-slate-800">'.$faq['question'].'</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-auto h-5 w-5 transform transition-transform duration-200">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </button>
              <div id="'.$faq['id'].'-content" class="hidden px-6 pb-4 pt-2 text-slate-600 bg-white">
                <div class="pl-8">'.$faq['answer'].'</div>
              </div>
            </div>';
          }
          ?>
        </div>
      </div>

      <!-- Still Have Questions -->
      <div class="mt-16 text-center">
        <div class="bg-gradient-to-r from-purple-600 to-pink-500 rounded-2xl p-8 text-white max-w-7xl mx-auto shadow-lg">
          <h2 class="text-2xl font-bold mb-4">Still Have Questions?</h2>
          <p class="text-white/90 mb-6">
            Our support team is here to help. Contact us and we'll get back to you as soon as possible.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="mailto:info@sizaf.com" class="bg-white text-purple-600 hover:bg-slate-100 px-6 py-3 rounded-lg font-medium inline-flex items-center justify-center transition-colors">
              Contact Support
            </a>
            <a onclick="startLiveChat()"   class="bg-transparent border border-white text-white hover:bg-white/10 px-6 py-3 rounded-lg font-medium inline-flex items-center justify-center transition-colors">
              Start Live Chat
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  /**
   * Testimonials Section
   * 
   * @package YourThemeName
   */
  ?>

  <section class="py-20 px-4 bg-gradient-to-br from-slate-50 via-white to-slate-100 relative overflow-hidden">
      <!-- Background Pattern -->
      <div class="absolute inset-0 opacity-5">
          <div class="absolute inset-0 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600"></div>
      </div>

      <div class="max-w-7xl mx-auto relative z-10">
          <!-- Header -->
          <div class="text-center mb-16">
              <span class="inline-flex items-center mb-4 text-sm font-medium bg-gradient-to-r from-pink-500 to-purple-600 text-white border-0 px-4 py-1 rounded-full">
                  Client Success Stories
              </span>
              
              <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6">
                  WHAT OUR 
                  <span class="bg-gradient-to-r from-pink-500 to-purple-600 bg-clip-text text-transparent">
                      CLIENTS SAY
                  </span>
              </h2>
              
              <p class="text-lg text-slate-600 max-w-3xl mx-auto">
                  Don't just take our word for it. Here's what our valued clients have to say about their experience working
                  with SIZAF.
              </p>
          </div>

          <!-- Stats -->
          <div class="grid md:grid-cols-3 gap-6">
              <?php
              $stats = [
                  [
                      'icon' => 'users',
                      'value' => "500+",
                      'label' => "Happy Clients"
                  ],
                  [
                      'icon' => 'star',
                      'value' => "4.9",
                      'label' => "Average Rating"
                  ],
                  [
                      'icon' => 'award',
                      'value' => "98%",
                      'label' => "Success Rate"
                  ]
              ];
              
              foreach ($stats as $stat): ?>
                  <div class="bg-white/80 backdrop-blur-sm border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300 rounded-lg">
                      <div class="p-6 text-center">
                          <div class="w-12 h-12 bg-gradient-to-r from-pink-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white">
                              <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= 
                                      $stat['icon'] === 'users' ? 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"' : 
                                      ($stat['icon'] === 'star' ? 'M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"' : 
                                      'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"')
                                  ?>"></path>
                              </svg>
                          </div>
                          <div class="text-3xl font-bold text-slate-900 mb-1"><?= $stat['value'] ?></div>
                          <div class="text-slate-600 font-medium"><?= $stat['label'] ?></div>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>

          <!-- Main Testimonials -->
          <?php
          $testimonials = [
              [
                  'id' => 1,
                  'quote' => "Sizaf helped us explore the right options and delivered excellent support throughout. Their team was proactive and thoughtful!",
                  'name' => "Cherianne G.",
                  'title' => "Operations Manager",
                  'company' => "Technoserve UK Ltd.",
                  'avatar' => "./assest/user4.jpg",
                  'rating' => 5,
                  'industry' => "Technology",
                  'projectType' => "Infrastructure Setup",
              ],
              [
                  'id' => 2,
                  'quote' => "It’s been great working with Sizaf. They offered clear strategies and executed them without delay. Their dedication and results really impressed our whole team.",
                  'name' => "Chandra K.",
                  'title' => "Product Incharge",
                  'company' => "Pro & Gin Wholesale Pvt. Ltd.",
                  'avatar' => "./assest/user1.jpg",
                  'rating' => 4,
                  'industry' => "Wholesale",
                  'projectType' => "Tech Solutions",
              ],
              [
                  'id' => 3,
                  'quote' => "We appreciated Sizaf’s professional approach and easy collaboration. Their solutions were efficient, straightforward, and exactly what we were hoping for.",
                  'name' => "Liz R.",
                  'title' => "Accounts Manager",
                  'company' => "I-Help Cosmic Foundation",
                  'avatar' => "./assest/user2.jpg",
                  'rating' => 5,
                  'industry' => "Non-Profit",
                  'projectType' => "Business Solutions",
              ],
              [
                  'id' => 4,
                  'quote' => "Sizaf provided fantastic support and delivered our project on time. Their knowledge and responsiveness made a big difference throughout the whole process.",
                  'name' => "Michael T.",
                  'title' => "IT Head",
                  'company' => "Greenfield Logistics",
                  'avatar' => "./assest/user4.jpg",
                  'rating' => 5,
                  'industry' => "Logistics",
                  'projectType' => "System Integration",
              ],
              [
                  'id' => 5,
                  'quote' => "We’re glad we chose Sizaf. The team was attentive, reliable, and handled every detail with care. Their results were exactly what we were looking for.",
                  'name' => "Aria P.",
                  'title' => "Chief Strategy Officer",
                  'company' => "UrbanNest Co.",
                  'avatar' => "./assest/user3.jpg",
                  'rating' => 4,
                  'industry' => "Real Estate",
                  'projectType' => "Custom Software Development",
              ]
          ];
          ?>

          <div class="container mx-auto px-4 py-12 relative">
            <div class="relative overflow-hidden">
              <!-- Slider Track -->
              <div id="testimonialSlider" class="flex transition-transform duration-700 ease-in-out py-4">
                <?php foreach ($testimonials as $testimonial): ?>
                  <div class="w-full md:w-1/3 flex-shrink-0 px-2">
                    <div class="group relative overflow-hidden transition-all duration-500 hover:-translate-y-2 rounded-lg shadow-lg hover:shadow-xl">
                      <!-- Background Gradient -->
                      <div class="absolute inset-0 bg-gradient-to-br from-white via-slate-50 to-slate-100 opacity-90"></div>

                      <!-- Quote Icon -->
                      <div class="absolute top-6 right-6 opacity-10 group-hover:opacity-20 transition-opacity">
                          <svg class="h-16 w-16 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                          </svg>
                      </div>

                      <div class="relative p-8 highlight rounded-lg">
                          <!-- Industry Badge -->
                          <span class="inline-flex items-center mb-4 bg-pink-100 text-pink-700 hover:bg-pink-200 rounded-full px-3 py-1 text-xs font-medium">
                              <?= $testimonial['industry'] ?>
                          </span>

                          <!-- Rating -->
                          <div class="flex items-center gap-1 mb-4">
                              <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
                                  <svg class="h-4 w-4 fill-yellow-400 text-yellow-400" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                  </svg>
                              <?php endfor; ?>
                          </div>

                          <!-- Quote -->
                          <blockquote class="text-slate-700 leading-relaxed mb-6 italic text-lg">
                              "<?= $testimonial['quote'] ?>"
                          </blockquote>

                          <!-- Project Type -->
                          <div class="mb-6">
                              <span class="inline-flex items-center bg-purple-50 text-purple-700 border border-purple-200 rounded-full px-3 py-1 text-xs font-medium">
                                  <?= $testimonial['projectType'] ?>
                              </span>
                          </div>

                          <!-- Author -->
                          <div class="flex items-center gap-4">
                              <div class="relative">
                                  <img 
                                      src="<?= $testimonial['avatar'] ?>" 
                                      alt="Portrait of  ?>"
                                      class="rounded-full object-cover ring-2 ring-white shadow-md h-16 w-16"
                                      loading="lazy"
                                  />
                                  <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-2 border-white flex items-center justify-center">
                                      <div class="w-2 h-2 bg-white rounded-full"></div>
                                  </div>
                              </div>
                              <div>
                                  <h3 class="font-bold text-slate-900 text-lg"><?= $testimonial['name'] ?></h3>
                                  <p class="text-slate-600 font-medium"><?= $testimonial['title'] ?></p>
                                  <p class="text-slate-500 text-sm"><?= $testimonial['company'] ?></p>
                              </div>
                          </div>
                      </div>
                    </div>       
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
            <!-- Dots Navigation -->
            <div id="sliderDots" class=" absolute flex justify-center mt-6 space-x-2 z-50 w-full">
              <?php for ($i = 0; $i < ceil(count($testimonials) / 3); $i++): ?>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-500 transition-colors" data-index="<?= $i ?>"></button>
              <?php endfor; ?>
            </div>
          </div>

      </div>
  </section>
</div>
<script src="assest/js/about.js"></script>
<script>
  function startLiveChat() {
    if (typeof Tawk_API !== "undefined") {
      Tawk_API.maximize(); // Opens the chat widget
    } else {
      alert("Chat is still loading. Please try again shortly.");
    }
  }
</script>

<?php include 'footer.php'; ?>