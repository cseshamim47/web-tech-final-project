<?php

    require_once('../models/userModel.php');

    if(isset($_REQUEST['search'])){
        $email = $_REQUEST['email'];
        $user = searchUser($email);

        if(is_array($user)){
            // display user data
            echo "<h2>User details:</h2>";
            echo "<p>Name: " . $user['name'] . "</p>";
            echo "<p>Email: " . $user['email'] . "</p>";
            echo "<p>Gender: " . $user['gender'] . "</p>";
            echo "<p>Date of Birth: " . $user['dob'] . "</p>";
        }else{
            // display error message
            echo "<h2>Error:</h2>";
            echo "<p>" . $user . "</p>";
        }
    }
?>