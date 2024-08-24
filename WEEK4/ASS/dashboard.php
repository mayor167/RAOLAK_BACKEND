<?php
session_start();
if(!isset($_SESSION['userDetails'])){
    header("Location: login.php");
    die();
}
else{
    $userDetails = $_SESSION['userDetails'];
    if($userDetails){
            $username = $userDetails['username'];
            $fullname = $userDetails['fullname'];
            $email = $userDetails['email'];
            $gender = $userDetails['gender'];
            $phoneNo = $userDetails['phoneNo'];
            $state = $userDetails['state'];
            $address = $userDetails['address'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naira4Goods | Dashboard</title>
    <link rel="stylesheet" href="dashboard.css?v=3.0">
    <!-- <link rel="stylesheet" href="style.css?v=2.0"> -->
</head>
<body>
    <header class="brand_logo_welcome_header">
        <div class="brand_logo">
            <div class="logo">
                <center> <img src="brand_logo.png" alt=""></center>
                <center>

                    <p>Wallet: <span id="wallet_balance"><b>₦1,000,000</b></span> </p>
                </center>
            </div>
        </div>
        <div class="welcome_back_msg">
           <h2>Welcome Back, &nbsp;<span><?php echo htmlspecialchars(strtoupper($username)); ?></span></h2>
           <p>At Naira4Goods, Elevate your wardrobe without breaking the bank</p>
        </div>
    </header>
   <main>
    <div class="side_menu_container">
        <div class="side_menu_dash">
           
                <nav>
                    <ul>
                        <li><a href="dashboard.php"><span class="fas fa-home"></span>Dashboard</a></li>
                        <li><a href="myprofile.php"><span class="fas fa-user"></span>My profile</a></li>
                        <li><a href="#"><span class="fas fa-wallet"></span>My Wallet</a></li>
                        <li><a href="#"><span class="fas fa-user"></span>My Account</a></li><br>
                        <form action="engines/logouthandler.php" method="$_GET">
                        <li><span class="fas fa-sign-out-alt"></span><button style="border:none;background:none; font-size:15px; color:#848f93">Logout</button></li>
                        </form>
                       
                    </ul>
                </nav>
        </div>
    </div>
    <div class="content_container">      
            <div class="wrapper">
                <div class="box_container">
                    <div class="box1">
                        <p><b>Wallet Balance</b></p>
                        <p id="Amount">₦1,000,000</p>
                        <p><a href="#"><span>Fund </span></a>Wallet</p>
                        <div class="circle">
                            <center><i>₦</i></center>
                        </div>
                    </div>
                    <div class="box2">
                        <p><b>Account Status</b></p>
                        <p id="user_account_status">Active</p>
                        <p>Referral link <a href="#"><span>Click here</span></a></p>
                        <div class="circle">
                            <center><i class="far fa-user"></i></center>
                        </div>
                    </div> 
                    <div class="box3">
                        <p><b>User Type</b></p>
                        <p id="user_status">STANDARD</p>
                       <p><a href="#"><span>Unrestricted access</span></a></p>
                        <div class="circle">
                            <center><i class="far fa-user"></i></center>
                        </div>
                    </div>
                    <div class="box4">
                        <p><b>Whatsapp/Call</b></p>
                        <p id="phone_number">08063676340</p>
                        <p><a href="#"><span>Chat us </span></a>Wallet</p>
                        <div class="circle">
                            <center><i class="fab fa-whatsapp"></i></center>
                        </div>
                    </div>
                </div>
                <div class="gallery_with_account_details">
                    <div class="user_account_details">
                        <p><b>Unique Account Number</b></p><br>
                        <p>To buy goods, you can deposit or transfer into your unigue Naira4Goods account number below.  You can pay any amount, at any time, using any means (Website, Mobile App, USSD, ATM, POS e.t.c) to the unique MobileNig account number to credit your wallet instantly.</p><br>
                        <p><b>Account Name:</b> Mayorsky/Naira4goods</p><hr>
                        <p><b>Account Number:</b> 7489843959</p><hr>
                        <p><b>Bank Name:</b> Wema bank</p><hr>
                        <p><b>Full Name: </b><?php echo htmlspecialchars(strtoupper($fullname));?></p><hr>
                        <p><b>Email Address : </b><?php echo htmlspecialchars(($email));?></p><hr>
                        <p><b>Gender : </b><?php echo htmlspecialchars(($gender));?></p><hr>
                        <p><b>State : </b><?php echo htmlspecialchars(strtoupper($state));?></p><hr>
                        <p><b>phone Number : </b><?php echo htmlspecialchars(($phoneNo));?></p><hr>
                        <p><b>Residential Address : </b><?php echo htmlspecialchars (($address))?></p><hr>
                       </div> 
                   <div class="Add_to_cart_gallery">

                   </div>
                  
                   
                </div>
            </div>
    </div>
   </main>
</body>
</html>