<html>
<link href="bootstrap.min.css" rel="stylesheet">
<?php SESSION_START();
//echo $_SESSION["name"];
$flag=0;
//echo "Details Submitted Successfully";
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="hotelgrand";
$conn = new mysqli($servername, $username, $password, $dbname);
//$uid=0;
$GTP=$_SESSION["GuestTotalPrice"];
$GID=$_SESSION["GuestID"];
$sql="DELETE FROM guest_detail WHERE GuestID=$GID and TotalPrice=$GTP";
$conn->query($sql);
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
$uid=fread($myfile,filesize("newfile.txt"));
fclose($myfile);
echo "<center><img src="."cancel.png"." width=200><br>";
echo"<h1><font color="."red".">BOOKING CANCELED</font></h1><br><br><h3>Refund Of Booking Amount (If Paid) will be credited to your account<br></center>";
if($_SESSION["PaymentProcess"]=="PAID")
{$sql24="Update user_detail set WalletMoney=WalletMoney+$GTP where UserID=$uid" ;
$conn->query($sql24);
}
?><br>
<center><a href="HGProfileCC.php">
<button class="btn btn-info"><h4>&nbsp; &nbsp; &nbsp;Back&nbsp; &nbsp; &nbsp;</h4></button></a></center>
</html>