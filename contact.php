<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Formspree endpoint
    $formspreeEndpoint = "https://submit-form.com/https://formspree.io/f/xoqzrbyb";

    // Compose the email content
    $emailContent = "Name: $name\n" .
                    "Email: $email\n" .
                    "Message: $message";

    // Send the email using Formspree endpoint
    $ch = curl_init($formspreeEndpoint);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $emailContent);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    // Check if the email was sent successfully
    if ($response === "OK") {
        echo "Message sent successfully.";
    } else {
        echo "Error sending the message.";
    }
}
?>
