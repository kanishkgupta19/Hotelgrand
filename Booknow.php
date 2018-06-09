<html>
<link href="bootstrap.min.css" rel="stylesheet">

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fafafa;
    margin: auto;
    padding: 20px;
    border: 3px solid #888;
    width: 70%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
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
<div class="container">
 <div class="col-md-7">
    <!-- Trigger/Open The Modal -->
<button id="myBtn" class="btn btn-success">See Rooms Available</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <table class="table table-bordered">
  <?php $servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="hotelgrand";

$connect=new mysqli($servername,$username,$password,$dbname);
$sql="Select * from rooms";
$result = $connect->query($sql);
while($row = $result->fetch_assoc()) 
    {if($row["Sno"]==1)
		{ $r1=$row["Available"];
		}
     if($row["Sno"]==2)
		{ $r2=$row["Available"];
		}  
     if($row["Sno"]==3)
		{ $r3=$row["Available"];
		}  
     if($row["Sno"]==4)
		{ $r4=$row["Available"];
		}  		
	}?>
  </tr>
  <th> Type Of Rooms:</th>
  <th>Rooms Available</th>
  </tr>
  <tr><td>Classic Room:</td><td><?php echo $r1?></td></tr>
  <tr><td>Duplex Rooms:</td><td><?php echo $r2?></td></tr>
  <tr><td>Deluxe Suites:</td><td><?php echo $r3?></td></tr>
  <tr><td>Villa:</td><td><?php echo $r4?></td></tr>
  </table>
  </div>

</div>
<form name="book" action="welcome.php" method="POST" class="form-inline" onsubmit="return validate()">
  <div class="form-group">
  
<br>
 
   <br>
    <label for="exampleInputName2"><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;Name:&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
    <input type="text" class="form-control" name="name" placeholder="Jane Doe" required>
  </div><br>
<br>
  <div class="form-group has-success">
    <label class="email" for="inputSuccess1"><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
    <input type="text" class="form-control" name="Email" placeholder="jane.doe@example.com" required>
  </div><br>
<br>
  <div class="form-group has-success">
    <label class="integer" for="inputSuccess1"><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;Contact No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
    <input type="integer" class="form-control" name="contact" placeholder="9999999999" required>
   </div><br>
<br>
<div class="form-group has-success">
    <label class="country" for="inputSuccess1"><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;Country&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
    <input type="text" class="form-control" name="country" placeholder="India">
  </div><br>
<br>

<font color="white"><b>&nbsp;&nbsp;&nbsp;&nbsp;No. of Rooms Wanted:<b></font>
   <select class="form-control" name="NoOfRooms" >
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>  
<br>
<br>
<font color="white"><b>&nbsp;&nbsp;&nbsp;&nbsp;Type Of Room:&nbsp;&nbsp;<b></font>
   <select class="form-control" name="TypeOfRoom" required>
  <option>Classic Room</option>
  <option>Duplex Room</option>
  <option>Deluxe Suite</option>
  <option>Villa</option>
</select>  
<br>
<br>&nbsp;&nbsp;&nbsp;
<font color="white">Duration of stay:</font><br>
<div class="form-group has-error">
    <label class="control-label" for="inputError1"><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From:&nbsp;&nbsp;&nbsp;</font></label>
    <input type="date" class="form-control" name="StayFrom" placeholder="mm-dd-yyyy" required>
   <label class="control-label" for="inputError1"><font color="white">
TO: &nbsp;&nbsp;&nbsp;</font></label>
    <input type="date" class="form-control" name="StayTo" placeholder="mm-dd-yyyy" required>
</div>
<br>
<br>
<br>
<p id="status"></p>
<br>
<div><label>
      <input type="checkbox" name="tnc" value="condition" required> <span class="error" required></span>
      <font color="yellow">I agree to Hotel's Terms & Condition.</font>
    </label></div>
<br>
<br>

<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input  type="submit" value="BOOK NOW"  class="btn btn-primary">&nbsp;&nbsp;&nbsp;
  </form>
<a href="HGProfileCC.php"><button class="btn btn-danger"><a href="HGProfileCC.php">CANCEL</button></a>

<br>
<br>

</div>
 <div class="col-md-5">
<center><p class="tab blink"><img src="offer.jpg" height=80 width=210></p></center>
<br>
<?php include"offerSlideshow.php"; ?>
</div>
</div>

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

<script src="bootstrap.min.js"> </script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
function validate() {
    var txt=document.forms["book"]["TypeOfRoom"].value;
	var no=document.forms["book"]["NoOfRooms"].value;
	if(txt=="Classic Room")
	{if(no<3)
	   {var name=confirm("Are you sure, you want to submit your details?");
         if(name==true)
	       {return true;}
	     else return false;
	   }
	   else{alert("Enough Rooms not available. Decrease the no. of rooms"); return false;}
	}
	else if(txt=="Deluxe Suite")
	{if(no<4)
	   { 
		   var name=confirm("Rooms Available!\nAre you sure, you want to submit your details?");
         if(name==true)
	       {return true;}
	     else return false;
	   }
	   else{document.getElementById("status").innerHTML="<font color=#FF0000><b>Room(s) not available!</font></b>"; return false;}
	}
	else if(txt=="Villa")
	{if(no<2)
	   {var name=confirm("Are you sure, you want to submit your details?");
         if(name==true)
	       {return true;}
	     else return false;
	   }
	   else{alert("Enough Villas are not available."); return false;}
	}
	else if(txt=="Duplex Room")
	{if(no<5)
	   {var name=confirm("\tRooms Available!\nContinue To Book Room:");
         if(name==true)
	       {return true;}
	     else return false;
	   }
	   else{alert("Enough Rooms not available. Decrease the no. of rooms"); return false;}
	}
	else 
	{ alert("Sorry! "+txt+" is not available");		
       return false;
	}
}
</script>
</body>
</html>


