<?php 
include '../repeat/activity.php';
require_once('../repeat/load.php');
// print_r($_SESSION);
// print_r($_SERVER['HTTP_REFERER']);
// echo "<br>".$_SESSION['#menuPath'];
?>

<html>
<head>
    <title>Wallet</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        include '../repeat/headerUser.php';
    ?>

        <tr>
            <td width=20%>
                <table width=100%>
                    <tr>
                        <th><h2>Wallet</h2></th>
                    </tr>
                    <tr>
                        <td>
                            <?php 
                                $_SESSION['#menuPath'] = '';
                                include '../repeat/userMenuLink.php';
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="2">
                <fieldset>
                    <legend><h3>Wallet</h3></legend>
                    <table border="0" width=100%>
                        <tr>
                            <td width=20%>Current Balance</td>
                            <td width=30%>
                            <b>
                                <?php 
                                    // print_r($_SESSION);
                                    echo $_SESSION['#balance']." BTC";
                                ?>
                            </b>
                            </td>
                            <td width=40%></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>Transaction History</td>
                            <td>
                                <a href="wallet/transactionHistory.php">click to view</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>Deposit From Bank</td>
                            <td>
                                <a href="wallet/depositFromBank.php">click here</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>Transfer Money</td>
                            <td>
                                <a href="wallet/transferMoney.php">click here</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
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