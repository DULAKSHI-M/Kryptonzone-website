<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>KryptonZone - Billing </title>
 <link rel="stylesheet" type="text/css" href="Billing.css">

</head>

<body>
<div class="navbar">
  <a href="indexnew.php">Home</a>
  <a href="AboutUs.php">About Us</a>
  <div class="dropdown">
    <button class="dropbtn">Products<i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="FaceCare.php">Face Care</a>
      <a href="BodyCare.php">Body Care</a>
      <a href="HairCare.php">Hair Care</a>
    </div>
  </div>
    <a href="ContactUs.php">Contact Us</a>
    <a href="Billing.php">Billing</a>
<div class="f">
<form>
  <input type="text" name="search" placeholder="Search...">
</form>
</div>
</div>

	
<h1> KRYPTON ZONE BILLING FORM </h1>
<form action="connect.php" method="post">
<table width="690" height="483" border="0" align="center">
<tr>
      <td width="167">Full Name</td>
      <td width="197"><input type="text" name="txtFName" id="txtFName"/></td>
      <td width="312"><label for="txtFName"></label></td>
    </tr>
    <tr>
      <td>Country</td>
	  <td><label for="txtCountry"></label>
      <input type="text" name="txtCountry" id="txtCountry"/></td>
      <td><label for="txtCountry"></label></td>
    </tr>
    <tr>
      <td>Street Address</td>
      <td><label for="txtSAddress"></label>
      <input type="text" name="txtSAddress" id="txtSAddress"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Town/City</td>
      <td><label for="txtT_C"></label>
      <input type="text" name="txtT_C" id="txtT_C"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Contact Number</td>
      <td><label for="txtCNumber"></label>
      <input type="text" name="txtCNumber" id="txtCNumber"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Email Address</td>
      <td><label for="txtEAddress"></label>
      <input type="text" name="txtEAddress" id="txtEAddress"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Order Notes</td>
      <td>
      <input list="cosmetics"/>
      </td>
    </tr>
    <tr>
      <td>The quantity of your things that you buy</td>
      <td><label for="txtRageNum"></label>
      <input type="number" name="txtRange" id="txtRange"/>
      </td>
      <td>Min value is 1 and Maximum value 1000 </td>
    </tr>
    <tr>
      <td>What day do you need to place the order?</td>
	  <td><input type="text" id="txtDate" name="txtDate"/></td>
      <td><p>February 25 2022 upwards</p></td>
    </tr>
    <tr>
      <td height="53">Is this your first online shopping on our site?</td>
	
      <td><input type="radio" name="rdoOption" id="rdoOption_0" value="Yes">
        <label for="radio">Yes<br>
          <input type="radio" name="rdoOption" id="rdoOption_1" value="No">
        No</label></td>
    </tr>
    <tr>
      <td>Date</td>
      <td>
      <input type="date" id="txtBdate" name="txtBdate"/>
      </td>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td height="71">Payment Option</td>
	
      <td><input type="radio" name="rdoOption1" id="rdoOption_2" value="Direct Pay">
        <label for="radio">Direct Pay<br>
          <input type="radio" name="rdoOption1" id="rdoOption_3" value="VISA">
        VISA<br>
		<input type="radio" name="rdoOption1" id="rdoOption_4" value="Master Card">
       Master Card</label></td>
     </tr>
	      
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit"/>
      <input type="reset" name="button1" id="button1" value="Reset"></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  
</form>
</body>
<footer class="f-container">
  <h2>KryptonZone</h2>
  <i class="fa fa-facebook-official f-hover-opacity"></i>
  <i class="fa fa-instagram f-hover-opacity"></i>
  <i class="fa fa-snapchat f-hover-opacity"></i>
  <i class="fa fa-pinterest-p f-hover-opacity"></i>
</footer>

</html>
