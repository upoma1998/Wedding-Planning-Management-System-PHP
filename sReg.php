<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cuetcentrallibrary";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$username = mysqli__real_escape_string($conn,$_POST['usename']);
$pass=$_po
>
