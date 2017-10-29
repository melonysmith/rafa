<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['contact-message'];
    $formcontent="From: $name \n Message: $message";
    $recipient = "smith.melonya@gmail.com";
    $subject = "MelonySmith.net";
    $mailheader = "From: $email \r\n";
    
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You! I will be in touch soon!";
?>