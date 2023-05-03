<?php

session_start();


$conn = mysqli_connect("localhost", "root", "", "project");

// Search query
if (isset($_GET['search'])) {
  $searchTerm = mysqli_real_escape_string($conn, $_GET['search']);

  $sql = "SELECT * FROM products WHERE product_name LIKE '%$searchTerm%'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Product Name</th><th>Product Price</th><th>Add to Cart</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>" . $row["product_name"] . "</td><td>" . $row["product_price"] . "</td><td>";
      echo "<form method='POST' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>";
      echo "<input type='hidden' name='product_id' value='" . $row["id"] . "'>";
      echo "<input type='submit' name='add_to_cart' value='Add to Cart'>";
      echo "</form>";
      echo "</td></tr>";
    }

    echo "</table>";
  } else {
    echo "No products found.";
    
    
  }
}
?>
