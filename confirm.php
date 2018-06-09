<html>
<head>
<title>Payment Details</title>
</head>
<link href="bootstrap.min.css" rel="stylesheet">
<style type "text/css">
table, th, td {
    border: 1px solid black;
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
<h1><b><center><font face="Medusa Gothic" size=100 color="yellow">HOTEL GRAND</font></center></b></h1><br>
<h4><center><font color="White">Share a Grand Experience</font></center></h4>
<div class="alert alert-danger" role="alert"><b><h2><font face="Comic Sans MS" color="black">ROOM BOOKING</font></h2></b></div><br>
<h1><font color="White"><center>Details Submitted Successfully</center></font></h1>
<h1><?php session_start();
//echo $_SESSION["name"];
//echo "Details Submitted Successfully";
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="hotelgrand";

$connect=new mysqli($servername,$username,$password,$dbname);
$stmt=$connect->prepare("Insert into guest_detail(UserID,Name,Contact,Country,Email,TypeOfRoom,NoOfRoom,StayFrom,StayTo,NoOfDays,NoOfGuests,TotalPrice) 
values(?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("isisssissiii",$guid,$name,$Contact,$Country,$Email,$TypeOfRoom,$NoOfRoom,$StayFrom,$StayTo,$NoOfDays,$NoOfGuests,$TotalPrice);

$name=$_SESSION["name"];
$Contact=$_SESSION["Contact"];
$Country=$_SESSION["Country"];
$Email=$_SESSION["Email"];
$TypeOfRoom=$_SESSION["TypeOfRoom"];
$NoOfRoom=$_SESSION["NoOfRoom"];
$StayFrom=$_SESSION["StayFrom"];
$StayTo=$_SESSION["StayTo"];
$NoOfDays=$_SESSION["NoOfDays"];
$NoOfGuests=$_SESSION["NoOfGuests"];
$TotalPrice=$_SESSION["TotalPrice"];
$guid=$_SESSION["u_id"];
$stmt->execute();
$sql="Select GuestID,Contact,name from guest_detail";
$result = $connect->query($sql);
while($row = $result->fetch_assoc()) 
   {
        if($row["Contact"]==$Contact && $row["name"]==$name)
		{ $GID=$row["GuestID"];
	    }
    }
?></h1>
<div class="col-md-2"> <br> </div>
<div class="col-md-8">
<table class="table table-bordered" >
<tr class="success">
<th><center><h2>Booking Details</h2></center></th>
<th></th>
</tr>
<tr>
<td class="active">Guest ID</td>
<td class="info"><?php echo $GID;?></td>
</tr>
<tr>
<td class="active">User ID</td>
<td class="info"><?php echo $guid;?></td>
</tr>
<tr>
<td class="active">Type Of Room</td>
<td class="info"><?php echo $TypeOfRoom;?></td>
</tr>
<tr>
<td class="active">No Of Room</td>
<td class="info"><?php echo $NoOfRoom;?></td>
</tr>
<tr>
<td class="active">NUmber Of Days/Night</td>
<td class="info"><?php echo $NoOfDays?></td>
</tr>
</table><br>
<table class="table table-bordered">
<tr class="success">
<th><center><h2>Payment Details</h2></center></th>
<th></th>
</tr>
<tr>
<td class="active">PRICE Of <?php echo $TypeOfRoom;?> /Day</td> 
<td class="info"><b>$ <?php echo $_SESSION["OnePrice"];?></b></td>
</tr>
<tr>
<td class="active">Discount</td>
<td class="info"><b><?php echo $_SESSION["discount"];?></b></td>
</tr>
<tr>
<td class="active"><h3>TOTAL PRICE*</h3></td>
<td  class="info"><h2>$ <?php echo $_SESSION["TotalPrice"];?></h2></td>
</tr>
</table>
<form action="payment.php" method="POST">
<button type="submit" class="btn btn-primary btn-lg btn-block">PAY NOW</button></form>
<button type="button" class="btn btn-danger btn-lg btn-block">Cancel</button>
</div>
<div class="col-md-2"> <br> </div>

</body>
</html>
</div>