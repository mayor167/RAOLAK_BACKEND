<?php
//starting session and securing it against attacks
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

// setting session paramters
session_set_cookie_params(
    [
        'secure' => true,
        'httponly' =>true,
        'domain' => 'localhost',
        'path' => '/',
        'lifetime' => 1800
    ]
);
session_start();
//setting session id intervally
if (!isset($_SESSION['last_regeneration'])){
            session_regenerate_id();
           // echo (session_regenerate_id());
            $_SESSION['last_regeneration'] = time();
}
else{
    $interval = 60 * 30;
    if (time() - $_SESSION['last_regeneration'] >= $interval){
                    session_regenerate_id();
                    $_SESSION['last_regeneration'] = time();
    }
}
    