<?php


$username=filter_input(INPUT_POST,'username');

$password=filter_input(INPUT_POST,'password');

if( empty($username) && empty($password) )
{
    echo "Username and password should not be empty";
    die();
} 

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
                            $sql="SELECT * from admin WHERE username=\"".$username."\" and password=\"".$password."\" ";
                            $eml="SELECT * from admin WHERE username=\"".$username."\" ";

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
                else if(empty($password))
                {
                    echo "Password should not be empty";
                    die();
                }

            }
    

            else if(empty($username))
            {
                echo "Username should not be empty";
                die();
            }
?>