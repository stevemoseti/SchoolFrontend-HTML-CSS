<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from ='18m01acs037@anu.ac.ke';

$email_subject = 'New Form submission';

$email_body = "user Name: $name.\n". 
               "User Email:$visitor_email.\n". 
               "Subject:$subject.\n". 
               "User Message:$message.\n";

$to= "stephenmoseti12@gmail.com";

$headers = "From: $email_from \r\n";

$headers = "Reply-To:$visitor_email";

mail($to, $email_subject,$email_body,$headers);

header("Location:contact.html");






?>