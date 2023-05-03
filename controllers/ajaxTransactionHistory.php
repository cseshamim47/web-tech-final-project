<?php 
    session_start();
    $select = $_POST['select'];
    if($select == 'received')
    {
        require_once('../models/trxModel.php');
        $result = getReceivedTrx($_SESSION['#username']);
        echo '<b>Received Transactions</b>';
        echo '<table border="1" width=100%>';
        echo '<tr>';
        echo '<th>Trx Id</th>';
        echo '<th>From</th>';
        echo '<th>Amount</th>';
        echo '<th>Time</th>';
        echo '</tr>';

        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['trxId']."</td>";
            echo "<td>".$row['sender']."</td>";
            echo "<td>".$row['amount']."</td>";
            echo "<td>".$row['time']."</td>";
            echo "</tr>";
        }

    }else
    {
        require_once('../models/trxModel.php');
        $result = getSentTrx($_SESSION['#username']);
        echo '<b>Sent Transactions</b>';
        echo '<table border="1" width=100%>';
        echo '<tr>';
        echo '<th>Trx Id</th>';
        echo '<th>Sent To</th>';
        echo '<th>Amount</th>';
        echo '<th>Time</th>';
        echo '</tr>';

        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['trxId']."</td>";
            echo "<td>".$row['receiver']."</td>";
            echo "<td>".$row['amount']."</td>";
            echo "<td>".$row['time']."</td>";
            echo "</tr>";
        }
    }
?>