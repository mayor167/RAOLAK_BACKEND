<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = htmlspecialchars($_POST['name']);
    $username = htmlspecialchars($_POST['username']);
    $pwd = htmlspecialchars($_POST['pwd']);
    $email = htmlspecialchars($_POST['email']);
    try {
            require_once "dbh.inc.php";
            
            //how to update database
            
                $query = "UPDATE users SET name = :name, username = :username, pwd = :pwd, email = :email WHERE id =5;";
                $stmt = $pdo->prepare($query);
                $stmt ->bindParam(":username", $username);
                $stmt-> bindParam(":email", $email);
                $stmt -> bindParam(":pwd", $pwd);
                $stmt -> bindParam(":name", $name);
                $stmt -> execute();
            $pdo= null;
            $stmt = null;  
            header("Location: ../index.php");
            die();        
    } catch (PDOException $e) {
          die("Query failed". $e->getMessage());
    }
}
else{
    header('Location: ../index.php');

}