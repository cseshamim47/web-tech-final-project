
<?php
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
    ?>