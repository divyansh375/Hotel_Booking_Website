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
      </script>  '; ?>


  </head>


  <body>


  	<div class="card-panel z-depth-2" style="background-color: #A0A0A0;margin-left: auto; margin-right: auto;width:80%">

<h3 style="position:relative;left:30px;">Login</h3>

<?php include("validate.php"); ?>

  		<form method="POST" action="Sign_up.php">

  		

  		<div style="position:relative;width:300px;background-color:white;left:20px;">

  			<input type="text" value="Full name" name="name"><span style="color:red"><p><?php echo($name_err); ?> </p></span>

  		</div><br><br>


  		<div style="position:relative;width:300px;background-color:white;left:20px;">

  			<input type="text" value="Enter a username" name="user"><span style="color:red"><p><?php echo($user_err); ?> </p></span>

  		</div><br><br>
		
		<div style="position:relative;width:300px;background-color:white;left:20px;">

  			<input type="text" value="Enter your valid email" name="email"><span style="color:red"><p><?php echo($email_err); ?> </p></span>

  		</div><br><br>

  		

	<div style="position:relative;width:300px;background-color:white;left:20px;">

  			<input type="password" value="password" name="pass"><span style="color:red"><p><?php echo($pass_err); ?> </p></span>

  		</div>
  		<br><br>


  		<div style="position:relative;width:300px;background-color:white;left:20px;">

  			<input type="password" value="password" name="repass"><span style="color:red"><p><?php echo($repass_err); ?> </p></span>

  		</div>
  		<br><br>


  		<button class="red red waves-effect" style="position:relative;left:20px;" type="submit" >Submit</button>

  		</form>
  	</div>

  </body>

  </html>
