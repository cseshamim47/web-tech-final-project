<?php 
	session_start();
?>

<html>
<head>
    <title>Home</title>
</head>
<body>
       <!-- header -->
	   <table border="0" width=100%>
			<tr height="100px">
				<th width=20%>
					<a href="index.php">
						<img src="includes/btc.png" alt="logo" width="200px">
					</a>
				</th>
				<th>Homepage</th>
				<th width=20%>
					<a href="index.php">Home</a> |
					<a href="views/auth/login.php">Login</a> |
					<a href="views/auth/registration.php">Registration</a>
				</th>
			</tr>
        <!-- body -->

        <tr height="200px">
            <td width=10%></td>
            <td>
				<h1>Send Money Anywhere, Anytime with Ease</h1>
				<p>Our money transfer website is designed to make it easy for you to send money to your loved ones, anywhere in the world. We offer a fast, secure and convenient way to transfer money, so you can rest assured that your money will get to its destination safely.</p>
				<a href="views/auth/registration.php">Get Started</a>
            </td>
			<td>
				<img src="includes/home.png" alt="home" width="300px">
			</td>
            <td width=10%></td>
        </tr>
        
        
<!-- footer -->
<?php 
    
    require_once('views/repeat/footer.php'); 
    unset($_SESSION['upw']);
    unset($_SESSION['lusername']);
?>