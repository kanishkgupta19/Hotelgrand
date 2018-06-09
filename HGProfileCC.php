
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
//$uid=0;
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
$uid=fread($myfile,filesize("newfile.txt"));
fclose($myfile);

$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{if($row["UserID"]==$uid)
	{$uid=$_SESSION["UserID"]=$row["UserID"];
		$_SESSION["UserName"]=$row["Name"];
$_SESSION["UserContact"]=$row["Contact"];
$_SESSION["UserEmail"]=$row["Email"];
$_SESSION["UserDOB"]=$row["DOB"];
$_SESSION["UserPassword"]=$row["Password"];
$_SESSION["UserWallet"]=$row["WalletMoney"];
    $flag=1;
	include "HGProfile.php";
	}
}
if($flag!=1)
{include"failed.php";
}
	
?>