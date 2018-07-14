<?php 
session_start();

if(!empty($_POST["user"]))
{
	

	
$user=$_POST["user"];
$pass=$_POST["pass"];
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="test";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="select * from user_details where username='$user' and pass='$pass' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
$_SESSION["username"]=$user;
header("location:hotel_home_page.php");

}
else
{
echo '<script>alert("user does not exists");</script>';


}

}

?>











<html>
<head>



<meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      
	








</head>

<body>

<?php

include("links.php");
?>
<img src="images/logo.png" style="height:100px;width:100px;">

<br>

<div style="background-image: url('images/ima1.jpg');background-repeat:no-repeat; background-size:100%; height:800px;">


			
	

		<div style="height: 600px;background-color:blue;opacity:.4;width:80%;display:block;margin: 0  auto; " >


		<h1 style="color:white;text-align: center;">Book hotel with the lowest prices</h1>


		<div style="margin-left: auto; margin-right: auto;width: 8em">

		<form method="POST" action="">

			
				
			<div style="height:60px;width:120px;background-color:white;">
				<input type="date" name="from">
			</div>
			<br>
		

		

			<div style="height:60px;width:120px;background-color:white;">
				<input type="date" name="to">
			</div>
<br>
			<div style="height:60px;width:400px;background-color:white;position:relative;left:-100px">
				<input type="text" name="city" value="City">
			</div>
			<br><br>
			<div style="height:60px;width:120px;background-color:white;">
				<input type="number" name="no" >
			</div>
			<br>
			<button  style="position:relative;left:20px;" class="red waves-effect">Submit</button>

		</form>
	</div>



</div>


</div>


<br><br><br><br>
<?php include("find_hotels.php"); ?>
















<div class="card-panel z-depth-2" style="background-color: #A0A0A0;margin-left: auto; margin-right: auto;width:80%;">

<h3 style="position:relative;left:30px;">Login</h3>


  		<form method="POST" action="login.php">

  		<div style="position:relative;width:300px;background-color:white;left:20px;">

  			<input type="text" value="username" name="user">

  		</div><br><br>

	<div style="position:relative;width:300px;background-color:white;left:20px;">

  			<input type="password" value="password" name="pass">

  		</div>
  		<br><br>


  		<button class="red red waves-effect" style="position:relative;left:20px;" type="submit" >Submit</button>

  		</form>
  	</div>
</body></html>










