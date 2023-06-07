<html>
    <body>
        <form method="post">
            <p>EMAIL: </p>
            <input type="text" name="email"><br><br>
            <p>Subject: </p>
            <input type="text" name="subject"><br><br>
            <p>Body: </p>
            <input type="text" name="body"><br><br>
            <input type="submit" name="submit"><br><br>
        </form>
    </body>
</html>
<?php

if(isset($_POST["submit"]))
{
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $body=$_POST["body"];
    
    
    if(mail($email, $subject, $body)){
        echo "succes";
    }
    else {
        echo "failed";
    }
}
    
?>