<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = "samuelldmj5@gmail.com";
$email_subject = "New form submission";
$email_body = "User Name: $name. \n" . 
                "User Email: $visitor_email. \n" .
                "Subject: $subject. \n" . 
                "User Message: $message. \n" ;

$to = "samuelldmj@gmail.com ";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email_from \r\n";
mail($to, $email_subject, $email_body, $headers);
header("Location: contact.html");

?> 