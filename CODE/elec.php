<?php
	session_start();
?>
<?php
	include 'connect.php'
?>
<?php
	echo "<center>";echo "<h2>";echo "<font color='darkcyan'>";echo "Welcome";echo " ";echo $_SESSION['username'];echo "</font>";echo "</h2>";echo "</center>";
?>

<body background=mb.jpg><center>
<h1 style="font-family:comic sans MS;color:darkcyan;">Online Electricity Bill Payment</h1>
<form method="post" role="form" style="color:darkcyan;">
<?php
	if(isset($_POST['submit']))
	{
		
		$usrname=$_SESSION['username'];
		$srno = $_POST['serno'];
		$amt=$_POST['amount'];
		$stat="not paid";
		$_SESSION['status']=$st;
		$sql="INSERT into elec(username,serviceno,amount,status)  VALUES('$usrname','$srno','$amt','$stat')"
;
	if($conn->query($sql) ==TRUE)
	{
		header('location:elec1.php');
		$_SESSION['serviceno']=$srno;
	}
	else{
		echo "error";
	}
	}
?>
<b><font size="5px"><i>Service  Number:</i></font></b> <input type="number" name="serno" maxlength="13" />
<br/><br/>

			<label for=amount><b><font size="5px"><i>Amount:</i></font></b></label>
			<input id=amount name=amount type=number required /><br/><br/>
<input type="submit" name="submit" id="submit" style="font-size:20px;color:darkcyan;" value="submit" />
</form>

<center><a href="paycategory1.php"><input type="button" style="font-size:15px;color:darkcyan;" value="BACK" /></a></center>
</center>
</body>















































































































