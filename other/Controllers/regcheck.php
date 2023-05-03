<?php 
    session_start();
    require_once '../models/userModel.php';

    if(isset($_REQUEST['register'])){

        $name = $_REQUEST['name']; 
        $email = $_REQUEST['email'];
        $gender= $_REQUEST['gender'];
        $dob = $_REQUEST['dob'];
        $password = $_REQUEST['password']; 
        $confirm_password = $_REQUEST['confirm_password']; 
        $user_type = $_REQUEST['user_type'];




        if($name == "" && $password == "" && $email == "" && $gender == "" && $dob == "" && $confirm_password == "" && $user_type == "") {
            echo "Null value ..";
        }else{
            $user = ['name'=>$name,'email'=>$email,'gender'=>$gender,'dob'=>$dob,'password'=>$password,'confirm_password'=>$confirm_password,'user_type'=>$user_type];
            $status = addUser($user);
            
            if($status){
                header('location: ../views/login.php');
            }else{
                echo "DB error, please try again...";
            }

        }
    }else{
        echo "invalid request...";
    }
?>
