<?php 

    include '../repeat/activity.php';
    require_once('../repeat/load.php');

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
                        <th><h2>Edit</h2></th>
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

                <fieldset>

                    <legend><h3>PROFILE</h3></legend>
                    <form method="post" action="../../controllers/editCheck.php">
                        <table border="0" width=100%>
                            <tr>
                                <td width=12%>Name</td>
                                <td width=30%>
                                    <input id="name" onkeyup="nameValidation()"  class="edit" type="text" name="#name" value="<?php echo isset($_SESSION['#name']) ? $_SESSION['#name'] : '' ?>">
                                </td>
                                <td>
                                    <p id="nameAlert"></p>
                                </td>
                                <td rowspan="3" align="center">
                                </td>
                                <td width=40%></td>
                            </tr>
                            <tr height=0>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input id="email" onkeyup="emailValidation()" class="edit" type="email" name="#email" value="<?php echo isset($_SESSION['#email']) ? $_SESSION['#email'] : '' ?> ">
                                </td>
                                <td>
                                    <p id="emailAlert"></p>
                                </td>
                            </tr>
                            <tr height=0>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>
                                    <input type="radio" name="#gender" <?php if(isset($_SESSION['#gender']) && $_SESSION['#gender']=='Male') echo "checked" ?> value="Male"/> Male
                                    <input type="radio" name="#gender" <?php if(isset($_SESSION['#gender']) && $_SESSION['#gender']=='Female') echo "checked" ?> value="Female"/> Female
                                    <input type="radio" name="#gender" <?php if(isset($_SESSION['#gender']) && $_SESSION['#gender']=='Other') echo "checked" ?> value="Other"/> Other <br>
                                </td>
                                <td></td>
                            </tr>
                            <tr height=0>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td>
                                    <input id="dob" type="date" name="#dob" value="<?php echo isset($_SESSION['#dob']) ? $_SESSION['#dob'] : '' ?>">
                                </td>
                                <td></td>
                            </tr>
                            <tr height=0>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="btn" type="button" name="#submit" value="Submit" onclick="ajax()">
                                </td>
                            </tr>   
                                              
                            <tr>
                                <td colspan="2">
                                        <h1 id="ajaxAlert" class="alert"></h1>

                                        <?php
                                            
                                            if(isset($_REQUEST['error'])) 
                                            {
                                                
                                                foreach ($_SESSION as $key => $value) {
                                                    if (!isset($_SESSION[$key]) or empty($value)) {
                                                        echo $key. " not set! <br>";     
                                                        break;                                               
                                                    }
                                                }
                                            }else if(isset($_REQUEST['dob']))
                                            {
                                                echo "You must be atleast 18 years old! <br>";
                                            }else if(isset($_REQUEST['email']))
                                            {
                                                echo "Email must be in valid format!! <br>";
                                            }
                                        ?>
                                </td>
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
    
    function ajax(){

        let gender = 'Male;'
        var ele = document.getElementsByName('#gender');
          
        for(i = 0; i < ele.length; i++) {
            if(ele[i].checked)
            {
                gender = ele[i].value;
            }
        }

        let username = document.getElementById('username').value;
        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let dob = document.getElementById('dob').value;
        
        console.log(name);
        console.log(email);
        console.log(gender);
        console.log(dob);
        console.log(username);
        
        let data = {'username': username, 'name': name, 'email': email, 'gender':gender, 'dob':dob};
        let user = JSON.stringify(data);

        let xhttp = new XMLHttpRequest();
        //xhttp.open('get', 'abc.php?username='+username, true);
        xhttp.open('post', '../../controllers/ajaxEditCheck.php', true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send('data='+user);

        xhttp.onreadystatechange = function(){
            
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('ajaxAlert').innerHTML = this.responseText;
            }
        }

    }

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


</body>


</html>

<?php
    // print_r($_SESSION);
?>