
<?php include 'header.php';?>
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
</head>
<body class="bg-gray-50 text-gray-800">
  <section class="max-w-6xl mx-auto py-12 px-4">
    <h1 class="text-4xl font-bold mb-8">Current Job Openings</h1>

    <?php if (!empty($jobs)) : ?>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <?php foreach ($jobs as $job): ?>
          <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-indigo-700 mb-2">
              <?= $job->title->rendered; ?>
            </h2>
            <p class="text-gray-600"><?= strip_tags($job->excerpt->rendered); ?></p>
            <a href="job-detail.php?slug=<?= $job->slug; ?>" class="mt-4 inline-block text-blue-600 hover:underline">Read More →</a>

          </div>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <p>No job openings found.</p>
    <?php endif; ?>
  </section>

  <?php
/**
 * Career Section with SEO Optimization
 * 
 * @package YourThemeName
 */
?>

<section class="py-16 px-4 bg-gradient-to-br from-slate-50 to-slate-100" itemscope itemtype="https://schema.org/Organization">
  <div class="max-w-7xl mx-auto">
    <!-- Hero Section -->
    <div class="relative rounded-3xl overflow-hidden mb-16">
      <div class="absolute inset-0 bg-gradient-to-r from-purple-900/90 to-pink-900/90 z-10"></div>
      <img 
        src="/path/to/career-hero-image.jpg" 
        alt="Team collaboration at SIZAF" 
        class="w-full h-[400px] object-cover"
        loading="lazy"
        itemprop="image"
      >
      <div class="absolute inset-0 z-20 flex flex-col justify-center px-8 md:px-16">
        <span class="inline-flex items-center rounded-full px-3 py-1 text-sm font-medium mb-4 bg-white/10 backdrop-blur-sm text-white border border-white/20 w-fit">
          Join Our Team
        </span>
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
      <div class="flex flex-col md:flex-row md:items-center justify-between mb-8">
        <div>
          <h2 class="text-3xl font-bold text-slate-900 mb-2">NOTICE OF JOB OPENING</h2>
          <p class="text-slate-600">Explore our current opportunities and find your perfect role</p>
        </div>
        <div class="mt-4 md:mt-0">
          <div class="inline-flex bg-slate-100 rounded-lg p-1">
            <button class="px-4 py-2 text-sm font-medium rounded-md bg-white shadow-sm">All Positions</button>
            <button class="px-4 py-2 text-sm font-medium rounded-md">Technical</button>
            <button class="px-4 py-2 text-sm font-medium rounded-md">Management</button>
          </div>
        </div>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
        $jobOpenings = [
          [
            'id' => 'jr-project-associate',
            'title' => 'Jr. Project Associate',
            'department' => 'Project Management',
            'location' => 'Kota Damansara, Malaysia',
            'type' => 'Full-time / Part-Time',
            'isRemote' => false,
            'isHot' => true,
            'description' => 'Join our project team to assist in coordinating project activities, maintaining documentation, and supporting senior project managers in delivering successful outcomes.',
            'requirements' => [
              "Bachelor's degree",
              "0-2 years experience",
              "Strong communication skills",
              "MS Office proficiency"
            ]
          ],
          [
            'id' => 'project-associate',
            'title' => 'Project Associate',
            'department' => 'Project Management',
            'location' => 'Kota Damansara, Malaysia',
            'type' => 'Full-time / Part-Time',
            'isRemote' => true,
            'isHot' => false,
            'description' => 'Take on a key role in our project team, managing project timelines, coordinating with stakeholders, and ensuring deliverables meet quality standards.',
            'requirements' => [
              "Bachelor's degree",
              "2-4 years experience",
              "Project management skills",
              "Client communication experience"
            ]
          ],
          [
            'id' => 'network-engineer',
            'title' => 'Network Engineer',
            'department' => 'Technical',
            'location' => 'Kota Damansara, Malaysia',
            'type' => 'Full-time / Part-Time',
            'isRemote' => true,
            'isHot' => true,
            'description' => 'Design, implement and maintain network infrastructure, troubleshoot connectivity issues, and ensure optimal network performance for our clients.',
            'requirements' => [
              "Bachelor's in IT/Computer Science",
              "3+ years experience",
              "CCNA/CCNP certification",
              "Networking protocols expertise"
            ]
          ]
        ];

        foreach ($jobOpenings as $job) {
          echo '<div class="bg-white border border-slate-200 rounded-lg shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1 overflow-hidden" itemprop="jobPosting" itemscope itemtype="https://schema.org/JobPosting">
            <div class="p-6 pb-4 relative">
              <div class="flex justify-between items-start">
                <div>
                  <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-medium mb-2 '.($job['department'] === 'Technical' ? 'bg-blue-100 text-blue-700' : 'bg-purple-100 text-purple-700').'">
                    '.$job['department'].'
                  </span>';
                  
                  if ($job['isHot']) {
                    echo '<span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-medium mb-2 ml-2 bg-pink-100 text-pink-700">
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-3 w-3 mr-1"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                      Hot
                    </span>';
                  }
                  
                  echo '</div>';
                  
                  if ($job['isRemote']) {
                    echo '<span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-medium bg-green-50 text-green-700 border border-green-200">
                      On-site/Remote
                    </span>';
                  }
                  
                  echo '</div>
              <h3 class="text-xl font-bold text-slate-900 mb-2" itemprop="title">'.$job['title'].'</h3>
              <div class="flex flex-col gap-2 mt-2">
                <div class="flex items-center text-slate-500 text-sm">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                  <span itemprop="hiringOrganization">SIZAF INFOCOMM SDN BHD</span>
                </div>
                <div class="flex items-center text-slate-500 text-sm">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                  <span itemprop="jobLocation">'.$job['location'].'</span>
                </div>
                <div class="flex items-center text-slate-500 text-sm">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                  <span itemprop="employmentType">'.$job['type'].'</span>
                </div>
              </div>
            </div>
            <div class="px-6 pb-4">
              <p class="text-slate-600 text-sm mb-4" itemprop="description">'.$job['description'].'</p>
              <div class="space-y-2">
                <h4 class="text-sm font-medium text-slate-900">Requirements:</h4>
                <ul class="space-y-1">';
                
                foreach ($job['requirements'] as $req) {
                  echo '<li class="flex items-start text-sm text-slate-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mt-0.5 mr-2 flex-shrink-0"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    <span>'.$req.'</span>
                  </li>';
                }
                
                echo '</ul>
              </div>
            </div>
            <div class="px-6 pb-6 flex justify-between items-center">
              <a href="/careers/'.$job['id'].'" class="text-slate-500 hover:text-slate-700 text-sm inline-flex items-center">
                Show more
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 ml-1"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </a>
              <a href="/careers/'.$job['id'].'/apply" class="bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                Apply Now
              </a>
            </div>
          </div>';
        }
        ?>
      </div>

      <!-- View All Jobs -->
      <div class="mt-12 text-center">
        <a href="/careers" class="inline-flex items-center px-6 py-3 border border-slate-300 rounded-md text-slate-700 hover:bg-slate-100 text-sm font-medium transition-colors">
          View All Positions
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 ml-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
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
            <a href="/careers/submit-resume" class="inline-flex items-center px-6 py-3 bg-white text-purple-700 hover:bg-white/90 rounded-md text-sm font-medium transition-colors">
              Submit Your Resume
            </a>
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

