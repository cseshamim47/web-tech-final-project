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
                <table  width=100%>
                    <tr>
                        <th><h2>Change Password</h2></th>
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
                <input type="hidden" id="username" name="username" value="<?php echo $_SESSION['#username'];?>">
                <form method="post" action="../../controllers/changePasswordCheck.php" enctype="">
                    <fieldset>
                        <legend>Change Password</legend>
                        <table width=100%>
                            <tr height=40px>
                                <td width=20%>
                                    Current Password : 
                                </td>
                                <td>
                                    <input id="cp" onkeyup="curPass()" class="edit" type="password" name="currentPassword">
                                </td>
                                <td id="curPassAlert" class="alert"></td>
                            </tr>
                            <tr height=40px>
                                <td width=15%>
                                    New Password : 
                                </td>
                                <td>
                                    <input onkeyup="validatePassword()" id="password"   class="edit" type="password" name="password">
                                </td>
                                <td id="passAlert" class="alert"></td>
                            </tr>
                            <tr height=40px>
                                <td width=15%>
                                    Confrim New Password : 
                                </td>
                                <td>
                                    <input id="cpassword" onkeyup="confPass()" class="edit" type="password" name="confirmNewPassword">
                                </td>
                                <td id="passMatch" class="alert"></td>
                            </tr>
                        </table>
                        <input onclick="ajax()" class="btn" type="button" name="submit" value="Submit">            
                        <h1 id="ajaxAlert" class="alert"></h1>
                        <?php
                            
                            if(isset($_REQUEST['error']))
                            {
                                echo "Password does not match! <br>";
                                unset($_SESSION['error']);
                            }else if(isset($_REQUEST['weak']))
                            {
                                echo "Password is weak! [1 special char, 1 uppercase, minimum length 5] <br>";
                                unset($_SESSION['weak']);
                            }else if(isset($_REQUEST['done']))
                            {
                                echo "Password changed!! <br>";
                                unset($_SESSION['done']);
                            }
                        ?>
                    </fieldset>
                </form>
            </td>
        </tr>
        
        <tr height="80px">
            <td colspan="3" align="center">
                <p>copytight © 2023</p>
            </td>
        </tr>
    </table>

<script>

        let a = 0;
        let b = 0;
        let c = 0;
        function ajax(){

            console.log(a+b+c);
            if((a+b+c) !== 3) return;
            let cp = document.getElementById('cp').value;
            let np = document.getElementById('password').value;

            let username = document.getElementById('username').value;
            
            let data = {'username': username, 'cp': cp, 'np': np};
            let user = JSON.stringify(data);

            let xhttp = new XMLHttpRequest();
            //xhttp.open('get', 'abc.php?username='+username, true);
            xhttp.open('post', '../../controllers/ajaxChangePasswordCheck.php', true);
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhttp.send('data='+user);

            xhttp.onreadystatechange = function(){
                
                if(this.readyState == 4 && this.status == 200){
                    //alert(this.responseText);
                    // let user = JSON.parse(this.responseText);
                    document.getElementById('ajaxAlert').innerHTML = this.responseText;
                }
            }

        }

    // alert('hocche');
    // console.log('hocche');
    function curPass()
    {
        let cp = "<?php echo $_SESSION['#password']?>";
        let wp = document.getElementById('cp').value;
        // alert(cp+" "+wp);
        if(cp == wp)
        {
            a = 1;
            document.getElementById('curPassAlert').innerHTML = 'Password Matched!!';
            document.getElementById('curPassAlert').style.color = 'rgb(100, 255, 108)';
        }else 
        {
            a = 0;
            document.getElementById('curPassAlert').innerHTML = 'Password Do not match!!';
            document.getElementById('curPassAlert').style.color = 'rgb(255, 100, 100)';
        }
    }

    function confPass()
    {
        let k = 0;
        let p1 = document.getElementById('cpassword').value;
        let p2 = document.getElementById('password').value;
        if(p1 !== p2)
        {
            b = 0;
            document.getElementById('passMatch').innerHTML = 'Password does not match';
        }else
        {
            if(c === 1)
            b = 1;
            document.getElementById('passMatch').innerHTML = '';
        }
    }

    function validatePassword() {
        // Check password length
        let password = document.getElementById('password').value;


        // Check if password contains uppercase letters, lowercase letters, and numbers
        let hasUppercase = false;
        let hasLowercase = false;
        let hasNumber = false;
        for (let i = 0; i < password.length; i++) {
            const charCode = password.charCodeAt(i);
            if (charCode >= 65 && charCode <= 90) {
            hasUppercase = true;
            } else if (charCode >= 97 && charCode <= 122) {
            hasLowercase = true;
            } else if (charCode >= 48 && charCode <= 57) {
            hasNumber = true;
            }
        }

        // Check if password contains special characters
        const specialChars = "!@#$%^&*()_+-={}[]|\:;\"'<>,.?/~`";
        let hasSpecialChar = false;
        for (let i = 0; i < password.length; i++) {
            if (specialChars.indexOf(password[i]) !== -1) {
            hasSpecialChar = true;
            break;
            }
        }

        // Return true if password meets all requirements, false otherwise
        if(hasUppercase && hasLowercase && hasNumber && hasSpecialChar && (password.length > 4))
        {
            c = 1;
            document.getElementById('passAlert').innerHTML = '';
        }else 
        {
            // alert('shamim');
            c = 0;
            document.getElementById('passAlert').innerHTML = 'Password not strong enough';
        }
    }   


</script>

</body>
</html>