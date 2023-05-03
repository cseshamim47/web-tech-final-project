<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
<h1><a href="admin.php" class="username">Back</a></h1>

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
	<fieldset>
		<legend>Admin Dashboard</legend>

		<a href="../../controllers/admin_notification_form.php">Admin Notification Panel</a>
    <br>
        <br>
		<a href="add_product.php">Add product</a>
<br> 
<br>
<a href="admin_faq.php">Post Frequently Asked Question</a>
<br>
<br>

        <form action="../controller/logout.php" method="post">
    <!-- <input class="btn" type="submit" name="logout" value="Logout"> -->
</form>
	</fieldset>
</body>
</html>
