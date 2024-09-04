<?php
	include "connect.php";
$uname=$_GET['username'];
$sql="DELETE from table2 where setusername='".$uname."'";
$result=$conn->query($sql);
$sql1="select * from table2";
$result1=$conn->query($sql1);
echo "<center>";echo "<h1 style='font-family:comic sans MS;color:darkcyan'>";echo "User Details";echo "</h1>";echo "</center>";
	echo "<br>";echo "<br>";echo "<br>";
echo "<center>";
echo "<table border=1>
	<tr><th>FirstName</th><th>LastName</th><th>EmailAddress</th><th>SetUsername</th><th>SetPassword</th><th>DeleteUser</th></tr>";
while($row=mysqli_fetch_array($result1))
{

	echo "<tr><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['emailaddress']."</td><td>".$row['setusername']."</td><td>".$row['setpassword']."</td><td><a href='delete.php?username={$row['setusername']}'>Delete</a></td></tr>
	";
}
echo "</table>";

