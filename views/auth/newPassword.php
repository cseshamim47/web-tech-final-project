<?php 
    session_start();
    echo "<pre>";
    print_r($_SESSION);
?>

<html>
<head>
    <title>Home</title>
</head>
<body>
       <!-- header -->
        <?php include '../repeat/header.php';  ?>
        <!-- body -->

        <tr height="200px">
            <td width=20%></td>
            <td>
                <form method="post" action="newPassword.php">
                    <fieldset>
                        <legend>Login</legend>
                        <table align="center" >
                            
                            <tr height=40px>
                                <td>
                                    Code : 
                                </td>
                                <td>
                                    <input type="number" name="code" value="">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td width=140px>
                                    Password : 
                                </td>
                                <td>
                                    <input type="password" name="password" value="">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td width=90px>
                                    Re-type Password : 
                                </td>
                                <td>
                                    <input type="password" name="repassword" value="">
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                <input type="submit" name="submit" value="Change"> 
                                </td>              
                            </tr>
                            <tr>
                                <td colspan="2">
                                <?php

                                    include 'checkValidity.php';

                                    if(isset($_REQUEST['submit']))
                                    {
                                        $allFieldsFilled = true;
                                        foreach ($_REQUEST as $key => $value) {
                                            $_SESSION[$key] = $value;
                                            if (!isset($_REQUEST[$key]) or empty($value)) {
                                                $allFieldsFilled = false;
                                            }
                                        }
                                        if($allFieldsFilled && validatePassword($_SESSION['password']) && $_SESSION['password'] == $_SESSION['repassword'] && $_SESSION['#code'] == $_REQUEST['code'])
                                        {
                                            $_SESSION['#password'] = $_REQUEST['password'];
                                            setcookie('username',$_SESSION['#username'],time()+123123);
                                            include '../repeat/updateFile.php';
                                            unset($_COOKIE['username']);
                                            setcookie('username',$_SESSION['#username'],time()-123123);
                                            $_SESSION = [];
                                            $_COOKIE = [];
                                            header('location: login.php?pwsuccessful=true');
                                            exit;
                                        }
                                    }

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
<?php 
    
    include '../repeat/footer.php'; 
    unset($_SESSION['upw']);
    unset($_SESSION['lusername']);
?>