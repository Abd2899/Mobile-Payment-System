<?php
	session_start();
?>

<body style="background-color:cadetblue;">

<?php
include 'connect.php';
?>

<?php
$uname = $_POST['username'];
$passwd = $_POST['password'];
$sql="SELECT * FROM table2 WHERE `setusername`='".$uname."' AND setpassword='".$passwd."'";
$result=$conn->query($sql);
if(!$row = $result->fetch_assoc()){
	echo "<center>";echo "<h1 style='font-family:comic sans MS;color:GhostWhite;'>";echo "Password Or Username is incorrect again";echo "</h1>";echo "</center>";
	echo "<br>";echo "<br>";
	echo "<center>";echo "<a href='login.php'>";echo "<h3 style='color:ghostwhite;'>";echo "Click here to Try Again";echo "</h3>";echo "</a>";echo "</center>";
}
else {
       header('location:cmp.php');
	$_SESSION['username']=$uname;
	
}

?>
