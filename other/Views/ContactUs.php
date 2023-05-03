<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f7f7f7;
		}
		h1 {
			text-align: center;
		}
		table {
			width: 80%;
			margin: 0 auto;
			border-collapse: collapse;
		}
		th, td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #457d7d;
			color: #fff;
		}
		tr:hover {
			background-color: #f2f2f2;
		}
		button {
			display: block;
			margin: 20px auto;
			padding: 10px 20px;
			background-color: #457d7d;
			color: #fff;
			border: none;
			cursor: pointer;
		}
		button:hover {
			background-color: #161717;
		}
		.container {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		}
	</style>
</head>
<body>

<div class="container">
	<h1>Contact Us</h1>

	<?php
	// Check if search query is submitted
	if(isset($_POST['search'])) {
		// Get the search term from the form
		$searchTerm = $_POST['search'];

		// Open the txt file and search for the term
		$file = fopen("owners.txt", "r");
		echo "<table>";
		echo "<tr><th>Name</th><th>Email</th><th>Phone</th></tr>";
		while(!feof($file)) {
			$line = fgets($file);
			$data = explode(",", $line);
			if(strpos($data[0], $searchTerm) !== false) {
				echo "<tr>";
				echo "<td>" . $data[0] . "</td>";
				echo "<td>" . $data[1] . "</td>";
				echo "<td>" . $data[2] . "</td>";
				echo "</tr>";
				
			}
		}
		echo "</table>";
		
		fclose($file);
	}
	else {
		// Display all the information from the txt file
		$file = fopen("owners.txt", "r");
		echo "<table>";
		echo "<tr><th>Name</th><th>Email</th><th>Phone</th></tr>";
		while(!feof($file)) {
			$line = fgets($file);
			$data = explode(",", $line);
			echo "<tr>";
			echo "<td>" . $data[0] . "</td>";
			echo "<td>" . $data[1] . "</td>";
			echo "<td>" . $data[2] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		fclose($file);
	}
	?>

	<button onclick="location.href='user.php'">Home</button>
</div>
</body>
</html>