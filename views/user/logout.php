<?php
    session_start();
    
    unset($_COOKIE['rememberMe']);
    unset($_COOKIE['username']);
    unset($_COOKIE['lastSeen']);
    setcookie('rememberMe', '', time()-600, '/');
    setcookie('username', '', time()-600, '/');
    setcookie('lastSeen', '', time()-12300, '/');
    $_SESSION=[];
    header('Location: ../auth/login.php');
?>