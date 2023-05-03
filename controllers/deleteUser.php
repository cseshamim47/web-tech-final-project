<?php
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
    }
    print_r($_REQUEST);
?>
<html>
  <head>
    <title>clear database</title>
    <link rel="stylesheet" href="../views/style.css">
  </head>

  <body>
    <table border="1" align="center" >
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>password</th>
            <th>Balance</th>
        </tr>
        <?php 
            require_once('../models/db.php');
            $con = getConnection();
            $query = "select * from user where username='{$_REQUEST['username']}'";
            $result = mysqli_query($con,$query);

            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr class='regularFont'>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "<td>".$row['balance']."</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <form action="deleteUser.php?username=<?php echo $_REQUEST['username'] ?? '' ?>" method="post">
      <h1 class="lightFont clearDB">Are you sure you want delete the following user? </h1>
      <input type="hidden" value=" name="username">
      <input type="submit" value='Yes' class="btn1 btn deleteUser_btn" name="yes">
      <input type="submit" value='No' class="btn2 btn" name="no">
    </form>

  </body>

</html>

<?php 
    if(isset($_REQUEST['yes']))
    {
        require_once('../models/db.php');
        $con = getConnection();
        $sql = "delete from user where username='{$_REQUEST['username']}'";
        echo $sql;
        $result = mysqli_query($con,$sql);
        $_SESSION['deleted'] = true;
        header('location: ../views/admin/deleteUser.php');
    }else if(isset($_REQUEST['no']) )
    {
        // echo "shamim";
        header('location: ../views/admin/deleteUser.php');
    }
?>

