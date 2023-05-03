

<html>
<head>
    <title>Home</title>
</head>
<body>
       <!-- header -->
	   <?php 
           include '../repeat/headerUser.php';
       ?>
        <!-- body -->

        <tr height="200px">
            <td width=10%></td>
            <td>
				<h1>Send Money Anywhere, Anytime with Ease</h1>
				<p>Our money transfer website is designed to make it easy for you to send money to your loved ones, anywhere in the world. We offer a fast, secure and convenient way to transfer money, so you can rest assured that your money will get to its destination safely.</p>
				<a href="dashboard.php">Go to dashboard</a>
            </td>
			<td>
				<img src="../includes/home.png" alt="home" width="300px">
			</td>
            <td width=10%></td>
        </tr>
        
        
<!-- footer -->
<?php 
    
    include '../repeat/footer.php'; 
    unset($_SESSION['upw']);
    unset($_SESSION['lusername']);
?>