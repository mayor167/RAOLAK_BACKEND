<?php
        //var_dump($_SERVER['REQUEST_METHOD']);
        function getRegisterDetails(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $fullname = htmlspecialchars($_POST['fullname']);
                    $username = htmlspecialchars($_POST['username']);
                    $email = htmlspecialchars($_POST['email']);
                    $phoneNo = htmlspecialchars($_POST['phoneNo']);
                    $pwd = htmlspecialchars($_POST['pwd']);
                    if(empty($fullname) || empty($username) || empty($email) || empty($phoneNo) || empty($pwd) || empty($fullname) || strlen($fullname) > 50){
                           // header("Location: login.php");
                            echo"Make sure all fields are filled and Your <b>Full name is not more than 50 characters</b>";
                            exit();
                        }
                            // if(){
                            //     header("Location: ../login.php");
                            // }
            }
        }
        getRegisterDetails();
       
?>