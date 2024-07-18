<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = htmlspecialchars($_POST['name']);
    $username = htmlspecialchars($_POST['username']);
    $pwd = htmlspecialchars($_POST['pwd']);
    $email = htmlspecialchars($_POST['email']);
    try {
            require_once "dbh.inc.php";
            //This is non name parameter method
            // $query = "INSERT INTO users (name, username, email, pwd) VALUES (?, ?, ?, ?);";
            // $stmt = $pdo->prepare($query);
            // $stmt-> execute([$name, $username, $pwd, $email]); 
            // $pdo= null;
            // $stmt = null;  
            // header("Location: ../index.php");
            // die(); 
            $cost =[
                'cost' => 12,
            ];
            $pwdHashed = password_hash($pwd, PASSWORD_BCRYPT, $cost);

            //using actual name paramter method
            
                $query = "INSERT INTO users(name, username, email, pwd) VALUES(:name, :username, :email, :pwd);";
                $stmt = $pdo->prepare($query);
                $stmt ->bindParam(":email", $email);
                $stmt-> bindParam(":username", $username);
                $stmt -> bindParam(":pwd", $pwdHashed);
                $stmt -> bindParam(":name", $name);
                $stmt -> execute();
            $pdo= null;
            $stmt = null;  

            // header("Location: ../index.php");
            die();        
    } catch (PDOException $e) {
          die("Query failed". $e->getMessage());
    }
}
else{
    header('Location: ../index.php');

}