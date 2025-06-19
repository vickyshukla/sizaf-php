<?php
$metaTitle = "Career";
$metaDescription = "This is career page.";
$metaKeywords = "IT solutions, software development, consultancy";
$metaImage = "https://yourdomain.com/images/og-governance.jpg";
$canonicalURL = "https://sizaf.com/jobs.php"; 
include('header.php');
?>
<?php include 'functions.php'; ?>
<?php
$api_url = "https://backendcms.sizaf.com/wp-json/wp/v2/jobpost";
$response = file_get_contents($api_url);
$jobs = json_decode($response);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jobs – Sizaf</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="bg-gray-100 font-sans leading-relaxed">

  <section class="py-16 px-4 bg-gradient-to-br from-slate-50 to-slate-100" itemscope itemtype="https://schema.org/Organization">
    <div class="max-w-7xl mx-auto">
      <!-- Hero Section -->
      <div class="relative rounded-3xl overflow-hidden mb-16">
        <div class="absolute inset-0 bg-gradient-to-r from-purple-900/90 to-pink-900/90 z-10"></div>
        <img 
          src="assest/industry-sector7.jpg" 
          alt="Team collaboration at SIZAF" 
          class="w-full h-[400px] object-cover"
          loading="lazy"
          itemprop="image"
        >
        <div class="absolute inset-0 z-20 flex flex-col justify-center px-8 md:px-16">
          <!-- <span class="inline-flex items-center rounded-full px-3 py-1 text-sm font-medium mb-4 bg-white/10 backdrop-blur-sm text-white border border-white/20 w-fit">
            Join Our Team
          </span> -->
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6" itemprop="name">CAREER OPPORTUNITIES</h1>
          <p class="text-lg md:text-xl text-white/90 max-w-2xl" itemprop="description">
            Build your future with a company that values innovation, collaboration, and your professional growth.
          </p>
        </div>
      </div>

      <!-- About Careers -->
      <div class="mb-16">
        <div class="grid md:grid-cols-2 gap-12 items-center">
          <div>
            <h2 class="text-3xl font-bold text-slate-900 mb-6">Careers</h2>
            <div class="space-y-4 text-slate-600">
              <p itemprop="description">
                At <span class="font-semibold text-purple-600">SIZAF INFOCOMM SDN BHD</span>, we believe that our
                people are the foundation of our success. That's why we're always looking for passionate and talented
                individuals who are eager to grow with us.
              </p>
              <p itemprop="description">
                Whether you're just starting your professional journey or looking for the next big challenge in your
                career, we provide the perfect platform for you to achieve your goals.
              </p>
              <p itemprop="description">
                We pride ourselves on fostering a collaborative and inclusive environment where every team member
                feels valued and supported. At <span class="font-semibold text-purple-600">SIZAF INFOCOMM SDN BHD</span>, 
                innovation and creativity are at the heart of everything we do, and we know that great ideas come from diverse
                perspectives.
              </p>
              <p itemprop="description">
                Join us, and you'll not only contribute to meaningful projects but also be part of a team that
                celebrates success together. Explore our current openings today and take the first step toward
                building a fulfilling and rewarding career with us.
              </p>
            </div>
          </div>
          <div class="grid grid-cols-2 gap-6">
            <?php
            $benefits = [
              [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#8B5CF6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>',
                'title' => 'Career Growth',
                'description' => 'Clear advancement paths and professional development opportunities'
              ],
              [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>',
                'title' => 'Flexible Work',
                'description' => 'Remote options and flexible scheduling for work-life balance'
              ],
              [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#EC4899" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
                'title' => 'Collaborative Culture',
                'description' => 'Inclusive environment where every team member is valued'
              ],
              [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F59E0B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>',
                'title' => 'Competitive Benefits',
                'description' => 'Comprehensive healthcare, retirement plans, and more'
              ]
            ];

            foreach ($benefits as $benefit) {
              echo '<div class="bg-white border border-slate-200 rounded-lg shadow-sm hover:shadow-md transition-shadow" itemprop="employeeBenefits">
                <div class="p-6">
                  <div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center mb-4">
                    '.$benefit['icon'].'
                  </div>
                  <h3 class="font-semibold text-slate-900 mb-2">'.$benefit['title'].'</h3>
                  <p class="text-sm text-slate-600">'.$benefit['description'].'</p>
                </div>
              </div>';
            }
            ?>
          </div>
        </div>
      </div>

      <!-- Job Openings -->
      <div itemscope itemtype="https://schema.org/JobPosting">
        <div class="mb-8">
          <div>
            <h2 class="text-3xl font-bold text-slate-900 mb-2">NOTICE OF JOB OPENING</h2>
            <p class="text-slate-600">Explore our current opportunities and find your perfect role</p>
          </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php
          if (!empty($jobs) && is_array($jobs)) {
            foreach ($jobs as $job) {
              $title = $job->title->rendered ?? 'Untitled Job';
              $title = preg_replace('/^Job Title:\s*/i', '', $title);
              $slug = $job->slug ?? $job->id;
              $content = $job->content->rendered ?? '';

              $content = preg_replace('/\s+/', ' ', $content);

              $location = extractByKeyword('Location', $content);
              $type = extractByKeyword('Job Type', $content);
              $salary = extractByKeyword('Salary', $content);
              $description = extractByKeyword('Job overview', $content);

              echo '<div class="bg-white border border-slate-200 rounded-lg shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1 overflow-hidden" itemprop="jobPosting" itemscope itemtype="https://schema.org/JobPosting">
                <div class="p-6 pb-4 relative flex flex-col h-full">
                  <h3 class="text-xl font-bold text-slate-900 mb-2" itemprop="title">'.htmlspecialchars($title).'</h3>
                  <div class="flex flex-col gap-2 mt-2">
                    <div class="text-slate-500 text-sm"><strong>Company:</strong> SIZAF INFOCOMM SDN BHD</div>
                    <div class="text-slate-500 text-sm"><strong>Location:</strong> '.$location.'</div>
                    <div class="text-slate-500 text-sm"><strong>Type:</strong> '.$type.'</div>
                    <div class="text-slate-500 text-sm"><strong>Salary:</strong> '.$salary.'</div>
                  </div>
                  <div class="flex-grow mt-4">
                    <p class="text-slate-600 text-sm mb-4" itemprop="description">'.htmlspecialchars($description).'</p>
                  </div>
                  <div class="px-6 pb-3 flex justify-between items-center mt-auto">
                    <button class="text-slate-500 hover:text-slate-700 text-sm inline-flex items-center cursor-pointer job-title focus:outline-0" data-title="'.htmlspecialchars($title).'" data-content="'.htmlspecialchars($content).'">
                      Show more
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1"><polyline points="6.5 15 12 9 6 4" stroke="currentColor" stroke-width="2" fill="none"/></svg>
                    </button>
                    <button onclick="openForm(\'' . addslashes($title) . '\')" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-md text-sm font-medium cursor-pointer">
                      Apply Now
                    </button>
                  </div>
                </div>
              </div>';
            }
          } else {
            echo "<p>No job postings found.</p>";
          }
          ?>
        </div>
      </div>

      <!-- Join Our Team CTA -->
      <div class="mt-20">
        <div class="bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl p-8 md:p-12 text-white shadow-xl">
          <div class="grid md:grid-cols-2 gap-8 items-center">
            <div>
              <h3 class="text-3xl font-bold mb-4">Don't See the Right Fit?</h3>
              <p class="text-white/90 mb-6">
                We're always looking for talented individuals to join our team. Send us your resume and we'll keep you
                in mind for future opportunities.
              </p>
              <button onclick="openForm('Jobs')" class="inline-flex items-center px-6 py-3 bg-white text-purple-700 hover:bg-white/90 rounded-md text-sm font-medium transition-colors">
                       Submit Your Resume
                    </button>
              
            </div>
            <div class="hidden md:flex justify-end">
              <div class="w-64 h-64 bg-white/10 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-white/80"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Job Description Modal -->
  <div id="jobModal" class="fixed inset-0 z-50 hidden bg-black/60 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg max-w-2xl w-full p-6 relative">
      <button id="closeModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-2xl font-bold cursor-pointer">&times;</button>
      <h3 id="modalTitle" class="text-2xl font-bold mb-4"></h3>
      <div id="modalContent" class="leading-relaxed max-h-[60vh] overflow-y-auto text-sm"></div>
    </div>
  </div>

  <!-- Apply Now Form Popup -->
  <div id="apply-now-form" class="popup-form fixed inset-0 z-50 hidden bg-black/60 flex items-center justify-center">
    <div class="popup-content bg-white rounded-lg shadow-lg max-w-xl w-full p-8 relative flex flex-col max-h-[80vh]">
      <span class="close-btn absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-3xl font-bold cursor-pointer z-20" onclick="closeForm()">&times;</span>
      
      <!-- Title stays fixed -->
      <h2 class="text-2xl font-bold text-gray-800 mb-4 sticky top-0 bg-white z-10 py-2">
        Apply for <span id="apply-job-title" class="text-purple-600"></span>
      </h2>
      
      <!-- Scrollable form container -->
      <div class="overflow-y-auto flex-1 p-2">
        <form id="application-form" method="POST" enctype="multipart/form-data" class="space-y-6">
          <div>
            <label for="fullName" class="block text-sm font-medium text-gray-700">Full Name</label>
            <input type="text" id="fullName" name="fullName" required
              class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
          </div>

          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" required
              class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
          </div>

          <div class="flex items-center">
            <div class="w-1/3">
              <label for="countryCode" class="block text-sm font-medium text-gray-700">Country Code</label>
              <select id="countryCode" name="countryCode" required
                class="countryCode mt-1 block w-full px-2 py-2 border border-gray-300 border-r-none rounded-l-md shadow-sm text-sm focus:outline-none focus:ring-0 bg-gray-200">
                <option value="">Select</option>
                <!-- options dynamically added -->
              </select>
            </div>

            <div class="w-2/3">
              <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
              <input type="text" id="phone" name="phone" required
                class="mt-1 block w-full px-2 py-2 border border-gray-300 border-l-none rounded-r-md shadow-sm text-sm focus:outline-none focus:ring-0">
            </div>
          </div>

          <div>
            <label for="resume" class="block text-sm font-medium text-gray-700">Upload Resume</label>
            <input type="file" id="resume" name="resume" accept=".pdf, .doc, .docx" required
              class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
          </div>

          <!-- reCAPTCHA -->
          <div class="g-recaptcha" data-sitekey="6Lc2U54qAAAAAFsBPXTgNlTYB01rYDG8Y1ejCtJY"></div>

          <!-- Submit Button -->
          <div class="flex items-center justify-between">
              <button type="submit" 
                  id="submitButton"
                  class="w-full py-3 mt-4 bg-pink-500 hover:bg-pink-600 text-white font-medium rounded-md shadow-md hover:bg-gradient-to-l focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50 cursor-pointer relative"
                  >
                  <span id="submitButtonText">Submit Application</span>
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

      </div>
    </div>
  </div>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="assest/js/job.js"></script>
  
</body>
</html>

<?php include 'footer.php'; ?>
