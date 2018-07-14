<?php

session_start();


	

if(empty($_SESSION["username"]))
{
	header('Location:login.php');
}

else
{
	
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="test";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$user=$_SESSION["username"];
$hotel=$_POST["na"];

$from=$_POST["from"];
$to=$_POST["to"];
$no=$_POST["no"];







$sql="insert into booked_hotels_details values('$user','$hotel','$from','$to','$no')";
mysqli_query($conn,$sql);
header("Location:hotel_home_page.php");


}

?>