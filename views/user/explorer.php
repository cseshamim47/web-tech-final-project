<?php include '../repeat/activity.php';?>
<html>
<head>
    <title>Explorer</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        include '../repeat/headerUser.php';
    ?>

        <tr height=400px>
            <td width=20%>
                <table width=100%>
                    <tr>
                        <th><h2>Explorer</h2></th>
                    </tr>
                    <tr>
                        <td>
                            <?php 
                                include '../repeat/userMenuLink.php';
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="2">
                <fieldset>
                    <legend>Explorer</legend>
                    <table border="1" width=100% height=300px>
                        <tr>
                            <td align='center'><a href="explorer/latestTransactions.php"><h1>Latest Transactions</h1></a></td>
                            <td align='center'><a href="explorer/blockDetails.php"><h1>Block Details</h1></a></td>
                        </tr>
                        <tr>
                            <td align='center'><a href="explorer/prices.php"><h1>Prices</h1></a></td>
                            <td align='center'><a href="explorer/conversion.php"><h1>Conversion</h1></a></td>
                        </tr>
                    </table>
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

