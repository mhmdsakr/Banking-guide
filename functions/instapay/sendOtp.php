<?php
session_start();

require '../../assets/vendor/PHPMailer/src/Exception.php';
require '../../assets/vendor/PHPMailer/src/PHPMailer.php';
require '../../assets/vendor/PHPMailer/src/SMTP.php';


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_SESSION['gmail'])){
    $email = $_SESSION['gmail'];


//Create an instance; passing true enables exceptions
$mail = new PHPMailer(true);


    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'bankingguide390@gmail.com';             //SMTP username
    $mail->Password   = 'aoobqiqtegjhajjb';                   //SMTP password
    $mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
    $mail->Port       = 465;                                  

    //Recipients
    $mail->setFrom('bankingguide390@gmail.com');
    $mail->addAddress($email);     


    //Content
    $mail->isHTML(true);      
    $key = mt_rand(99999,999999);                            
    $mail->Subject = 'your code is : '. $key ;
    $mail->Body    = 'هذا الكود سري يرجي عدم مشاركته مع اي شخص اخر وهو مخصص لعمليه التحويل التي تقوم بها...';
    $mail->send();
    include "../conn.php";
    $sql = "UPDATE user SET otp='$key' WHERE email='$email'";
    $query = $conn -> query($sql);

    header("location:../../instapay.php?action=OTP");


}else{
    echo "noo";
}