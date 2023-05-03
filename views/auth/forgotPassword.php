

<html>
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body">
       <!-- header -->
        <?php include '../repeat/header.php';  ?>
        <!-- body -->

        <tr height="200px">
            <td width=20%></td>
            <td>
                <form method="get" action="forgotPassword.php">
                    <fieldset>
                        <legend>Login</legend>
                        <table align="center" >
                            
                            <tr height=40px>
                                <td>
                                    Username : 
                                </td>
                                <td>
                                    <input id="username" class="edit" type="text" name="username" value="">
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                <input id="button" onclick="ajax()" class="btn" type="button" name="submit" value="Submit"> 
                                </td>              
                            </tr>
                           
                        </table>
                    </fieldset>

                </form>

            </td>
            <td width=20%></td>
        </tr>
        

<!-- footer -->

</table>
<h1 id="alert" class="alert" align='center'></h1>
<table border="1" align="center" id="myTable" style="display:none;">
  <tr>
    <td>Name</td>
    <td id="name"></td>
    <td rowspan="3">
        <img src="" alt="" id="image" width="200px">
    </td>
  </tr>
  <tr>
    <td>Username</td>
    <td id="tusername"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td id="email"></td>
  </tr>
</table>

<h3 id="sendAlert" align='center'></h3>

<p align='center'>
    <input onclick="sendPass()" id="sendBtn" type="button" name="send" class='btn' value="Send" style="display: none;">
</p>

<table align="center">
<tr height="80px">
        <td colspan="3" align="center">
            <p>copyright © 2023</p>
        </td>
    </tr>
</table>

<script>
    let name = '';
    let Username = '';
    let email = '';
    let sec = 3;
    function sendPass()
    {
        let data = {'username': Username, 'email': email, 'name': name};
        let user = JSON.stringify(data);
        let xhttp = new XMLHttpRequest();
        xhttp.open('post', '../../controllers/sendPassword.php', true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send('data='+user);
        
        document.getElementById('alert').innerHTML = "Password Sending.... Please Wait!"
        
        xhttp.onreadystatechange = function(){
                    
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('alert').innerHTML = "New Password Sent!!!";
            }   
        }
    }
    function showTable() {
        var table = document.getElementById("myTable");
        var btn = document.getElementById('sendBtn');
        if (table.style.display === "none") {
            table.style.display = "table";
            btn.style.display = "block";
        }
    }
    function ajax()
    {
        let username = document.getElementById('username').value;

        let xhttp = new XMLHttpRequest();
        xhttp.open('get', '../../controllers/ajaxForgotPassword.php?username='+username, true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                let user = JSON.parse(this.responseText);
                if(user === null)
                {
                    document.getElementById('alert').innerHTML = 'No user found!!';
                }else
                {
                    console.log(user.name);
                    name = user.name;
                    Username = user.username;
                    email = user.email;
                    // console.log(username);
                    document.getElementById('sendAlert').innerHTML = "Get new password to your gmail?";
                    document.getElementById('sendAlert').style.color = 'rgb(100, 255, 108';
                    document.getElementById('alert').innerHTML = "Is this you?";
                    document.getElementById('name').innerHTML = user.name;
                    document.getElementById('tusername').innerHTML = user.username;
                    document.getElementById('email').innerHTML = user.email;

                    var image = document.getElementById("image");
                    image.setAttribute("src", "../../includes/"+user.profilePicture);
                    
                    showTable();
                }
            }
        }
    }
</script>
</body>