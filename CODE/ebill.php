<?php
include 'connect.php';
session_start();
$sno=$_SESSION['mobile'];
$servno=$_POST['mobile'];

//$query="select * from ebill where `serviceno`='".$servno."';"
//$res=mysqli_query($conn,$query);
//$que=mysqli_fetch_assoc($res);
if($ro['serviceno']!=$servno)
{
	echo "invalid service number";
}
else
{
$query="select * from ebill where `serviceno`='".$servno."';"
$r=mysqli_query($conn,$query);
echo "print table";
}
?>