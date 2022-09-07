<?php
//get data from form  

$name = $_POST['name'];
$contact = $_POST['contact'];
$nationality = $_POST['nationality'];
$qidNo = $_POST['qid-no'];
$qidExpiry = $_POST['qid-expiry'];
$drivinglicenseexp = $_POST['driving-license-exp'];

$to = "msraza.02@gmail.com";
$subject = "Mail From Royenix | Rider ";

$txt = "Name = " . $name . "\r\n  Contact No = " . $contact . "\r\n  Nationality = " . $nationality . "\r\n  QID No = " . $qidNo . "\r\n  QID Expiry = " . $qidExpiry . "\r\n Driving License Expiry = " . $drivinglicenseexp;
$headers = "From: noreply@royenix.com" . "\r\n" .
    "CC: somebodyelse@example.com";

if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:delivery-service.html");
