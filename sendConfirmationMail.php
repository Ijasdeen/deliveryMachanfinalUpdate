<?php
 session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require_once('connection/connection.php');
require_once('validateData.php');

 if(isset($_POST['enableEmail'])){
   $email= $_SESSION['userEmail'];
    $name=$_SESSION['userName'];
    
}
 
 $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mx1.hostinger.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'deliverymachan@deliverymachan.com';                 // SMTP username
    $mail->Password = 'cE2lHTRTjqGRArQLa';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also  
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('deliverymachan@deliverymachan.com','Delivery Machan');
    $mail->addAddress($email,$name);     // Add a recipient
      $mail->addCC('deliverymachan@gmail.com'); 
     //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Order Confimed";
    $mail->Body    = "Dear ".$name."<br/><br/>Your order has been confirmed.</h1>";
 
    $mail->send();
    echo 'sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}