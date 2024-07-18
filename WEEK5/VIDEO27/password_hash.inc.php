<?php
        $pwd = "Adeniji 1@";
        $cost =[
            'cost' => 10,
        ];
        $pwdHashed = password_hash($pwd, PASSWORD_BCRYPT, $cost);
        //echo $pwdHashed;
        // verification process while login 

        $loginPwd = "Adeniji 1@1";
           if (password_verify($loginPwd, $pwdHashed)) {
                    echo "Password is correct";
            }
            else{
                echo "Password is incorrect";
            }
?>