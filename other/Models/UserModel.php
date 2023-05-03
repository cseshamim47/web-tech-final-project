<?php 
    require_once('db.php');

    function auth($email, $password){

        $con = getConnection();
        $sql = "SELECT * FROM Users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }
        else
        {
            return false;
        }
    }
    function getUserType($email, $user_type){
        $con = getConnection();
        $sql = "SELECT user_type FROM Users WHERE email='$email' AND user_type='$user_type'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
    
        if($count == 1){
            $row = mysqli_fetch_assoc($result);
            return $row['user_type'];
        } else {
            return false;
        }
    }

    function addUser($user){
        $con = getConnection();
        $sql = "insert into Users values('{$user['name']}', '{$user['email']}', '{$user['gender']}', '{$user['dob']}','{$user['password']}','{$user['confirm_password']}','{$user['user_type']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function searchUser($email){

        $con = getConnection();
        $sql = "SELECT * FROM Users WHERE email = '$email'";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0){
            // Fetch the data from the result set
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

            return $row;
        }else{
   
            return "No results found";
        }
    }

        function DeleteUser($email){

            $con = getConnection();
            $sql = "Delete * FROM Users WHERE email = '$email'";
            $result = mysqli_query($con, $sql);
    
            if(mysqli_num_rows($result)){
                // Fetch the data from the result set
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
                return $row;
            }else{
       
                return "No results found";
            }

        }
    
    function lastfive($email){
        $con = getConnection();
        $sql = "SELECT * FROM transaction ORDER BY date DESC LIMIT 5 WHERE email='$email'";
$result = mysqli_query($con, $sql);

// Display the last five transactions in a table
if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    return $row;
  
} else {
    return "<p>No transactions found.</p>";
}
    }
    

    function trxfunction($trx){
        $con = getConnection();
        $sql = "insert into Transaction values('{$trx['email']}', '{$trx['trx_name']}', '{$trx['trx_date']}', '{$trx['trx_type']}','{$trx['trx_amount']}')";
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
                    "trx_name" => $row["trx_name"]
                );
                array_push($transactions, $transaction);
            }
        }
    
        mysqli_close($con);
    
        return $transactions;
    }

    
    
    
    
    

        
    
    
?>