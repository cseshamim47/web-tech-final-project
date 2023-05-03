<!DOCTYPE html>
<html>
	<head>
		<title>User Notification</title>
    <link rel="stylesheet" href="../style.css">
	
	</head>
	<body>
  <h1><a href="dashboard.php" class="username">Back</a></h1>
		
<style>
 fieldset {
    position: relative;
    top: 50%;
    transform: translateY(50%);
    width: 50%;
    margin: auto;
    border: 2px solid #ccc;
    border-radius: 5px;
    padding: 20px;
  }
</style>
        <?php
   	// Database connection
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "project";

       $conn = mysqli_connect($servername, $username, $password, $dbname);

       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
       }
       ?>
		
		<!-- Show all notifications -->
		<fieldset>
			<legend><h1>Notification</h1></legend>
			<?php
				$sql = "SELECT * FROM notifications ORDER BY id DESC";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						$id = $row['id'];
						$notification = $row['notification'];

						echo "<p>$notification 
							  </p>";
					}
				} else {
					echo "No notifications found";
				}
			?>
		</fieldset>

		

   <?php

	mysqli_close($conn);
   ?>
  </body>
</html>