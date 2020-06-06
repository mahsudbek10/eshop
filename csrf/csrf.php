<?php
if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}

class Token{
    public static function generate(){
        $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(64));
        return $_SESSION['token'];
    }
    public static function check($param) {
        if ( isset($_SESSION['token']) && $param === $_SESSION['token']) {
            return true;
        } 
        return false;
    }
}
?>

