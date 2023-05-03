<?php 
    $link = "https://api.blockchair.com/bitcoin/dashboards/transaction/".$_REQUEST['hash']."?omni=true&privacy-o-meter=true";
    // $ch = curl_init();
    // curl_setopt($ch,CURLOPT_URL,$link);
    // curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    // $result = curl_exec($ch);
    // curl_close($ch);
    // $result=json_decode($result,true);

    $url = $link;
    $json_data = file_get_contents($url);
    $data = json_decode($json_data, true);
    $result = $data;
    echo "Transaction Hash : ".$_REQUEST['hash'];
    echo "<br><h1><a href="."blockDetails.php".">Back</a></h1><br><br>";


    echo "<pre>";
    print_r($result);

?>