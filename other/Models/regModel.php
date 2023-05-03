<?php
function addUser($user){
        $con = getConnection();
        $sql = "insert into Users values('{$user['name']}', '{$user['email']}', '{$user['gender']}', '{$user['dob']}','{$user['password']}','{$user['confirm_password']}','{$user['user_type']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    ?>