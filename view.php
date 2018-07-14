
<?php session_start(); ?>
<html>
<head>
<meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      
	  <?php
	  echo '
	  <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script> 
	  
	  








<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> '; ?>

</head>

<body>
<h4>Your booked Tickets</h4>
<?php 

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="test";
$u=$_SESSION["username"];
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="select * from booked_hotels_details where username='$u' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	echo " <table class='striped bordered'>
	<th><h6>Name</h6></th>
	<th><h6>From</h6></th>
	<th><h6>To</h6></th>
	 ";
	while($row=mysqli_fetch_assoc($result))
	{
		
		
		
		
		$na=$row['hotel_name'];
		
		
		$f=$row['from_date'];
		$t=$row['to_date'];
		
		
		echo " <tr><td>$na</td><td>$f</td><td>$t</td></tr>";
	}
	echo "</table>";
}

?>
</body>
</html>
		
		