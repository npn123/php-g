<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form data
    $name = htmlspecialchars(trim($_POST["name"]), ENT_QUOTES, 'UTF-8');
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST["message"]), ENT_QUOTES, 'UTF-8');

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Recipient email address
    $to = "test@php-g.test";

    // Email subject
    $subject = "New Contact Form Submission from $name";

    // Email headers
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Email body
    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Here are the details:\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message\n";

    // Send the email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Thank you for your message. It has been sent.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    // Not a POST request
    echo "There was a problem with your submission. Please try again.";
}
?>