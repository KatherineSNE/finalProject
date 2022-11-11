<?php
session_start();
include './views/contact.php';



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

if(isset($_POST['send_email'])){
    try{
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;              
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp-mail.outlook.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'katessmtptest@gmail.com';                     
    $mail->Password   = 'testsmtp';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mail->Port       = 587;                                   
    
    $mail->setFrom('katessmtptest@gmail.com', 'Janes Design');
    $mail->addAddress('janecailhol1@gmail.com','Jane');     
    $mail->addAddress('katherinesneddon33@gmail.com','katherine');               
    $mail->addReplyTo($_POST['email'],$_POST['nom']);
    
    $mail->isHTML(true);                                  
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['email'].'<br><br>Name:<b> '.$_POST['nom'].'</b><br><br>Product Ref: <b>'.$_POST['ref'].'</b><br><br><b>'.$_POST['message'].'</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
    echo 'Message has been sent';
    } 

    catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}









