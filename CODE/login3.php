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
background:url("mb.jpg");
color:DarkBlue;
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
    background-color:#5DADE2;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 8%;
}
input[type=button]
{
	background-color:#5DADE2;
	color:white;
	padding:14px 20px;
	margin:8px 0;
	border:none;
	cursor:pointer;
	width:8%;
}
.id1{
	position:absolute;
	right:0;
	left:20;
}
</style>
<body>

<center>
<div style="font-size:45px;height:80px;background-color:lightviolet">
ADMIN FORM
</div>
</center>
 <center>
<h2 style="color:#5DADE2;font-family:Comic Sans MS;">LOGIN FORM</h2></center>

<form action="success1.php" method="post">
   <center>

     
     
  <label class="control-label" style="font-size:22px;">Username</label>

       <input type="text" style="font-size:20px;"name="Username"   placeholder="Enter Username here........"/><br/><br/><br/>

   
    <label style="font-size:22px;">password</label>
       <input type="password" name="password"/><br/><br/>

      
 <input type="submit" style="font-size:20px;" name="submit"  value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;
<a href="home1.html"><input type="button" style="font-size:20px;" value="Back" /></a>
</center>
  </form>
 </body>
</html>
