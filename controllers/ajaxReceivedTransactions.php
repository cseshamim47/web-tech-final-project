<?php 
    require_once('../models/trxModel.php');
    $result = getReceivedTrx('shakil');
?>
<b>Received Transactions</b>
<table border="1" width=100%>
    <tr>
        <th>Trx Id</th>
        <th>From</th>
        <th>Amount</th>
        <th>Time</th>

    </tr>

    <?php while($row = mysqli_fetch_assoc($result)){?>
    <tr>
        <td><?php echo $row['trxId'] ?></td>
        <td><?php echo $row['sender'] ?></td>
        <td><?php echo $row['amount'] ?></td>
        <td><?php echo $row['time'] ?></td>
    </tr>
    <?php 
    }
    ?>

    
</table>