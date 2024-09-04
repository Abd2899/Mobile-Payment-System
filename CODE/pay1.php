<?php
	session_start();
?>
<body style="background-color:white;">
<?php
include 'connect.php';
$usrname=$_SESSION['username'];
$mobno=$_SESSION['mobileno'];
$cardtype = $_POST['cardtype'];
$cardnumber= $_POST['cardnumber'];
$namecard=$_POST['namecard'];
$date=$_POST['date'];
$cvv=$_POST['secure'];
$amount=$_POST['amount'];

$b="select * from payment where `card number`='" .$cardnumber. "'";

$r=mysqli_query($conn,$b);
if(mysqli_num_rows($r)>0)
{
	$ro=mysqli_fetch_assoc($r);

		if($ro['balance']<$amount)
		{
			echo "your balance is insufficient for payment";
		}
		else
		{
		$ba=$ro['balance']-$amount;
		$query="update payment set balance='".$ba."' where `card number`='".$cardnumber."'";
		$res=mysqli_query($conn,$query);
		$st=$_SESSION['status'];
		$s="paid";
		$que="update mrecg set status='$s' where Username='$usrname' and mobileno='$mobno'";
		$res1=mysqli_query($conn,$que);
		header('location:paysuccess.php');
		}
	
}
else
{
	header("location:paypage1.php");
}
?>
</body>
