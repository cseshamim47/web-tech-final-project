<?php 
    $data = $_POST['data'];
    $user = json_decode($data);
    $usrename = $user->username;
    $name = $user->name;
    $email = $user->email;
    $gender = $user->gender;
    $dob = $user->dob;

    require_once('../models/userModel.php');
    $update = updateUser($name,$email,$usrename,'',$gender,$dob,'');

    if($update)
    {
        echo "Information Updated Successfully!";
    }else
    {
        echo "Something Went Wrong!";
    }
    
?>