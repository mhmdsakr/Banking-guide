<?php
session_start();

$userId = $_SESSION['login_id']; 
$name = $_SESSION['username'];
$gmail = $_SESSION['gmail'];

include "../conn.php";

// أولا، الحصول على id لأخر فاتورة تخص المستخدم
$select = "SELECT MAX(id) as maxId FROM bills WHERE user_id = ?";
$stmt = $conn->prepare($select);
if ($stmt) {
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $maxId = $row['maxId'];
    $stmt->close();

    // بعد الحصول على id لأخر فاتورة، نقوم بحذفها
    $delete = "DELETE FROM bills WHERE id = ?";
    $stmt = $conn->prepare($delete);
    if ($stmt) {
        $stmt->bind_param("i", $maxId); // i stand for intger
        if ($stmt->execute()) {
            header('location:../../instapay.php');
        } else {
            echo $stmt->error;
        }
        $stmt->close();
    } else {
        echo $conn->error;
    }
} else {
    echo $conn->error;
}

// اغلاق الاتصال
$conn->close();
?>
