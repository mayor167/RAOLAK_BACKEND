<?php
ini_set("session.use_cookies", 1);
ini_set("session.use_only_cookies", 1);
session_set_cookie_params(
    [
        'httponly' => true,
        'lifetime' => 1800,
        'path' => '/',
        'secure' => true,
        'domain' => 'localhost'
    ]
);
session_start();
// logic to generate session id periodically for security purpose 
//$interval = 60 * 30;
if (!isset($_SESSION['last_regeneration'])){
            session_regenerate_id();
            $_SESSION['last_regeneration'] = time();
}
else if(time() - $_SESSION['last_regeneration'] >=$interval){
    session_regenerate_id();
    $_SESSION['last_regeneration'] = time();
}