<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require_once('connection/connection.php');
require_once('validateData.php');

 if(isset($_POST['enableEmail'])){
 
     $fullName=mysqli_real_escape_string($connection,validateData($_POST['fullName']));
     $email=mysqli_real_escape_string($connection,validateData($_POST['email']));
     $code=(int) mysqli_real_escape_string($connection,validateData($_POST['code']));
     
     if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
         echo 'no';
         exit();
     }
     
     
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
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('deliverymachan@deliverymachan.com',$contactusName);
    $mail->addAddress($email,$fullName);     // Add a recipient
     
     //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Varification code';
    $mail->Body    = "Dear ".$fullName."<br/><br/>Your varification code : <h1>".$code."</h1>";
 
    $mail->send();
    echo 'sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}