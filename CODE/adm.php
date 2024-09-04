<?php
	session_start();
?>
<?php include 'connect.php'
?>


<?php
	echo "<marquee>";echo "<center>";echo "<h2 style='color:darkcyan;'>";echo "Welcome";echo " ";echo $_SESSION['username'];echo "</h2>";echo "</center>";echo "</marquee>";
?>

<html>
<head>
<title>manage accounts</title>
<center>
<style>
body{
	background:url("t5.png");
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-position:center;
	background-size:1550px 1050px;
}


.id4{
	position:absolute;
	right:100;
	top:50;
}
input[type=button]
{
	background-color:#5DADE2;
	color:white;
	padding:14px 20px;
	margin:8px 0;
	border:none;
	cursor:pointer;
	width:10%;
}
</style>
</center>
<body bgcolor="skyblue">
<center><h1 style="color:darkcyan;font-family:comic sans MS;font-size:50px;">ADMIN FORM</h1>
<a href="manacc.php"><img src="mb2.jpg" alt="" width="200" height="200" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="trackcomp.php"><img src="mb1.jpg" alt="" width="200" height="200" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="paystatus.php"><img src="mb3.jpg" alt="" width="200" height="200" /></a><br/>
<a href="logout.php"><input type="button" style="font-size:20px;" class="id4" value="LOGOUT" /></a>
</center>
</body>
</html>