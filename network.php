<?php
$metaTitle = "Reliable Network Services for Seamless Connectivity - Sizaf";
$metaDescription = "Optimize your network performance with Sizaf's expert network services. Ensure reliable, secure, and scalable connectivity for your business operations.";
$metaKeywords = "governance security, public sector IT solutions, secure infrastructure, government technology, network services";
$metaImage = "https://yourdomain.com/images/og-governance.jpg";
$canonicalURL = "https://sizaf.com/network.php"; 
include('header.php');
?>
<div class="w-full h-36 bg-[#4d346d] text-center py-8 text-white">
            <h1 class="text-lg md:text-xl lg:text-3xl font-bold uppercase tracking-wide pb-3">Network Services</h1>
            <h3 class="flex items-center justify-center gap-4 text-base font-medium">
                <a href="./index.php"> <span class="hover:text-[#ff156e]">Sizaf</span> </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>
                <a href="."><span class="hover:text-[#ff156e]">Technology Services</span>
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>
                <a href="./network.php"><span class="hover:text-[#ff156e]">Network Services</span>
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
      <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6">Network Services</h1>
      <p class="text-lg text-slate-600 max-w-3xl mx-auto leading-relaxed">
     The Sizaf network services provider enables secure connections, tracking, monitoring, and control of the network for all customers.
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
        In a new world, businesses run their cloud-enabled companies across global networks. 
        Allow Sizaf Network Services to provide you with the best WiFi deals, Fiber Optic Cable Internet, 
        and 5G Broadband through our on-demand network services to maximize customer satisfaction and revenues. 
        Reduce OPEX and improve competitiveness by helping companies optimize application performance and address
        multiple service challenges. Our service portfolio offers new connections that can be enabled, modified in capacity, 
        and upgraded on demand. For effective cloud deployment, the network used in these cloud-based applications is crucial,
        and we are happy to partner with you in delivering these services.
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
          src="./assest/network1.jpeg" 
          alt=" network infrastructure" 
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
          'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 10C20.21 10 22 8.21 22 6C22 3.79 20.21 2 18 2C16.63 2 15.42 2.7 14.71 3.8C14.07 2.79 12.87 2 11.5 2C9.01 2 7 4.01 7 6.5C7 7.03 7.09 7.54 7.27 8.01C5.61 8.5 4.3 9.71 4.3 11.5C4.3 13.43 5.87 15 7.8 15H18C20.21 15 22 13.21 22 11C22 10.45 21.9 9.92 21.69 9.42L20.8 10.4C20.44 10.15 20.02 10 19.5 10H18ZM18 13H7.8C6.7 13 5.8 12.1 5.8 11C5.8 9.9 6.7 9 7.8 9C8.36 9 8.87 9.25 9.21 9.68L9.5 10.12C10.02 10.74 10.74 11.12 11.55 11.12C12.37 11.12 13.09 10.74 13.61 10.12L13.91 9.68C14.25 9.25 14.76 9 15.32 9H18V13Z" fill="currentColor"/>
                        <path d="M2 19L5 22L8 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5 22V16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M22 19L19 22L16 19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M19 22V16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>',
          'title' => 'SD-Wan',
          'color' => 'bg-blue-500',
          'items' => [
            'ISDWAN- S/w defined, Wide Area Network.',
          ],
        ],
        [
          'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path d="M12 2V22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M22 12H2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M4 8C6 10 10 10 12 12C14 14 18 14 20 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="2 2"/><path d="M4 16C6 14 10 14 12 12C14 10 18 10 20 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="2 2"/>
                    <circle cx="4" cy="8" r="1" fill="currentColor"/>
                    <circle cx="20" cy="16" r="1" fill="currentColor"/>
                    <circle cx="4" cy="16" r="1" fill="currentColor"/>
                    <circle cx="20" cy="8" r="1" fill="currentColor"/>
                    </svg>',
          'title' => 'Intercontinental Network.',
          'color' => 'bg-green-500',
          'items' => [
            'IPLC.',
            'IP Transit at DC.'
          ],
        ],
        [
          'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="18" r="2" fill="currentColor"/>
                        <path d="M22 8C19.2319 5.37898 15.7924 3.65997 12 3C8.20756 3.65997 4.76813 5.37898 2 8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M19 11C17.1534 9.48979 14.6534 8.66997 12 8.66997C9.34657 8.66997 6.84657 9.48979 5 11" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M16 14C15.0767 13.2449 13.6767 12.8349 12 12.8349C10.3233 12.8349 8.92331 13.2449 8 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>',
          'title' => 'Wireless Solutions.',
          'color' => 'bg-red-500',
          'items' => [
            'Indoor WLAN Solution.',
            'Outdoor Wireless LAN.',
            'Long Distance Point to Point Wireless.',
            'Short Distance Point to Point & Point to Multi Point Wireless Network.'
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

    <!--Services Details-->
    <p class="text-center pt-20 font-bold text-3xl uppercase">Service Details</p>
<div class="w-full max-w-5xl mx-auto p-4 md:p-6">
  
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">

        <div class="service-card group cursor-pointer border border-gray-200 rounded-lg overflow-hidden shadow-md bg-white text-gray-800 transition-all duration-300 ease-in-out hover:shadow-lg  hover:scale-[1.02]   ">
            <div class="p-4">
                <img alt="SD-Wan Icon" src="./assest/service-detail1.webp" class="rounded-md ">
                <h3 class="text-lg font-bold text-pink-600 mb-2 pt-2">SizaF Wan (SD-Wan)</h3>
                <p class="text-gray-600 text-sm ">
                   Sizaf SD-Wan solution is a very managed, flexible and easy to operate solution. Using this the software defined Wan network we will deliver a complete network access across software networks. Software defined Wide Area Network (SD-WAN) offers high-performance protected data channels that connect diverse internet access providers - such as DSL, cable, mobile phones, etc.
                   Sizaf SD-Wan will address a major business problem of safe Internet connectivity. Without a reliable connectivity, companies can encounter disruptions because of link failures, network congestion, or WAN blackouts. That can be costly disruptions. It is a WAN-based computing platform for the more powerful transmission of all networks between the offices and data centres, the remote offices and branches and the cloud.
                </p>
            </div>           
        </div>

        <div class="service-card group cursor-pointer border border-gray-200 rounded-lg overflow-hidden shadow-md bg-white text-gray-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.02]">
            <div class="p-4">
                <img alt="SizaF Etherconnect illustration" src="./assest/service-detail2.webp" class="rounded-md">
                <h3 class="text-lg font-bold text-pink-600 mb-2 pt-2">SizaF Etherconnect (Metro-E / LL)</h3>
                <p class="text-gray-600 text-sm">
                   Sizaf Etherconnect (Metro-E) service is a domestic leased line service. Its powered by high frequency network link and ultraspace access which assures using the new Ethernet technology of Dense Wave (EoDWDM) technology.
                   Sizaf Etherconnect service provides superior & high-end efficiency with safe networks enabling its customers to build and run a wide-ranging commercial network, along with much of the legacy network equipment with multiple bandwidth solutions. New EoDWDM technology enhances allocation and automatic distribution by using latest equipments, providing stability and capability across the entire network.
                </p>
            </div>           
        </div>

         <div class="service-card group cursor-pointer border border-gray-200 rounded-lg overflow-hidden shadow-md bg-white text-gray-800 transition-all duration-300 ease-in-out hover:shadow-lg  hover:scale-[1.02]   ">
            <div class="p-4">
                <img alt="SD-Wan Icon" src="./assest/service-detail3.webp" class="rounded-md ">
                <h3 class="text-lg font-bold text-pink-600 mb-2 pt-2">SizaF Globeconnect (IPLC)</h3>
                <p class="text-gray-600 text-sm ">
                  Sizaf Globeconnect service is designed for firms that are becoming more global, they are in stronger need for prompt and efficient contact with their international offices. International communication must be extremely secure, precise, and fruitful. We have strong global teams serving in all major cities of the world. We work 24x7 all 365 days of year to deliver on SLA's and make your life & business simpler.
                  Sizaf Globeconnect connecting two fixed line stations worldwide with an IPLC which provides the best bandwidth guaranteed and trusted & dedicated communications. Corporate IT networks that can effectively and accurately share information non stop & securely, have long been a critical component of corporate planning and processes.
                </p>
            </div>           
        </div>

        <div class="service-card group cursor-pointer border border-gray-200 rounded-lg overflow-hidden shadow-md bg-white text-gray-800 transition-all duration-300 ease-in-out hover:shadow-lg  hover:scale-[1.02]   ">
            <div class="p-4">
                <img alt="SD-Wan Icon" src="./assest/service-detail4.webp" class="rounded-md ">
                <h3 class="text-lg font-bold text-pink-600 mb-2 pt-2">SizaF Routeconnect (IP Transit)</h3>
                <p class="text-gray-600 text-sm ">
                 Sizaf Routeconnect service is among the best in the market. Its connected with the world's most wired networks with high capacity and efficiency of bandwidth at a low cost. We urge you to review our services, and experience our quick deliveries. Many Tier 1 networks are connected & accessed by our global coverage network. A global IPv6-enabled Optical partner coverage network is our biggest strength supported by a vast partner coverage across the globe. These jointly serve as a reliable backbone of our IP transit business.
                 We will speed up the fulfilment of your orders & operations by simplifying our quick onboarding procedures and provide smooth safe service deliveries that will build your trust in our abilities.You will approve Sizaf's teams on all major parameters, including consistent delivery, technical assistance, and efficiency, thanks to our extensive service venues and excellent connectivity to critical international access and knowledge networks.
                </p>
            </div>           
        </div>

        <div class="service-card group cursor-pointer border border-gray-200 rounded-lg overflow-hidden shadow-md bg-white text-gray-800 transition-all duration-300 ease-in-out hover:shadow-lg  hover:scale-[1.02]   ">
            <div class="p-4">
                <img alt="SD-Wan Icon" src="./assest/service-detail5.webp" class="rounded-md ">
                <h3 class="text-lg font-bold text-pink-600 mb-2 pt-2">SizaF Dconnect (Data Centre)</h3>
                <p class="text-gray-600 text-sm ">
                 In reality, today all companies rely heavily on Data Centres. Hence Sizaf DCconnect service allows companies to have a trusted partner that will provide them all the support for them to operate and grow big. Our DC services provide a highly reliable and effective data backup method that guarantees simultaneous access to all important information. We provide organisations efficient ways in which key information can be saved, shared and protected. With trusted data centre services companies are able to grow and run business smoothly in more than many ways.
                 At Sizaf DCconnect we provide secure and safe DC services no matter wherever you are. Thanks to our broad partner coverage, experience, customer-oriented model and the help of network partners around the globe. We give consumers of all sizes a high level of service options in the best cost model. Our coverage data centres provide our customers with shared or exclusive space, which most certainly prove our role as a reliable technology partner.
                </p>
            </div>           
        </div>

        <div class="service-card group cursor-pointer border border-gray-200 rounded-lg overflow-hidden shadow-md bg-white text-gray-800 transition-all duration-300 ease-in-out hover:shadow-lg  hover:scale-[1.02]   ">
            <div class="p-4">
                <img alt="SD-Wan Icon" src="./assest/service-detail6.webp" class="rounded-md ">
                <h3 class="text-lg font-bold text-pink-600 mb-2 pt-2">SizaF IPconnect (DIA)</h3>
                <p class="text-gray-600 text-sm ">
                Sizaf IPConnect service offers internet capacity with maximum scalability and cost-effectiveness. We provide 24x7 support and upgrades to the customers at any point in-time. At Sizaf, you not only get internet access above reasonable standards but also a service provider that provides full solutions to all of your company requirements.
                We designed Sizaf IPconnect service as we understand that connectivity is becoming more and more common, and the Internet must improve business success and not prevent it. More rapid encounters can affect and discriminate between preferences of consumers.
                Sizaf IPconnect provides its customers safe routing to the world's destination to further improve on demand basis. Customers are empowered with regular reporting. All transactions are delivered in safe, accurate, and real-time manner at any location.
                </p>
            </div>           
        </div>

        <div class="service-card group cursor-pointer border border-gray-200 rounded-lg overflow-hidden shadow-md bg-white text-gray-800 transition-all duration-300 ease-in-out hover:shadow-lg  hover:scale-[1.02]   ">
            <div class="p-4">
                <img alt="SD-Wan Icon" src="./assest/service-detail7.webp" class="rounded-md ">
                <h3 class="text-lg font-bold text-pink-600 mb-2 pt-2">SizaF BBconnect (Broadband)</h3>
                <p class="text-gray-600 text-sm ">
                Businesses aim for inexpensive and secure Internet connections instead of conventional cable to run efficiently. Sizaf BBconnect service is a special value proposition curated for all types of organizations. It offers business-grade connections at decent prices in comparison to a leased Internet service.
                With the aim of delivering a much more effective, trustworthy and flexible Internet connection, we provide our Sizaf BBconnect service to increase business productivity and increase the competitiveness of our clients. Enjoy the network at extremely fast speeds with our connections. In all the major cities of the world, our cost effective multi-gbps speeds makes Sizaf BBconnect a perfect way to connect to the Internet at your office.
                </p>
            </div>           
        </div>
       

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