<link href="bootstrap.min.css" rel="stylesheet">
<?php session_start();
//echo $_SESSION["name"];
$flag=0;
//echo "Details Submitted Successfully";
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="hotelgrand";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="Select * from user_detail";
$true=1;
$result = $conn->query($sql);
$TP=$_SESSION["TotalPrice"];
$uId=$_SESSION["u_id"];
while($row = $result->fetch_assoc())
{if($row["UserID"]==$_SESSION["u_id"])
	{$WB=$row["WalletMoney"];
	}
}
if($WB>=$_SESSION["GuestTotalPrice"])
{$conn->query("update user_detail set WalletMoney=WalletMoney-$TP where UserID=$uId");
$conn->query("update guest_detail set PaymentProcess='PAID' where UserID=$uId");
	echo"<center><img src="."ts.png"." width=200></center><br>";
	echo "<center><h1><font color="."green".">PAYMENT SUCCESSFULL</font></h1><br><a href="."HGProfileCC.php".">GO BACK</a></center>";
	//$flag=1;
	}
	else
	{echo"<center><img src="."tc.png"." width=200></center>";
		echo "<h1><font color="."red"."><center>PAYMENT Failed!<br> INSUFFICIENT BALANCE IN WALLET<center></font></h1><br>Add Money to your wallet and try again<br><a href="."HGProfileCC.php"."><button type="."button"." class="."btn btn-warning".">GO BACK</button></a>";
}


?>