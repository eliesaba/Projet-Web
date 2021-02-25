<?php
    session_start();
    session_unset();
    session_destroy();
    
//    if (isset($_COOKIE["email"])){
//	setcookie("email", '', time() - (3600));
//    }
    header("Location:index.php");
?>