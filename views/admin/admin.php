<?php 
    session_start();
    // print_r($_SESSION);
?>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    
    <h1 align='center'>Welcome! 
        <a href="#" class="username"> cseshamim47</a>
    </h1>
    <h2 align='center'><a href="#" class="logout">Logout</a></h2>  
    <table border='1' align="center" class="adminTable">
        <tr>
            <td class="tdClass"><a href="deleteUser.php" class="tda">delete user</a></td>
            <td class="tdClass"><a href="admin_dashboard.php" class="tda">All Controls</a></td>
        </tr>
        <tr>
            <td class="tdClass"><a href="../../controllers/downloadDB.php" class="tda">backup database</a></td>
            <td class="tdClass"><a href="../../controllers/clearDB.php" class="tda">clear database</a></td>
        </tr>
    </table>

   <?php 
        if(isset($_SESSION['backup'])){
            unset($_SESSION['backup']);
    ?>
        <script>
            alert('Database has been backed up to controllers folder!');
        </script>
    <?php 
        }else if(isset($_SESSION['deleted']))
        {
            unset($_SESSION['deleted']);
    ?>
         <script>
            alert("'user' table has been erased from 'blockchain' database!");
        </script>
    <?php 
        }
   ?>
</body>

</html>