<!DOCTYPE html>
<html>
<head>
	<title>Transaction Form</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f8f9fa;
			padding: 20px;
			color: #333;
		}

		h1 {
			margin-top: 0;
			margin-bottom: 30px;
			color: #333;
			text-align: center;
			font-size: 24px;
		}

		form {
			width: 400px;
			margin: 0 auto;
			margin-bottom: 30px;
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 2px 4px rgba(0,0,0,0.1);
		}

		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 30px;
		}

		th,
		td {
			padding: 15px;
			text-align: left;
			border: none;
			border-bottom: 1px solid #dee2e6;
			font-size: 14px;
			color: #333;
		}

		th {
			background-color: #457d7d;
			color: #fff;
			font-weight: bold;
		}

		td {
			background-color: #f8f9fa;
		}

		input[type="text"],
		input[type="date"],
		input[type="submit"] {
			padding: 10px;
			border: none;
			border-radius: 5px;
			width: 100%;
			font-size: 14px;
			margin-top: 5px;
		}

		input[type="submit"] {
			padding: 12px;
			background-color: #457d7d;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			margin-top: 10px;
			font-size: 16px;
		}

		button {
			padding: 12px;
			background-color: #457d7d;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			margin-top: 10px;
			font-size: 16px;
			display: block;
			margin: 0 auto;
			max-width: 200px;
		}
	</style>
</head>
<body>
	<?php
    require_once 'menu.php';
    ?>
	<h1>Send Money Form</h1>
	<form method="post" action="../Controllers/SendMoney.php">
		<table>
			<tr>
				<th>Receiver Name :</th>
				<td><input type="text" name="trx_name"></td>
			</tr>
			<tr>
				<th>Amount:</th>
				<td><input type="text" name="trx_amount"></td>
			</tr>
			<tr>
				<th>Transaction Date:</th>
				<td><input type="date" name="trx_date"></td>
			</tr>

			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
		</table>
	</form>
	<button onclick="location.href='../Controllers/SendMoneyHistory.php'">Send Money History</button>
</body>
</html>
