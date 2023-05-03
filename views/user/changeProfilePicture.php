<?php include '../repeat/activity.php';?>

<html>
<head>
    <title>Dashboard</title>
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
                        <th><h2>Change Profile Picture</h2></th>
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
                    <legend><h3>Profile Picture</h3></legend>
                    <i>only <b>.jpg, .jpeg, .png</b> format allowed</i>
                    <form method="post" action="../../controllers/changeProfilePictureCheck.php" enctype="multipart/form-data">
                        <table border="0" width=100%>
                            <tr>
                                <td>
                                    <img width=200px src="<?php echo isset($_SESSION['#profilePicture']) ? "../../includes/".$_SESSION['#profilePicture'] : "../../includes/profile.jpg" ?>" alt="Profile Picture">
                                </td>
                                <td width=80%></td>
                            </tr>
                            <tr>
                                <td height=60px>
                                    <input id="file-input" type="file" name="profilePicture"  id="profilePicture">
                                </td>
                                <td>
                                    <p id="fileAlert" class="alert"></p>
                                </td>
                                <?php 
                                    if(isset($_REQUEST['error']))
                                    {
                                        echo "please upload a correct format. [jpg,jpeg,png] <br>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td>
                                    <hr>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Submit" class="btn">
                                </td>
                                <td></td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </td>
        </tr>
        
        <tr height="80px">
            <td colspan="3" align="center">
                <p>copytight © 2023</p>
            </td>
        </tr>
    </table>

    <script>
      const allowedFileTypes = ['image/jpeg', 'image/png', 'image/jpg'];

      function handleFileUpload(file) {
        if (!allowedFileTypes.includes(file.type)) {
            document.getElementById('fileAlert').innerHTML = 'Invalid file type. Please upload a JPG, PNG, or JPEG file.';
            //   console.log('Invalid file type. Please upload a JPG, PNG, or JPEG file.');
            return;
        }
        // Continue with file upload
        document.getElementById('fileAlert').innerHTML = 'File uploaded:' + file.name;
        // console.log('File uploaded:', file.name);
      }

      const fileInput = document.getElementById('file-input');
      fileInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        handleFileUpload(file);
      });
    </script>
</body>
</html>