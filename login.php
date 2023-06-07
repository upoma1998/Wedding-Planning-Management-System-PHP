<?php


$username=filter_input(INPUT_POST,'username');
$emailid=filter_input(INPUT_POST,'emailid');
$pass=filter_input(INPUT_POST,'pass');
$rpass=filter_input(INPUT_POST,'rpass');
if(!empty($username))
{
    if (!empty($password))
    {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "ip";
        // Create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
            }
            else
            {
                $sql="SELECT * from vendor WHERE username=\"".$username."\" and pass=\"".$pass."\" ";
                $eml="SELECT * from vendor WHERE username=\"".$username."\" ";

                $emlresult=mysqli_query($conn,$eml);

                $result=mysqli_query($conn,$sql);

                if(mysqli_num_rows($result)>0)
                {
                    echo "Login Succesful";
                    die();
                }
                else
                {   if(mysqli_num_rows($emlresult)>0)
                    {
                        echo "Password is incorrect";

                       // echo '<script> alert("Incorrect Password!!!")</script>';
                        //header("location:login.php");

                    }
                        else
                    {
                        echo "Your name was not registered";
                    }
                    die();
                }
            
    }
}
    else{
        echo "Password should not be empty";
        die();
        }
}
else
{
    echo "Email should not be empty";
    die();
}
?>