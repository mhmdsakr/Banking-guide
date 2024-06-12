<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive OTP Verification Form Using Bootstrap 5</title>
  <!-- Bootstrap 5 CDN Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Google Poppins Font CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing: border-box;
}

/* Variables */
:root{
    --primary-font-family: 'Poppins', sans-serif;
    --light-white:#f5f8fa;
    --gray:#5e6278;
    --gray-1:#e3e3e3;
}
body{
    font-family:var(--primary-font-family);
    font-size: 14px;
} 

a{
    text-decoration: none;
}
/* Main CSS OTP Verification New Changing */ 
.wrapper{
    padding:0 0 100px;
    background-image:url("images/bg.png");
    background-position:bottom center;
    background-repeat: no-repeat;
    background-size: contain;
    background-attachment: fixed;
    min-height: 100%;

}
.wrapper .logo img{
    max-width:40%;
}
.wrapper input{
    background-color:var(--light-white);
    border-color:var(--light-white);
    color:var(--gray);
}
.wrapper input:focus{
    box-shadow: none;
}
.wrapper .password-info{
    font-size:10px;
}
.wrapper .submit_btn{
    padding:10px 15px;
    font-weight:500;
}
.wrapper .login_with{
    padding:8px 15px;
    font-size:13px;
    font-weight: 500;
    transition:0.3s ease-in-out;
}
.wrapper .submit_btn:focus,
.wrapper .login_with:focus{
    box-shadow: none;
}
.wrapper .login_with:hover{
    background-color:var(--gray-1);
    border-color:var(--gray-1);
}
.wrapper .login_with img{
    max-width:7%;
} 

/* OTP Verification CSS */
.wrapper .otp_input input{
    width:14%;
    height:70px;
    text-align: center;
    font-size: 20px;
    font-weight: 600;
}

@media (max-width:1200px){
    .wrapper .otp_input input{ 
        height:50px; 
    }
}
@media (max-width:767px){
    .wrapper .otp_input input{ 
        height:40px; 
    }
}
  </style>
</head>
<body> 
    <section class="wrapper">
    <div class="container">
      <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3 text-center">
        <div class="logo">
          <img decoding="async" style="width: 125px; hight: 120px;" src="assets/img/logo.jpg" class="img-fluid" alt="logo">
        </div><br>
        <form action="functions/instapay/confirmOtp.php" method="POST" class="rounded bg-white shadow p-5">
          <h3 class="text-dark fw-bolder fs-4 mb-2">Two Step Verification</h3>

          <div class="fw-normal text-muted mb-4">
            Enter the verification code we sent to
          </div>  

                    <div class="d-flex align-items-center justify-content-center fw-bold mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>
                        <span>@gmail.com</span>
                    </div>
                    <div class="otp_input text-start mb-2">
                        <label for="digit">Type your 6 digit security code</label>
                            <div class="d-flex align-items-center justify-content-between mt-2">
                            <input name="input1" type="text" class="form-control" placeholder="" maxlength="1" oninput="moveToNext(this)">
                            <input name="input2" type="text" class="form-control" placeholder="" maxlength="1" oninput="moveToNext(this)">
                            <input name="input3" type="text" class="form-control" placeholder="" maxlength="1" oninput="moveToNext(this)">
                            <input name="input4" type="text" class="form-control" placeholder="" maxlength="1" oninput="moveToNext(this)">
                            <input name="input5" type="text" class="form-control" placeholder="" maxlength="1" oninput="moveToNext(this)">
                            <input name="input6" type="text" class="form-control" placeholder="" maxlength="1" oninput="moveToNext(this)">
                        </div> 
          </div>  

          <button type="submit" class="btn btn-primary submit_btn my-4">Submit</button> 
          

            <div class="fw-normal text-muted mb-2">
            Didn’t get the code ? <a href="functions/instapay/sendOtp.php" class="text-primary fw-bold text-decoration-none">Resend</a>
          </div>
          <div>
          <?php
                if(isset($_SESSION['otpError'])){
                    echo "<hr>";
                    echo $_SESSION['otpError'];
                    unset($_SESSION['otpError']);
                }
            ?>
          </div>
        </form>
      </div>
    </div>
  </section>
  <script>
    function moveToNext(input) {
  const maxLength = parseInt(input.getAttribute("maxlength"));
  const currentLength = input.value.length;

  if (currentLength >= maxLength) {
    const index = Array.from(document.querySelectorAll("input")).indexOf(input);
    const nextInput = document.querySelectorAll("input")[index + 1];

    if (nextInput) {
      nextInput.focus();
    }
  }
}
  </script>
</body>
</html>
