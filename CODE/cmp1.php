<?php
	session_start();
?>
<?php include 'connect.php'
?>

<?php
$com=$_POST['complaints'];
$usname=$_SESSION['username'];
$sql="INSERT into comp(complaint,username)  VALUES('$com','$usname')"
;
if($conn->query($sql)==TRUE)
{
	echo "<br>";echo "<br>";echo "<br>";
	echo "<center>";
	echo "<h2 style='color:Darkcyan;font-size:45px;'>";echo "your Problem will be Resolved soon";echo "</h2>";echo "</center>";
}
else
{
	echo "query not executed";
}
?>
<html>
<head>
<style>

.id4{
	position:absolute;
	right:100;
	top:50;
}
input[type=button]
{
	background-color:darkcyan;
	color:white;
	padding:14px 20px;
	margin:8px 0;
	border:none;
	cursor:pointer;
	width:10%;
}
</style>
</head>
<body>
<a href="logout.php"><input type="button" style="font-size:20px;" class="id4" value="LOGOUT" /></a>
</body>
</html>