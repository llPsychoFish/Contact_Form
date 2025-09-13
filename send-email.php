<?php

$name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
$email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL) : '';
$subject = isset($_POST['subject']) ? htmlspecialchars(trim($_POST['subject'])) : '';
$message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

if (empty($name) || empty($email) || empty($subject) || empty($message)) {
	die('All fields are required and email must be valid.');
}

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "arnoldsampson619@gmail.com";
$mail->Password = "xcav vicn goys lipa";

$mail->setFrom($email, $name); // Sender from form input
$mail->addAddress("arnoldsampson619@gmail.com", "Arnold"); // Recipient
$mail->addReplyTo($email, $name); // Reply-To from form

$mail->Subject = $subject;
$mail->Body = $message;

try {
	$mail->send();
	header("Location: sent.html");
	exit;
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// SECURITY NOTE: Never expose your App Password in code. Use environment variables or a config file for production.