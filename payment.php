<html>
<head>
<title>HOTEL GRAND-PAYMENTs Page</title>
</head>
<link href="bootstrap.min.css" rel="stylesheet">
<script>
$(document).ready(function(){
    $("#btn1").click(function(){
        alert("Text: Your Booking Is Confirmed");
    });
	});
	</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body background="bg.jpg">
<br><br><br><br><br><br>
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="w3-container w3-teal">
  <h1><center> <font color="Yellow">HG-Wallet</font></center></h1>
  <?php  Session_start();
  $servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="hotelgrand";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="Select * from user_detail";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{if($row["UserID"]==$_SESSION["u_id"])
	{$WB=$row["WalletMoney"];
    }
}
?>
 <br><div class="alert alert-Success"><h3>UserID=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION["u_id"];?><br>Wallet Balance=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$  <?php echo $WB;?><br>Amount to be paid= &nbsp;&nbsp;&nbsp;&nbsp;$ <?php echo $_SESSION["TotalPrice"];?></h3>
<center><form action="walletpayment.php" method="POST"><input type="submit" value="Complete Payment" class="btn btn-success"></form><a href="HGProfileCC.php"><button class="btn btn-danger">Pay Later</button></a></center>
<br>
<h4><font color="red"> ** If you want to cancel the current booking, then click on pay later and cacel the booking from HG User Panel.</font></h4> 
  </div>
</div></div>
<br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br>

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

</body>
</html>