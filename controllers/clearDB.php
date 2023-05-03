<html>
  <head>
    <title>clear database</title>
    <link rel="stylesheet" href="../views/style.css">
  </head>

  <body>
    <form action="clearDB.php" method="post">
      <h1 class="lightFont clearDB">Are you sure you want to erase 'user' table from 'blockchain' database? </h1>
      <input type="submit" value='Yes' class="btn1 btn" name="yes">
      <input type="submit" value='No' class="btn2 btn" name="no">
    </form>

  </body>

</html>

<?php 
    session_start();
    if(isset($_REQUEST['yes']))
    {
        include '../models/db.php';
        $con = getConnection();
        $sql = "delete from user";
        $result = mysqli_query($con,$sql);
        $_SESSION['deleted'] = true;
        header('location: ../views/admin.php');
    }else if(isset($_REQUEST['no']))
    {
        header('location: ../views/admin.php');
    }
?>

