<?php
 session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Student Login</title>
        <link rel="stylesheet" href="updatestyle.css">
    </head>
    <body>
        <?php
        if(isset($_SESSION['login_user1'])) { ?>
        <div class="loginbox">
            <img src="1200px-CUET_Vector_ogo.svg.png" class="image">
            <h1>Update Password Here!</h1>

            <form action="http://localhost/LibraryWebsite/studentupdatesql.php" method="post">
                <p>Username</p>
                <input type="text" name="uid" placeholder="Enter username">
                <p>Old Password</p>
                <input type="password" name="opass" placeholder="Enter password">
                <p>New Password</p>
                <input type="password" name="npass" placeholder="Enter password">
                <input type="submit" name="" value="Login">
            </form>
        </div>
       <?php 
        }
        else {
        ?>
         <script type="text/javascript">
        alert("Please Login to go to Update Password!");
        window.location="StudentLogin.php";
        </script>
        <?php
            }
        ?>
    </body>
</html>