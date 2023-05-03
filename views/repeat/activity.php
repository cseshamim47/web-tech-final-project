<?php
    if(!isset($_SESSION)){session_start();}
    // print_r($_COOKIE);
    // print_r($_SESSION);
   if(isset($_COOKIE['rememberMe']) && isset($_COOKIE['username']) && !isset($_SESSION['#username']))
    {
        echo "shamim";
        require_once('../../models/userModel.php');
        $row = seeByUsername($_COOKIE['username']);
        $_SESSION['#username'] = $row['username'];
        $_SESSION['#name'] = $row['name'];
        $_SESSION['#email'] = $row['email'];
        $_SESSION['#dob'] = $row['dob'];
        $_SESSION['#profilePicture'] = $row['profilePicture'];
        $_SESSION['#gender'] = $row['gender'];
        $_SESSION['#password'] = $row['password'];
        $_SESSION['#balance'] = $row['balance'];
        // setcookie('lastSeen', time(), time()+12312312, '/');
        header('location: ../user/dashboard.php');
        exit;
    }
    else if(!isset($_SESSION['#username']))
    {
        $_SESSION['activity'] = true;
        header('Location: ../auth/login.php');
        exit;
    }
    
    // print_r($_SESSION);
?>