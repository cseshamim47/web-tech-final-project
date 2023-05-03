<?php
session_start();


if (!isset($_SESSION['email']) || $_SESSION['user_type'] !== 'user') {
    header('location: login.php');
    exit();
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>User Panel</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f8f9fa;
		}
		.container {
			margin: 50px;
			padding: 30px;
			background-color: #457d7d;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
		}
		h2 {
			margin-top: 0;
			margin-bottom: 30px;
			color: #f8f9fa;
		}
		table {
			margin-top: 30px;
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			padding: 15px;
			text-align: center;
			border: 1px solid #dee2e6;
		}
		th {
			background-color: #f8f9fa;
		}
		td {
			background-color: #fff;
		}
		a {
			color: #457d7d; /* Updated color */
			text-decoration: none;
		}
		a:hover {
			color: #161716;
		}
		button {
			margin-top: 30px;
			padding: 10px 20px;
			background-color: #007bff;
			color: #fff;
			border: none;
			cursor: pointer;
		}
		button:hover {
			background-color: #0056b3;
		}

	</style>
<body>

	<div class="container">
		<h2>Welcome</h2>
		<h3><?php echo $_SESSION['email']; ?>!</h3>
		<table>
			<tr>
				<th><a href="Profile.php">Profile</a></th>
				<th><a href="Bill_Payment.php">Bill Payment</a></th>
				<th><a href="DepositForm.php">Deposit Money</a></th>
			</tr>
			<tr>
				<td><a href="SendMoneyForm.php">Send Money</a></td>
				<td><a href="TransactionHistory.php">Transaction History</a></td>
				<td><a href="ContactUs.php">Contact Us</a></td>
			</tr>
			
		</table>
		
	</div>
	<ul>
	<li><a href="../Controllers/LogOut.php">LogOut</a></li>
	</ul>
</body>
</html>
