<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = ['success' => false, 'error' => ''];

    // Verify reCAPTCHA
    $recaptchaSecret = '6Lc2U54qAAAAAFWHHQcUl3I0qAGcMzKVimnvqSEY';
    $recaptchaResponse = $_POST['recaptchaResponse'];
    
    $recaptchaVerifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptchaData = [
        'secret' => $recaptchaSecret,
        'response' => $recaptchaResponse
    ];

    $recaptchaVerification = file_get_contents($recaptchaVerifyUrl . '?' . http_build_query($recaptchaData));
    $recaptchaResult = json_decode($recaptchaVerification);

    if (!$recaptchaResult->success) {
        $response['error'] = 'reCAPTCHA verification failed.';
        echo json_encode($response);
        exit;
    }

    // Validate and sanitize inputs
    $fullName = htmlspecialchars(trim($_POST['fullName']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $position = htmlspecialchars(trim($_POST['position']));
    $resume = $_FILES['resume'];

    if (empty($fullName) || empty($email) || empty($phone) || empty($resume)) {
        $response['error'] = 'All fields are required.';
        echo json_encode($response);
        exit;
    }

    // Check if the file is a valid document
    $validFileTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
    if (!in_array($resume['type'], $validFileTypes)) {
        $response['error'] = 'Invalid file type. Please upload a PDF, DOC, or DOCX file.';
        echo json_encode($response);
        exit;
    }

    // Check file size (max 500KB)
    if ($resume['size'] > 500000) {
        $response['error'] = 'File size exceeds the 500KB limit.';
        echo json_encode($response);
        exit;
    }

    // Send email with job application details
    $to = "&#105;&#110;&#102;&#111;&#64;&#115;&#105;&#122;&#97;&#102;&#46;&#99;&#111;&#109;";
    $subject = "Job Application: $position by $fullName";
    $message = "
        <p><strong>Name:</strong> $fullName</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Position:</strong> $position</p>
        <p><strong>Message:</strong> " . ($_POST['message'] ?? 'No message provided') . "</p>
    ";

    // Attach resume
    $resumeContent = file_get_contents($resume['tmp_name']);
    $resumeName = $resume['name'];
    $encodedResume = chunk_split(base64_encode($resumeContent));

    $headers = "From: $email\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"boundary\"\r\n";
    $headers .= "--boundary\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $headers .= $message . "\r\n\r\n";
    $headers .= "--boundary\r\n";
    $headers .= "Content-Type: application/octet-stream; name=\"$resumeName\"\r\n";
    $headers .= "Content-Transfer-Encoding: base64\r\n";
    $headers .= "Content-Disposition: attachment; filename=\"$resumeName\"\r\n\r\n";
    $headers .= $encodedResume . "\r\n";
    $headers .= "--boundary--\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        $response['success'] = true;
    } else {
        $response['error'] = 'Failed to send application email.';
    }

    // Respond back with the result
    echo json_encode($response);
}
?>
