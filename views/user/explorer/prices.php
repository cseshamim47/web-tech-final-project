<?php include '../../repeat/activity.php';?>
<html>
<head>
    <title>Prices</title>
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
        <tr>
            <td width=20%></td>
            <td colspan="2">
                <fieldset>
                    <legend>Prices</legend>
                    <?php 
                        $key = "8ce2678032fd91f1ef6b20bc8375310a";
                        $link = "http://api.coinlayer.com/live?access_key=".$key;
                      
                        $ch = curl_init();
                        curl_setopt($ch,CURLOPT_URL,$link);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        $result = curl_exec($ch);
                        curl_close($ch);
                        $result=json_decode($result,true);
                        $time = date('d-m-Y h:i:s',$result['timestamp']+18000);
                        echo "<b>Time : ". $time . "</b><br>";
                        echo "<table border='1'>"; 
                        echo "<tr> <th> Currency[1]</th>";
                        echo "<th> Price[USD] </th> </tr>";
                        foreach($result['rates'] as $coin=>$value)
                        {
                            echo "<tr>";
                            echo "<td>".$coin."</td>";
                            echo "<td>".$value."</td>";
                            echo "</tr>";

                        }
                        echo "</table>";
                    ?>
                </fieldset>

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

