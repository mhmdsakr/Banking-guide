<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BANKING GUIDE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

    <!-- Boxicons CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.7/css/boxicons.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <a href="functions/users/logout.php"><i class="d-flex align-items-center ms-4">
                        <span>
                            <?php
                            if (isset($_SESSION['login_id'])) {
                                echo "logout";
                            } else {
                                echo "login";
                            }
                            ?>
                        </span>
                    </i></a>
                <a href="register.php"><i class="d-flex align-items-center ms-4"><span>Sing up</span></i></a>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="https://mobile.twitter.com/mhmd_sakrr" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/therealmhmdsakr?igsh=MXNoNWcyOGY5bWFxbg%3D%3D&utm_source=qr" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="index.php">BANKING GUIDE</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto ms-4" href="index.php">Home</a></li>

                    <!-- -----banks----- -->
                    <li class="dropdown ms-4"><a href="#"><span>Banks</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown"><a href="#"><span>Private Banks</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="cib.php">CIB</a></li>
                                    <li><a href="#">QNB</a></li>
                                    <li><a href="#">HSBC</a></li>
                                    <li><a href="#">SAIB</a></li>
                                    <li><a href="#">FAB</a></li>
                                </ul>
                            </li>

                            <li class="dropdown"><a href="#"><span>Governmental Banks</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">NBE</a></li>
                                    <li><a href="#">BANQUE MISR</a></li>
                                    <li><a href="#">AGRI BANK</a></li>
                                    <li><a href="#">BANQUE DU CAIRO</a></li>
                                </ul>
                            </li>

                            <li class="dropdown"><a href="#"><span>Islamic Banks</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">FAISAL</a></li>
                                    <li><a href="#">ABU DHABI</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- -----/banks----- -->


                    <li class="dropdown ms-4"><a href="#"><span>Simulation</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <!--  card  -->
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Your Card </a></li>
                            <?php
                            /////Basic/////
                            if (isset($_SESSION['login_id'])) {
                                echo "<li><a href='basic.php'>Basic</a></li>";
                            } else {
                                echo '<li><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Basic</a></li>';
                            }
                            /////Shop/////
                            if (isset($_SESSION['login_id'])) {
                                echo "<li><a href='shop.php'>shop</a></li>";
                            } else {
                                echo '<li><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Shop</a></li>';
                            }
                            /////Transfer/////
                            if (isset($_SESSION['login_id'])) {
                                echo "<li><a href='transfer.php'>Transfer</a></li>";
                            } else {
                                echo '<li><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Transfer</a></li>';
                            }
                            ?>
                        </ul>
                    </li>
                    <!-- Modal card -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #023E61;">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: white;"> Details...</h1>
                                </div>
                                <div class="modal-body">

                                    <?php
                                    if (isset($_SESSION['login_id'])) { 
                                        include "card.php";
                                    } else {
                                        echo "<h5 style='color:red;'>sorry...</h5>";
                                        echo "You should have an account first.";
                                    }
                                    ?>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn" data-bs-dismiss="modal" style="color: white; background-color:red">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Modal -->


                    <li class="dropdown ms-4"><a href="#"><span>Electronic payment</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <?php
                            if (isset($_SESSION['login_id'])) {
                                echo "<li><a href='instapay.php'>Insta Pay</a></li>";
                            } else {
                                echo '<li><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Insta Pay</a></li>';
                            }
                            ?>
                            <li><a href="#">Fawry</a></li>
                            <li><a href="#">Vodafone Cash</a></li>
                            <li><a href="#">BEE</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto ms-4" href="#about">About </a></li>
                    <li><a href="#" class="twitter"><i class="bi bi-search"></i></a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header> <!--End Header -->