<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="div-form">
        <center><img src="logo.png" alt="Naira4coin"></center>
        <form action="engines/registerhandler.php" method="POST">
            <h2>Register now</h2>
            <label for="fullname">Full Name</label>
            <br>
            <div class="div-input">
                <span class="icon material-symbols-outlined">person</span>
                <input type="text" name="fullname" placeholder="e.g ADENIJI Oyeyemi Mayokun" required></div>
            <br>
            <label for="username">Username</label>
            <br>
            <div class="div-input">
                <span class="icon material-symbols-outlined">person</span>
                <input type="text" name="username" placeholder="Enter preferred Username" required></div>
            <br>
            <label for="email">Email Address</label>
            <br>
            <div class="div-input">
                <span class="icon material-symbols-outlined">email</span>
                <input type="email" name="email" placeholder="Enter a valid email address " required>
            </div>
            <br>
            <label for="phoneNo">Phone Number</label>
            <br>
            <div class="div-input">
                <span class="icon material-symbols-outlined">call</span>
                <input type="number" name="phoneNo" placeholder="Enter your phone number"required></div>
            <br>
            <label for="pwd">Password</label>
            <br>
            <div class="div-input">
                <span class="icon material-symbols-outlined">lock</span>
                <input type="password" name="pwd" placeholder="Input Password" required>
            </div>
            <p>
                By clicking Register button below, you agree to our <span>Terms of Service, Privacy Policy</span> and <span>AML Policy</span>.
            </p>
           <center><button type="submit" class="signup">Sign up</button></center> 
           <br><br>
           <p class="hr"></p>
           <center><p><a href="login.html">
            Already have account?</a></p></center>
            <!-- <center><button type="submit" class="signin">Sign in</button></center>  -->
           <center>
           <div class="sign_in">
                    <a href="login.php">Sign in</a>
             </div>
           </center>
             
        </form>
        
    </div>
    <div class="div-footer">
        <center><p>TECHSOL | Designed by TECHSOL Team</p></center>
    </div>

</body>
</html>