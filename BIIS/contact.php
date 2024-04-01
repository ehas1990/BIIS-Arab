<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fname = $_POST['fname'];
    $fphone = $_POST['fphone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Recipient email address
    $to = "info@billiardsinternationalschool.com, ehasalpha@gmail.com";

    // Email subject
    $subject = "New Enquiry From - Billiards International Islamic School";

    // Email body
    $txt = "Full Name: $fname \r\nContact Number: $fphone \r\nMessage: $message";

    // Email headers
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8 \r\n";

    // Send email
    if (mail($to, $subject, $txt, $headers)) {
        // If email sent successfully, redirect to index.html
        header("Location: index.html");
        exit();
    } else {
        // If email failed to send, set error message
        $alert_message = "Something went wrong";
        $alert_type = "failure";
    }
} else {
    // If the form is not submitted, redirect to index.html
    header("Location: index.html");
    exit();
}
?>

