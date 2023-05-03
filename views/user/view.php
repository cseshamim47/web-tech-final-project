<?php 
include '../repeat/activity.php';
require_once('../repeat/load.php'); 
// print_r($_SESSION);
?>

<html>
<head>
    <title>View</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        include '../repeat/headerUser.php';
    ?>
        <tr>
            <td>
            <h1><a href="settings.php" class="username">Back</a></h1>
            </td>
        </tr>
        <tr>
            <td width=20%>
                <table width=100%>
                    <tr>
                        <th><h2>View</h2></th>
                    </tr>
                    <tr>
                        <td>
                            <?php 
                                include '../repeat/userMenuLink.php';
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="2">
                <fieldset>
                    <legend><h3>PROFILE</h3></legend>
                    <table border="0" width=100%>
                        <tr>
                            <td width=12%>Name</td>
                            <td width=30%>
                                <?php echo ":<b>  ".$_SESSION['#name']."</b>"?> 
                            </td>
                            <td rowspan="3" align="center">
                                <?php 
                                ?>
                                <img width=200px src="<?php echo isset($_SESSION['#profilePicture']) ? "../../includes/".$_SESSION['#profilePicture'] : "../../includes/profile.jpg" ?>" alt="Profile Picture">
                            </td>
                            <td width=40%></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo ":<b>  ".$_SESSION['#email']."</b>"?> </td>
                            <td></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td><?php echo ":<b>  ".$_SESSION['#gender']."</b>"?> </td>
                            <td align="center"><a href="changeProfilePicture.php">Change</a> </td>
                            <td></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td><?php echo ":<b>  ".$_SESSION['#dob']."</b>"?> </td>
                            <td></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td><a href="edit.php">Edit Profile</a></td>
                        </tr>                        
                    </table>
                </fieldset>

            </td>
        </tr>
        
        <tr height="80px">
            <td colspan="3" align="center">
                <p>copytight © 2023</p>
            </td>
        </tr>
    </table>
</body>
</html>