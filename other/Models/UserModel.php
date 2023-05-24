<?php 
    require_once('db.php');

    function auth($email, $password){

        $con = getConnection();
        $sql = "SELECT * FROM Users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }
        else
        {
            return false;
        }
    }
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
    }

    function addUser($user){
        $con = getConnection();
        $sql = "insert into Users (name , email , gender , password , confirm_password, user_type) values('{$user['name']}', '{$user['email']}', '{$user['gender']}', '{$user['password']}','{$user['confirm_password']}','{$user['user_type']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function searchUser($email){

        $con = getConnection();
        $sql = "SELECT * FROM Users WHERE email = '$email'";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0){
            // Fetch the data from the result set
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

            return $row;
        }else{
   
            return "No results found";
        }
    }

        function DeleteUser($email){

            $con = getConnection();
            $sql = "Delete * FROM Users WHERE email = '$email'";
            $result = mysqli_query($con, $sql);
    
            if(mysqli_num_rows($result)){
                // Fetch the data from the result set
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
                return $row;
            }else{
       
                return "No results found";
            }

        }
  

    
    
    
    
    

        
    
    
?>