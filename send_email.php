<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $message = $_POST["message"];

    // Set up email recipient and subject
    $to = "trivinganesh@gmail.com";
    $subject = "New Contact Form Submission";

    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Mobile: $mobile\n";
    $email_message .= "Message: $message\n";

    // Send email
    if (mail($to, $subject, $email_message)) {
        // Email sent successfully
        echo "Thank you for contacting us. We will get back to you soon.";
    } else {
        // Error sending email
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
