<body style="background-color:lightseagreen;">
<?php
include 'connect.php';
session_start();
$uname = $_POST['Username'];
$upassword = $_POST['password'];
$sql="SELECT * FROM admin WHERE username='$uname' AND password='$upassword'";
$result = $conn->query($sql);
if(!$row = $result->fetch_assoc()){
  
	echo "<center>";echo "<h1 style='font-family:comic sans MS;color:GhostWhite;'>";echo "Password Or Username is incorrect again";echo "</h1>";echo "</center>";
	echo "<br>";echo "<br>";
	echo "<center>";echo "<a href='login3.php'>";echo "<h3 style='color:ghostwhite;'>";echo "Click here to Try Again";echo "</h3>";echo "</a>";echo "</center>";
}
else {
	header('location:adm.php');
	$_SESSION['username']=$uname;
}


 ?>

</body>

