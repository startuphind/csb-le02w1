<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$technology=$_POST['technology'];
$message=$_POST['message'];

$email_from='8574adi@gmail.com';

$email_subject='New Form Submission';

$email_body="User Name: $name.\n ". 
            "User Email: $visitor_email.\n".  
             "Technology:$technology.\n". 
            "User Message:$message.\n".  

$to='taditya027@gmail.com';

$headers= "From $email_from \r\n";
$headers = "reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location :contact.html.html");
?>