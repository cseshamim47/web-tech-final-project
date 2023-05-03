<?php 
    $link = "https://blockchain.info/rawblock/".$_REQUEST['hash'];
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$link);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result = curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result,true);


    echo "Block Hash : ".$_REQUEST['hash'];
    echo "<br>Number of Trx : ".count($result['tx']); 
    echo "<br><h1><a href="."blockDetails.php".">Back</a></h1><br><br>";


    echo "<pre>";
    print_r($result);

?>