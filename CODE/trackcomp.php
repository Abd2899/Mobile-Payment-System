<html><head><style>
body{
	background:url("im6.jpg");
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

input[type=button]
{
	background-color:skyblue;
	color:white;
	padding:14px 20px;
	margin:8px 0;
	border:none;
	cursor:pointer;
	width:6%;
}
</style>
</head>
<body>
<?php
	include "connect.php"
?>
<?php
$sql="select * from comp";
$result=$conn->query($sql);
	echo "<br>";echo "<br>";echo "<br>";
	echo "<center>";
	echo "<h1 style='font-family:comic sans MS;color:purple'>";echo "List of Complaints";echo "</h1>";
	echo "<table border=1 cellpadding='10'>";
		echo "<th style='font-size:25px;color:ghostwhite;'>";echo "Complaint";echo "</th>";echo "<th style='font-size:25px;color:ghostwhite;'>";echo "Username";echo "</th>";
while($row=mysqli_fetch_array($result))
{
		echo "<tr>";echo "<td style='font-size:15px;color:darkblue;'>";echo $row['complaint'];echo "</td>";echo "<td style='font-size:15px;color:darkblue;'>";echo $row['username'];echo "</td>";echo "</tr>";
		
}
echo "</table>";
echo "</center>";
?>
<br/><br/>
<center><a href="adm.php"><input type="button" style="font-size:20px;" value="BACK" /></a></center>
</body>
</html>