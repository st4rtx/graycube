<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

if($_POST['name'] && $_POST['email'] && $_POST['address'] && $_POST['description']) {

    $subject='Contactus from > '.$_POST['name'];
    $message='Name : '.$_POST['name'].' Email : '.$_POST['email'].' Address : '.$_POST['address'].' Description : '.$_POST['description'];
	$from=$_POST['email'];
	
	$mail = new PHPMailer;
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'postmaster@beep.ir';  			  // SMTP username	
	$mail->Password = '8eg3pmpv9d-8';                     // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted

	$mail->From = $from;
	$mail->FromName = $from;
	$mail->addAddress('support@winu.ir');                 

	$mail->Subject = $subject;
	$mail->Body =$message;

	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent';
	}
} else if($_POST['subscriber']){
	$subject='Subscriber from > '.$_POST['subscriber'];
    $message='Subscriber : '.$_POST['subscriber'];
	$from=$_POST['subscriber'];
	
	$mail = new PHPMailer;
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'postmaster@beep.ir';  			  // SMTP username	
	$mail->Password = '8eg3pmpv9d-8';                     // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted

	$mail->From = $from;
	$mail->FromName = $from;
	// $mail->addAddress('support@winu.ir');                 

	$mail->Subject = $subject;
	$mail->Body =$message;

	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent';
	}
} else {
	die("Error Email Parameter !");
}



?>