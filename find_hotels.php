<?php

if(!empty($_POST["from"]))
{
	
	
	$from=$_POST["from"];
	$to=$_POST["to"];
	$city=$_POST["city"];
	$no=$_POST["no"];
	
	
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="test";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="select * from hotel_details where city='$city' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	echo " <table class='striped bordered'>
	<th><h4>Name</h4></th>
	<th><h4>Address</h4></th>
	<th><h4>Cost</h4></th>
	<th><h4>Book</h4></th>
	 ";
	while($row=mysqli_fetch_assoc($result))
	{
		
		
		$ad=$row['address'];
		
		$na=$row['name'];
		
		$co=$row['cost'];
		
		
		echo " <tr><td>$na</td><td>$ad</td><td>$co</td><td>
			
			<form method='POST' action='book.php'>
			<input type='hidden' value='$na' name='na'>
			<input type='hidden' value='$co' name='co'>
			<input type='hidden' value='$ad' name='ad'>
			<input type='hidden' value='$city' name='city'>
			<input type='hidden' value='$no' name='no'>
			<input type='hidden' value='$from' name='from'>
			<input type='hidden' value='$to' name='to'>
			
			<button class='waves-effect btn-large' type='submit' >Book</button>
			</form>
			</td>
			</tr>
			
			";
	}
	echo "</table>";
}
}
?>
			