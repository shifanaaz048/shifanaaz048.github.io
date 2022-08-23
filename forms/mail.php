<?php
$to      = 'internationalcircle.youth@gmail.com'; //your email
$email = 'from my website  - email form'; 
$message = $_POST['message'];
$subject = $_POST['subject'];
$headers = 'From: '.$_POST['email']. "\r\n" .
    'Reply-To: myemail@mail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $email, $message, $headers);
?>  
<div>Thanks for your message, We will answer your email as soon as we can. best regards <a href="/">back &raquo;</a></div>