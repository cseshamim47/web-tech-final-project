<?php
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
    }
    // print_r($_REQUEST);
?>
<html>
<head>
    <title>Delete User</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1><a href="admin.php" class="username">Back</a></h1>
    <h1 align='center' >All Users</h1>
    <table align="center">
        <tr>
            <th><h1 align='center' class='regularFont'>Search : </h1></th>
            <th>
                <input onkeyup="show()" id="search" type="text" class="edit">
            </th>    

        </tr>
    </table>
    <table  align="center" >
        <tr >
            <th class="top">Name</th>
            <th class="top">Username</th>
            <th class="top">Email</th>
            <th class="top">password</th>
            <th class="top">Balance</th>
            <th colspan="3" class="top"></th>
        </tr>
        <?php 

            
            require_once('../../models/db.php');
            $con = getConnection();
            $query = "select * from user";
            $result = mysqli_query($con,$query);

            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr class='regularFont top'>";
                echo "<td >".$row['name']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "<td>".$row['balance']."</td>";
                ?>
                <td><a href='../../controllers/deleteUser.php?username=<?php echo $row['username']?>' ><input type='submit' value='delete' name='delete' class='btn'></a></td>
                <td><a href='edit.php?username=<?php echo $row['username']?>' ><input type='submit' value='edit' name='edit' class='btn'></a></td>
                    
                    <td class="x"></td>
                <?php 
                echo "</tr>";

            }
        ?>
    </table>

    <?php 
        if(isset($_SESSION['deleted']))
        {
            unset($_SESSION['deleted']);
    ?>
         <script>
            alert("User deleted Successfully!");
        </script>
    <?php 
        }
   ?>

   <script>
        function show()
        {
            str = document.getElementById('search').value;
            // if(str.length)
        }
   </script>
</body>

</html>