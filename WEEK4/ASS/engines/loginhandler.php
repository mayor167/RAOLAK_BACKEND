<?php
session_start();
if($_SERVER['REQUEST_METHOD']=== "POST"){
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        require_once '../classes/Dbh.php';
        require_once '../classes/Login.php';
        $login = new Login($username,$pwd);
        $login->loginUser();
}