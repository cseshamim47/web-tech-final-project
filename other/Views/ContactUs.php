<?php 
    require_once 'menu.php';
?>
    <html>
        <head>
            <title>contact us</title>
            <link rel="stylesheet" href="style.css">
        </head>

    <body>
        <h1 align=center>Contact Us</h1>
        
    <?php
        require_once '../Models/OwnersModel.php';
	    Owners()
    ?>

    <p>Search : </p>
    <form action="ContactUs.php" method="POST">
    <input type="text" value="" name="name" class="edit">
    <input type="submit" name="submit" class="btn" value="Search">
    </form>

    <?php 
        session_start();
        if(isset($_REQUEST['submit']))
        {
            require_once('../Models/OwnersModel.php');
            search($_REQUEST['name']);
        }
    ?>
    </body>


    </html>


    