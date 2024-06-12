<?php

if ($_SERVER['REQUEST_METHOD'] != "POST") {

    header("location:../../register.php");
    exit();
}


$name = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];



include "../conn.php";
$insert = "INSERT INTO user
(name , email , phone , password)
VALUES
('$name' , '$email' , '$phone' , '$password')";

$query = $conn->query($insert);


if ($query) {
    include "newCard.php";
    header("location:../../login.php");
} else {
    echo $conn->error;
}
