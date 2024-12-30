<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['btnKirim'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication

    $mail->Host       = 'mail.herlykgroup.co.id';                     //Set the SMTP server to send through
    $mail->Username   = 'info@herlykgroup.co.id';                     //SMTP username
    $mail->Password   = '8)phO$7q0act';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@herlykgroup.co.id', 'Mailer');
    $mail->addAddress('info@herlykgroup.co.id', 'Customer');     //Add a recipient
   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Message';
    $mail->Body    = '<h3>Hello,</h3>
    <h4>Nama: '.$name.'</h4>
    <h4>Email: '.$email.'</h4>
    <h4>Subject: '.$subject.'</h4>
    <h4>Message: '.$message.'</h4>';
    
if ( $mail->send()) {
    $_SESSION['status'] = "Terimakasih sudah hubungin kami - Team Herlyk";
    header("Location: {$_SERVER["HTTP_REFERER"]}");
    exit(0);
} else {
    $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header("Location: {$_SERVER["HTTP_REFERER"]}");
    exit(0);
}
   
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
else {
    header('Location: index.php');
    exit(0);
}

?>