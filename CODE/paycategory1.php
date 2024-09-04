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
	background:url("d2.jpg");
}

.id4{
	position:absolute;
	right:100;
	top:50;
}
input[type=button]
{
	background-color:steelblue;
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

<center>

<p style="text-align:center; color:#FF0000;"><strong><marquee behaviour="scroll">SELECT THE CATEGORY YOU WANT TO MAKE PAYMENT</marquee></strong></p>

<table align="center" width=550 height=200 cellspacing="40">
<tr><td align="center" width=150 height=60 bgcolor="steelblue" class="id"><a href="mobrecg.php"><font size="6px" color="ghostwhite">MobileRecharge</font></a></td></tr>
<br>
<br>
<tr><td align="center" width=150 height=60 bgcolor="steelblue" class="id"><a href="elec.php"><font size="6px" color="ghostwhite">ElectricityBill</font></a></td></tr>
<br>
<br>
<tr><td align="center" width=150 height=60 bgcolor="steelblue" class="id"><a href="dthrecharge.php"><font size="6px" color="ghostwhite">DTH Recharge</font></a></td></tr>
<br>
</table>
<a href="logout.php"><input type="button" style="font-size:20px;" class="id4" value="LOGOUT" /></a>

</center>
</body>
</html>