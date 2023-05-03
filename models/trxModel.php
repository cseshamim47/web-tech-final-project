<?php 

    require_once('db.php');

    function addTrx($sender,$receiver,$amount)
    {
        $con = getConnection();
        $trxId = 'trx'.time(); 
        $query = "INSERT INTO transaction(trxId, sender, receiver, amount) VALUES ('{$trxId}','{$sender}','{$receiver}','{$amount}')";

        $result = mysqli_query($con,$query);

        return $result;
    }

    function getReceivedTrx($receiver)
    {
        $con = getConnection();
        $query = "select * from transaction where receiver='{$receiver}'";
        $result = mysqli_query($con,$query);
        return $result;
    }

    function getSentTrx($sender)
    {
        $con = getConnection();
        $query = "select * from transaction where sender='{$sender}'";
        $result = mysqli_query($con,$query);
        return $result;
    }

    // addTrx('shamim','shakil',123);

?>