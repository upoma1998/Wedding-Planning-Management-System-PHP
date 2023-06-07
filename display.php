<!DOCTYPE html>
<html>
<head>
<title>Display Image</title>
</head>
<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("ip");
$res=mysql_query("select" * FROM  fileup");
while($row=mysqli_fetch_array($res))
{
    echo"<tr>";
    echo "<td>";?><img src="?php echo $row["title"];?>" height="100" width="100"><?php echo"</td>";
    echo "<td>";echo $row["image"];echo"</td>";
    echo "</tr>";

}
echo "</table>";
?>
</body>
</html>