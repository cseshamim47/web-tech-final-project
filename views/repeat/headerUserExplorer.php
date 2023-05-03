<?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
<table border="1" width=100%>
        <tr height="100px">
            <th width=20%>
                <a href="../../user/home.php">
                    <img src="../../includes/btc.png" alt="logo" width="200px">
                </a>
            </th>
            <th align="middle">
                
            </th>
            <th width=20%>
                Logged in as <a href="../dashboard.php"> <?php echo $_SESSION['#username']  ?></a> |
                <a href="logout.php">Logout</a> 
            </th>
</tr>
<!-- <?php 
    print_r($_SESSION);
?> -->