<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'mailer/src/Exception.php';
require 'mailer/src/PHPMailer.php';
require 'mailer/src/SMTP.php';

if (isset($_POST["submit"])) {
    extract($_POST);
    $myEmail="monceftighiouart@gmail.com";
    $header= 'Par : ' . $nom;
    $message= "Vous avez reçu un message par : " .$email . "\n \n" .$message;

    $mail= new PHPMailer();

    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "tls";                 
    $mail->Host       = "smtp.gmail.com";      // SMTP server
    $mail->Port       = 587;                   // SMTP port
    $mail->Username   = $myEmail;  // username
    $mail->Password   = "taypjszmshnijkuc";            // password
    
    $mail->SetFrom($email, ' a envoye un mail');
    
    $mail->Subject    = $header;
    
    $mail->MsgHTML($message);
    
    $mail->AddAddress($email, "Test");
    
    if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      echo "Message sent!";
    }
    


    //mail($myEmail, $titre, $message, $header);
    header("Location: index.html?mailsend#form");
}