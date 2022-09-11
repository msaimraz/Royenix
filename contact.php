<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$title= $_POST['subject'];
$message= $_POST['message'];

$to = "info@royenix.com";
$subject = "Mail From Royenix | Contact ";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Subject = " . $title . "\r\n Message =" . $message;
$headers = "From: noreply@royenix.com" . "\r\n" .
"CC: md@royenix.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
