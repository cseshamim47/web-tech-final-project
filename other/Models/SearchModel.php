<?php
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
?>