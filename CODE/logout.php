<?php
	session_start();
?>

<?php
	include "connect.php"
?>
<?php
	echo "<center>";echo "<marquee>";echo "<h2 style='color:red;'>";echo "you have successfully logged out";echo " ";echo $_SESSION['username'];echo "</h2>";echo "</marquee>";echo "</center>";
?>




<html>
<head>
<title>|| MOBILE PAYMENT SYSTEM||</title>
<link href="default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
</style></head>
<body>
<div id="header">
  <table width="200" align="center">
   <tr>
     <td height="112"><img src="1.jpg" alt="" width="770" height="210" /></td>
   </tr>
 </table>
</div>
<div id="footer">
  
    <p class="style1"><a href="home1.html"><img src="th.jpg" alt="" width="486" height="243" /></a></p>

</div>
</body>
</html>
