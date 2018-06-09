<!DOCTYPE html>
<html>
<link href="bootstrap.min.css" rel="stylesheet">
<style>
/* Full-width input fields */
input[type=text], input[type=password],input[type=date] ,input[type=number]{
    width: 80%;
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
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 80%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {float:left;width:40%}

/* Add padding to container elements */
.container {
    padding: 16px;
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
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 80%;
    }
}
</style>
<body>


<button onclick="document.getElementById('id01').style.display='block'" class="btn btn-secondary btn-lg btn-block">Register Here</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content animate" action="RegSuccess.php" method="POST">
    <div class="container">
	
	<label>Name</label><br>
	<input type="text" name="UName" placeholder="User Name" required><br>
	
	<label for="UContact">Contact</label><br>
	<input type="number" name="UContact" placeholder="Contact"><br>
	
      <label><b>Email</b></label><br>
      <input type="text" placeholder="Enter Email" name="UEmail" id="UEmail" required><br>
	  
	 
    <label for="UDOB" >Date Of Birth</label><br>
    <input type="date" placeholder="Enter Date Of birth" name="UDOB" required><br>
	  <br>
	  
	  <label><b>Password</b></label><br>
      <input type="password" placeholder="Create New Password" name="UPassword" required><br>

      <input type="checkbox" checked="checked">
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p><br>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" id="btn1">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

$(document).ready(function(){
    $("#btn1").click(function(){
        alert("Registered Successfully");
    });
</script>

</body>
</html>
