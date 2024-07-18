<?php
    $sensitiveData = "Adeniji 1@";
    $salt = bin2hex(random_bytes(16)); // generate random salt
    $pepper = "YouCan'tCrackThisPasswordForget";
    $hashData = $sensitiveData.$salt.$pepper;
    $hash = hash("sha256", $hashData );
    echo "$salt <br>";
    echo "$hash <br>";
    /*Testing password validation */
    $inputSensitiveData = "Adeniji 1@";
    $storeSalt = $salt;
    $pepper = "YouCan'tCrackThisPasswordForget";
    $Storehash = $hash;
    $dataToHash = $inputSensitiveData.$storeSalt.$pepper;
    $verificationHash = hash("sha256", $dataToHash);
    echo "$verificationHash <br>";
    if ($verificationHash === $hash){
            echo "Password is correct";
    }
    else{
        echo "Incorrect Password";
    }
   

?>