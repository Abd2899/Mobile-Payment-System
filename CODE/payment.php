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

		color:GHOSTWHITE;
	}
     </style>
</head>
    <body bgcolor="darkcyan">
<center>
<div style=font-size:45px;height:80px;>
PAYMENT FORM
</div>
</center>
<section>

<form method=post id=payment action="pay.php">
 <fieldset>
        <legend>Card Details</legend>
        <ul>
            <li>
            <fieldset>
                <legend>Card Type</legend>
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
                <label for=cardnumber>Card Number</label>
                <input id=cardnumber  name=cardnumber type=text maxlength=16 required /><br/><br/>
            </li>
	    <li>
                <label for=namecard>Name on Card</label>
                <input id=namecard name=namecard type=text placeholder="Exact name as on the card" required /><br/><br/>
            </li>
	    <li>
	        <label for=expiry>Expiry Date</label>
	        <input id="date" name=date type="date"><br/><br/>
	    </li>
            <li>
                <label for=secure>CVV</label>
                <input id=secure method=post maxlength=3 name=secure type=password required /><br/><br/>
            </li>
		<li>
			<label for=amount>AMOUNT</label>
			<input id=amount name=amount type=number required /><br/><br/>
		</li>
            
        </ul>
    </fieldset>
	 </fieldset>


<center>	 
<input type="submit" value="submit" name="submit" class="btn btn-lg btn-default"  />
</form>
</center>
</body>
</html>