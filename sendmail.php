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

echo '<link rel="stylesheet" href="css/bootstrap.css">';
if(isset($_POST['enableMailer'])){
   
    $contactusName=mysqli_real_escape_string($connection,validateData($_POST['contactusName']));
    $contactEmail=mysqli_real_escape_string($connection,validateData($_POST['contactEmail']));
    $subject=mysqli_real_escape_string($connection,validateData($_POST['subject']));
    $message=mysqli_real_escape_string($connection,validateData($_POST['message']));
    $customerTel=mysqli_real_escape_string($connection,validateData($_POST['customerTel']));
    $address=mysqli_real_escape_string($connection,validateData($_POST['address']));
    
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
    $mail->addAddress('ijasdeen23@gmail.com', 'Ijasdeen');     // Add a recipient
     
     //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = "<b style='color:red'>Sent by : </b>".$contactusName."<br/> <span class='text text-danger'>Sent from : </span>".$contactEmail."<br/> <span class='text text-info'>Subject :</span>".$subject." <br/><span class='text text-info'>Customer Tel :".$customerTel."<br/></span><span style='color:blue'>Address : </span>".$address."<br/><br/> <span style='color:red'>Message : </span>".$message;
 
    $mail->send();
    echo 'sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}