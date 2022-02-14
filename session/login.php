<?php
    session_start();

    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(), "", time() - 3600,'/login.php');
        

    }
    $_SESSION[] = array();

    session_destroy();

?>
 <p>Welcome to my website</p>