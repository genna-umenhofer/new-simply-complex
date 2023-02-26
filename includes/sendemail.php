<?php

$name = $_POST["Name"];
$email = $_POST["Email"];
$subject = $_POST["Subject"];
$message = $_POST["Message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

//$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "genna.umenhofer.developer@gmail.com";
$mail->Password = "fnszcgqapmjofxfz";

$mail->setFrom($email, $name);
$mail->addAddress("genna.umenhofer.developer@gmail.com", "Genna");

$mail->Subject = "New messge from portfolio site";
$mail->Body = $message;

$mail->send();

header("Location: ../pages/sent.php");


?>