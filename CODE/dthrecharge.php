
<?php
	session_start();
?>
<?php
	include "connect.php"
?>
<?php
	echo "<marquee>";echo "<center>";echo "<h2 style='color:DarkCyan;'>";echo "Welcome";echo " ";echo $_SESSION['username'];echo "</h2>";echo "</center>";echo "</marquee>";
?>
<?php
	if(isset($_POST['submit']))
	{
		$usrname=$_SESSION['username'];
		$sid = $_POST['mobile'];
		$amt=$_POST['amount'];
		$op=$_POST['operator'];
		$stat="not paid";
		$_SESSION['status']=$st;
		$_SESSION['subscriberid']=$sid;
		$sql="INSERT into dthrecg(username,subscriberid,amount,operator,status)  VALUES('$usrname','$sid','$amt','$op','$stat')"
;
	if($conn->query($sql) ==TRUE)
	{
		header('location:payment3.php');
	}
	else{
		echo "error";
	}
	}
?>
<html>
<head><style>
body{
	
	background:url("bg3.jpg");
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-position:center;
	background-size:1550px 1050px;
}
</style>
</head>
<body bgcolor="white"><center>
<h1 style="font-family:comic sans MS;color:darkcyan;">DTH RECHARGE</h1>
<form name="dthrecharge" method="post" style="color:darkcyan;font-size:20px;" >
 Enter subscriber ID: <input type="text" name="mobile" required="required" maxlength="4">
<br/><br/>
Enter Amount: <input type="number" name="amount" required="required" maxlength="1000">
<br/></br>
Select Operator:
<select name="operator" required="required">
 <option value="">Choose</option>
<option value="TATASKY">TATASKY</option>
<option value="VIDEOCON">VIDEOCON</option>
 <option value="HATHWAY">HATHWAY</option>
 <option value="SUNDIRECT">SUNDIRECT</option>
 <option value="BIGTV">BIG TV</option>
  </select>
 <br/><br />
<input type="submit" style="font-size:15px;color:darkcyan;" value="Make Recharge" name="submit" id="submit" class="btn btn-lg btn-default"  /><br/>
<br/>

<center><a href="paycategory1.php"><input type="button" style="font-size:15px;color:darkcyan;" value="BACK" /></a></center>
</form>
</center>
</body></html


