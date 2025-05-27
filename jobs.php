
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
</body>
</html>

<?php include 'footer.php';?>
