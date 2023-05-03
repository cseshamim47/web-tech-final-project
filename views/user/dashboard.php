<?php 

    include '../repeat/activity.php';
    require_once('../repeat/load.php');
    $_SESSION['#menuPath'] = '';

?>
<html>
<head>
    <title>Dashboard</title>
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
                        <th><h2>Dashboard</h2></th>
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
                    <legend>Dashboard</legend>
                    <table border="0">
                        <tr>
                            <td width=50% height=20px>
                                <h2>Free your money and invest with confidence</h2>
                                <br>
                                <p>Buy and Sell Crypto in Minutes <br> Instantly buy Bitcoin with credit card, debit card, or by linking your bank.</p>
                                <p>The full-service Bitcoin Wallet trusted by millions</p>
                                <p>The full-service Bitcoin Wallet trusted by millions</p>
                                <p>The full-service Bitcoin Wallet trusted by millions</p>
                            
                            </td>
                            <td rowspan="3"><img src="../../includes/mobile_dashboard.png" alt="mobileDashboard" width="400px"></td>
                        </tr>
                        <tr>
                            <td height=20px></td>
                        </tr>
                        <tr>
                            <td height=20px></td>
                        </tr>

                        <tr>
                            <td rowspan="3"><img src="../../includes/chart_dashboard.png" alt="mobileDashboard" width="400px"></td>
                            <td width=50% height=20px>
                                <h2>Free your money and invest with confidence</h2>
                                <br>
                                <p>Buy and Sell Crypto in Minutes <br> Instantly buy Bitcoin with credit card, debit card, or by linking your bank.</p>
                                <p>The full-service Bitcoin Wallet trusted by millions</p>
                                <p>The full-service Bitcoin Wallet trusted by millions</p>
                                <p>The full-service Bitcoin Wallet trusted by millions</p>
                            
                            </td>
                        </tr>
                        <tr>
                            <td height=20px></td>
                        </tr>
                        <tr>
                            <td height=20px></td>
                        </tr>
                        
                    </table>
                </fieldset>

            </td>
        </tr>
        
        <?php 
            include '../repeat/footer.php';
        ?>
    </table>
</body>
</html>

