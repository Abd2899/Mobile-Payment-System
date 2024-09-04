<?php
	session_start();
?>
<?php
	include "connect.php"
?>
<?php
	echo "<center>";echo "<h2>";echo "Welcome";echo " ";echo $_SESSION['username'];echo "</h2>";echo "</center>";
?>
<form role="form" method="post">
<?php
	if(isset($_POST['submit']))
	{
		
		$usrname=$_SESSION['username'];
		$mobno = $_POST['mobile'];
		$stype =$_POST['sim'];
		$amt=$_POST['amount'];
		$stat="not paid";
		$_SESSION['status']=$st;
		$_SESSION['mobileno']=$mobno;
		$sql="INSERT into mrecg(Username,mobileno,simtype,amount,status)  VALUES('$usrname','$mobno','$stype','$amt','$stat')"
;
	if($conn->query($sql) ==TRUE)
	{
		header('location:payment1.php');
	}
	else{
		echo "error";
	}
	}
?>
<html>
<head><title>mobilerecharge</title>
<style>
body{
	background:url("bg2.jpg");
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-position:center;
	background-size:1550px 1050px;
	color:Blue;
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
<div style="font-size:45px;height:80px;">
MOBILE RECHARGE DETAILS
</div>
<form>

<font size="5px">Mobile:</font>
<input type="number" class="form-control" name="mobile"  maxlength=10 placeholder="Enter Mobile number here........" required="required" /><br/>
<br/>
<font size="5px">select sim type:</font>
<select name="sim" type="text">
<option name="sim">IDEA</option>
<option name="sim">VODAFONE</option>
<option name="sim">RELIANCE</option>
<option name="sim">BSNL</option>
<option name="sim">TATADOCOMO</option>
<option name="sim">AIRTEL</option>
</select>
<br/><br/>
			<label for=amount><font size="5px">Amount:</font></label>
			<input id=amount name=amount type=number required />

<div id="menu">
	<ul>
	<li>
	<input type="submit" name="submit" style="font-size:20px;color:darkcyan;" value="Make Recharge" class="btn btn-lg btn-default" /></li></ul>
</div></center>
</form>
<a href="logout.php" class="id4"><input type="button" style="font-size:20px;color:blue;" value="LOGOUT" /></a>
<center><a href="paycategory1.php"><input type="button" style="font-size:20px;color:darkcyan;" value="BACK" /></a></center>
</body>
</html>
