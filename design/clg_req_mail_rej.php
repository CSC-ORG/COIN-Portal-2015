<?php
$account="shaadimagic8@gmail.com";//put your email and password
$password="26august94";
if(!isset($to))$to="goyals1993@gmail.com";
$from="shaadimagic8@gmail.com";
$from_name="CSC India team";
$msg="Sorry to inform you,your request has not been approved by our admin.<br>"; // HTML message
$subject="CSC College Request";
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
//$mail->SMTPSecure = 'tls';     //new
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth= true;
$mail->Port = 465; // Or 587
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'ssl';
$mail->From = $from;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->addAddress($to);
echo"bbcvcvc";
if(!$mail->send()){
 //echo "Mailer Error: ";
 $m=$mail->ErrorInfo;
}else{
 //echo "E-Mail has been sent";
 $m="emailsent";
}
header("location:admin_home.php");
?>