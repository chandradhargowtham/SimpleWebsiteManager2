<?php
session_start();


if(isset($_POST["submit"]))
{
	$emailId=$_POST["emailId"];
	$password=$_POST["password"];

	$userExists = false;
	$dir = scandir("system/data/userDB");
	for ($i=2; $i <sizeof($dir) ; $i++) 
		{ 
			$userExists=file_exists("system/data/userDB/".$emailId.".json");		
		}

		if($userExists)
		{
			//echo $userExists." = User Exists - ";
			$file= fopen("system/data/userDB/".$emailId.".json","r");	
			$line= fgets($file);
			fclose($file);
			$obj= json_decode($line);

			if($obj->emailId===$emailId)
			{
				//echo $emailId." matches - ";
				if($obj->password===$password)
				{
					//echo $password." matches";
					$_SESSION['loggedIn']=true;
					$_SESSION['User']=$emailId;
					
					header('Location: index.php');
					echo '<div class="alert alert-success" role="alert">Login Successfull</div>';

				}else
				{
					echo '<div class="alert alert-danger" role="alert">Incorrect Password.</div>';
					
				}
			}else
			{
				echo '<div class="alert alert-danger" role="alert">Email not a match.</div>';
			}
		}else
		{
			echo '<div class="alert alert-danger" role="alert">Account not found with this email.</div>';
		}
}

?>
<?php
	include "header/header.php";
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
			 <div class="form-group <?php echo $primaryTextColor; ?>"><p>Enter Email ID :</p> <input class="form-control"type="text" name="emailId"></div>
			 <div class="form-group <?php echo $primaryTextColor; ?>"><p>Enter Password : </p><input class="form-control" type="password" name="password"></div>	 
			 <div class="form-group <?php echo $primaryTextColor; ?>"> <input class="form-control btn <?php echo($secondaryWebsiteColor); ?>" type="submit" name="submit" value = "Login"></div>
			 <a class="btn <?php echo $secondaryWebsiteColor." ".$linkTextColor; ?>"href="register.php">Create Account</a>
			 <a class="btn <?php echo $secondaryWebsiteColor." ".$linkTextColor;  ?>"href="resetPassword.php">Reset Password</a>
		</form>
		</div>
	</div>

</body>
</html>

<?php
	include "footer/footer.php";
?>
