<!DOCTYPE html>
<html>

<head>
    <title>Bill Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        table td input[type="text"],
        table td input[type="date"] {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }

        table td input[type="submit"] {
            width: auto;
            padding: 10px;
            background-color:#457d7d;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        table td input[type="submit"]:hover {
            background-color: #161716;
        }
    </style>
</head>

<body>
<?php
    require_once 'menu.php';
    ?>
    <h1>Pay Bills</h1>
    <form method="post" action="../Controllers/PaymentSys.php">
        <table>
            <tr>
                <td>Transaction Name:</td>
                <td><input type="text" name="trx_name"></td>
            </tr>
            <tr>
                <td>Transaction Amount:</td>
                <td><input type="text" name="trx_amount"></td>
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
