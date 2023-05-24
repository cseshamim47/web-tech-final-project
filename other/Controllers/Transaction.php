<?php
require_once '../Models/trxModel.php';

if (isset($_POST['submit'])) {
	$from_date = $_POST['from_date'];
	$to_date = $_POST['to_date'];

	$transactions = getTransactions($from_date, $to_date);

	require_once '../Views/transactionHistory.php';
}
	
?>
				
<!DOCTYPE html>
<html>
<head>
	<title>Transaction History</title>
	<style>
		.container {
	max-width: 800px;
	margin: 0 auto;
	padding: 20px;
	text-align: center;
}

h1 {
	color: #333;
}

.home-button {
	margin-top: 20px;
	background-color: #007bff;
	color: #fff;
	padding: 10px 20px;
	border: none;
	cursor: pointer;
}
</style>
	<!-- Link to your external CSS file -->
	<link rel="stylesheet" type="text/css" href="path/to/your/css/file.css">
</head>
<body>
	<div class="container">
		<h1>Transaction History</h1>
		<!-- Display transaction history here using $transactions data -->
		<!-- ... -->
		
		<button onclick="location.href='../views/transactionhistory.php'" class="home-button">Close</button>
	</div>
</body>
</html>