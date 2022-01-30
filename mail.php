<?php

if (isset($_POST["submit"])) {
    extract($_POST);
    $myEmail="monceftighiouart@gmail.com";
    $header= 'Par : ' . $nom;
    $message= "Vous avez reçu un message par : " .$email . "\n \n" .$message;
    mail($myEmail, $titre, $message, $header);
    header("Location: index.html?mailsend/#form");
}