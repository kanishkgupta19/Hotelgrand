<?php //session_start();
$flag=0;
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="hotelgrand";
$conn = new mysqli($servername, $username, $password, $dbname);
//$usrid=$_POST["uid"];
$file=fopen("newfile.txt","r");
$usrid=fread($file,filesize("newfile.txt"));
fclose($file);
$sql="Select * from user_detail where UserID=$usrid";
//$result = $conn->query($sql);
//$row = $result->fetch_assoc();
if($_POST["NewName"]!=NULL)
{$newname=$_POST["NewName"];
	$conn->query("Update user_detail set Name='$newname' where UserID=$usrid");
	echo"<h1>Updated Successfully</h1><br><a href="."HGProfileCC.php".">Continue</a>";
	//include"Profile.php";
}
if($_POST["NewContact"]!=NULL)
  {$newcontact=$_POST["NewContact"];
	$conn->query("Update user_detail set Contact='$newcontact' where UserID=$usrid");
	echo"<h1>Contact Updated Successfully</h1><br><a href="."HGProfileCC.php".">Continue</a>";
  }
	
if($_POST["NewEmail"]!=NULL)
  {$newemail=$_POST["NewEmail"];
	$conn->query("Update user_detail set Email='$newemail' where UserID=$usrid");
	//echo $gmail=$_SESSION["GuestEmail"];
	$conn2 = new mysqli($servername, $username, $password, $dbname);
$conn2->query("Update guest_detail set Email=$newemail where UserID=$usrid");
echo"<h1>Email Updated Successfully</h1><br><a href="."HGProfileCC.php".">Continue</a>";
  }?>

	