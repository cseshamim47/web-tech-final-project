<?php 
     include '../../models/db.php';
     $con = getConnection();
     $query = "select * from user where username='{$_REQUEST['username']}'";
     $result = mysqli_query($con,$query);
     $row = mysqli_fetch_assoc($result);
    //  print_r($row);
     ?>

<html>
    <head>
        <title>Edit</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <h1><a href="admin.php" class="username">Back</a></h1>

        <form action="../../controllers/editC.php" method="post">
        <table border="1" align="center" style="margin-top: 60px">
            <input type="hidden" value="<?php echo $row['username']?>" class="edit" name="username"> </td>
            <tr>
                <td>Name  </td>
                <td><input type="text" value="<?php echo $row['name']?>" class="edit" name="name"> </td>
            </tr>
            <tr>
                <td>Email  </td>
                <td><input type="text" value="<?php echo $row['email']?>" class="edit" name="email"> </td>
            </tr>
            <tr>
                <td>Password  </td>
                <td><input type="text" value="<?php echo $row['password']?>" class="edit" name="password"> </td>
            </tr>
            <tr>
                <td>Balance  </td>
                <td>
                <input type="text" name="balance" value="<?php echo $row['balance'] ?>"/>
                </td>
            </tr>
            <!-- <tr>
                <td>Gender  </td>
                <td>
                <input type="radio" name="gender" <?php if(isset($row['gender']) && $row['gender']=='male') echo "checked" ?> value="Male" name='gender'/> Male
                <input type="radio" name="gender" <?php if(isset($row['gender']) && $row['gender']=='female') echo "checked" ?> value="Female" name='gender'/> Female
                </td>
            </tr>
            <tr>
                <td>Date of Birth  </td>
                <td>
                    <input type="date" value="" name="dob">
                </td>
            </tr> -->
            <tr>
                <td colspan="2">
                    <input type="submit" class="btn editBtn" value="Update">
                </td>
            </tr>
            
        </table>

        </form>
    </body>
</html>