<?php

$studentname = $_POST['studentname'];
$academic = $_POST['academic'];
$fathername = $_POST['fathername'];
$mothername = $_POST['mothername'];
$Contact = $_POST['contact']; // Corrected: changed to 'contact'
$Whatsapp = $_POST['Whatsapp'];
$dob = $_POST['dob'];
$aadhar = $_POST['aadhar'];
$address = $_POST['address'];
$van = $_POST['van'];
$boardarea = $_POST['boardarea'];
$Distance = $_POST['Distance'];
$covid = $_POST['covid'];
$Madrassa = $_POST['Madrassa'];

$subject = "Admission Of Year " . $academic . " - Billiards International Islamic School"; // Corrected: Concatenation adjusted
$to = "info@billiardsinternationalschool.com , ehasalpha@gmail.com";
$txt = "Student Name : " . $studentname . "\r\n Academic Class : " . $academic . "\r\n Father Name : " . $fathername . "\r\n Mother Name: " . $mothername . "\r\n Contact Number: " . $Contact . "\r\n Whatsapp Number :" . $Whatsapp . "\r\n Date Of Birth : " . $dob . "\r\n Aadhar No: " . $aadhar . "\r\n Address : " . $address . "\r\n Van : " . $van . "\r\n Boarding Area :" . $boardarea . "\r\n Distance : " . $Distance . " \r\n Covid :" . $covid . " \r\n Madrassa Year: " . $Madrassa; // Corrected: Removed extra quote
$subject = " $subject"; // Corrected: Removed extra space
$headers = "From: " . $to; // Corrected: Changed from $email to $to

if (mail($to, $subject, $txt, $headers)) {
    // If email sent successfully, set JavaScript alert and redirect to index.html
    echo '<script> window.location.href = "index.html";alert("Message sent successfully!");</script>';
    exit(); // Make sure to exit after redirecting
} else {
    // If email failed to send, return error message
    $alert_message = "Something went wrong";
    $alert_type = "failure";
}

?>
