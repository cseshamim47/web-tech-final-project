<?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
<table border="0" width=100%>
        <tr height="100px">
            <th width=20%>
                <a href="../user/home.php">
                    <img src= <?php echo isset($_SESSION['#imagePath']) ? $_SESSION['#imagePath'] : '../../includes/btc.png'  ?> alt="logo" width="200px">
                    <?php 
                    // echo $_SESSION['#imagePath'];
                         unset($_SESSION['#imagePath']);
                    ?>
                </a>
            </th>
            <th align="middle">
                
            </th>
            <th width=20%>
                Logged in as <a href="dashboard.php"> <b class="username_"> <?php echo $_SESSION['#username']  ?> </b></a> |
                <a href=
                <?php 
                    echo isset($_SESSION['#logoutPath']) ? $_SESSION['#logoutPath'] : 'logout.php';
                    unset($_SESSION['#logoutPath']);
                ?>
                >Logout</a> 
            </th>
</tr>
<!-- <?php 
    print_r($_SESSION);
?> -->