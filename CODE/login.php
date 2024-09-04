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
    width: 8%;
}
input[type=button]
{
	background-color:cornflowerblue;
	color:white;
	padding:14px 20px;
	margin:8px 0;
	border:none;
	cursor:pointer;
	width:8%;
}
</style>

<body>
<center>
<div style="font-size:45px; height:80px;font-family:Comic Sans MS;">
USER FORM
</div>
</center>
<form action="success3.php" method="post">
      <center>
<h2 style="color:red;">LOGIN FORM</h2>

  <label class="control-label" style="font-size:22px;">username:</label>

       <input type="text" style="font-size:20px;" name="username"   placeholder="Enter Username here........" required="required"/><br/><br/><br/>

   
    <label style="font-size:22px;">password:</label>
       <input type="password" style="font-size:20px;" name="password" required="required"/><br/><br/>

<br/>     
 <input type="submit" style="font-size:20px;" name="submit" value="SUBMIT" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="home1.html"><input type="button" style="font-size:20px;" value="BACK" /></a>
</center>
  </form>



 </body>
</html>
