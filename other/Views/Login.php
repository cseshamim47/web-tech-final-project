<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style>
		body {
			background-color: #fafafa;
			font-family: Arial, sans-serif;
			color: #fff;
		}

		.container {
		width: 400px;
		margin: 0 auto;
		background-color: #cacfcd;
		padding: 20px;
		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
		border-radius: 4px;
	}

	h2 {
		text-align: center;
		color: #457d7d;
		margin-top: 0;
	}

	form {
		margin-top: 20px;
	}

	table {
		width: 100%;
		border-collapse: collapse;
	}

	th, td {
		padding: 10px;
		text-align: left;
		color: #161716;
		border-bottom: 1px solid #23b06e;
	}

	th {
		background-color: #444;
	}

	input[type="text"],
	input[type="password"] {
		width: 100%;
		padding: 10px;
		background-color: #fff;
		color: #161716;
		border: none;
		border-bottom: 1px solid #23b06e;
		margin-top: 5px;
		border-radius: 4px;
	}

	input[type="text"]:focus,
	input[type="password"]:focus {
		outline: none;
		border-bottom: 1px solid #23b06e;
	}

	input[type="radio"] {
		margin-right: 5px;
	}

	label {
		display: block;
		margin-top: 10px;
		color: #161716;
	}

	label input[type="checkbox"] {
		margin-right: 5px;
	}

	input[type="submit"] {
		display: block;
		width: 100%;
		padding: 10px;
		background-color: #457d7d;
		color: #fff;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		margin-top: 10px;
	}

	input[type="submit"]:hover {
		background-color: #161716;
	}

	p {
		text-align: center;
		margin-top: 20px;
		color:#161716;
	}

	p a {
		color: #457d7d;
		text-decoration: none;
	}

	p a:hover {
		color: #161716;
	}
</style>


<script>
	function getUser() {
		let email = document.getElementById('email').value;
		let password = document.getElementById('password').value;

		if (email == "") {
			document.getElementById('msg').innerHTML = "Email field is required";
			document.getElementById('msg').style.color = "red";
			return false;
		} else if (email.indexOf('@') == -1 || email.indexOf('.') == -1) {
			document.getElementById('msg').innerHTML = "Invalid email format";
			document.getElementById('msg').style.color = "red";
			return false;
		} else if (password == "") {
			document.getElementById('msg').innerHTML = "Password field is required";
			document.getElementById('msg').style.color = "red";
			return false;
			
		} else if (password.length < 8) {
			document.getElementById('msg').innerHTML = "Password must be at least 8 characters";
			document.getElementById('msg').style.color = "red";
			return false;
		} else {
			document.getElementById('msg').innerHTML = "";
			return true;
		}
	}
</script>

</head>
<body>
	<div class="container">
		<h2>Login Form</h2>
		<form method="post" action="../Controllers/loginCheck.php" onsubmit="return getUser()">
			<table border="0">
				<tr>
					<td>Email:</td>
					<td><input type="text" name="email" id="email" value=""></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" id="password" value=""></td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="user_type" value="admin">Admin
						<input type="radio" name="user_type" value="user">User
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<label><input type="checkbox" name="remember_me" value="1">Remember me</label>
					</td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="login" value="Login"></td>
				</tr>
			</table>
		</form>
		<p>Don't have an account yet? <a href="registration.php">Register here</a>.</p>
		<p id="msg"></p>
	</div>
</body>
</html>
