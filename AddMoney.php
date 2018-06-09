<link href="bootstrap.min.css">
<?php session_start();
$Amount=$_SESSION["ADD"];
$cardno=$_POST["cardno"];
$cardname=$_POST["cardname"];
$expiry=$_POST["cardexpiry"];
$cvv=$_POST["CVV"];
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
$uid=fread($myfile,filesize("newfile.txt"));
fclose($myfile);

$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="hotelgrand";
$connect=new mysqli($servername,$username,$password,$dbname);

if($cardno=='012345678910' && $cardname=='Kanishk Gupta' && $cvv='1999')
{ $connect->query("Update user_detail set WalletMoney=WalletMoney+$Amount where UserID=$uid");
 echo"<center><h1><font color="."blue"."> Cash Amount Added To Your Wallet</h1></center><br>";
 echo"<a href="."HGProfileCC.php"."><button class="."btn btn-danger".">GO Back</button></a></center>";
}
else
{echo"<center><img src="."warning.png"."></center>";
 echo"<center><h1> <font color="."red".">    Card details are Invalid  </font></h1></center><br>";
 echo"<a href="."HGProfileCC.php"."><button class="."btn btn-danger".">GO Back</button></a></center>";
}
?>