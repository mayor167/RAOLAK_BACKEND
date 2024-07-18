<?php
session_start(); // start session to store data temporarily on the browser
$_SESSION["username"] = "mayorsky"; // declaring session variable 
//unset($_SESSION["username"]); // unset the variable. this is main for unsetting one variable username
session_unset(); // this unset all session variable 
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_SESSION["username"];
    ?>
</body>
</html>