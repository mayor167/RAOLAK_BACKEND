<?php
//how to connect to a database
$con = "mysql:localhost;dbname=myfirstdatabase"; 
$dbusername = "root";
$dbpassword = ""; //for mac, set as root

try {
    $con = new PDO($con, $dbusername, $dbpassword);
    $con-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed". $e->getMessage();
}