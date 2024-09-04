<html>
<head><style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    color : #00FF00;	
	width: 774px;
	margin: 0px;
	padding: 15px 0px 6px 0px;
	background-color:skyblue;
        
}
body{
	background:url("im6.png");
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 10px;
     color : darkcyan;
}
tr:nth-child(even) {
    background-color:ghostwhite;
}
</style></head>
<body>
<?php
	session_start();
?>

<?php
include 'connect.php';
$sql="select * from mrecg";
$result=$conn->query($sql);
echo "<center>";echo "<h1 style='font-family:comic sans MS;color:darkcyan'>";echo "MobileRecharge PayStatus";echo "</h1>";echo "</center>";
echo "<center>";
echo "<table border=1>
	<tr><th>Username</th><th>MobileNo</th><th>Simtype</th><th>Amount</th><th>Status</th></tr>";
while($row=mysqli_fetch_array($result))
{

	echo "<tr><td>".$row['Username']."</td><td>".$row['mobileno']."</td><td>".$row['simtype']."</td><td>".$row['amount']."</td><td>".$row['status']."</td></tr>";	
}
echo "</table>";
echo "</center>";
?>
<br/><br/>
<center><a href="paystatus.php"><input type="button" style="font-size:15px;color:darkcyan;" value="BACK" /></a></center>
</body>
</html>