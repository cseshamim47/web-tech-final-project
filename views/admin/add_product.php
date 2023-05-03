<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
<h1><a href="admin_dashboard.php" class="username">Back</a></h1>
	<?php
		// Database connection
		$conn = mysqli_connect("localhost", "root", "", "project");

		if(isset($_POST['submit'])) {
			// Getting form data
			$product_name = $_POST['product_name'];
			$product_price = $_POST['product_price'];

			// Inserting data into database
			$sql = "INSERT INTO products (product_name, product_price) VALUES ('$product_name', '$product_price')";
			if(mysqli_query($conn, $sql)) {
				echo "Product added successfully.";
			}
			else {
				echo "Error: " . mysqli_error($conn);
			}
		}
	?>


<style>
 fieldset {
    position: relative;
    top: 50%;
    transform: translateY(50%);
    width: 50%;
    margin: auto;
    border: 2px solid #ccc;
    border-radius: 5px;
  }
  .success {
            color: red;
        }
</style>
	<fieldset>
		<legend>Add Product</legend>
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<label for="product_name">Product Name:</label>
			<input type="text" id="product_name" name="product_name" required><br><br>
			<label for="product_price">Product Price:</label>
			<input type="number" id="product_price" name="product_price" required><br><br>
			<input type="submit" name="submit" id="add-product-btn" value="Add Product">


		</form>
	</fieldset>

	<br>

	<fieldset>
		<legend>All Products</legend>
		<?php
			// Displaying all products with their prices
			$sql = "SELECT * FROM products";
			$result = mysqli_query($conn, $sql);

			if(mysqli_num_rows($result) > 0) {
				echo "<table>";
				echo "<tr><th>Product Name</th><th>Product Price</th></tr>";

				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr><td>" . $row["product_name"] . "</td><td>" . $row["product_price"] . "</td></tr>";
				}

				echo "</table>";
			} else {
				echo "No products found.";
			}

			mysqli_close($conn);
		?>

<form action="../controller/logout.php" method="post">
    <input type="submit" name="logout" value="Logout">
</form>
	</fieldset>
</body>
</html>
