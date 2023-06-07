<?php

if(isset($_POST[reset-request-submit]))
{
    $selector =bin2hex(random_bytes(8));
    $token=random_bytes(32);

    
    $expires=date("U")+1800;

    require'dbh.inc.php';
    $userEmail=$_POST["email"];
    $sql="DELETE FROM pwdreset WHERE pswResetEmail=?";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        echo"There was an error";
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt,"s",$userEmail);
        mysqli_stmt_execute($stmt);
    }
    $sql="INSERT INTO pwdreset (pswResetEmail,pswResetSelector,pswResetToken,pswResetExpires) VALUES(?,?,?,?) ";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        echo"There was an error";
        exit();
    }
    else
    {
        $hashedToken=password_hash($token,PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt,"s",$userEmail,$selector, $hashedToken,$expires);
        mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);
    mysqli_close();


    $to=$userEmail;
    $subject='Reset your password for SHUVOBIBAHO';
    $message='<p>We received a password reset request.The link to reset your password is below.If you did not,you can ignore this email</p>';
    $message.='<p>Here is your password reset link:</br>';
    $message.='<a href="update.php"'</a></p>;
    $headers="From:shuvobibaho<shuvobibaho09@gmail.com>\r\n";
    $headers.="Reply-To:shuvobibaho09@gmail.com\r\n";
    $headers.="Content-type:text/html\r\n";
    mail($to,$subject, $message,$headers);
    header("Location:reset.php?reset=success");


}
else
{
    header("Location:index.php");
}



?>