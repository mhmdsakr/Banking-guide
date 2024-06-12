<?php

$id = $_GET['id'];
include "../../conn.php";
$delete = "DELETE FROM bens_accounts WHERE id=$id";
$query = $conn -> query($delete);
if ($query) {
    header('location:../../../transfer.php');
}else{
    echo $conn -> $query;
}