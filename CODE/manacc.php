<html><head><style>
body{
	background:url("im3.jpg");
}

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

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 15px;
     color : ghostwhite;
}
tr:nth-child(even) {
    background-color:plum;
}


</style>
</head>
<body>
<?php
	session_start();
?>

<?php
include 'connect.php';
$sql="select * from table2";
$result=$conn->query($sql);
echo "<center>";echo "<h1 style='font-family:comic sans MS;color:darkcyan'>";echo "User Details";echo "</h1>";echo "</center>";
	echo "<br>";echo "<br>";echo "<br>";
echo "<center>";
echo "<table border=1>
	<tr><th>FirstName</th><th>LastName</th><th>EmailAddress</th><th>SetUsername</th><th>SetPassword</th><th>DeleteUser</th></tr>";
while($row=mysqli_fetch_array($result))
{

	echo "<tr><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['emailaddress']."</td><td>".$row['setusername']."</td><td>".$row['setpassword']."</td><td><a href='delete.php?username={$row['setusername']}'>Delete</a></tr>
	";
}
echo "</table>";
echo "</center>";
?>
<br/><br/>
<center><a href="adm.php"><input type="button" style="font-size:15px;color:darkcyan;" value="BACK" /></a></center>
</body>
</html>