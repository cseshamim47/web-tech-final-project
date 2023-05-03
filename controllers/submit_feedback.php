<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blockchain";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("INSERT INTO feedback (rating, comment) VALUES (?, ?)");
$stmt->bind_param("ss", $rating, $comment);


if(isset($_POST['rating'])) {
  $rating = $_POST['rating'];
  $comment = isset($_POST['comment']) ? $_POST['comment'] : "";
  

  if ($stmt->execute() === TRUE) {
    header('location: ../views/user/feedback.php?thanks');
    
  } else {
    echo "Error: " . $stmt->error;
  }

 
  $stmt->close();
  $conn->close();
}
?>
