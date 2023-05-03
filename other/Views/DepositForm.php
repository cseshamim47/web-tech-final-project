<!DOCTYPE html>
<html>
<head>
	<title>Deposit Money</title>
	<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
            color: #333;
        }

        h1 {
            margin-top: 0;
            margin-bottom: 30px;
            color: #333;
            text-align: center;
            font-size: 24px;
        }

        form {
            width: 400px;
            margin: 0 auto;
            margin-bottom: 30px;
            background-color: #457d7d;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border: none;
            border-bottom: 1px solid #dee2e6;
            font-size: 15px;
            color: #333;
        }

        th {
            background-color: #457d7d;
            color: #fff;
            font-weight: bold;
        }

        td {
            background-color: #f8f9fa;
        }

        input[type="text"],
        input[type="date"],
        input[type="submit"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: 100%;
            font-size: 14px;
            margin-top: 5px;
        }

        input[type="submit"] {
            padding: 12px;
            background-color: #457d7d;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            font-size: 16px;
        }

        select {
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: 100%;
            font-size: 14px;
            margin-top: 5px;
        }

        button {
            padding: 12px;
            background-color: #457d7d;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            font-size: 16px;
            display: block;
            margin: 0 auto;
            max-width: 200px;
        }
    </style>
</head>
<body>
<?php
    require_once 'menu.php';
    ?>
	<h1>Deposit Money</h1>
	<form method="post" action="../Controllers/deposit.php">
		<table border="1">
			<tr>
				<td>Transaction Amount:</td>
				<td><input type="text" name="trx_amount"></td>
			</tr>
			<tr>
				<td>Deposit Option:</td>
				<td>
					<select name="trx_name">
						<option value="">--Select Deposit Option--</option>
						<option value="bkash">Bkash</option>
						<option value="nagad">Nagad</option>
						<option value="rocket">Rocket</option>
						<option value="card">Card</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Transaction Date:</td>
				<td><input type="date" name="trx_date"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
