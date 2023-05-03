<?php 
    require_once('db.php');

    function removeFromCart($productId)
    {
        $con = getConnection();
        $query = "DELETE FROM cart WHERE product_id = '$productId'";
        $result = mysqli_query($con,$query);
        return $result;
    }

    
?>