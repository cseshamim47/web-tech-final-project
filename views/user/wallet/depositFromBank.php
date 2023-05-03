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
                    <img src='../../../includes/btc.png' alt="logo" width="200px">

                </a>
            </th>
            <th align="middle">

            </th>
            <th width=20%>
                Logged in as <a href="dashboard.php"> <?php echo $_SESSION['#username']  ?></a> |
                <a href=<?php
                        echo isset($_SESSION['#logoutPath']) ? $_SESSION['#logoutPath'] : 'logout.php';
                        unset($_SESSION['#logoutPath']);
                        ?>>Logout</a>
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
                    <legend>
                        <h3>Deposit money</h3>
                    </legend>
                    <form action="unconfirmedTransactions.php" method="get">
                        <input id="username" class="edit" type="text" name="username" value="" placeholder="Enter Username"> <br> <br>
                        <input id="pin" class="edit" type="password" name="pin" value="" placeholder="Enter pin"> <br> <br>
                        <input onkeyup="checkAmount()" id="amount" class="edit" type="int" name="amount" value="" placeholder="Enter Amount"> <br> <br>
                        <input onclick="ajax()" class="btn" type="button" name="submit" value="submit">
                    </form>

                    <h3 id="amountAlert" class="alert"></h3>
            </td>
        </tr>

        <script>
            let ok = false;
            function checkAmount()
            {
                let x = document.getElementById('amount').value;
                if(x <= 0 || isNaN(x))
                {
                    ok = false;
                    document.getElementById('amountAlert').innerHTML = 'Amount must be positive number';
                }else
                {
                    ok = true;
                    document.getElementById('amountAlert').innerHTML = '';
                }
            }

            function ajax()
            {
                let username = document.getElementById('username').value;
                let pin = document.getElementById('pin').value;
                let amount = document.getElementById('amount').value;
                console.log(username.length);
                console.log(pin.length);
                if(username.length > 0 && pin.length > 0 && ok)
                {
                    let json = {'username': username, 'pin': pin, 'amount': amount};
                    let data = JSON.stringify(json);

                    let xhttp = new XMLHttpRequest();
                    xhttp.open('post', '../../../controllers/bank.php', true);
                    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhttp.send('data='+data);

                    xhttp.onreadystatechange = function(){
                        
                        if(this.readyState == 4 && this.status == 200){
                            
                            alert(this.responseText);
                        }
                    }
                }
            }
        </script>

        <?php
        include '../../Repeat/footer.php';
        ?>
    </table>
</body>

</html>