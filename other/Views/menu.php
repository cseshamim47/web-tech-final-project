<!DOCTYPE html>
<html>

<head>
    <title>Menu Bar</title>
    <style>
nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav li {
  display: inline-block;
}

/* Style for the menu bar */
nav a {
  display: block;
  padding: 10px 15px;
  text-decoration: none;
  color: #fff; /* set text color to white */
  background-color: #457d7d; /* set background color to dark gray */
}

nav a:hover {
  color: #fff; /* color for links on hover */
  background-color: #161717; /* background color for links on hover */

  
}
        @media (max-width: 768px) {
            nav ul {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
          }
    </style>
</head>

<body>
    <div class="menu-bar">
    <nav>
  <ul>
    <li><a href="Profile.php">Profile</a></li>
    <li><a href="Bill_Payment.php">Bill Payment</a></li>
    <li><a href="DepositForm.php">Deposit Money</a></li>
    <li><a href="SendMoneyForm.php">Send Money</a></li>
    <li><a href="TransactionHistory.php">Transaction History</a></li>
    <li><a href="ContactUs.php">Contact Us</a></li>
    <li><a href="user.php">Home</a></li>
    <li><a href="../Controllers/LogOut.php">LogOut</a></li>
  </ul>
</nav>

    </div>
    <br>
    <br>
</body>

</html>
