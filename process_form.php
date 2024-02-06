<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set up the recipient email address
    $to = "your_email@example.com";  // Replace with your email address

    // Set up the email subject
    $subject = "New Contact Form Submission from $name";

    // Build the email message
    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Message:\n$message";

    // Set up additional headers
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $mailBody, $headers);

    // Redirect the user to a thank you page or display a success message
    header("Location: thank_you.html");
    exit();
} else {
    // Redirect the user if they try to access the script directly.
    header("Location: index.html");
    exit();
}
?>
