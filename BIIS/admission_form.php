<?php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $studentname = $_POST['studentname'];
    $academic = $_POST['academic'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $contact = $_POST['contact']; // Corrected variable name
    $Whatsapp = $_POST['Whatsapp']; // Corrected variable name
    $dob = $_POST['dob'];
    $aadhar = $_POST['aadhar'];
    $address = $_POST['address'];
    $van = $_POST['van'];
    $boardarea = $_POST['boardarea'];
    $Distance = $_POST['Distance']; // Corrected variable name
    $covid = $_POST['covid'];
    $Madrassa = $_POST['Madrassa']; // Corrected variable name

    // Prepare email content
    $subject = "Admission Of Year $academic - Billiards International Islamic School";
    $to = "info@billiardsinternationalschool.com, ehasalpha@gmail.com"; // Separate multiple email addresses with commas
    $txt = "Student Name: $studentname\r\nAcademic Class: $academic\r\nFather Name: $fathername\r\nMother Name: $mothername\r\nContact Number: $contact\r\nWhatsapp Number: $Whatsapp\r\nDate Of Birth: $dob\r\nAadhar No: $aadhar\r\nAddress: $address\r\nNeed a School Van Service ?: $van\r\nVehicle Boarding Area: $boardarea\r\nDistance between House to School: $Distance\r\nHas Covid been vaccinated?: $covid\r\nMadrassa Year: $Madrassa";
    $headers = "From: info@billiardsinternationalschool.com"; // Set from email address


    // Attempt to send email
    if (mail($to, $subject, $txt, $headers)) {
        // If email sent successfully, redirect to index.html
        echo '<script>window.location.href = "index.html";alert("Message sent successfully!");</script>';
        exit(); // Make sure to exit after redirecting
    } else {
        // If email failed to send, display error message
        $alert_message = "Something went wrong";
        $alert_type = "failure";
    }
} else {
    // If form is not submitted, redirect to index.html
    header("Location: index.html");
    exit();
}
?>
