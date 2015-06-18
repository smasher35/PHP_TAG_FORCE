<?php



if (isset($_POST['submit'])) {
    $name = $_POST['contactName'];
    $email = $_POST['contactEmail'];
    $message = $_POST['contactMessage'];
    $errName=null;
    $errEmail=null;
    $errMessage=null;

    $from = $email;
    $to = 'smasher35@gmail.com';
    $subject = 'PHP TAG FORM - Message from Contact US - PROGEST ';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";



    // Check if name has been entered
    if (!$_POST['contactName']) {
        $errName = 'Please enter your name';
    }

    // Check if email has been entered and is valid
    if (!$_POST['contactEmail'] || !filter_var($_POST['contactEmail'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }

    //Check if message has been entered
    if (!$_POST['contactMessage']) {
        $errMessage = 'Please enter your message';
    }


// If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage) {
        if (mail ($to, $subject, $body, $from)) {
            $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
            require 'index.php';
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
        }
    }
}


