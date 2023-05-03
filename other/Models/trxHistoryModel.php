<?php

 function getTransactions($from_date, $to_date) {
    $con = getConnection();    
    $sql = "SELECT * FROM Transaction WHERE trx_date BETWEEN '$from_date' AND '$to_date'";
    $result = mysqli_query($con, $sql);

    $transactions = array();

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $transaction = array(
                "email" => $row["email"],
                "trx_date" => $row["trx_date"],
                "trx_amount" => $row["trx_amount"],
                "trx_name" => $row["trx_name"]
            );
            array_push($transactions, $transaction);
        }
    }

    mysqli_close($con);

    return $transactions;
}
    ?>