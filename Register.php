<html>
<Head><title>HotelGrand Account</title>
</head>
<link href="bootstrap.min.css" rel="stylesheet">
<style type "text/css">
<!--
/* @group Blink */
.blink {
	-webkit-animation: blink .75s linear infinite;
	-moz-animation: blink .75s linear infinite;
	-ms-animation: blink .75s linear infinite;
	-o-animation: blink .75s linear infinite;
	 animation: blink .75s linear infinite;
}
@-webkit-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@-moz-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@-ms-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@-o-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
/* @end */
-->
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
<h4><center><font color="White">Share a Grand Experience</font></center></h4><br>
<hr><br><br><br>
<div class="col-md-2"> </div>
<div class="col-md-7"><div class="alert alert-info" role="alert">
<center><h1><font color="white">USER REGISTERATION</font></h1></center><br><br>

<form class="form-horizontal" method="POST" action="RegSuccess.php">
  <div class="form-group">
    <label for="Uname" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="Uname" placeholder="User Name">
    </div>
  </div>
  
  <div class="form-group">
    <label for="UContact" class="col-sm-2 control-label">Contact</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="Ucontact" placeholder="Contact">
    </div>
  </div>
  
  <div class="form-group">
    <label for="UEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="Uemail" placeholder="Email">
    </div>
  </div>
   
   <div class="form-group">
    <label for="UDOB" class="col-sm-2 control-label">Date Of Birth</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="UDOB" placeholder="Date Of Birth">
    </div>
  </div>
  <div class="form-group">
    <label for="UPassword" class="col-sm-2 control-label">New Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="Upassword" placeholder="Create New Password">
    </div>
	</div>
 
	   <button type="submit" class="btn btn-success">Register Now</button></form>
	   <a href="hotel.html"><button type="button" class="btn btn-danger">Cancel</button></a>
  
</form>
</div></div>
<div class="col-md-3"></div>
</body>
</html>