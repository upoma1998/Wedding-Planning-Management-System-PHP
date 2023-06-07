<?php
$dBServername="localhost";
$dBUsername="root";
$dBPassword="";
$dBname="ip";
$conn=mysqli_connect($dBServername,$dBUsername,$dBPassword,$dBname);
if(!($conn))
{
    die("Connection failed:".mysqli_connect_error());
}