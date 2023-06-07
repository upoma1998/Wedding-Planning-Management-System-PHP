<html>
    <head>
        <title>Login and Registration form design</title>
        <link rel="stylesheet" href="style.css">
    
    </head>
    <body>
        <div class="login-page">
            <div class="form">

              
                <form action="http://localhost/work/login.php" method="POST">
                    <input type="text" name="username" placeholder="user name"/><br>
                    <input type="password"name="pass" placeholder="password"/><br>
                    <button>Login</button>
                    <?php
                    if(isset($_GET["newpwd"]))
                    {
                        if($-GET["newpwd"]=="passwordupdated")
                        {
                            echo '<p class="loginsucess">Your password has been reset!</p>';
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