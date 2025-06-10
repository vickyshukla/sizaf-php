<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust path based on your setup

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Get form data
        $name    = $_POST['name'] ?? '';
        $email   = $_POST['email'] ?? '';
        $number  = $_POST['number'] ?? '';
        $address = $_POST['address'] ?? '';
        $city    = $_POST['city'] ?? '';
        $country = $_POST['country'] ?? '';
        $message = $_POST['message'] ?? 'No message provided.';

        // Initialize PHPMailer
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'mail.sizaf.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@sizaf.com'; // decoded email
        $mail->Password   = 'v?g{y!6qO;I)';   // your password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Set sender and recipient
        $mail->setFrom($email, $name);
        $mail->addAddress('info@sizaf.com', 'Sizaf Team');

        // Email subject & body
        $mail->isHTML(true);
        $mail->Subject = "New Inquiry from $name - Contact Form Submission";

        $htmlContent = <<<HTML
        <html>
        <head>
          <style>
            body { font-family: Arial, sans-serif; background-color: #f4f4f9; color: #333; padding: 20px; }
            .container { max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
            .label { font-weight: bold; color: #555; }
            .value { color: #777; }
            .footer { margin-top: 20px; text-align: center; font-size: 14px; color: #999; }
          </style>
        </head>
        <body>
          <div class="container">
            <h2>New Contact Form Submission</h2>
            <div><span class="label">Name:</span> <span class="value">$name</span></div>
            <div><span class="label">Email:</span> <span class="value">$email</span></div>
            <div><span class="label">Phone Number:</span> <span class="value">$number</span></div>
            <div><span class="label">Address:</span> <span class="value">$address</span></div>
            <div><span class="label">City:</span> <span class="value">$city</span></div>
            <div><span class="label">Country:</span> <span class="value">$country</span></div>
            <div><span class="label">Message:</span> <span class="value">$message</span></div>
            <div class="footer">
              <p>Thank you for reaching out. We'll get back to you shortly!</p>
            </div>
          </div>
        </body>
        </html>
        HTML;

        $mail->Body = $htmlContent;

        // Send the email
        $mail->send();

        // Return success response
        echo json_encode([
            'message' => "Thank you for reaching out! Your message has been successfully sent, and our team will get back to you shortly."
        ]);
    } catch (Exception $e) {
        error_log("PHPMailer Error: {$mail->ErrorInfo}");
        echo json_encode([
            'error' => "Oops! Something went wrong while sending your message. Please try again later."
        ]);
        http_response_code(500);
    }
} else {
    echo json_encode(['error' => 'Invalid request.']);
    http_response_code(405); // Method Not Allowed
}
?>
