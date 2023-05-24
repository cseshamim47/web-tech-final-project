<?php


require_once('db.php');

  
function lastfive($email){
    $con = getConnection();
    $sql = "SELECT * FROM transaction ORDER BY date DESC LIMIT 5 WHERE email='$email'";
    $result = mysqli_query($con, $sql);

// Display the last five transactions in a table
if(mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
return $row;

} else {
return "<p>No transactions found.</p>";}
}


function trxfunction($trx){
    $con = getConnection();
    $sql = "insert into Transaction (email , trx_name , trx_date , trx_type , trx_amount) values('{$trx['email']}', '{$trx['trx_name']}', '{$trx['trx_date']}', '{$trx['trx_type']}','{$trx['trx_amount']}')";
    $status = mysqli_query($con, $sql);
    return $status;
}

function searchhistory($email, $trx_type){
    $con = getConnection();
    $sql = "SELECT * FROM Transaction WHERE email='$email' AND trx_type='$trx_type'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        $row = mysqli_fetch_assoc($result);
        return $row['user_type'];
    } else {
        return false;
    }
}


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
                "trx_type" => $row["trx_type"]
            );
            array_push($transactions, $transaction);
        }
    }

    mysqli_close($con);

    return $transactions;
}

function allTrx(){
    $con = getConnection();
    $sql = "SELECT * FROM Transaction ";
    $result = mysqli_query($con, $sql);
?>
<center>
<table border=1px>
   <th>
    <tr>   <td>ID</td>
    <td>Name</td>
    <td>Email</td>
    <td>Amount</td>
    <td>Type</td>
    <td>Date</td></tr>
 
   </th>
   <tbody>
<?php

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
?>

    <tr> <td><?php echo $row["id"] ?></td>
    <td><?php echo $row["trx_name"] ?></td>
    <td><?php echo $row["email"] ?></td>
    <td><?php echo $row["trx_amount"] ?></td>
    <td><?php echo $row["trx_type"] ?></td>
    <td><?php echo $row["trx_date"] ?></td></tr>
   

   
<?php    }
    } else {
      echo "0 results";
    }
?>
   </tbody>
</table></center>
<?php

    

}

?>