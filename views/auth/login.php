<?php 
    
    if(!isset($_SESSION)){session_start();}
    // print_r($_COOKIE);
    // echo "<br>";
    // print_r($_SESSION);
    if(!isset($_SESSION['activity']))
    {
        require_once('../repeat/activity.php');
    }
?>

<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
       <!-- header -->
        <?php include '../repeat/header.php';  ?>
        <!-- body -->

        <tr height="200px">
            <td width=20%></td>
            <td>
                <form method="post" action="../../controllers/loginCheck.php">
                    <fieldset>
                        <legend>Login</legend>
                        <table align="center" >
                            
                            <tr height=40px>
                                <td>
                                    Username : 
                                </td>
                                <td>
                                    <input id="username" onkeyup="usernameValidation()" class="edit" type="text" name="username" value="<?php echo isset($_SESSION['lusername']) ? $_SESSION['lusername'] : ''  ?>">
                                </td>
                                <td>
                                    <p id="usernameAlert" class="alert"></p>
                                </td>
                            </tr>
                            <tr height=40px>
                                <td width=90px>
                                    Password : 
                                </td>
                                <td>
                                    <input class="edit" type="password" name="password" value="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="checkbox" name="rememberMe" value="1">
                                    Remember Me 
                                    <br><br>
                                </td>
                                
                            </tr>

                            <tr>
                                <td colspan="2">
                                <input class="btn" type="submit" name="submit" value="Login"> 
                                <a href="forgotPassword.php"><i>Forgot Password?</i></a>           
                                </td>              
                            </tr>
                            <tr>
                                <td colspan="2">
                                <?php

                                    if(isset($_REQUEST['successful']))
                                    {
                                        echo "Account creation Successfull! Please login! <br>";
                                        unset($_REQUEST['successful']);
                                    }
                                    if(isset($_REQUEST['pwsuccessful']))
                                    {
                                        echo "Password changed!!! Please login! <br>";
                                        unset($_REQUEST['pwsuccessful']);
                                    }

                                    if(isset($_REQUEST['error']))
                                    {
                                        echo "username or password incorrect!<br>";
                                    }
                                    // print_r($_SESSION);

                                ?>
                                </td>              
                            </tr>
                        </table>
                    </fieldset>

                </form>

            </td>
            <td width=20%></td>
        </tr>
        
        
<!-- footer -->
<script>
    function usernameValidation()
    {
        const usernameInput = document.getElementById('username');
        const username = usernameInput.value.trim();

        if (username === '') {
            document.getElementById('usernameAlert').innerHTML = 'Username cannot be empty!';
        } else{
            document.getElementById('usernameAlert').innerHTML = '';
            const usernameArr = username.split(' ');
            let invalid = false;
            if(usernameArr.length > 1)
            {
                document.getElementById('usernameAlert').innerHTML = 'Username cannot contain spaces between letters';
            }else 
            {
                document.getElementById('usernameAlert').innerHTML = '';
            }

        }
    }
</script>
<?php 
    
    include '../repeat/footer.php'; 
    unset($_SESSION['upw']);
    unset($_SESSION['lusername']);
?>

