<html>
<head>
<title>Details Confirmation</title>
</head>
<link href="bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
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
<div class="alert alert-danger" role="alert"><b><h2><font face="Comic Sans MS" color="black">BOOK YOUR ROOM</font></h2></b></div><br>
</div>

<div class="col-md-2"></div>
<div class="col-md-8">
<h1><font color="yellow"><b>CONFIRM YOUR DETAILS</b></font></h1>
<?php
session_start();
$nog=0;
$p=$_POST["TypeOfRoom"];
  switch($p)
  {case "Villa":       $nog=4;
                        break;
	case "Classic Room":$nog=2;
				         break;
	case "Duplex Room":$nog=5;
				        break;
	case "Deluxe Suite":$nog=4;
				         break;
  }?>
<table class="table table-bordered">
<tr tr class="warning">
<th>CATEGORY</th>
<th>DETAILS</th>
</tr>
<tr class="active">
<font color="red">
<td>User ID:</td>
<td><?php $myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
$_SESSION["u_id"]=fread($myfile,filesize("newfile.txt"));
fclose($myfile); echo $_SESSION["u_id"]; ?></td>
</font></tr>
<tr class="info">
<td>GUEST NAME:</td>
<td><?php $_SESSION["name"]=$_POST["name"]; echo $_POST["name"]; ?></td>
</tr>
<tr tr class="active">
<td>Email</td>
<td><?php $_SESSION["Email"]=$_POST["Email"]; echo $_POST["Email"];?></td>
</tr>
<tr class="info">
<td>Contact</td>
<td><?php $_SESSION["Contact"]=$_POST["contact"]; echo $_POST["contact"];?> </td>
</tr>
<tr tr class="active">
  <td>Country</td>
  <td><?php $_SESSION["Country"]=$_POST["country"]; echo $_POST["country"];?></td>
  </tr>
  <tr class="info">
  <td>Type Of Room</td>
  <td><?php $_SESSION["TypeOfRoom"]=$_POST["TypeOfRoom"]; echo $_POST["TypeOfRoom"];?></td>
  </tr>
<tr tr class="active">
<td>No. Of Rooms</td>
<td><?php $_SESSION["NoOfRoom"]=$_POST["NoOfRooms"]; echo $_POST["NoOfRooms"];?></td>
</tr>
<tr class="info">
 <td>No. Of Guests</td>
 <td><?php $_SESSION["NoOfGuests"]=$nog; echo"$nog(Max)";?></td>
 </tr>
 <tr tr class="active">
 <td>Stay From</td>
 <td><?php $_SESSION["StayFrom"]=$_POST["StayFrom"]; echo $_POST["StayFrom"];?></td>
 </tr>
 <?php 
  $t=$_POST["NoOfRooms"];
  $p=$_POST["TypeOfRoom"];
  //echo "<h3>Type Of Room Selected:".$p."</h3>";
  //echo "<h3>No. Of Rooms Selected:".$t."</h3>";
  $sf=$_POST["StayFrom"];
  $st=$_POST["StayTo"];
  $start = strtotime("$sf");
$end = strtotime("$st");

$NOD = ceil(abs($end - $start) / 86400);
//echo "<h3>No. Of Days:".$NOD."</h3>";
  $_SESSION["NoOfDays"]=$NOD;
  ?>
 <tr class="info">
  <td>Stay To</td>
  <td> <?php $_SESSION["StayTo"]=$_POST["StayTo"];echo $_POST["StayTo"];?></td>
  </tr>
  <tr class="active">
  <td>Type Of Room Selected:</td>
  <td> <?php echo $p;?></td>
  </tr>
  <tr class="info">
  <td>No. Of Rooms Selected:</td>
  <td> <?php echo $t;?></td>
  </tr>
  <tr class="active">
  <td>No. Of Days:</td>
  <td> <?php echo $NOD;?></td>
  </tr>
  </table>
   <div class="alert alert-warning">
<input class="form-control" type="text" NAME="code" id="code" placeholder="Enter Promocode Here" required> <p id="demoR">Have a Promocode?</p> <p></p><br><button onclick="myFunction()" data-dismiss="alert">Apply Now</button><br>
   </div>
   
   <div class="alert alert-danger" class="w3-panel w3-bottombar w3-border-green w3-border">
   <h2 id="tpp2"><font color=#000000>Discount &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>$0</b></font></h2>
   <?php
 // echo "";
  switch($p)
  {case "Villa":       $tp=$t*4500*$NOD; $_SESSION["OnePrice"]=4500;
                        echo " <font color=#000000><div  id="."tpp"."><h2><b> Total Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$". $tp."</b></h2></div></font>";
				        break;
	case "Classic Room":$tp=$t*950*$NOD;$_SESSION["OnePrice"]=950;
                         echo"<font color=#000000><div  id="."tpp"."><h2><b> Total Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$". $tp."</b></h2></div></font>";
				         break;
	case "Duplex Room":$tp=$t*1900*$NOD;$_SESSION["OnePrice"]=1900;
                        echo  "<font color=#000000><div  id="."tpp"."><h2><b> Total Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$". $tp."</b></h2></div></font>";
				        break;
	case "Deluxe Suite":$tp=$t*1200*$NOD; $_SESSION["OnePrice"]=1200;
                         echo  "<font color=#000000><div  id="."tpp"."><h2><b> Total Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$". $tp."</b></h2></div></font>";
				         break;
  }
  $_SESSION["TotalPrice"]=$tp;
  ?>
  <hr width=500>
  <div align='right'>**Price inclusive of all taxes.</div><br> 



  <form action="confirm.php" method="POST">
  <input type="submit" class="btn btn-primary" value="CONFIRM NOW" >
 
 </form>
   </div>
  
  </div>
  <div class="col-md-2"></div>
  <script>
  function goBack() {
    window.history.back();
  }
  function myFunction() {
    var inp = document.getElementById("code");
	var tp=<?php echo $_SESSION["TotalPrice"];?>,d;
	
    if (inp.value=="FAMILY10" || inp.value=="CAL03") {
		d=tp/10;
		tp=tp-d;
        document.getElementById("demoR").innerHTML = "<h5><font color=#008000><b>Promocode Applied Successfully</b></font></h5>";
		 document.getElementById("tpp").innerHTML = "<h2><b>Total Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$"+tp+"</b></h2>";
		 document.getElementById("tpp2").innerHTML ="<h2><font color=#000000>Discount &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>-&nbsp;$"+d+"</b></font></h2>";
         //document.getElementById("code").class="alert alert-danger";
	} else {
        document.getElementById("demoR").innerHTML = "<h5><font color=#FF0000><b>Promocode Invalid</b></font></h5>";
		document.getElementById("tpp2").innerHTML ="<h2><font color=#000000>Discount &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>-&nbsp;$0</b></font></h2>";
		document.getElementById("tpp").innerHTML = "<h2><b>Total Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$"+tp+"</b></h2>";
    } 
} <?php $_SESSION["discount"]="<script>document.writeln(d);</script>" ;?>
  </script>
  <?php $_SESSION["discount"]="<script>document.writeln(d);</script>" ;?>
</body>
</html>