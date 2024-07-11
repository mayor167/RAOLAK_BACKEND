<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $username = htmlspecialchars($_GET['usersearch']);
    try {
            require_once "../video23/includes/dbh.inc.php";
            
            //how to update database
            
                $query = "SELECT * FROM users WHERE username = :username";
                $stmt = $pdo->prepare($query);
                $stmt ->bindParam(":username", $username);
                $stmt->execute();
                $res = $stmt->fetch(PDO::FETCH_ASSOC);
            // $pdo= null;
            // $stmt = null; 
            var_dump($res); 
            // header("Location: ../index.php");
            die();        
    } catch (PDOException $e) {
          die("Query failed". $e->getMessage());
    }
}
else{
    header('Location: ./index.php');

}