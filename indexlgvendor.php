<html>
    <head>
        <title>Login and Registration form design</title>
        <link rel="stylesheet" href="style.css">
    
    </head>
    <body>
        <div class="login-page">
            <div class="form">
            
                
                    <form action="http://localhost/work/studentReg.php" method="POST">
                    <input type="text" name="username" placeholder="user name"/><br>
                    <input type="text" name="emailid" placeholder="email id"/><br>
                    <input type="text" name="phonenumber" placeholder="phone number"/><br>
                    <input type="password" name="password" placeholder="password"/><br>
                    <input type="password" name="cpassword" placeholder="Confirm password"/><br>
                    <label>Select<label><br><br>
                    <select name="gender">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>


                  
                
                   

                    <button>Create</button>
                    <p class="message">Already Registered? <a href="index.html">Login</a> </p>
                    <p class="message">Not a client? <a href="index.html">Switch</a> </p>
                    </form>
            
            </div>

        </div>
    </body>
    </html>