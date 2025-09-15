<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace.
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Check for empty fields.
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // Create the email content.
    $to = "your_email@example.com"; // Change this to your email address.
    $subject = "New Contact Form Submission";
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message";

    // Send the email.
    if (mail($to, $subject, $email_body)) {
        echo "Message sent successfully!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>