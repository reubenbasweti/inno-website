<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "info@innotechkenya.com"; 
    $from_email = $_POST['email'];
    $message = $_POST['message'];
    $subject = "New message from website contact form";

    // Email headers
    $headers = "From: $from_email" . "\r\n" .
        "Reply-To: $from_email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Sending email
    if (mail($to_email, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
}
?>



