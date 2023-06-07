<?php
    $username = $_POST['username'];
    $emailid = $_POST['emailid'];
    $phonenumber=$_POST['phonenumber'];
    $password = $_POST['password'];
    $cpassword=$_POST['cpassword'];
    

    if(!empty($username)  || !empty($emailid) || !empty(phonenumber) ||!empty(password) || !empty(cpassword) )
    {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "ip";

        //connection to database is given here
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        //if there is error while connecting
        if($conn->connect_errno){
            die('Connect Error(' . $conn->connect_error);
        } else{
           $SELECT = "SELECT emailid From client Where emailid=? Limit 1";
            $INSERT = "INSERT Into client ( username, emailid,phonenumber, password,cpassword) values(?,?,?,?,?) ";

            //prepare statement
           $stmt= $conn->prepare($SELECT);
            $stmt->bind_param("s",$emailid);
            $stmt->execute();
            $stmt->bind_result($emailid);
            $stmt->store_result();
            $rnum = $stmt->num_rows;
            

            if($rnum==0) {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sssss", $username,  $emailid, $phonenumber, $password, $cpassword);
                $stmt->execute();
                echo "New record inserted successfully";
            } else {
                echo "Someone already registered using this email";
            }
            $stmt->close();
            $conn->close();
 }
    } else{
        echo "All fields are necessary";
        die();
    }

?>
