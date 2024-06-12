<?php


include "../conn.php";

$id = $_GET['id'];

$del ="DELETE FROM cart where id= $id";

$query = $conn -> query($del);

if($query){
    header("location:../../shop.php?action=CR&id=$user_id");
}else{
    echo $conn -> $error;
}

?>