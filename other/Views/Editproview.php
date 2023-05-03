<!DOCTYPE html>
<html>
<head>
	<title>Transaction Form</title>
</head>
<body>
	<h1>Transaction Form</h1>
	<form method="post" action="../Controllers/deleteprofile.php">
		<table border="1">
			<tr>
				<td>Receiver Name :</td>
				<td><input type="text" name="trx_name"></td>
			</tr>
			<tr>
				<td>Amount:</td>
				<td><input type="text" name="trx_amount"></td>
			</tr>
			<tr>

			</tr>
			<tr>
				<td>Transaction Date:</td>
				<td><input type="date" name="trx_date"></td>
			</tr>

			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="Submit">

				</td>
			</tr>
		</table>
	</form>
	<button onclick="location.href='../Controllers/SendMoneyHistory.php'">Send Money</button>Send Money
</body>
</html>
