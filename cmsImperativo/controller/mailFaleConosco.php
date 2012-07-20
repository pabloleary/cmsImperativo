<?php

include_once('class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"

$body             = $_POST["mensagem"];
//$body             = eregi_replace("[\]",'',$body);

$mail->From       = "saulocamposi@gmail.com";
$mail->FromName   = $_POST["nome"];

$mail->Subject    = $_POST["nome"];

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$mail->AddAddress("saulocamposi@gmail.com", "John Doe");
$mail->Send();
/*if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}*/

?>
