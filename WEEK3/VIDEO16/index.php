<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database in MYSQL</title>
</head>
<body>
    <?php
    /*
    I actually learnt the following below here

    1. setting up of database, phpMyAdmin by launching localhost/phpMyAdmin in my browser url space

    2. learnt how to create database

    3. I was shown how to create table on phpMyAdmin dashboard and how to manually create it using mySQL codes
    Note that, MySQL is a relational database management system(RDBMS)
    */

    function connect_to_database () {
        $con = mysqli_connect('localhost', 'root', '', 'raolak_school');
        if ($con) {
            echo 'connected to DB'; return $con;
        }
        return false;
    }

    $con = connect_to_database();
    
    $sql= "CREATE TABLE users_two (id INT NOT NULL PRIMARY KEY,
    username varchar(100), password varchar(200), created_at datetime NOT NULL default now())";

   $query =  $con != false ? mysqli_query($con, $sql) : 'cannot carry out operation';
    
    ?>
</body>
</html>