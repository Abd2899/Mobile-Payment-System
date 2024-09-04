<html><head><style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    color : #00FF00;	
	width: 774px;
	margin: 0px;
	padding: 15px 0px 6px 0px;
	background-color:plum;
        
}
body{
	background:url("back.jpg");

	background-repeat:no-repeat;

	background-attachment:fixed;
	background-position:center;
	background-size:1630px 825px;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 10px;
     color : darkcyan;
}
tr:nth-child(even) {
    background-color:skyblue;
}
</style>
</head>
<body>
<?php
	session_start();
?>

<?php
include 'connect.php';
$sql="select * from dthrecg";
$result=$conn->query($sql);
echo "<center>";echo "<h1 style='font-family:comic sans MS;color:plum'>";echo "DTHRecharge PayStatus";echo "</h1>";echo "</center>";
	echo "<br>";echo "<br>";echo "<br>";
echo "<center>";
echo "<table border=1>
	<tr><th>Username</th><th>Subscriberid</th><th>Amount</th><th>Operator</th><th>Status</th></tr>";
while($row=mysqli_fetch_array($result))
{

	echo "<tr><td>".$row['username']."</td><td>".$row['subscriberid']."</td><td>".$row['amount']."</td><td>".$row['operator']."</td><td>".$row['status']."</td></tr>";
}
echo "</table>";
echo "</center>";
?>
<br/><br/>
<center><a href="paystatus.php"><input type="button" style="font-size:15px;color:darkcyan;" value="BACK" /></a></center>
</body>
</html>