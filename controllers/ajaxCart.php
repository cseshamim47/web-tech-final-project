<?php 
    require_once('../models/userModel.php');
    session_start();

    $x = $_POST['data'];
    $data = json_decode($x);
    $balance =  $data->balance;
    $due =  $data->due;
    $pin =  $data->pin;

    if($_SESSION['#password'] != $pin || empty($pin))
    {
        echo "pin does not match!";
    }else if($due > $balance) 
    {
        echo "Insufficient Balance!";
    }else 
    {
        updateBalance($_SESSION['#username'],-$due);
        echo "Payment Successful!";
    }
?>