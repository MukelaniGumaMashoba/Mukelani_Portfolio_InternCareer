<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';


$email = $_POST['email'];
$firstName = $_POST['first-name'];
$message = $_POST['message'];

if (empty($email) || empty($firstName) || empty($message)) {
    echo "All form fields are required.";
    exit;
}

$mail = new PHPMailer(true);


try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'mukelanilastborn@gmail.com';
    $mail->Password   = 'dqxymzsrlcjbjdsa';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Recipients
    $mail->setFrom('mukelanilastborn@gmail.com', 'Mpp');
    $mail->addAddress($email, $firstName);
    $mail->addReplyTo('mukelanilastborn@gmail.com', 'Mpp');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'MPP Consulting';
    $mail->Body    = "Hello $firstName, your message: $message";

    $mail->send();
    header("Location: index.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
