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
    <head>
    <title>payment</title>
    <style>
	body{
		background:url("t1.jpg");
		background-repeat:no-repeat;
		background-attachment:fixed;
		background-position:center;
		background-size:1550px 1050px;
		color:GHOSTWHITE;
	}
     </style>
</head>
    <body>
<center>
<div style="font-size:45px;height:80px;font-family:comic sans MS;">
PAYMENT FORM
</div>
</center>
<section>

<form method=post id=payment action="pay2.php">
 <fieldset>
        <legend><font size="5px">Card Details</font></legend>
        <ul>
            <li>
            <fieldset>
                <legend><font size="5px">Card Type</font></legend>
                <ul><li>
                        <input id=visa name=cardtype type=radio />
                        <label for=visa>VISA</label>
                    </li>
		    
                    <li>
                        <input id=maestro name=cardtype type=radio />
                        <label for=maestro>MAESTRO</label>
                    </li>
                    <li>
                        <input id=rupay name=cardtype type=radio />
                        <label for=rupay>RUPAY</label>
                    </li>
                    <li>
                        <input id=mastercard name=cardtype type=radio />
                        <label for=mastercard>MASTER</label>
                    </li>
                </ul>
           
            </li>
            <li>
                <label for=cardnumber><font size="5px">Card Number</font></label>
                <input id=cardnumber  name=cardnumber type=text maxlength=16 required /><br/><br/>
            </li>
	    <li>
                <label for=namecard><font size="5px">Name on Card</font></label>
                <input id=namecard name=namecard type=text placeholder="Exact name as on the card" required /><br/><br/>
            </li>
	    <li>
	        <label for=expiry><font size="5px">Expiry Date</font></label>
	        <input id="date" name=date type="date"><br/><br/>
	    </li>
            <li>
                <label for=secure><font size="5px">CVV</font></label>
                <input id=secure method=post maxlength=3 name=secure type=password required /><br/><br/>
            </li>
		<li>
			<label for=amount><font size="5px">Amount</font></label>
			<input id=amount name=amount type=number required /><br/><br/>
		</li>
            
        </ul>
    </fieldset>
	 </fieldset><br/>


<center>	 
<input type="submit" style="font-size:15px;color:darkcyan;" value="SUBMIT" name="submit" class="btn btn-lg btn-default"  /></font><br/><br/>
<a href="elec1.php"><input type="button" style="font-size:15px;color:darkcyan;" value="BACK" /></a>
</form>
</center>
</body>
</html>