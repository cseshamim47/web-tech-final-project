

<?php 
    session_start();

    require_once('../models/userModel.php');

    if(isset($_REQUEST['login'])){
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $user_type = $_REQUEST['user_type'];
        
    
        if($email == "" && $password == "" && $user_type == ""){
            echo "null data found...";
        } else {
            $status = auth($email, $password);
            if($status){
                $_SESSION['flag'] = 'true';
            $userType = getUserType($email, $user_type); 
            if($userType){ // Verify hashed password
                $_SESSION['flag'] = 'true';
                $_SESSION['email'] = $email;
                $_SESSION['user_type'] = $user_type;
                $_SESSION['name'] = $name;
                
                if (isset($_POST['remember']) && $_POST['remember'] === "on") {
                    setcookie("email", $email, time() + (86400 * 30), "/");
                } else {
                    setcookie("email", "", time() - 3600, "/");
                }
                if($user_type == 'admin'){
                    header('location: ../views/admin.php'); 
                } else {
                    header('location: ../views/user.php'); 
                }
            } else {
                echo "Invalid user";
            }
        }
    }
    } else {
        header('location: ../index.php');
    }
    
?>