<?php



if(empty($_SESSION["username"]))
	{
		
		
		echo "
		
		<a href='login.php' style='text-decoration:none;color:blue;position:absolute;right:90px;top:24px'>Log in</a>
		<a href='sign_up.php' style='text-decoration:none;color:blue;position:absolute;right:30px;top:24px'>Sign up</a>
		
		
		";
	}
	else
	{
		$u=$_SESSION["username"];
		echo "
		<p style='position:absolute;right:220px;color:blue;top:10px;'>Welcome $u |</p>
		<a href='logout.php' style='text-decoration:none;color:blue;position:absolute;right:140px;top:24px'>Logout</a>
		<a href='view.php' target='_blank' style='text-decoration:none;color:blue;position:absolute;right:30px;top:24px'>View Tickets</a>
		";
	}
	
	?>
		