<?php
Session_start();

require_once('../models/userModel.php');

    $email = $_SESSION['email'];
    $lastfive=lastfive($email);

    if(is_array($lastfive)){
        echo "<h2>Last Five Transactions</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Date</th><th>Description</th><th>Amount</th><th>Path</th></tr>";
        while($row = mysqli_fetch_assoc($lastfive)) {
            echo "<tr><td>".$row['trx_name']."</td><td>".$row['trx_date']."</td><td>".$row['trx_amount']."</td><td>".$row['trx_type']."</td></tr>";
        }
        echo "</table>";
    
    }else{
        // display error message
        echo "<h2>Error:</h2>";
    }
    

?>


<!-- <button onclick="location.href='User.php'">Home</button>
<button onclick="location.href='TransactionHistory.php'">Back</button> -->
