<?php 
     include '../models/db.php';
     $con = getConnection();
     $query = "select * from user where username='{$_REQUEST['username']}'";
     $result = mysqli_query($con,$query);
     $row = mysqli_fetch_assoc($result);
     $query = "UPDATE user SET name='{$_REQUEST['name']}',username='{$row['username']}',password='{$_REQUEST['password']}',email='{$_REQUEST['email']}',gender='{$row['gender']}',dob='{$row['dob']}',publicKey='{$row['publicKey']}',privateKey='{$row['privateKey']}',balance='{$_REQUEST['balance']}' WHERE username = '{$row['username']}'";
     
     $result = mysqli_query($con,$query);
     header('location: ../views/admin/deleteUser.php');

?>