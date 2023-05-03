<?php
function getUserType($email, $user_type){
        $con = getConnection();
        $sql = "SELECT user_type FROM Users WHERE email='$email' AND user_type='$user_type'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
    
        if($count == 1){
            $row = mysqli_fetch_assoc($result);
            return $row['user_type'];
        } else {
            return false;
        }

        // if(true){ // Verify hashed password
        //     $_SESSION['flag'] = 'true';
        //     $_SESSION['email'] = $email;
        //     $_SESSION['user_type'] = $user_type;

        // }
    }
    ?>