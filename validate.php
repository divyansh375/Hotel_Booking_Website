<?php




$name_err="";
$user_err="";
$pass_err="";
$repass_err="";
$email_err="";


$error="false";

if(!empty($_POST["name"]))
{
	
$name=$_POST["name"];
$user=$_POST["user"];
$pass=$_POST["pass"];
$repass=$_POST["repass"];
$email=$_POST["email"];

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="test";


$conn = mysqli_connect($servername, $username, $password, $dbname);




if(strlen($pass)<=6 || empty($pass))
{
	$error="true";
	$pass_err.="please enter a password of minimum length 6";
	
}	

if($repass!=$pass)
{
	$error="true";
	$repass_err.="passwords dont match";
	
}

if(empty($user))
{
	$error="true";
	$user_err.="please enter your username";
}


if(empty($name))
{
	$error="true";
	$name_err.="please enter your name";
}

if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
	$error="true";
	$email_err.="please enter a valid email";
}



if($error=="false")
{
	
	$sql="insert into user_details values('$user','$pass','$name','$email')";
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('sign up successful!!')</script>";
	}
	else
	{
		echo mysqli_error($conn);
	}
	
}
mysqli_close($conn);


}
?>
		


	