<?php
$to = "yolosmios397@gmail.com";
$subject = "New message from Integral Project";
$message = "Name: " . $_POST['name'] . "\n";
$message .= "Email: " . $_POST['email'] . "\n";
$message .= "Message: " . $_POST['message'];

$headers = "From: noreply@tusitio.com\r\n";
$headers .= "Reply-To: " . $_POST['email'];

if (mail($to, $subject, $message, $headers)) {
    echo "Thank you! Your message has been sent.";
} else {
    echo "Oops! Something went wrong.";
}
?>