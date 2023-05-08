<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Prepare the data to be sent
    $data = [
        "name" => $name,
        "email" => $email,
        "message" => $message
    ];

    // Convert data to JSON format
    $jsonData = json_encode($data);

    // Set the Formspree endpoint
    $formspreeEndpoint = "https://formspree.io/f/xoqzrbyb";

    // Set the HTTP headers
    $headers = [
        "Content-Type: application/json"
    ];

    // Create a new cURL resource
    $curl = curl_init();

    // Set the cURL options
    curl_setopt_array($curl, [
        CURLOPT_URL => $formspreeEndpoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $jsonData,
        CURLOPT_HTTPHEADER => $headers
    ]);

    // Execute the cURL request
    $response = curl_exec($curl);

    // Close the cURL resource
    curl_close($curl);

    // Check if the request was successful
    if ($response === "OK") {
        echo "Message sent successfully!";
    } else {
        echo "An error occurred while sending the message.";
    }
}
?>
