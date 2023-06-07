<!DOCTYPE html>
<html>
<head>
  <title>File Upload</title>
</head>
<body>
<form method="post" entype="multipart/form-data">

      <label>Ti</label>
      <input type="text" name="title">
      <label>File Upload</label>
      <input type="File" name="submit">
</form>
</body>
</html>


<?php 


$dBServername="localhost";
$dBUsername="root";
$dBPassword="";
$dBname="ip";
$conn=mysqli_connect($dBServername,$dBUsername,$dBPassword,$dBname);
if(isset($_POST("submit")))
{
   $title=$_POST["title"];
   $pname=rand(1000,10000)."-".$_FILEST["file"]["name"];
   $tname=$_FILES["files"]["tmp_name"];
   $upload_dir='/images';
   move_uploaded_file($tname, $upload_dir.'/'.$pname);
   $sql="INSERT into fileup(title,image) VALUES ('$title','$pname')";
   if(mysqli_query($conn,$sql))
   {
       echo"File Sucessfully uploaded";
   }
   else
   {
        echo"Error";
   }

}