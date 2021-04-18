<?php

$to      = 'yourmail@yourmail.com';
$subject = 'New IP Logged';
$message = $_SERVER['REMOTE_ADDR'];
$headers = 'From: yourmailer@yourmailer.com' . "\r\n" .
    'Reply-To: yourmailer@yourmailer.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 
