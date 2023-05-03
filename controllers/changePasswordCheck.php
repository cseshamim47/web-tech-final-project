<?php
    session_start();
    $allFieldsFilled = true;
    foreach ($_REQUEST as $key => $value) {
        if (!isset($_REQUEST[$key]) or empty($value)) {
            $allFieldsFilled = false;
            break;
        }
    }
    if(!($allFieldsFilled && isset($_REQUEST['submit']) && $_REQUEST['currentPassword'] == $_SESSION['#password'] && $_REQUEST['password'] == $_REQUEST['confirmNewPassword']))
    {
        header('Location: ../views/user/changePassword.php?error');
    }else if(!preg_match('/^(?=.*[A-Z])(?=.*[\W])(?=.{5,})/', $_REQUEST['password']))
    {
        header('Location: ../views/user/changePassword.php?weak');
    }else{
        $_SESSION['#password'] = $_REQUEST['password'];
        $_SESSION['pwChangeStatus'] = true;
        // include 'updateFile.php';
        require_once('../models/userModel.php');
        // print_r($_SESSION);
        $row = updateUser($_SESSION['#name'],$_SESSION['#email'],$_SESSION['#username'],$_SESSION['#password'],$_SESSION['#gender'],$_SESSION['#dob'],$_SESSION['#profilePicture']);
        
        // print_r($row);
        header('Location: ../views/user/changePassword.php?done');
    }
    
?>