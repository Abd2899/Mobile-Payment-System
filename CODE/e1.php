<?php
include 'connect.php';
$servno=$_POST['serno'];
$sql="select * from ebill where serviceno='$servno'";
$result=$conn->query($sql);
$row=mysqli_fetch_array($result)
if($row==NULL)
{
	header("location:paysuccess.php");
}
else
{
	echo $row['area'];
}
?>