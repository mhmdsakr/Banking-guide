<?php 
session_start();
if ($_SERVER['REQUEST_METHOD']!= "POST"){
    header("location:../../basic.php");
    exit();
}

$cardNumber = $_POST['cardNumber'];
$cardName = $_POST['cardName'];
$cardCVV = $_POST['cardCVV'];

$userId= $_SESSION['login_id'];
$username = $_SESSION['username']; 

include "../conn.php";
$select = "SELECT * FROM card WHERE holder = $userId";
$query = $conn ->query( $select);
$user = $query -> fetch_assoc();

if($username == $cardName && $user["cvv"] == $cardCVV && $user["num_card"] == $cardNumber){
   header("location: ../../basic.php?action=DN");
}else{
    $_SESSION['vcError'] = "<div class='alert alert-danger'>wrong credentials</div>";
    header('Location: ../../basic.php?action=errorVC');
}
