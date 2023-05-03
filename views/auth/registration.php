<?php
    session_start();
?>

<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- header -->
    <table border="0" width=100%>
    <tr height="100px">
        <th width=20%>
            <a href="..\index.php">
                <img src="../../includes/btc.png" alt="logo" width="200px">
            </a>
        </th>
        <th></th>
        <th width=20%>
            <a href="../index.php">Home</a> |
            <a href="login.php">Login</a> |
            <a href="registration.php">Registration</a>
        </th>
    </tr>
        <!-- body -->
        <tr height="200px">
            <td width=20%></td>
            <td>
                <form method="post" action="../../controllers/registrationCheck.php">
                    <fieldset>
                        <legend>Registration</legend>
                        <table align="center" border="0">
                            <tr height=40px>
                                <td width=50%>
                                    Name : 
                                </td>
                                <td>
                                    <input class="edit" onkeyup="nameValidation()" id="name" type="text" name="name" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''  ?>">
                                </td>
                                <td width=150px>
                                    <p style="color: red" id="nameAlert" class="alert"></p>
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Email : 
                                </td>
                                <td>
                                    <input class="edit" onkeyup="emailValidation()" id="email" type="email" name="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''  ?>">
                                </td>
                                <td>
                                    <p style="color: red" id="emailAlert" class="alert"></p>
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Username : 
                                </td>
                                <td>
                                    <input class="edit" type="text" onkeyup="usernameValidation()" id="username" name="username" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''  ?>">
                                </td>
                                <td>
                                    <p id="usernameAlert" class="alert"></p>
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Password : 
                                </td>
                                <td>
                                    <input class="edit" onkeyup="validatePassword()" id="password" type="password" name="password" value="<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : ''  ?>">
                                </td>
                                <td>
                                    <p id="passAlert" class="alert"></p>
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Confirm Password : 
                                </td>
                                <td>
                                    <input class="edit" onkeyup="confPass()" id="cpassword" type="password" name="confirmPassword" value="<?php echo isset($_SESSION['confirmPassword']) ? $_SESSION['confirmPassword'] : ''  ?>">
                                </td>
                                <td>
                                    <p id="passMatch" class="alert"></p>
                                </td>
                            </tr>
                            <tr height=40px>
                                <td colspan="2">
                                        <fieldset>
                                            <legend>Gender</legend>
                                            <input type="radio" name="gender" <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=='Male') echo "checked" ?> value="Male"/> Male
                                            <input type="radio" name="gender" <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=='Female') echo "checked" ?> value="Female"/> Female
                                            <input type="radio" name="gender" <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=='Other') echo "checked" ?> value="Other"/> Other <br>
                                        </fieldset>
                                </td>
                            </tr>
                            <tr height=100px>
                                <td colspan="2">
                                        <fieldset>
                                            <legend>Date of Birth</legend>
                                            <input type="date" name="dob" value="<?php echo isset($_SESSION['dob']) ? $_SESSION['dob'] : ''  ?>"/>
                                        </fieldset>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                <input class="btn" type="submit" name="submit" value="Submit" >            
                                <input class="btn" type="submit" name="reset" value="Reset">
                                </td>              
                            </tr>
                            <!-- <tr>
                                <td>

                                </td>
                            </tr> -->
                            <tr>
                                <td colspan="2">
                                    <?php
                                        include '../../controllers/checkValidity.php';
                                        if(isset($_REQUEST['error'])) 
                                        {            
                                            foreach ($_SESSION as $key => $value) {
                                                if (!isset($_SESSION[$key]) or empty($value) && $key != '#menuPath' && $key != '#tabname') {
                                                    echo $key. " not set! <br>";                                                   
                                                }
                                            }
                                            if(isset($_SESSION['password']) && $_SESSION['password'] != $_SESSION['confirmPassword'] )                                
                                            {
                                                echo "password does not match!!! <br>";
                                            }else if(isset($_SESSION['password']) && !empty($_SESSION['password']))
                                            {
                                                if (!validatePassword($_SESSION['password'])) {
                                                    echo "Use a stronger password. [1 special char, 1 uppercase, minimum length 5] <br>";
                                                }
                                            }
                                            if(!isset($_SESSION['gender']))
                                            {
                                                echo "gender not set! <br>";
                                            }   
                                            if(isset($_SESSION['email']) && !empty($_SESSION['email']))
                                            {
                                                echo $_SESSION['email'];
                                                if (!isEmailValid($_SESSION['email'])) {
                                                    echo "Email address is not valid <br>";
                                                }
                                            }

                                            if(isset($_SESSION['dob']) && !empty($_SESSION['dob']))
                                            {
                                                $dateString = $_SESSION['dob']; // A date of birth to check
                                                $dateString = explode('-',$dateString);
                                                // print_r($dateString);
                                                // get the users Date of Birth
                                                $BirthDay   = $dateString[2];
                                                $BirthMonth = $dateString[1];
                                                $BirthYear  = $dateString[0];

                                                //convert the users DoB into UNIX timestamp
                                                $stampBirth = mktime(0, 0, 0, $BirthMonth, $BirthDay, $BirthYear);

                                                // fetch the current date (minus 18 years)
                                                $today['day']   = date('d');
                                                $today['month'] = date('m');
                                                $today['year']  = date('Y') - 15;

                                                // generate todays timestamp
                                                $stampToday = mktime(0, 0, 0, $today['month'], $today['day'], $today['year']);
                                                // echo $stampToday;
                                                if ($stampBirth > $stampToday) {
                                                    echo 'User is NOT 15 years old, sorry!';
                                                }
                                            }
                                        }else if(isset($_REQUEST['userExist']))
                                        {
                                            echo "username or email already exist!";
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
    


<script>
    

    function confPass()
    {
        let k = 0;
        let p1 = document.getElementById('cpassword').value;
        let p2 = document.getElementById('password').value;
        if(p1 !== p2)
        {
            document.getElementById('passMatch').innerHTML = 'Password does not match';
        }else
        {
            document.getElementById('passMatch').innerHTML = '';
        }
    }

    function nameValidation()
    {
        const usernameInput = document.getElementById('name');
        const username = usernameInput.value.trim();

        if (username === '') {
            document.getElementById('nameAlert').innerHTML = 'name cannot be empty!';
        } else{
            document.getElementById('nameAlert').innerHTML = '';
        }
    }

    function emailValidation() {
        let email = document.getElementById('email').value;
        // alert(email.indexOf('@'));
        if (email.indexOf('@') < 1 || email.lastIndexOf('.') < email.indexOf('@') + 2 || email.lastIndexOf('.') + 2 >= email.length) {
            document.getElementById('emailAlert').innerHTML = 'Email format invalid!';
        }else
        {
            document.getElementById('emailAlert').innerHTML = '';
        }
    }

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
            document.getElementById('passAlert').innerHTML = '';
        }else 
        {
            // alert('shamim');
            document.getElementById('passAlert').innerHTML = 'Password not strong enough';
        }
    }   


</script>

<tr height="80px">
        <td colspan="3" align="center">
            <p>copyright © 2023</p>
        </td>
    </tr>
</table>
</body>

</html>