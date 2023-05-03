<?php include '../../repeat/activity.php';?>
<html>
<head>
    <title>Latest Transactions</title>
    <link rel="stylesheet" href="../../style.css">

</head>
<body>
<table border="0" width=100%>
        <tr height="100px">
            <th width=20%>
                <a href="../../user/home.php">
                    <img src="../../../includes/btc.png" alt="logo" width="200px">
                </a>
            </th>
            <th align="middle">
                
            </th>
            <th width=20%>
                Logged in as <a href="../dashboard.php"> <?php echo $_SESSION['#username']  ?></a> |
                <a href="logout.php">Logout</a> 
            </th>
</tr>
<tr height=100px>
            <td>
                <table width=100%>
                    <tr>
                        <th><h2>Prices</h2></th>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td width=70%></td>
                                    <td><a href="../explorer.php">Back</a></td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

            </td>
            <td colspan="2"></td>
        </tr>

        <tr height=400px>
            <td width=20%>
                <table width=100%>
                    <tr>
                        <th><h2>Latest Transactions</h2></th>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td width=70%></td>
                                    <td><a href="../explorer.php">Back</a></td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="2">
                <form action="latestTransaction.php" method="post">
                    <fieldset>
                        <legend>Latest Transactions</legend>
                        <table border="1" width = 100%>
                            <tr>
                                <th>Hash</th>
                                <th>Block</th>
                                <th>Time</th>
                                <th>Output(USD)</th>
                                <th>Transaction Fee(USD)</th>
                            </tr>
                        <?php 
                            
                            $link = "https://api.blockchair.com/bitcoin/transactions?s=time(desc)&limit=100";
                            $url = $link;
                            $json_data = file_get_contents($url);
                            $data = json_decode($json_data, true);
                            // $ch = curl_init();
                            // curl_setopt($ch,CURLOPT_URL,$link);
                            // curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            // $result = curl_exec($ch);
                            // curl_close($ch);
                            // $result=json_decode($result,true);
                            $result = $data;
                            if(isset($result['data']))
                            {

                                foreach($result['data'] as $i)
                                {
                                    echo "<tr>";
                                    echo "<td><a href=singleTransactionDetails.php?hash=".$i['hash'].">".$i['hash']."</a></td>";
                                    echo "<td>".$i['block_id']."</td>";
                                    $time = strtotime($i['time'])+21600;
                                    $time = date('d-m-Y h:i:m',$time);
                                    echo "<td>".$time."</td>";
                                    echo "<td>".$i['output_total_usd']."</td>";
                                    echo "<td>".$i['fee_usd']."</td>";
                                    echo "</tr>";
                                }
                            }else echo "api is currently not working!";
                            
                            // echo "<pre>";
                            // print_r($result);
                        
                        ?>

                        
                        </table>
                    </fieldset>
                </form>

            </td>
        </tr>
        
        <tr height="80px">
            <td colspan="3" align="center">
                <p>copyright © 2023</p>
            </td>
        </tr>
    </table>
</body>
</html>

