<?php
	session_start();
?>
<?php
	include "connect.php"
?>
<?php
	echo "<center>";echo "<h2>";echo "Welcome";echo " ";echo $_SESSION['username'];echo "</h2>";echo "</center>";
?>
<html>
<head><title>complaints</title>
<style>
body{
	background:url("mb.jpg");
}
input[type=submit]
{
    background-color:darkcyan;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 8%;
}
</style></head>
<body>
<center>
<form method="post" action="cmp1.php">
<h1 style= color:#008B8B;>Complaints!!</h1>
<textarea rows="4" cols="50" name="complaints">

</textarea><br/><br/><br/><br/>
 <input type="submit" style="font-size:20px;font-family:comic sans MS;" name="submit" value="submit" />
</form>
</center>

</body>
</html>