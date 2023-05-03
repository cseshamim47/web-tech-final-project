<?php 

    $username = $_GET['username'];

    require_once('../models/userModel.php');

    $row = seeByUsername($username);
    $data = json_encode($row);
   
    echo $data;
    

   
?>


                               