<?php include 'connect.php';?>


<html>
<head>

<link href="default.css" rel="stylesheet">


<title>
    login
  </title>

<style>
body
{
background:url("bg7.jpg");
color:Blue;
}

input[type=text], input[type=password] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=submit]
{
    background-color:cornflowerblue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}
input[type=button]
{
	background-color:cornflowerblue;
	color:white;
	padding:14px 20px;
	margin:8px 0;
	border:none;
	cursor:pointer;
	width:10%;
}
.id1{
	position:absolute;
	right:0;
	left:20;
}
</style>

<body>
<center>
<div style="font-size:45px; height:80px;font-family:Comic Sans MS;">
USER FORM
</div></center>
<div><a href="home1.html" class="id1"><input type="button" style="font-size:20px;" value="HOME" /></a></div><br/>
<form action="success.php" method="post">
       <center>
<h2 style="color:red;">LOGIN FORM</h2>

  <label class="control-label" style="font-size:22px;">username:</label>

       <input type="text" style="font-size:20px;" name="username"   placeholder="Enter Username here........" required="required"/><br/><br/><br/>

   
    <label style="font-size:22px;">password:</label>
       <input type="password" name="password" required="required"/><br/><br/>


 <input type="submit" style="font-size:20px;" name="submit" value="submit" /><br/><br/>
<font size="4px">Not Yet Registered?</font>&nbsp;&nbsp;&nbsp;<a href="nreg.php" style="font-size:20px;">REGISTER</a>     
</center>
  
</form>



 </body>
</html>
