<?php



require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Include the recaptcha autoload file
//require_once __DIR__ . '../vendor/autoload.php';

// Verify the user's response token
$recaptcha = new \ReCaptcha\ReCaptcha('6LfreYokAAAAAGXqPesaxeZSkTT1b5RpxYQBaLK0');
$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

if ($resp->isSuccess()) {
    // The user's response token is valid
    //echo '<script>alert("It worked!")</script>';
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $subject = $_POST["Subject"];
    $message = $_POST["Message"];

    $mail = new PHPMailer(true);

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = "genna.umenhofer.developer@gmail.com";
    $mail->Password = "fnszcgqapmjofxfz";

    $mail->setFrom($email, $name);
    $mail->addAddress("genna.umenhofer.developer@gmail.com", "Genna");

    $mail->Subject = "New messge from Simply Complex Art Shop";
    $mail->Body = $name . $subject . $message . $email;

    $mail->send();

    header("Location: ../pages/sent.php");
} else {
    // The user's response token is invalid
    echo '<script>alert("Something went wrong. Please go back and try again.")</script>';
    $errors = $resp->getErrorCodes();
}