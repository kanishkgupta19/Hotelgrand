<html>
<link href="bootstrap.min.css" rel="stylesheet">
<style type "text/css">
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
<div class="alert alert-danger" role="alert"><b><h2><font face="Comic Sans MS" color="black">Registeration</font></h2></b></div><br>
</div><br>
<h1><font color="white">Registered successfully</font></h1>
<?php 
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="hotelgrand";
$conct=new mysqli($servername,$username,$password,$dbname);
$stmt=$conct->prepare("Insert into user_detail(Name,Contact,Email,DOB,Password) 
values(?,?,?,?,?)");
$stmt->bind_param("sisss",$uname,$ucontact,$uemail,$udob,$upassword);
SESSION_start();
$uname=$_SESSION["uname"]=$_POST["UName"];
$uemail=$_SESSION["uemail"]=$_POST["UEmail"];
$ucontact=$_SESSION["ucontact"]=$_POST["UContact"];
$udob=$_SESSION["udob"]=$_POST["UDOB"];
$upassword=$_SESSION["upassword"]=$_POST["UPassword"];
$stmt->execute();
// showing guest id
$sql="Select UserID,Contact from user_detail";
$result = $conct->query($sql);
while($row = $result->fetch_assoc()) 
   {
        if($row["Contact"]==$ucontact)
		{ $UID=$row["UserID"];
	    }
    }
	?><br><br>
	<table class="table table-bordered">
	<tr class="active">
	<th><h2><b>Your UserID<br> <h4>**Remember the UserID & Password for future login</h4></b></h2> </th>
	<th><h2><b><u><?php echo $UID;?> </u></b></h2><br></th>
	</tr>
	</table>
	 <center><a href="account.php"><button type="button" class="btn btn-primary"><center><h4>Sign In To Your A/C</h4></center></button></a><center>
	</body>
	<script>
$(document).ready(function(){
    $("#btn1").click(function(){
        alert("Registered Successfully");
    });
</script>	<br><br><br><br>
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
	 </html>