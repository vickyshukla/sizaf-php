<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Load .env variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = ['success' => false, 'error' => ''];

    // reCAPTCHA validation
    $recaptchaSecret = $_ENV['RECAPTCHA_SECRET_KEY'];
    $recaptchaResponse = $_POST['recaptchaResponse'] ?? '';

    $recaptchaVerification = file_get_contents('https://www.google.com/recaptcha/api/siteverify?' . http_build_query([
        'secret' => $recaptchaSecret,
        'response' => $recaptchaResponse
    ]));

    $recaptchaResult = json_decode($recaptchaVerification);

    if (!$recaptchaResult || !$recaptchaResult->success) {
        $response['error'] = 'reCAPTCHA verification failed.';
        echo json_encode($response);
        exit;
    }

    // Validate and sanitize inputs
    $fullName = htmlspecialchars(trim($_POST['fullName'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $position = htmlspecialchars(trim($_POST['position'] ?? ''));
    $messageText = htmlspecialchars(trim($_POST['message'] ?? 'No message provided'));
    $resume = $_FILES['resume'] ?? null;

    if (empty($fullName) || empty($email) || empty($phone) || empty($position) || !$resume) {
        $response['error'] = 'All fields are required.';
        echo json_encode($response);
        exit;
    }

    // File validation
    $validTypes = [
        'application/pdf',
        'application/msword',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
    ];

    if (!in_array($resume['type'], $validTypes)) {
        $response['error'] = 'Invalid file type. Please upload a PDF, DOC, or DOCX.';
        echo json_encode($response);
        exit;
    }

    if ($resume['size'] > 500000) {
        $response['error'] = 'File size exceeds the 500KB limit.';
        echo json_encode($response);
        exit;
    }

    // Email details
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'mail.sizaf.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@sizaf.com';
        $mail->Password = 'v?g{y!6qO;I)';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Recipients
        $mail->setFrom($email, $fullName);
        $mail->addAddress('info@sizaf.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = "Job Application: $position by $fullName";
        $mail->Body = "
            <p><strong>Name:</strong> $fullName</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Position:</strong> $position</p>
            <p><strong>Message:</strong> $messageText</p>
        ";

        // Attach resume
        $mail->addAttachment($resume['tmp_name'], $resume['name']);

        $mail->send();
        $response['success'] = true;
    } catch (Exception $e) {
        $response['error'] = 'Mailer Error: ' . $mail->ErrorInfo;
    }

    echo json_encode($response);
}