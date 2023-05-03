<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
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
			color: #161716;
		}

		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 5px;
		}

		th, td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #457d7d;
		}

		input[type="text"],
		input[type="email"],
		input[type="password"],
		select {
			width: 100%;
			padding: 10px;
			background-color: #fff;
			color: #161716;
			border: none;
			border-radius: 4px;
		}

		input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="password"]:focus,
		select:focus {
			outline: none;
			border-bottom: 1px solid #23b06e;
		}

		input[type="radio"] {
			margin-right: 5px;
			
		}

		button {
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

		button a {
			color: #fff;
			text-decoration: none;
		}

		button:hover {
			background-color: #161716;
		}

		.login-link {
			display: block;
			text-align: center;
			margin-top: 20px;
		}

		.login-link a {
			color: #457d7d;
			text-decoration: none;
		}

		.login-link a:hover {
			color: #161716;
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
    function validateForm() {
        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let genderMale = document.getElementById('gender-male').checked;
        let genderFemale = document.getElementById('gender-female').checked;
        let password = document.getElementById('password').value;
        let confirmPassword = document.getElementById('confirm_password').value;

        // Validate name
        if (name == "") {
            alert("Name field is required");
            return false;
        }

        // Validate email
        if (email == "") {
            alert("Email field is required");
            return false;
        } else if (email.indexOf('@') == -1 || email.indexOf('.') == -1) {
            alert("Invalid email format");
            return false;
        }

        // Validate gender
        if (!genderMale && !genderFemale) {
            alert("Please select a gender");
            return false;
        }

        // Validate password
        if (password == "") {
            alert("Password field is required");
            return false;
        } else if (password.length < 8) {
            alert("Password must be at least 8 characters long");
            return false;
        }

        // Validate confirm password
        if (confirmPassword == "") {
            alert("Confirm Password field is required");
            return false;
        } else if (password != confirmPassword) {
            alert("Password and Confirm Password fields do not match");
            return false;
        }

        return true;
    }
</script>

</head>

<body>
    <div class="container">
        <h2>Registration Form</h2>
		<form method="post" action="../Controllers/regcheck.php" onsubmit="return validateForm()">

            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender" value="male" id="gender-male">Male
                        <input type="radio" name="gender" value="female" id="gender-female">Female
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td><input type="password" name="confirm_password" id="confirm_password"></td>
                </tr>
                <tr>
                    <td>User Type:</td>
                    <td>
                        <select name="user_type" id="user_type">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="register">Register</button></td>
                </tr>
            </table>
        </form>
        <p class="login-link">Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>

</html>

