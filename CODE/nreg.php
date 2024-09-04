
<?php
	session_start();
?>


<?php include 'connect.php';
?>

<html>
<head>
<title>REGISTER</title>
<style>
body{
	background:url("bg3.jpg");
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-position:center;
	background-size:1550px 1050px;
}

input[type=text], input[type=password] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
</style>
</head>
<body>
<center>
<div style=font-size:45px; height:80px;>
sign up for free
</div><br/>
</center>
<center>
<form role="form" method="post">
<?php
        if(isset($_POST['submit'])){

$fname = $_POST['fn'];

$lname = $_POST['ln'];
$uemail = $_POST['email'];
$uname=$_POST['un'];
$passwd = $_POST['pass'];
$_SESSION['firstname']=$finame;
$_SESSION['lastname']=$laname;
$_SESSION['emailaddress']=$eid;
$_SESSION['setusername']=$sname;
$_SESSION['setpassword']=$spass;
$sql="INSERT into table2(firstname,lastname,emailaddress,setusername,setpassword)  VALUES('$fname','$lname','$uemail','$uname','$passwd')"
;
if($conn->query($sql) ==TRUE){
 echo "Thank you for registering\n";
header('Location: home1.html');    }

 else{
  echo "Error: " . $sql . "<br>" . $conn->error;

 }
 
  }  
?>
<label class="control-label"><font size="5px" color="darkblue">first name:</font></label>

<span class="req">*</span>      <input type="text" name="fn"   placeholder="Enter Username here........ " required="required"/><br/><br/>
<label class="control-label"><font size="5px" color="darkblue">last name:</font></label><span class="req">*</span><input type="text" name="ln" required="required"/><br/><br/>
<label class="control-label"><font size="5px" color="darkblue">email address:</font></label><span class="req">*</span><input type="text" name="email" required="required"/><br/><br/>
<label class="control-label"><font size="5px" color="darkblue">setusername:</font></label><span class="req">*</span><input type="text" name="un" required="required"/><br/><br/>
<label class="control-label"><font size="5px" color="darkblue">setpassword:</font></label><span class="req">*</span><input type="password" method="post" name="pass" required="required"/><br/><br/>
<input type="submit" style="font-size:20px;font-color:darkcyan;" name="submit" value="submit" />
</center>
</body>
</html>