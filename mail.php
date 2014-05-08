<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent="$name, $email, contacted Irregular Gentlewomen about $subject. \n $message";
$recipient = "irregulargentlewomen@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Oops, something went wrong. Try emailing irregulargentlewomen@gmail.com directly.");
echo "Thank you for emailing us. If your email requires a response, we'll get back you as soon as possible." . " &mdash; " . "<a href='index.html'>Back to Irregular Gentlewomen</a>";
?>
