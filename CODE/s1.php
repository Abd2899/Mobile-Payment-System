<html>
<style>
body
{
background:url("bg5.jpg");
color:DarkRed;
}
</style>
<body>
<?php
include 'connect.php';
session_start();
$studentid= $_POST['id'];
echo "<center>";
echo "<h1>";echo "CHALLANA";echo "</h1>";
echo "<br>";
echo "<br>";
$sql="SELECT * FROM student WHERE STUDENTID='$studentid'";
$result = $conn->query($sql);
while($row=mysqli_fetch_array($result))
{
	echo "<table width='10px' align='center' style='font-size:20;'>";
	echo "<tr>";echo "<td  style='padding-top:2%'>";echo "<font color='black'>";echo "STUDENTID:";echo $row['STUDENTID'];echo "</font>";echo "</td>";echo "</tr>";
	echo "<br>";
	echo "<br>";
	echo "<tr>";echo "<td  style='padding-top:2%'>";echo "<font color='black'>";echo "NAME   :";echo $row['LNAME'];echo $row[ 'FNAME' ];echo "</font>";echo "</td>";echo "</tr>";
	echo "<tr>";echo "<td style='padding-top:2%'>";echo "<font color='black'>";echo "COURSE:";echo $row['COURSE'];echo "</font>";echo "</td>";echo "<tr>";
	echo "<tr>";echo "<td style='padding-top:2%'>";echo "<font color='black'>";echo "BRANCH:";echo $row['BRANCH'];echo "</font>";echo "</td>";echo "<tr>";
	echo "</table>";
}
	
$_SESSION['STUDENTID']=$studentid;
?>
<br>
<br>
<center>
<h3><a href ="s3.php">Click here to pay fees</a></h1> 
</center>
</body>
</html>