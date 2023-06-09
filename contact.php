<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Configure your email settings
    $to = "geokaraisk513@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Compose the email content
    $emailContent = "Name: $name\n" .
                    "Email: $email\n" .
                    "Message: $message";

    // Send the email
    if (mail($to, $subject, $emailContent, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Error sending the message.";
    }
}
?>
