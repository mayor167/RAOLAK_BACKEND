<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="div-form">
        <center><img src="logo.png" alt="Naira4coin"></center>
        <form action="#" method="post">
            <h2>Login</h2>
            <label for="username">Username</label>
            <br>
            <div class="div-input">
                <span class="icon material-symbols-outlined">person</span>
                <input type="text" name="username" placeholder="Enter Email/Phone Number/Username" required></div>
            <br>
            <label for="pwd">Password</label>
            <br>
            <div class="div-input">
                <span class="icon material-symbols-outlined">lock</span>
                <input type="password" name="pwd" placeholder="Input your Password" required>
            </div>
            <br><br>
                <div class="div-sign-remember">
                <input class="ui check checkbox" type="checkbox"name="remember-me"><label for="remember-me" class="label-rem">Remember me</label>
                <button type="submit" class="signin">Sign in</button>
                    </div>
                    <a href="#" class="forgot-pwd">Forgot password</a>
           <p class="hr"></p>
           <center><p><a href="index.html">
            Don't have an account?</a></p></center>
            <!-- <center><button type="submit" class="signup">Sign up</button></center>  -->
        </form>
        <center>
           <div class="sign_up">
                    <a href="login.php">Sign up</a>
             </div>
           </center>
    </div>
    <div class="div-footer">
        <center><p>TECHSOL | Designed by TECHSOL Team</p></center>
    </div>
   
</body>
</html>