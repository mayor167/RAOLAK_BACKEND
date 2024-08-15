<?php
session_start();
function displayErrors() {
    $output = '';
    if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])) {
        $output .= '<div style="color:red">';
        foreach ($_SESSION['errors'] as $error) {
            $output .= '<li>' . htmlspecialchars($error) . '</li>';
        }
        $output .= '</div>';
        unset($_SESSION['errors']);
    }
    return $output;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css?v=2.0">
</head>
<body>
    <div class="div-form">
        <center><img src="brand_logo.png" alt="Naira4goods"></center>
        <form action="engines/registerhandler.php" method="POST">
            <h2>Register now</h2>
            <?php
                echo displayErrors();
                ?> 
            <label for="name">Full Name</label>
            <br>
            <div class="div-input">
                <span class="icon material-symbols-outlined">person</span>
                <input type="text" name="fullname" placeholder="e.g ADENIJI Oyeyemi Mayokun" required></div>
            <br>
            <center>
            <div style="display: flex; padding:0px 0px; gap:8px">
            <label for="state">State:</label>
            <select name="state" style="border:none; " >
                <option value="">None</option>
                <option value="Abia">Abia</option>
                <option value="Lagos">Lagos</option>
                <option value="Oyo">Oyo</option>
            </select>
            <br>
            <label for="gender" style="padding-right: 10px;">Gender:</label><br>
            <label for="gender">Male</label>
        <input type="radio" name="gender" value="Male" style="size: 0px;"><br>
        <label for="gender">Female</label>
        <input type="radio" name="gender" value="Female" required><br>
            </div>
            </center>
           
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
                <input type="number" maxlength="11" name="phoneNo" placeholder="Enter your phone number"required></div>
            <br>
            <label for="pwd">Password</label>
            <br>
            <div class="div-input">
                <span class="icon material-symbols-outlined">lock</span>
                <input type="password" name="pwd" placeholder="Input Password" required>
            </div>
            <br>
            <label for="confirmpwd">Password Again</label>
            <br>
            <div class="div-input">
                <span class="icon material-symbols-outlined">lock</span>
                <input type="password" name="confirmpwd" placeholder="Confirm Password">
            </div>
            <p>
                By clicking Register button below, you agree to our <span>Terms of Service, Privacy Policy</span> and <span>AML Policy</span>.
            </p>
           <center><button type="submit" class="signup">Sign up</button></center>
           <center><p><a href="login.php" style="color:black">
            Already have account?</a></p></center>
           <center>
            <br><br><br><br>
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