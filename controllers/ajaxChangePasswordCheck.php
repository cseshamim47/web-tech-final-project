<?php
    $data = $_POST['data'];
    $user = json_decode($data);
    // echo $user->np;
    $cp = $user->cp;
    $np = $user->np;
    $username = $user->username;

    require_once('../models/userModel.php');
    $row = seeByUsername($username);
    if($row['password'] == $cp && !empty($np))
    {
        updatePassword($username,$np);
        echo "Password Successfully changed!";
    }else
    {
        echo "something went wrong please try again!";
    }
    // print_r($user);
    // $user = ['username'=>'alamin', 'password'=>'123', 'email'=>'alamin@aiub.edu'];
    // $data = json_encode($user);

    // echo "shamim from ajax";

    // echo $data;
?>