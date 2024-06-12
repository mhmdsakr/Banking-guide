<?php

include "conn.php";
$select="SELECT * FROM user ORDER BY id DESC LIMIT 1";
$query = $conn -> query($select);
$fetch = $query -> fetch_assoc();
$holder = $fetch['id'];


$card_num = "";
for ($i = 1; $i <= 16; $i++) {
    $card_num .= rand(0, 9);
}

$formatted_card_num = "";
for ($i = 0; $i < strlen($card_num); $i++) {
    $formatted_card_num .= $card_num[$i];
    if (($i + 1) % 4 == 0 && $i + 1 != 16) {
        $formatted_card_num .= " ";
    }
}


$exp_month = rand(1, 12);


$exp_year = rand(25, 34);


$cvv = "";
for ($i = 1; $i <= 3; $i++) {
    $cvv .= rand(0, 9);
}


$insert_card ="INSERT INTO card
(holder , num_card , exp_month , exp_year , cvv)
VALUES
('$holder' , '$formatted_card_num' , '$exp_month' , '$exp_year' , '$cvv')";

$query_card = $conn -> query($insert_card);



?>