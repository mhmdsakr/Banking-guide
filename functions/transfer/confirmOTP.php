<?php
session_start();
if ($_SERVER['REQUEST_METHOD']!= "POST"){
    header("location:../../transfer.php");
    exit();
}

include '../conn.php';

$id = $_SESSION['login_id'];
$otp = $_POST['otp'];


$select = "SELECT * FROM  user WHERE id='$id'";

$query = $conn ->query($select);

$result = $query -> fetch_assoc();

$otp_result = $result['otp']; 
if($otp == $otp_result){
    header("location: ../../transfer.php?action=DN");

}else{
    $_SESSION['otpError'] = "<div class='alert alert-danger'>The OTP incorrect, Please repeat the process again</div>";
    header("location: ../../transfer.php");
}