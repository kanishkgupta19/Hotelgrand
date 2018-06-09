<html>
<head><title>Booking Table</title>
</head>
<link href="bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body bgcolor="red">
<div class="w3-container">
  
<br><br>
<div class="table-responsive">
  <table class="w3-table-all w3-striped w3-bordered w3-border w3-hoverable" >
    <thead>
      <tr class="w3-black">
        <th><b>Category</b></th>
        <th>Details<b></th>
      </tr>
    </thead>
	<font color="Black">
    <tr>
      <td><font color="Black">Guest Name:</fonT></td>
      <td><font color="Black"><b><?php echo $_SESSION["GuestName"];?></font></b></td>
    </tr>
    <tr>
      <td><font color="Black">Contact No.</font></td>
      <td><font color="Black"><b><?php echo $_SESSION["GuestContact"];?></font></b></td>
    </tr>
    <tr>
      <td><font color="Black">Type Of Room Booked:</font></td>
      <td><font color="Black"><b><?php echo $_SESSION["GuestTypeOfRoom"];?></font></b></td>
    </tr>
	<tr>
      <td><font color="Black">No. Of Rooms Booked:</font></td>
      <td><font color="Black"><b><?php echo $_SESSION["GuestNoOfRoom"];?></font></b></td>
    </tr>
	<tr>
      <td><font color="Black">Check In From:</font></td>
      <td><font color="Black"><b><?php echo $_SESSION["GuestStayFrom"];?></font></b></td>
    </tr>
	<tr>
      <td><font color="Black">Check Out Date:</font></td>
      <td><font color="Black"><b><?php echo $_SESSION["GuestStayTo"];?></font></b></td>
    </tr>
	
	<tr>
      <td><font color="Black">Total Price:</font></td>
      <td><font color="Black"><b>$<?php echo $_SESSION["GuestTotalPrice"];?></font></b></td>
    </tr>
	
	<tr>
	<td>Payment Status:</td>
	<td><?php ?></font>
	<?php if($_SESSION["PaymentProcess"]=="Pending")
	         { echo "<font color=#FF0000><b>".$_SESSION["PaymentProcess"]."</b></font>";
		       echo"\t<a href="."payment.php"."><button class="."btn btn-success".">PAY NOW</button></a>";}
		 else echo "<font color=#008000><b>".$_SESSION["PaymentProcess"]."</b></font>";?>
	</tr>
	
	<tr class="w3-khaki w3-hover">
	<td><b><font color="blue" face="Comic Sans MS"><a href="CancelT&C.php">T & C Apply.</a></font></b> <br> Canceled Booking cannot be claimed at the Hotel Reception.</td>
	<td><form onclick="return validate()" action="Cancelbook.php"><input type="submit" class="btn btn-danger" value="Cancel Booking"></form>
	</tr>
	
  </table></div>
</div>
<script>
function validate() {
    var name=confirm("Are you Sure you want to Cancel Your booking?");
	if(name==true)
		return true;
	else return false;
}</script>

</body>
</html>
