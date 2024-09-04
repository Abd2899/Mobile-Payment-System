 <?php include 'connect.php';?>

<html>
<head>
<style>

body, html {
    height: 100%;
    margin: 0;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
border-right:3px solid #bbb;

}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 26px;
    text-decoration: none;
 background-color: #333;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: HotPink;
}

li.dropdown {
    display: inline-block;
}
span
{
	color:red;
	text-decoration:none;
	font-size:120;
}
</style>



<title>REGISTRATION FORM</title>
</head>
<body background="mb.jpg">
<center>
<div style=font-size:45px; height:80px; background-color:lightviolet;>
REGISTRATION FORM</div>
</center>



<tr>
<th scope="col"><div align="center"  style="background:#FF0000" >
</div>&nbsp;</th>
</tr>
</table>

<center>
<form role="form" method="post" action="home.html"><?php
        if(isset($_POST['submit'])){

$fname = $_POST['fm'];

$lname = $_POST['lm'];
$passwd = $_POST['pass'];
$uemail = $_POST['email'];
$sql="INSERT into rform(First Name,Last Name,Email Address,Set A Password) VALUES ('$fname','$lname','$uemail','$passwd')";

if($conn->query($sql) === TRUE){
 echo "Thank you for registering\n";
header('Location: login.php');    }

 else{
  echo "Error: " . $sql . "<br>" . $conn->error;

 }
 
  }  
?>
<center>
<img src='register.jpg'  height=200px width=500px >

<br>
<label class="control-label">First Name<span class="req">*:</span></label>

<input type="text" class="form-control" name="fm" placeholder="Enter Name here........"required/><br>
<br/>
<label class="control-label">Last Name<span class="req">*:</span></label>

<input type="text" class="form-control" name="lm" placeholder="Enter Name here........"required/><br>
<br/>


<label class="control-label">Email</label>
<input type="text" class="form-control" name="email"  placeholder="Enter Email here........"required/><br/>
<br/>
<label class="control-label">Set A Password<span class="req">*:</span></label>
<input type="password" id="password"  name="pass" minlength="8" maxlength="30" /><br><br>
<input type="submit" name="submit" id="submit"  value="register"   class="btn btn-lg btn-default" />

</center></form>






 
</body>
</html>
