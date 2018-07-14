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



 








</body>
</html>