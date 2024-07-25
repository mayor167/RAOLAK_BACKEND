<?php
class Signup extends Dbh{
    private $name;
private $username;
private $email;
private $pwd;
private $option =[
    'cost'=>12
];

public function __construct($name, $username, $email, $pwd){
            $this->username = $username;
            $this ->pwd = $pwd;
            $this ->email = $email;
            $this ->name = $name;
            // $this ->option = $option;
}
private function hashPwd(){
    return password_hash($this->pwd, PASSWORD_BCRYPT, $this->option);
}

private function insertUser(){
    $hashedPwd = $this->hashPwd();
    $query = "INSERT INTO users (`name`,`username`,`email`,`pwd`) VALUES (:name,:username, :email,:pwd);";
    $stmt = $this->connect()->prepare($query);
    $stmt -> bindParam(":name", $this->name);
    $stmt ->bindParam(":username", $this->username);
    $stmt -> bindParam(":email", $this->email);
    $stmt ->bindParam(":pwd", $hashedPwd);
    $stmt ->execute();
}

private function isEmptySubmit(){
    if (isset($this-> username) && isset($this->pwd)){
                return false;
    }
    else{
        return true;
    }
}
private function CheckUsernameRegistered(){
    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $this->connect()->prepare($query);
    $stmt ->bindParam(":username", $this->username);
    $stmt -> execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
   // echo $result;
}
private function usernameRegistered(){
    if (($this->CheckUsernameRegistered())){
            return true;
    }
    else{
        echo "user signup successfully";
        return false;
    }
}
public function signupUser(){
    if($this-> isEmptySubmit()){
        header('Location: ../index.php');
        die();
    }
    if($this->usernameRegistered()){
        header('Location: ../index.php');
        die();
    }
        $this-> insertUser();
    
}

}