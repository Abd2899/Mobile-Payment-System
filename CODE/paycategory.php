<?php
	session_start();
?>

<?php
	include "connect.php"
?>
<?php
	echo "<center>";echo "<h2 style='color:Darkcyan;'>";echo "Welcome";echo " ";echo $_SESSION['username'];echo "</h2>";echo "</center>";
?>

<html>
<head>
<title>payment type</title>
<link href="default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body{
	background:url("bg7.jpg");
}
.id1{
	position:absolute;
	top:200px;
	left:200px;
}
.id2{
	position:absolute;
	top:200px;
	left:600px;
}

.id3{
	position:absolute;
	top:200px;
	left:1000px;
}

.id4{
	position:absolute;
	right:100;
	top:50;
}
</style>
</head>

<body>

<center>

<p style="text-align:center; color:#FF0000;"><strong><marquee behaviour="scroll">SELECT THE CATEGORY YOU WANT TO MAKE PAYMENT</marquee></strong></p>

<a href="mobrecg.php" class="id1"><img src="ss1.jpg" alt="" width="175" height="150" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="elec.php" class="id2"><img src="ss2.jpg" alt="" width="175" height="150" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="dthrecharge.php" class="id3"><img src="ss3.jpg" alt="" width="175" height="150" /></a>
<a href="logout.php" class="id4"><input type="button" style="font-size:16px;font-color:skyblue;" value="LOGOUT" /></a>

</center>
</body>
</html>