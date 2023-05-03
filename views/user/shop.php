<?php
	// Starting the session
	session_start();

	// Database connection
	$conn = mysqli_connect("localhost", "root", "", "blockchain");

	// Creating the cart table
	$sql = "CREATE TABLE IF NOT EXISTS cart (
			id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			product_id INT(11) NOT NULL,
			quantity INT(11) NOT NULL,
			created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
		)";
	mysqli_query($conn, $sql);

	if(isset($_POST['add_to_cart'])) {
		// Getting product id from the form
		$product_id = $_POST['product_id'];

		// Adding product to the cart
		if(!isset($_SESSION['cart'])) {
			$_SESSION['cart'] = array();
		}

		if(!isset($_SESSION['cart'][$product_id])) {
			$_SESSION['cart'][$product_id] = 0;
		}

		$_SESSION['cart'][$product_id]++;

		// Adding product to the cart table in the database
		$quantity = $_SESSION['cart'][$product_id];
		$sql = "INSERT INTO cart (product_id, quantity) VALUES ('$product_id', '$quantity')";
		mysqli_query($conn, $sql);

		echo "Product added to cart.";
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Shop Products</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>

<h1><a href="dashboard.php" class="username">Back</a></h1>
<header style="text-align: right;">
  
  <nav>
    <h1><a href="cart.php">Cart</a></h1>
  </nav>
</header>
<style>
</style>
	<fieldset>
		<legend>Shop Products</legend>
		<form>
    <label for="search">Search:</label>
    <input type="text" id="search" name="search">
    <button type="submit" id="search-btn">Search</button>
  </form>


  <div id="products-container"></div>
		<?php
			// Displaying all products with their prices and a button to add to cart
			$sql = "SELECT * FROM products";
			$result = mysqli_query($conn, $sql);

			if(mysqli_num_rows($result) > 0) {
				echo "<table>";
				echo "<tr><th>Product Name</th><th>Product Price</th><th>Add to Cart</th></tr>";

				while($row = mysqli_fetch_assoc($result)) {
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
		?>
	</fieldset>
	<script>
  // Get the form and the products container
  const form = document.querySelector('form');
  const productsContainer = document.querySelector('#products-container');

  // Listen for the form submit event
  form.addEventListener('submit', (e) => {
    e.preventDefault();

    // Get the search term and send it using AJAX
    const searchTerm = document.querySelector('#search').value.trim();

    if (searchTerm !== '') {
		let xhttp = new XMLHttpRequest()

      xhttp.open('GET', `ajax.php?search=${searchTerm}`);

      xhttp.onload = function () {
        if (this.status === 200) {
          productsContainer.innerHTML = this.responseText;
		  
        }
      };

      xhttp.send();
    }
  });
</script>

<br>
<br>
<br>
	<br>	
</body>
</html>
