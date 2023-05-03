<?php 
    require_once('db.php');
    require_once('userModel.php');

    function deposit($username, $pin, $amount)
    {

        $conn = getConnection();

        $query = "select * from bank where username='{$username}' and pin='{$pin}' and balance>='{$amount}'";

        $data = mysqli_query($conn,$query);

        $row = mysqli_fetch_assoc($data);
        if(empty($row)) return false;

        $curBal = $row['balance'];
        $curBal = $curBal-$amount;

        $query = "update bank set balance='{$curBal}' where username='{$username}'";
        $data = mysqli_query($conn,$query);
        updateBalance($username,$amount);
        return true;
    }

    // $row = deposit('shamim','123','10');

    // if(empty($row)) echo "empty";
    // else
    // print_r($row);
?>