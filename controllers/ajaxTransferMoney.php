<?php 
// echo "shamim";
// exit;

    $data = $_POST['data'];
    $decodeData = json_decode($data);

    $username = $decodeData->username;
    $amount = $decodeData->amount;
    $pin = $decodeData->pin;
    $sender = $decodeData->sender;

    require_once('../models/userModel.php');
    require_once('../models/trxModel.php');
    $receiver = seeByUsername($username);

    if(empty($receiver))
    {
        echo "Invalid useranme";
    }else
    {
        $row = seeByUsername($sender);
        $senderAmount = $row['balance'];
        if($senderAmount < $amount)
        {
            echo "insuficient balance";
        }else 
        {
            // updating receiver info
            updateBalance($username,$amount);

            // updating sender info
            updateBalance($sender,-$amount);

            addTrx($sender,$username,$amount);
            echo "Money Successfully sent!!";
            // echo $senderAmount;
        }
    }
?>