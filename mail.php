<?php
//get data from form  

$name = $_POST['name'];
$email = $_POST['email'];
$message= $_POST['message'];
$to = "sheerraina459@gmail.com";
$subject = "Mail From website(Portfolio)";
$txt ="Name = ". $name . "\r\n  Email =" . $email. "\r\n Message =" . $message;
$headers = "From: noreply@sheerportfolio.com" . "\r\n" .
"CC: ";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
               