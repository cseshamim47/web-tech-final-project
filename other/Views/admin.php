<?php
session_start();


if (!isset($_SESSION['email']) || $_SESSION['user_type'] !== 'admin') {
    header('location: login.php');
    exit();
}

echo "Welcome, {$_SESSION['email']}! This is the admin page.";



?>
<table border="1">
    <tr>
        <td><button onclick="location.href='Delproview.php'"> Delete Profile</button></td>
        <td><button onclick="location.href='Bill_Payment.php'">Bill Payment</button></td>
        <td><button onclick="location.href='DepositForm.php'">Deposit Money</button></td>
    </tr>
    <tr>
        <td><button onclick="location.href='SendMoneyForm.php'">Send Money</button></td>
        <td><button onclick="location.href='TransactionHistory.php'">Transaction History</button></td>
        <td><button onclick="location.href='ContactUs.php'">Contuct Us</button></td>
    </tr>
</table>
<form method="post" action="../Controllers/SearchUser.php">
    <input type="text" name="email" placeholder="Enter email address">
    <input type="submit" name="search" value="Search">
</form>


<button onclick="location.href='LogOut.php'">LogOut</button>
