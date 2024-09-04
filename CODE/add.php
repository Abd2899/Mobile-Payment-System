<?php
include "connect.php"
?>
<html>
<head>
<style>
h1 {
	font-size:40px;
	color:blue;
	font-family:vardana;
   }
<center>
<div style="border-style:ridge;border-width:5px;margin:30px 90px 90px;">
<div style="font-size:45px;height:80px;background-color:lightgreen">
<br>
RVR&JC COLLEGE OF ENGINEERING
</br>
</div>
</center>
</style>
</head>
<body>
<br>
<h1><center> ADD STUDENT DETAILS </center></h1>
</br>
<center>
<form method="post" action="s1.php">
<div>
<center>
<table width="60px" align="center" style="font-size:20;">
<tr height="10">
<td> StudentId:<font color="black">*</font></td>
<td style="padding-top:2%"><input type="text" size=20 maxlength=10 name="id" required="required"><br>
</td>
</tr>
<tr height="10">
<td> FirstName:<font color="black">*</font></td>
<td style="padding-top:2%"><input type="text" size=20 maxlength=10 name="fname" required="required"><br>
</td>
</tr>
<tr height="10">
<td> LastName:<font color="black">*</font></td>
<td style="padding-top:2%"><input type="text" size=20 maxlength=10 name="lname" required="required"><br>
</td>
</tr>
<tr>
<td> Gender:<font color="black">*</font></td>
<td style="padding-top:2%">
<select name="gender" value="gender" required="required">
<option name="gender" value="">--Select Gender--</option>
<option name="gender" value="">Male</option>
<option name="gender" value="">Female</option>
</select><br>
</td>
</tr>
<tr>
<td>Email<font color="black">*</font></td>
<td style="padding-top:2%"><input type="text" size=20 maxlength=20 name="email" required="required"><br>
</td>
</tr>
<tr>
<td>Contactno:<font color="black">*</font></td>
<td style="padding-top:2%"><input type="text" size=20 maxlength=10 name="contactno" required="required"><br>
</td>
</tr>
<tr>
<td>Course<font color="black">*</font></td>
<td style="padding-top:2%">
<select name="course" value="course" required="required">
<option name="course" value="">--Select Course--</option>
<option name="course" value="">"BTech"</option>
<option name="course" value="">"MTEech"</option>
<option name="course" value="">"MBA"</option>
<option name="course" value="">"MCA"</option>
</select><br>
</td>
</tr>
<tr>
<td>Branch<font color="black">*</font></td>
<td style="padding-top:2%">
<select name="branch" value="branch" required="required">
<option name="branch" value="">--Select Branch--</option>
<option name="branch" value="">"CSE"</option>
<option name="branch" value="">"ECE"</option>
<option name="branch" value="">"IT"</option>
<option name="branch" value="">"CIVIL"</option>
<option name="branch" value="">"MECH"</option>
</select><br>
</td>
</tr>
<tr>
<td> Join Year:<font color="black">*</font></td>
<td style="padding-top:2%"><input type="text" size=9 maxlength=4 name="Jyear" required="required"><br>
</td>
</tr>
</center>
</table>
</center>
<br>
<input type="submit" formaction="s1.php">
</form>
<br>
<form action="success.php">
<input type="submit" value="Back" formaction="success.php"><br>
</form>
<br></div></div>
</center>
</body>
</html>