<script>
// Job filtering functionality
document.addEventListener('DOMContentLoaded', function() {
  const filterButtons = document.querySelectorAll('.job-filter button');
  
  filterButtons.forEach(button => {
    button.addEventListener('click', function() {
      // Remove active class from all buttons
      filterButtons.forEach(btn => btn.classList.remove('bg-white', 'shadow-sm'));
      
      // Add active class to clicked button
      this.classList.add('bg-white', 'shadow-sm');
      
      // Filter jobs (implementation would depend on your setup)
      const filterValue = this.textContent.trim();
      console.log('Filter by:', filterValue);
    });
  });
});
</script>

<style>
/* Animation for job cards */
[itemprop="jobPosting"] {
  transition: all 0.3s ease;
}

/* Accessibility focus styles */
a:focus, button:focus {
  outline: 2px solid #8B5CF6;
  outline-offset: 2px;
}

/* Reduced motion styles */
@media (prefers-reduced-motion: reduce) {
  [itemprop="jobPosting"] {
    transition: none;
  }
}

/* Print styles */
@media print {
  .bg-gradient-to-r {
    background: #fff !important;
  }
  
  [itemprop="jobPosting"] {
    break-inside: avoid;
    page-break-inside: avoid;
  }
  
  .job-filter {
    display: none !important;
  }
}
</style>
</body>
</html>

<?php include 'footer.php';?>
