<?php
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
    ?>