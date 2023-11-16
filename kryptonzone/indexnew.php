<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>KryptonZone - Home</title>
<link rel="stylesheet" type="text/css" href="HOMEPage.css">
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
    
	
 <div class="navbar-right">
  <a href="acc_index.php">My Account</a>
  <a href="sign_index.php">Signup</a>
  <a href="logout.php">Logout</a>
 </div>
  <form>
  <input type="text" name="search" placeholder="Search...">
</form>
</div>
<!-- Slide Show -->
  <div class="container">
 <section>
  <img class="mySlides" src="wallp.png" style="width:100%">
  <img class="mySlides" src="backg.png" style="width:100%">
  <img class="mySlides" src="wl2.jpg" style="width:100%">
  <img class="mySlides" src="whh.jpg" style="width:100%">
  <img class="mySlides" src="photo-123.jfif" style="width:100%">
  <img class="mySlides" src="nature24.jpg" style="width:100%">
  <img class="mySlides" src="charcoal-mask123.jpg" style="width:100%">
  <img class="mySlides" src="overhead2.jpg" style="width:100%">
  <img class="mySlides" src="bottels.jpg" style="width:100%">
</section>
	  <div class="centered"><b>KRYPTON ZONE</b></div>
</div>
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
	<p><b>Freshest Cosmetics in Town</b></p>
	<br><br>
	<p><img src="bb74f34f8fa925b457ae9cb6ed27cc5a.jpg" alt="vision" style="width:55%"></p>
	<img src="Why_Your_Brand_Needs_a_Tagline_Slogan_Vision_and_Mission.png" alt="mision" style="width:100%">
	<p><b>The beauty industry is ever-evolving as beauty standards shift and ways of life change. In the past year, we have seen some drastic changes to life as we know it due to the global pandemic which has caused some especially unique trends in the beauty industry.</b></p>
	<img src="vision-skincare-3-638.jpg" alt="trends" style="width: 55%">
</body>
	<br>
<footer class="f-container">
  <h2>KryptonZone</h2>
  <i class="fa fa-facebook-official f-hover-opacity"></i>
  <i class="fa fa-instagram f-hover-opacity"></i>
  <i class="fa fa-snapchat f-hover-opacity"></i>
  <i class="fa fa-pinterest-p f-hover-opacity"></i>
</footer>

</html>
