<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate inputs (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // Email information
    $to = "contact@southmssoftwash.com"; // Replace with your email address
    $subject = "Quote Request from South Mississippi Softwash Website";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Thank you! Your request has been submitted.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    echo "Error: Method not allowed.";
}
?>
