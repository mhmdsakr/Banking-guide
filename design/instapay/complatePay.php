<head>
  <style>
        .bodya {
            margin: 0;
            display: flex;
            justify-content: center; 
            align-items: center; 
            /* background-color: rgb(102,0,161); */
            background-color: #dededf;

        }
        .credentialing {
            background: #fff;
            box-shadow: 0 30px 60px 0 rgba(90, 116, 148, 0.4);
            border-radius:10% ;
            margin-top: 10%;
            margin-bottom: 10%;
            background-color:white;
            width: 35%;
        }
        .credentialing img{
            width: 90%;
            padding-top:50px;
            padding-left: 50px;
        }
        .content{
            padding-left: 10%;
        }
        .content h2{
            padding-left: 30%;
        }

    </style>
</head>
<body>
    <div class="bodya">        
        <div class="credentialing">
            <img src="assets/img/th.jpg" alt=""><br><br>
            <div class="content">
                <h2>Your Bill</h2>
                <br>
                <br>
                <?php
                $id = $_SESSION['login_id'];
                $email = $_SESSION['gmail'];

                $select="SELECT * FROM user WHERE id = '$id'";
                $query = $conn -> query($select);
                $result = $query -> fetch_assoc();
                $name = $result['name'];

                $select2="SELECT * FROM bills WHERE user_id = '$id' ORDER BY id DESC LIMIT 1 ";
                $query2 = $conn -> query($select2);
                $result2 = $query2 -> fetch_assoc();
                $number = $result2['number'];
                $company_id = $result2['company_id'];
                

                $select3="SELECT * FROM company WHERE id = '$company_id'";
                $query3 = $conn -> query($select3);
                $result3 = $query3 -> fetch_assoc();
                $company = $result3['name'];
                ?>
                <p>Your Name is :<span style="font-weight: bold; color:#023E61"><?=$name?></span></p>
                <p>Your Gmail is :<span style="font-weight: bold; color:#023E61"><?=$email?></span></p>
                <p>The Company is : <span style="font-weight: bold; color:#023E61"><?=$company?></span></p>
                <p>The number is : <span style="font-weight: bold; color:#023E61"><?=$number?></span></p>
                <p>Deserved Amount : <span style="font-weight: bold; color:#023E61"><?php
                $amount="";
                for ($i = 1; $i <= 1; $i++) {
                    $amount .= rand(200, 300);
                }
                echo $amount;
                ?></span></p>
                <p>Date : <span style="font-weight: bold; color:#023E61"><?php
                    date_default_timezone_set('Africa/Cairo');
                    echo date('Y-m-d H:i:s');
                ?></span></p><br>
                    <div class="d-flex justify-content-center justify-content-between">
                        <button class="btn" style="background-color: #023E61; color:white;" data-bs-toggle="modal" data-bs-target="#exampleModal2">Confirm</button>
                        <a class="btn" href="functions/instapay/deleteBills.php" style="background-color:red; color:white;margin-right:10%;">Cancel</a>
                    </div><br><br>
            </div>
        </div>    
    </div>

        <!-- Modal 2  -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header" style="background-color: #023E61;">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Receipt</h1>
                </div>
                <div class="modal-body">
                    <div class="section-title">
                        <h3>Insta Pay</h3>
                        <img src="assets/img/correct.jpg" alt="">
                        <h6>Thank You For Choosing <span style="font-weight:bold; color:#023E61">Insta Pay</span></h6>
                        <h6>Your Order Is Successfuly Paid</h6>
                        <h4>Service Provider Refrence <br> Numper :<?php
                        $ref="";
                        for ($i = 1; $i <= 9; $i++) {
                            $ref .= rand(0, 9);
                        }
                        echo $ref;
                        ?></h4>
                        

                    </div>
                    <div class="section-title">
                        <a href="instapay.php" class="btn btn-primary" >Close</a>
                    </div>
                </div>
                </div>
            </div>
        </div>

