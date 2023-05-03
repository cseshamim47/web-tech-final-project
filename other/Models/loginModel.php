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
        
        if(true){
            $_SESSION['flag'] = 'true';

    }
}
    ?>