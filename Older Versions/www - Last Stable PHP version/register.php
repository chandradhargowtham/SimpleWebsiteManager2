<?php
include "header/header.php";

if (isset($_POST["submit"]))
{
	$userName = $_POST["userName"];
	$password = $_POST["password"];
	$emailId = $_POST["emailId"];

	$userExists = false;
	$dir = scandir("system/data/userDB");
	for ($i=2; $i <sizeof($dir) ; $i++) 
		{ 
			$userExists=file_exists("system/data/userDB/".$emailId.".json");				
		}
		

		if($userExists==false && strlen($emailId)>3 && strlen($password)>3 && strlen($userName)>3)
		{
			$newUser= new user($userName,$password,$emailId,"");
			toJson($newUser);
			$outputString = "Thank you for registering on ".$websiteName." Your emailId is ".$emailId;
			mail($emailId, $websiteName." - New Registration", $outputString);
			echo '<div class="alert alert-success" role="alert">New Account Created</div>';
			

		}else if($userExists)
		{
			
			echo '<div class="alert alert-danger" role="alert">Account already exists with the email. New account not created</div>';
		}
		else
		{
			echo '<div class="alert alert-danger" role="alert">ERROR!! Please Reload and try again.</div>';
		}
		
					

	
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body class="<?php echo $websiteBGColor; ?> ">
	<div class="container">
		<div class="card m-5 w-60 <?php echo($websiteBGColor); ?>">
		<form method="POST" action=""> 	

			 <div class="form-group <?php echo $primaryTextColor; ?>"><p>Enter Name : </p><input class="form-control" type="text" name="userName"></div>
			 <div class="form-group <?php echo $primaryTextColor; ?>"><p>Enter Password : </p><input class="form-control" type="password" name="password"></div>
			 <div class="form-group <?php echo $primaryTextColor; ?>"><p>Enter Email ID :</p> <input class="form-control"type="text" name="emailId"></div>
			 <div class="form-group <?php echo $primaryTextColor; ?>"> <input class="form-control btn <?php echo($secondaryWebsiteColor); ?>" type="submit" name="submit" value = "Create Account"></div>
		</form>
		</div>
	</div>

</body>
</html>