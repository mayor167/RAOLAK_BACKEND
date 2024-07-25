<?php
if ($_SERVER['REQUEST_METHOD']=== "POST"){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    require_once '../classes/Dbh.php'; //parent class
    require_once '../classes/Signup.php';// child class need info from Dbh.php(Make sure parent is always called first)
    $signup = new Signup($name,$username, $email, $pwd);
    $signup -> signupUser();
}
?>