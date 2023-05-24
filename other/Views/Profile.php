<?php
session_start();
require_once('../models/userModel.php');

    require_once 'menu.php';
    ?>


<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f8f8f8;
		}
		.container {
			width: 500px;
			margin: 0 auto;
			background-color: #fff;
			padding: 30px;
			margin-top: 100px;
			box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
			border-radius: 5px;
		}
		h2 {
			margin-top: 0;
			color: #333;
			margin-bottom: 20px;
		}
		p {
			margin: 0;
			color: #777;
			margin-bottom: 10px;
		}
		.error {
			color: #ff0000;
			margin-top: 10px;
		}
		.profile-details {
			background-color: #f2f2f2;
			padding: 20px;
			border-radius: 5px;
			margin-bottom: 20px;
		}
		.profile-details p {
			color: #222;
			margin-bottom: 10px;
		}
		.profile-details strong {
			color: #333;
		}
		.button {
			display: inline-block;
			padding: 10px 15px;
			background-color: #457d7d;
			color: #fff;
			text-decoration: none;
			border-radius: 1px;
			margin-top: 10px;
		}
		.button:hover {
			background-color: #161716;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php
			$email = $_SESSION['email'];
			$user = searchUser($email);
            

			if(is_array($user)){
				// display user data
				echo "<div class='profile-details'>";
				echo "<h2>User Details</h2>";
				echo "<p><strong>Name:</strong> " . $user['name'] . "</p>";
				echo "<p><strong>Email:</strong> " . $user['email'] . "</p>";
				echo "<p><strong>Gender:</strong> " . $user['gender'] . "</p>";
				echo "<p><strong>Date of Birth:</strong> " . $user['dob'] . "</p>";
				echo "</div>";
				echo "<a href='EditProView.php' class='button'>Edit Profile</a><br>";
				echo "<a href='user.php' class='button'>Home</a>";
				echo "<a href='../Controllers/DeleteProfile.php' class='button'>Delete</a>";
			}else{
				// display error message
				echo "<h2 class='error'>Error:</h2>";
				echo "<p class='error'>" . $user . "</p>";

			}
		?>
	</div>
</body>
</html>
