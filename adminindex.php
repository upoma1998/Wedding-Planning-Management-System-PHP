<<?php
$dBServername="localhost";
$dBUsername="root";
$dBPassword="";
$dBname="ip";
$conn=mysqli_connect($dBServername,$dBUsername,$dBPassword,$dBname);
if(!($conn) )
{
    die("Connection failed:".mysqli_connect_error());
}
?>
<html>
    <head>
        <title>Login and Registration form design</title>
        <link rel="stylesheet" href="style.css">
    
    </head>
    <body>
        <div class="login-page">
            <div class="form">

              
                    <form action="login.php" method="post">
                    <input type="text" name="username" placeholder="user name"/><br>
                    <input type="password"name="password" placeholder="password"/><br>
                    <input type="submit" name="submit" value="Login"/>

                    <?php
                    if(isset($_GET["newpwd"]))
                    {
                        if($_GET["newpwd"]=="passwordupdated")
                        {
                            echo '<p class="loginsucess"> Your password has been reset! </p>';
                        }
                    }
                    ?>

                    <p class="message">Not Registered? <a href="indexlg.html">Register</a> </p>
                    <span class="psw" style="color: green ;" ><a href="reset.php">Forgot your password?</a></span>
                </form>
            </div>

        </div>
        


        
    </body>
</html>