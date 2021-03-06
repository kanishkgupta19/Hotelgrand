<!DOCTYPE html>
<html>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-responsive.css" rel="stylesheet">
<script src="bootstrap.min.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head><title>Hotel Grand</title>
 
<style>
/* Style the navbar */
#navbar {
  overflow: hidden;
  background-color: #333;
}

/* Navbar links */
#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

/* Page content */
.content {
  padding: 16px;
}

/* The sticky class is added to the navbar with JS when it reaches its scroll position */
.sticky {
  position: fixed;
  top: 0;
  width: 100%
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 60px;
}
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

ul.nav li.dropdown:hover > ul.dropdown-menu {
display: block;    
}
@media (min-width: 979px) {
  ul.nav li.dropdown:hover > ul.dropdown-menu {
    display: block;
  }
}



/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/9 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .2} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .2} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
hr { 
    display: block;
    margin-top: 0em;
    margin-bottom: 0.5em;
    margin-left: 0;
    margin-right: 0;
    
    border-color:#000000;
    border-width: 20px;
}
</style>
</head>
<body background="bg.jpg">
<hr>

<h1><center><font face="Medusa Gothic" size=100 color="yellow">HOTEL  GRAND</font></center></h1>
<h4><center><font color="White">Share a Grand Experience</font></center></h4>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="hotel.html">HOTEL GRAND</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="account.php">My Account <span class="sr-only">(current)</span></a></li>
        <li><a href="facilities.html">Facilities</a></li>
        <li><a href="rooms.html">Rooms</a></li>
         <li><a href="Events.html">Events</a></li>
         <li><a href="gallery.html">Gallery</a></li>
        <li><a href="about us.html">About us</a></li>

      </ul>
    </div>
  </div>
</nav>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 8</div>
  <img src="2.jpg" style="width:100%">
  <div class="text">Hotel's Casino</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 8</div>
  <img src="3.jpg" style="width:100%">
  <div class="text">Hotel's BAR</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 8</div>
  <img src="4.jpg" style="width:100%">
  <div class="text">Classic Room</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 8</div>
  <img src="5.jpg" style="width:100%">
  <div class="text">Reception</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 8</div>
  <img src="6.jpg" style="width:100%">
  <div class="text">Luxury Rooms</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 8</div>
  <img src="7.jpg" style="width:100%">
  <div class="text">Hotel Grand Front View</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 8</div>
  <img src="8.jpg" style="width:100%">
  <div class="text">Swimming Pool</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 8</div>
  <img src="9.jpg" style="width:100%">
  <div class="text">Dining Hall</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
 <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<!------------------------------------------------------------------------------------------------------------------------------------------!>
<nav class="navbar navbar-inverse">
<div class="col-md-2">
     <div class="container-fluid">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav">
                <li><a href="hotel.html">Home</a></li><br>
                <li><a href="contact.html">Contact us </a></li><br>
                 <li><a href="about us.html">About us</a></li>
              </ul>
           </div>
      </div>
</div>
<!******************!>
<div class="col-md-10">
<h3><div align="left"><FONT COLOR="WHITE"><B>OUR PARTNERS:</b> </font></div></h3><br>
<img src="mmp.png" width=100 height=50>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="gib.png" width=120 height=50>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="expedia.png" width=120 height=50>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="hilton.png" width=120 height=50>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="trivago.png" width=120 height=50>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="marriot.png" width=100 height=50>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
</nav>
<!------------------------------------------------------------------------------------------------------------------------------------------!>
</body>
</html> 
