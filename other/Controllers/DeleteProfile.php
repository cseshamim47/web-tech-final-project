<?php
    session_start();

    require_once('../models/userModel.php');

    

    if(isset($_REQUEST['submit'])){
        $email = $_REQUEST['email'];
        deleteUser($email);
    }
?>