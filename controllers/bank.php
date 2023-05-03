<?php 
    $data = $_POST['data'];
    $decodeData = json_decode($data);

    $username = $decodeData->username;
    $amount = $decodeData->amount;
    $pin = $decodeData->pin;
    require_once('../models/bankModel.php');
    require_once('../models/trxModel.php');
    $result = deposit($username,$pin,$amount);

    if(!$result)
    {
        echo "Invalid user/pin/amount";
    }else
    {
        addTrx('Bank',$username,$amount);
        echo "Desposit Successful";
    }
?>