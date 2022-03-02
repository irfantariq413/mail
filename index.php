<?php
require('phpmailer/PHPMailerAutoload.php');
$mail= new PHPMailer;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='irfantariq413@gmail.com';
$mail->Password='kotli12345';
$mail->setFrom('irfantariq413@gmail.com','Email Verification');
$mail->addAddress('adeeldanishtariq123@gmail.com');
	$mail->addReplyto('irfantariq413@gmail.com');
	$mail->isHTMl=(true);
	$mail->Subject='PHP';
	$mail->Body='<h1>Thanks</h1>';
if(!$mail->send()){
	echo "Sory";
}
else{
	echo "SENT successfully";
}

?>