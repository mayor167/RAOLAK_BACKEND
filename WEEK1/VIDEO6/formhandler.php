<?php
#var_dump($_SERVER["REQUEST_METHOD"]);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);
    if (empty($username)){
        exit();
      
        
    }
    echo "Entered Username:". " ".  $username. "<br>";
    echo "Entered Email Address:"." ". $email. "<br>";
    echo "Entered favourite:"." ". $favouritepet. "<br>";
    header("Location: successpage.php");
    exit();
}
