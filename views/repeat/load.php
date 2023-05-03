<?php 
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
?>