<!DOCTYPE html>
<html>
<head>
<link href="bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
    font-size: 17px;
}

.container {
    position: relative;
    max-width: 900px;
    margin: 0 auto;
}

.container img {vertical-align: middle;}

.container .content {
    position: absolute;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Black background with transparency */
    color: #f1f1f1;
    width: 96%;
    padding: 20px;
}
</style>
<style>

.container {
    position: relative;
    text-align: center;
    color: white;
}

.bottom-left {
    position: absolute;
    bottom: 8px;
    left: 16px;
}

.top-left {
    position: absolute;
    top: 8px;
    left: 12px;
}

.top-right {
    position: absolute;
    top: 8px;
    right: 16px;
}

.bottom-right {
    position: absolute;
    bottom: 8px;
    right: 16px;
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
</style>
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: black;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #FFFFCC;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #FFFF99;
}

/* Style the tab content */
.tabcontent {
	 text-color:black;
    display: none;
    padding: 8px 12px;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
}

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

hr { 
    display: block;
    margin-top: 0em;
    margin-bottom: 0.5em;
    margin-left: 0;
    margin-right: 0;
    background-color: black;
    border-color:#000000;
    border-width: 20px;
}
</style>
</head>
<body background="profilebg.jpg">
<hr>
<h1><b><center><font face="Medusa Gothic" size=100 color=#FFD700>HOTEL GRAND</font></center></b></h1>
<h4><center><font color="black">Share a Grand Experience</font></center></h4>
<div class="col-md-9">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Booking')" id="defaultOpen"><font color=#FFD700>Bookings</font></button>
  <button class="tablinks" onclick="openCity(event, 'Edit Profile')"><font color=#FFD700>Edit Profile</font></button>
  <button class="tablinks" onclick="openCity(event, 'HG-Wallet')"><font color=#FFD700>HG-Wallet</font></button>
  <button class="tablinks" onclick="openCity(event, 'booknow')"><font color=#FFD700>Book Now</font></button>
  <button class="tablinks" onclick="openCity(event, 'LogOUT')"><font color=#FFD700>LogOUT</font></button>
</div>

<div id="Booking" class="tabcontent">
  <h2><font color="black"><b>Room Bookings:</b></font></h2>
  <?php 
$flags=0;
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="hotelgrand";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="Select * from guest_detail";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{if($row["UserID"]==$_SESSION["UserID"])
	{$_SESSION["GuestID"]=$row["GuestID"];
$_SESSION["u_id"]=$row["UserID"];
$_SESSION["GuestName"]=$row["Name"];
$_SESSION["GuestContact"]=$row["Contact"];
$_SESSION["GuestEmail"]=$row["Email"];
$_SESSION["GuestTypeOfRoom"]=$row["TypeOfRoom"];
$_SESSION["GuestNoOfRoom"]=$row["NoOfRoom"];
$_SESSION["GuestStayFrom"]=$row["StayFrom"];
$_SESSION["GuestStayTo"]=$row["StayTo"];
$_SESSION["GuestTotalPrice"]=$row["TotalPrice"];
$_SESSION["PaymentProcess"]=$row["PaymentProcess"];
//$_SESSION["PP"]=$row["Picture"];
include "BookingTable.php";
	$flags=1;
	}
}
if($flags==0)
{echo "<h1>No Bookings</h1>";
}
	?>
	<font color="black"><br><br><br><br>
</div>

<div id="Edit Profile" class="tabcontent">
  <h1><center>Edit Profile</center></h3>
  <div class="alert alert-info">
  <form action="update.php" method="POST"><font color="black">
</font><h3>Name:<input class="w3-input w3-border" type="text" placeholder=<?php echo $_SESSION["UserName"];?> name="NewName"> </font></h3>
<h3>Contact:<input class="w3-input w3-border" type="number" placeholder=<?php echo $_SESSION["UserContact"];?> name="NewContact"> </font></h3>
<h3>Email:<input class="w3-input w3-border" type="text" placeholder=<?php echo $_SESSION["UserEmail"];?> name="NewEmail"> </font></h3>
<input type="submit" value="Update">
</form> 
</div>
</div>

<div id="HG-Wallet" class="tabcontent">
  <center><h1><b>HG-Wallet</b></h1></center>
  Now Pay the booking amount through your HG-wallet and get exciting offers and cashback.<br><br>
  <div class="alert alert-warning"><form class="form-inline" action="PaymentGateway.php" method="POST">
 <center> <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Wallet Amount:</label>
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="text" class="form-control" name="Amount" placeholder="Enter Amount" required>
      
    </div>
  </div>
  <br><br><button type="submit" class="btn btn-success"><h3>ADD Wallet Cash</h3></button></center>
</form></div>
</div>


<div id="booknow" class="tabcontent">
<br><br><br><br><br>
<div class="container">
  <img src="6.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1>Hotel Grand Rooms</h1>
    <p>Hotel Grand gives you an immense pleasure and royal living experience at our world's most luxurious and royal hotel known for its service world wide. Book your Room(s) now and enjoy the world class staying experience. </p>
  </div>
</div>
<div class="centered"> <center><a href="booknow.php" style="color:white"><button type="cancel" class="btn btn-default"> <h3>BOOK NOW</h3></button></a></center></div>
</div>

<div id="LogOUT" class="tabcontent">
  <h3>Are You sure you want to LOG OUT</h3>
  <center><a href="account.php" style="color:white"><button type="cancel" class="btn btn-danger"> <h2>Log Out</h2></button></a></center>
</div>
</div>



<div class="col-md-3">
<nav class="navbar navbar-inverse">
 <center> <img src="Profile.jpg" width="90%" height="90%"></center>
 <h3><font color="white">User ID:</font><h1><font color=#FFD700><center><?php echo $_SESSION["UserID"];?></center></font></h1>
 <h3><font color="white">User name:</font><h1><font color=#FFD700><center><?php echo $_SESSION["UserName"];?></center></font></h1>
 <h3><font color="white">Email:</font><br></h3><h4><font color=#FFD700><center><?php echo $_SESSION["UserEmail"];?></center></font></h4>
 <h3><font color="white">Contact:</font><h4><font color=#FFD700><center><?php echo $_SESSION["UserContact"];?></center></font></h4>
 <br>
  </nav>

<nav class="navbar navbar-inverse">
<h3><font color="White">Wallet Money=</font><font color=#00FF00><br><center><h2><b>$ <?php echo $_SESSION["UserWallet"];?></b></h2></center></font></h3>
</nav>
</div>



<script>

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 
</body>
</html> 
