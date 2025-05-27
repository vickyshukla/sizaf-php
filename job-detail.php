
<?php include 'header.php';?>
<?php
if (isset($_GET['slug'])) {
  $slug = $_GET['slug'];
  $api_url = "https://backendcms.sizaf.com/wp-json/wp/v2/jobpost?slug={$slug}";

  $response = file_get_contents($api_url);
  $job_array = json_decode($response);
  $job = $job_array[0] ?? null;

  if (!$job) {
    echo "Job not found.";
    exit;
  }
} else {
  echo "Invalid job slug.";
  exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $job->title->rendered ?? "Job Details"; ?> – Sizaf</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
  <section class="max-w-4xl mx-auto py-12 px-4">
    <h1 class="text-4xl font-bold text-indigo-800 mb-4"><?= $job->title->rendered; ?></h1>
    <div class="prose max-w-none">
      <?= $job->content->rendered; ?>
    </div>
    <a href="jobs.php" class="inline-block mt-6 text-blue-600 hover:underline">← Back to all jobs</a>
  </section>
</body>
</html>

<?php include 'footer.php';?>
