<?php
    session_start();
    if(isset($_REQUEST['submit']))
    {
        require_once('../models/userModel.php');
        // print_r($_REQUEST);
        if($_REQUEST['username'] == 'admin' && $_REQUEST['password'] == 'admin')
        {
            header('location: ../views/admin/admin.php');
            exit;
        }
        $row = seeByUsername($_REQUEST['username']);
        if(isset($row['password']) && $row['password'] == $_REQUEST['password'])
        {
            setcookie('username', $_REQUEST['username'], time()+12312312, '/');
            setcookie('lastSeen', time(), time()+12312312, '/');
            $_SESSION['#username'] = $row['username'];
            $_SESSION['#name'] = $row['name'];
            $_SESSION['#email'] = $row['email'];
            $_SESSION['#dob'] = $row['dob'];
            $_SESSION['#profilePicture'] = $row['profilePicture'];
            $_SESSION['#gender'] = $row['gender'];
            $_SESSION['#password'] = $row['password'];
            
            if(isset($_REQUEST['rememberMe']))
            {
                setcookie('rememberMe', 'true', time()+12312312, '/');
            }

            unset($_SESSION['upw']);
            unset($_SESSION['lusername']);
            header('location: ../views/user/dashboard.php');
            exit;
        }else 
        {
            header('location: ../views/auth/login.php?error');
        }
        // $file = fopen('../db/user.txt', 'r');
            
        // while(!feof($file)){
        //     $data = fgets($file);
        //     $user = explode('|', $data);
        //     if(count($user) > 2 && $_REQUEST['username'] == trim($user[2]) && $_REQUEST['password']  == trim($user[3])){
                // setcookie('username', $_REQUEST['username'], time()+12312312, '/');
                // setcookie('lastSeen', time(), time()+12312312, '/');
                // $_SESSION['#username'] = $user[2];
                // $_SESSION['#name'] = $user[0];
                // $_SESSION['#email'] = $user[1];
                // $_SESSION['#dob'] = $user[5];
                // $_SESSION['#profilePicture'] = $user[6];
                // $_SESSION['#gender'] = $user[4];
                // $_SESSION['#password'] = $user[3];
                // $_SESSION['#code'] = $user[7];
                
                // if(isset($_REQUEST['rememberMe']))
                // {
                //     setcookie('rememberMe', 'true', time()+12312312, '/');
                // }

                // unset($_SESSION['upw']);
                // unset($_SESSION['lusername']);
                // header('location: ../user/dashboard.php');
                // exit;
        //     }
        // }

        // header('location: login.php?error');
        
    }else 
    {
        unset($_SESSION['rememberMe']);
        $_SESSION['upw'] = true; // true = username or password wrong
        $_SESSION['lusername'] = $_REQUEST['username']; // saving username for retainment
        header('Location: ../views/auth/login.php');
    }

?>