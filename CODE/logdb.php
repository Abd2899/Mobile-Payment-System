<body style="background-color:lightgreen;">
<?php

include 'connect.php';
session_start();
$uname = $_POST['Username'];
$upassword = $_POST['password'];
$sql="SELECT * FROM rform WHERE uname='$uname' AND pwd='$upassword'";
$result = $conn->query($sql);
if(!$row = $result->fetch_assoc()){
  echo "username or password is incorrect";
}
else {
   header('location:paycategory.html');

}
$_SESSION['un']=$uname;

 ?>
<center>
</center>
</body>
