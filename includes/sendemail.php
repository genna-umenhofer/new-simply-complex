<?php

require "../vendor/autoload.php";
include("../.env.php");
include("../functions.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Include the recaptcha autoload file
//require_once __DIR__ . '../vendor/autoload.php';

// Verify the user's response token
$recaptcha = new \ReCaptcha\ReCaptcha($secretkey);
$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

if ($resp->isSuccess()) {
    // The user's response token is valid
    //echo '<script>alert("It worked!")</script>';
    $dirtyName = $_POST["Name"];
    $dirtyEmail = $_POST["Email"];
    $dirtyMessage = $_POST["Message"];

    $name = sanitize($dirtyName);
    $email = sanitize($dirtyEmail);
    $message = sanitize($dirtyMessage);

    $mail = new PHPMailer(true);

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    //PHP Mailer Configuration
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->isHTML(true);
    $mail->Username = $emailuser;
    $mail->Password = $emailpass;

    //Send the Email
    $mail->setFrom($email, $name);
    $mail->addAddress($emailuser, "Genna");

    $mail->Subject = "New messge from Simply Complex Art Shop";
    $mail->Body = "<h1>You have a new message from Simply Complex!</h1><br><strong>Name:</strong> $name <br><strong>Email:</strong> $email <br><strong>Message:</strong> $message";

    $mail->send();

    header("Location: ../pages/sent.php");
} else {
    // The user's response token is invalid
    echo '<script>alert("Something went wrong. Please go back and try again.")</script>';
    $errors = $resp->getErrorCodes();
}