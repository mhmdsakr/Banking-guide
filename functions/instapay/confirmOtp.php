<?php
session_start();
if ($_SERVER['REQUEST_METHOD']!= "POST"){
    header("location:../../instapay.php");
    exit();
}

    //check
    $email=$_SESSION['gmail'];
    include "../conn.php";
    $select="SELECT otp FROM user WHERE email='$email'";
    $query_otp = $conn -> query($select);
    $result = $query_otp -> fetch_assoc();
    $otp = $result['otp'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // تهيئة المصفوفة
        $data_array = array();
    
        // جمع البيانات من المدخلات
        $data_array['input1'] = isset($_POST['input1']) ? $_POST['input1'] : '';
        $data_array['input2'] = isset($_POST['input2']) ? $_POST['input2'] : '';
        $data_array['input3'] = isset($_POST['input3']) ? $_POST['input3'] : '';
        $data_array['input4'] = isset($_POST['input4']) ? $_POST['input4'] : '';
        $data_array['input5'] = isset($_POST['input5']) ? $_POST['input5'] : '';
        $data_array['input6'] = isset($_POST['input6']) ? $_POST['input6'] : '';
        
        $combinedValue = implode("", $data_array);
          
        if($combinedValue == $otp){
            header("location:../../instapay.php?action=DN");
        }else{
            $_SESSION['otpError'] = "<div class='alert alert-danger'>wrong credentials</div>";
            header('Location:../../instapay.php?action=OTP');
        }
    
    }

?>


