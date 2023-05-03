<?php 
// session_start();
include '../../repeat/activity.php';
    $_SESSION['#imagePath'] = '../../includes/btc.png';
    $_SESSION['#logoutPath'] = '../logout.php';
    $_SESSION['#menuPath'] = '../';
// print_r($_SESSION);
?>

<html>
<head>
    <title>Wallet</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <table border="0" width=100%>
        <tr height="100px">
            <th width=20%>
                <a href="../user/home.php">
                    <img src='../../../includes/btc.png'  alt="logo" width="200px">
                   
                </a>
            </th>
            <th align="middle">
                
            </th>
            <th width=20%>
                Logged in as <a href="dashboard.php"> <?php echo $_SESSION['#username']  ?></a> |
                <a href=
                <?php 
                    echo isset($_SESSION['#logoutPath']) ? $_SESSION['#logoutPath'] : 'logout.php';
                    unset($_SESSION['#logoutPath']);
                ?>
                >Logout</a> 
            </th>
        </tr>
        <?php 
            // include '../../repeat/headerUser.php';
            $_SESSION['#tabname'] = 'Wallet';
            $_SESSION['#back'] = '../wallet.php';
            include '../../repeat/back.php';

        ?>
    
        <tr>
            <td width=20%></td>
            <td colspan="2">
                <fieldset>
                    <legend><h3>Transaction History</h3></legend>
                    <form action="transactionHistory.php" method="get">
                    <select name="filter" id="filter" > 
                        <option value="received">Received</option>
                        <option value="sent">Sent</option>
                    </select>
                    </form>
                    <div id="tableContainer"></div>
                    
                </fieldset>

            </td>
        </tr>
        
        <?php 
            include '../../Repeat/footer.php';
        ?>
    </table>


    <script>
        var filterSelect = document.getElementById("filter");
        var selectedValue = 'received';
        filterSelect.addEventListener("change", function() {
        selectedValue = filterSelect.options[filterSelect.selectedIndex].value;
            f();
        // console.log("Selected filter: " + selectedValue);
        });

        function f()
        {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "../../../controllers/ajaxTransactionHistory.php");
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send('select='+selectedValue);
            
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // alert(this.responseText);
                    var tableHtml = xhr.responseText;
                    document.getElementById("tableContainer").innerHTML = tableHtml;
                }
            };

        }
        f();
    </script>
</body>
</html>