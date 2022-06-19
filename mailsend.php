<?php
$link=@mysqli_connect('localhost','root','','夢夜');
$email=$_POST["mail"];
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/PHPMailer-master/src/Exception.php';
require 'PHPMailer/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer/PHPMailer-master/src/SMTP.php';


// $uName=$_POST["uName"];
// $message=$_POST["message"];
// $message=nl2br($message);
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$SQL="SELECT password FROM member WHERE mail='$email'";
$result=mysqli_query($link,$SQL);
$pwd=$result->fetch_array()[0] ?? '';
try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'winnie070688@gmail.com';                     //SMTP username
    $mail->Password   = 'rvyjdgczbbluyflb';  //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption                             
    $mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption
    $mail->Port       = 465; 
    $mail->CharSet='UTF-8';                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('winnie070688@gmail.com', 'Mailer');
    $mail->addAddress($email);     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "=?utf-8?B?".base64_encode("夢夜會員忘記密碼")."?=";
    $message="您好，您的密碼為:".$pwd;
    $mail->Body    = $message;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    echo "<meta http-equiv='Refresh' content='0; url=登入.php'>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>