<!DOCTYPE html>
<html>
<head>
	<title>Transaction Form</title>
</head>
<body>
	<h1>Delete User</h1>
	<form method="post" action="../Controllers/deleteprofile.php">
		<table border="1">
			<tr>
				<td>User's Email :</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="Submit">

				</td>
			</tr>
		</table>
	</form>
	<button onclick="location.href='../views/admin.php'">Send Money</button>Home
</body>
</html>
