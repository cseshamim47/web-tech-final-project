<?php
include 'DB.php';
$con =getConnection();
$sql = "SELECT * FROM Transaction WHERE ";
$result = $con->query($sql);
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}


header('Content-Type: application/json');
echo json_encode($data);
?>
