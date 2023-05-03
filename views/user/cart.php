<?php

	// Starting the session
	session_start();
	print_r($_SESSION);
	require_once('../../models/cartModel.php');
	// Database connection
	$conn = mysqli_connect("localhost", "root", "", "blockchain");

	if(isset($_POST['remove_from_cart'])) {
		// Removing product from the cart
		$product_id = $_POST['product_id'];
		unset($_SESSION['cart'][$product_id]);

		// Removing product from the cart table in the database
		removeFromCart($product_id);
		

		//echo "Product removed from cart.";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>

<h1><a href="shop.php" class="username">Back</a></h1>


<style>
</style>
	<fieldset>
		<legend>Cart</legend>
		<?php
			// Displaying products in the cart
			if(isset($_SESSION['cart'])) {
				echo "<table>";
				echo "<tr><th>Product Name</th><th>Product Quantity</th><th>Price</th><th>Remove from Cart</th></tr>";
				$total = 0;
				foreach($_SESSION['cart'] as $product_id => $quantity) {
					$sql = "SELECT * FROM products WHERE id = $product_id";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);
					$total = $total + $quantity*$row['product_price'];
					echo "<tr><td>" . $row["product_name"] . "</td><td>" . $quantity . "</td><td>" . $quantity*$row['product_price'] . "</td><td>";
					echo "<form method='POST' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>";
					echo "<input type='hidden' name='product_id' value='" . $row["id"] . "'>";
					echo "<input type='submit' name='remove_from_cart' value='Remove'>";
					echo "</form>";
					echo "</td></tr>";
				}

				echo "</table>";
			} else {
				echo "Cart is empty.";
			}
		?>
	</fieldset>
	<h1>Grand Total : <b id="totalAlert"></b> </h1>
	<input type="button" value="Show" class="btn" onclick="show()">
	<table id="myTable" border="1" hidden>
			<tr>
				<td>Balance : </td>
				<td > <p id="balance"></p><?php 
					echo $_SESSION['#balance'];
				?></td>
				<td></td>
			</tr>
			<tr>
				<td>Need to pay : </td>
				<td ><p id="due"><?php 
					echo $total;
				?></p></td>
				<td>
					<?php 
						if($_SESSION['#balance'] < $total)
						{
							echo "<b> Insufficient Balance! </b>";
						}
					?>
				</td>
			</tr>

			<tr>
				<td>Pin : </td>
				<td><input id="pin" type="text"></td>
				<td></td>
			</tr>
	</table>
	<h1 id="payAlert"></h1>
	<input onclick="ajax()" id="pay" class="btn" type="button" style="display : none" value="Pay">
	<h1 id="payProcessAlert"></h1>
	<script>
		document.getElementById('totalAlert').innerHTML = "<?php echo $total; ?>";
		function show()
		{
			var table = document.getElementById("myTable");
    		table.style.display = "table";
			showOtherButton();
		}

		function showOtherButton() {
			var otherButton = document.getElementById("pay");
			otherButton.style.display = "block";
		}

		function ajax()
		{
			// document.body.innerHTML = "";
			// document.getElementById('payProcessAlert').innerHTML = 'payment processing...Please wait!';
			// document.getElementById('payProcessAlert').style.color = 'greenyellow';

			let balance = <?php echo $_SESSION['#balance'];?>;
			let due = <?php echo $total;?>;
			let pin = document.getElementById('pin').value;
			console.log(due);
			console.log(pin);
			let data = {'balance': balance, 'due': due, 'pin':pin};
			let user = JSON.stringify(data);

			let xhttp = new XMLHttpRequest();
			xhttp.open('post', '../../controllers/ajaxCart.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('data='+user);
			// alert('wo');
			xhttp.onreadystatechange = function(){
				
				if(this.readyState == 4 && this.status == 200){
					let x = this.responseText;
					alert(x);
					window.location.href = "wallet.php";
					// let user = JSON.parse(this.responseText);
					// document.getElementsByTagName('h1')[1].innerHTML = user.password;
				}
			}
			
		}

		
	</script>
</body>
</html>
