<?php
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    include "../conn.php";


    $stmt = $conn->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $id = $user['id'];
        $gmail = $user['email'];
        $name = $user['name'];

        $_SESSION['username'] = $name;
        $_SESSION['login_id'] = $id;
        $_SESSION['gmail'] = $gmail;
        header("location:../../index.php");
    } else {
        $_SESSION['login_error'] = "<div class='alert alert-danger'>wrong credentials</div>";
        header("location:../../login.php");
    };

    $stmt->close();
    $conn->close();
} else {
    $_SESSION['login_error'] = "<div class='alert alert-danger'>Please provide both email and password.</div>";
    header("location:../../login.php");
}
