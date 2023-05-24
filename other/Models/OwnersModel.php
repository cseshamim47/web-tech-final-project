<?php
require_once('db.php');

function Owners(){
    $con = getConnection();
    $sql = "SELECT * FROM Owners ";
    $result = mysqli_query($con, $sql);
?>
<center>
<table border=1px>
   <tr>
    <td>Name</td>
    <td>Email</td>
    <td>Phone</td>

    
 
   </tr>
   <tbody>
<?php

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
?>

    <tr>

        <td><?php echo $row["name"] ?></td>
        <td><?php echo $row["email"] ?></td>
        <td><?php echo $row["phone"] ?></td>
    </tr>

    
   

   
<?php    }
    } else {
      echo "0 results";
    }
?>
   </tbody>
</table></center>
<?php
}


function search($name){
    $con = getConnection();
    $sql = "SELECT * FROM Owners where name ='{$name}'";
    $result = mysqli_query($con, $sql);
?>
<center>
<table border=1px>
   <tr>
    <td>Name</td>
    <td>Email</td>
    <td>Phone</td>

    
 
   </tr>
   <tbody>
<?php

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
?>

    <tr>

        <td><?php echo $row["name"] ?></td>
        <td><?php echo $row["email"] ?></td>
        <td><?php echo $row["phone"] ?></td>
    </tr>

    
   

   
<?php    }
    } else {
      echo "0 results";
    }
?>
   </tbody>
</table></center>
<?php

    

}