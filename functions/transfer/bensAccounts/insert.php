<?php
session_start();
if ($_SERVER['REQUEST_METHOD']!= "POST"){
    header("location:../../transfer.php");
    exit();
}

$name =$_POST['name'];
$type =$_POST['type'];
$user_id = $_SESSION['login_id'];


include "../../conn.php";
$insert = "INSERT INTO bens_accounts
        (name , type , user_id) 
        VALUES 
        ('$name' , '$type' , '$user_id')";
if ( $conn -> query($insert) ){
    header("location:../../../transfer.php");
}else{
    $conn -> error;
}