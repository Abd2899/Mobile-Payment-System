<html>
<head><style>
body{
	background:url('d1.jpg');
		background-repeat:no-repeat;
	background-attachment:fixed;
	background-position:center;
	background-size:1570px 1700px;
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
<h1 style="color:steelblue;font-family:comic sans MS;font-size:50px;">ADMIN FORM</h1>
<table align="center" width=550 height=200 cellspacing="40">
<tr><td align="center" width=150 height=60 bgcolor="steelblue" class="id"><a href="mobpay.php"><font size="6px" color="ghostwhite">View MobileRecharge PayStatus</font></a></td></tr>
<br>
<br>
<tr><td align="center" width=150 height=60 bgcolor="steelblue" class="id"><a href="elecpay.php"><font size="6px" color="ghostwhite">View ElectricityBill PayStatus</font></a></td></tr>
<br>
<br>
<tr><td align="center" width=150 height=60 bgcolor="steelblue" class="id"><a href="dthpay.php"><font size="6px" color="ghostwhite">View DTHRecharge PayStatus</font></a></td></tr>
<br>
</table>
</center>
<center><a href="adm.php"><input type="button" style="font-size:20px;" class="id1" value="BACK" /></a></center>
<a href="logout.php"><input type="button" style="font-size:20px;" class="id4" value="LOGOUT" /></a>
</body></html>