
<?php
	session_start();
?>

<html>
<head><style>
body{
	background:url("im2.jpg");
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-position:center;
	background-size:1550px 1050px;
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	background-color:ghostwhite;	
	width: 774px;
	margin: 0px;
	padding: 15px 0px 6px 0px;
	
        
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 15px;
     
}
tr:nth-child(even) {
   
}


</style>
</head>
<body>
<?php
include 'connect.php';
$srno=$_SESSION['serviceno'];
$sql="select * from ebill where servicenumber='".$srno."'";
$result=$conn->query($sql);
$row=mysqli_fetch_array($result);
if($row!=NULL)
{
	echo "<center>";echo "<h1 style='font-family:comic sans MS;color:darkcyan'>";echo "Service number Details";echo "</h1>";echo "</center>";
	echo "<br>";echo "<br>";echo "<br>";
echo "<center>";
echo "<table cellpadding='20px' border='1'>
  <tr>
    <td>ServiceNo</td>
    <td>".$row["servicenumber"]."</td>
    </tr>
  <tr>
    <td>Area</td>
    <td>".$row["area"]."</td>
    </tr>
  <tr>
    <td>Ercode</td>
    <td>".$row["ercode"]."</td>
  </tr>
  <tr>
    <td>Payamount</td>
    <td>".$row["payamount"]."</td> 
  </tr>
<tr>
    <td>Billdate</td>
    <td>".$row["billdate"]."</td>
    
  </tr><tr>
    <td>Duedate</td>
    <td>".$row["duedate"]."</td>
    
  </tr><tr>
    <td>Disconnectiondate</td>
    <td>".$row["disconnectiondate"]."</td>
    
  </tr>
</table>";
echo "</center>";
echo "<br>";echo "<br>";


echo "<center>";
echo "<a href='payment2.php'>";echo "<input type='button' style='font-size:15px;color:darkcyan;' value='CONTINUE PAYMENT' />";echo "</a>";echo "</center>";echo "<br>";
}
else
{
	echo "<center>";
	echo "<h2 style='color:darkcyan;'>";echo "Incorrect Service Number";echo "</h2>";
	echo "</center>";
}

?>

<center><a href="elec.php"><input type="button" style="font-size:15px;color:darkcyan;" value="BACK" /></a></center>
</body>
</html>


