<?php
declare(strict_types =1);
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
#require_once 'signup.inc.php';
require_once 'config_session.inc.php';
function check_signup_errors(){
 if (isset($_SESSION['errors_signup'])){
            $errors =  $_SESSION['errors_signup'];
                echo "<br>";
                foreach($errors as $error){
                        echo '<p style ="color:red;">'.$error.'</p>';
                }
            unset($_SESSION['errors_signup']);
 }
}