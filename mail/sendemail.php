<?php
require "PHPMailer/src/PHPMailer.php";  //nhúng thư viện vào để dùng, sửa lại đường dẫn cho đúng nếu bạn lưu vào chỗ khác
require "PHPMailer/src/SMTP.php"; //nhúng thư viện vào để dùng
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function Mailer($email, $title, $content)
{
	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	try {
		//Server settings
		$mail->SMTPDebug = 0;                                 // Enable verbose debug output
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'truongmoba157@gmail.com';                 // SMTP username
		$mail->Password = 'orxitwwhyfgurkqk';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		//Recipients
		$mail->setFrom('truongmoba157@gmail.com', 'Nguyễn Quang Trường');
		$mail->addAddress($email);     //Add a recipient
		// $mail->addReplyTo('info@example.com', 'Information');
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');

		//Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = $title;
		$mail->Body    = $content;
		// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		echo 'Message has been sent';
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}
