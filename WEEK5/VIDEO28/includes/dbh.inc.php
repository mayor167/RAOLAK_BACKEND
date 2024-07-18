<?php
//connecting to database myfirstdatabase

$con = "mysql:host=localhost;dbname=myfirstdatabase";
$dbusername = "root";
$dbpwd = "";
try {
        $pdo = new PDO($con, $dbusername, $dbpwd);
        $pdo -> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch (PDOException $e) {
    die("connection failed".$e -> getMessage());
}