<?php
class Dbh{
    private $con= "mysql:host=localhost;dbname=myfirstdatabase";
   //private $host = "localhost";
  // private $dbname = "myfirstdatabase";
   private $dbusername = "root";
   private $dbpwd = "";

  protected function connect(){
        try {
            $pdo = new PDO($this->con, $this->dbusername, $this->dbpwd);
            $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e ) {
        die("connection failed:". $e->getMessage());
        }
  }
}