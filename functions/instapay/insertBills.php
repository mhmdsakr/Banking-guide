<?php
session_start();
if ($_SERVER['REQUEST_METHOD']!= "POST"){
    header("location:../../insatpay.php");
    exit();
}

$userId = $_SESSION['login_id']; 
$name = $_SESSION['username'];
$gmail = $_SESSION['gmail'];

$companyName = $_POST['type'];
$number = $_POST['name'];

include "../conn.php";
$insert = "INSERT INTO bills
(user_id , company_id , number )
VALUES
('$userId' , '$companyName' , '$number')";

$query = $conn->query($insert);

if ($query) {
    header('location: ../../instapay.php?action=CP');
} else {
    echo $conn->error;
}



