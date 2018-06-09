<html>
<Head><title>HotelGrand Account</title>
</head>
<link href="bootstrap.min.css" rel="stylesheet">



<style>
/* Full-width input fields */
input[type=text], input[type=password], input[type=number] {
    width: 75%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 18px;
    margin: 8px 8px;
    border: none;
    cursor: pointer;
    width: 45%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: 45%;
    padding: 15px 20px;
    background-color: #f44336;
}
/* Float cancel and login buttons and add an equal width */
.cancelbtn,.loginbtn {float:left;width:40%}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 20%;
    border-radius: 25%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
	
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 55px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    /* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .loginbtn {
       width: 70%;
    }
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
<body background="bg.jpg">
<hr>
<p class="bg-inverse">
<a href="Hotel.html"><h1><b><center><font face="Medusa Gothic" size=100 color="yellow">HOTEL GRAND</font></center></b></h1></a><br>
<h4><center><font color="White">Share a Grand Experience</font></center></h4>
<div class="alert alert-danger" role="alert"><b><h3><font face="Comic Sans MS" color="black">My Account</font></h3></b></div><br>
<div class="col-md-1"></div>
<div class="col-md-5">
<div class="alert alert-info"><font color="black"><h2><p class="tab blink"><b>New User!</b></p> Register Here</h2><br>
<h4>Now Register yourself with the Hotel Grand user Account and enjoy various features Like.<br>
=>Track your booking details.<br>
=>Get Access to HG-Wallet.<br>
=>Get timely notifications.<br>
=>Enjoy Great Offers/discounts.<br>
=>Book rooms.<br><br></h4></font>
<?php include "signupform.php";?>
</div></div>




<div class="col-md-5">
<div class="alert alert-info"><font color="black"><h2><b>Existing User!</b><br> Log IN<br><br></h2>
<h4>All the registered user can log in to their account to enjoy the features and manage your HG-Wallet.<br>
<br> **Note:- Only Registeted user can book rooms or organise events and make payments via HG-wallets.</h4><br><br><br>
<button type="submit" class="btn btn-primary btn-lg btn-block" onclick="document.getElementById('id02').style.display='block'">Log IN</button>
</font>
</div>
</div>

<div id="id02" class="modal">
  <form class="modal-content animate" action="Profile.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<label><b>User ID</b></label><br>
     &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="number" placeholder="Enter Username" name="userId" required><br>

      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<label><b>Password</b></label><br>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="password" placeholder="Enter Password" name="psw" required>
      <center><button type="submit" class="loginbtn">Login</button></center>

    
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
	
   </div>
   </form>
</div>
  

</div>
<div class="col-md-1"></div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
<h3><FONT COLOR="WHITE"><B>OUR PARTNERS:</b> </font></h3><br>
<img src="mmp.png" width=100 height=50>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="gib.png" width=120 height=50>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="expedia.png" width=120 height=50>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="hilton.png" width=120 height=50>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="trivago.png" width=120 height=50>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="marriot.png" width=100 height=50>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
</nav>
<!------------------------------------------------------------------------------------------------------------------------------------------!>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>