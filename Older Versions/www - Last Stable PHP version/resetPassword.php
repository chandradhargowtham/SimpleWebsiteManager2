<?php
	include "header/header.php";
?>
<?php

if(isset($_POST["submit"]))
{
	$emailId=$_POST["emailId"];
	

	$userExists = false;
	$dir = scandir("system/data/userDB");
	for ($i=2; $i <sizeof($dir) ; $i++) 
		{ 
			$userExists=file_exists("system/data/userDB/".$emailId.".json");		
		}

		if($userExists)
		{
			$file= fopen("system/data/userDB/".$emailId.".json","r");	
			$line= fgets($file);
			fclose($file);
			$obj= json_decode($line);

			$tempUserName=$obj->userName;
			$tempEmailId=$obj->emailId;
			$tempPassword=$obj->password;

			$resetCode = rand(10000,99999);
			echo $resetCode;
			$file= fopen("system/data/userDB/".$obj->emailId.".json","w");	
			$line= fgets($file);
			$newUser= new user($tempUserName,$tempPassword,$tempEmailId,$resetCode);
			toJson($newUser);
			fclose($file);

			if($obj->emailId===$emailId)
			{

				$outputString = "Reset Code: ".$resetCode;
				mail($emailId, $websiteName." - New Registration", $outputString);
				echo '<div class="alert alert-success" role="alert">Reset Code Sent.</div>';
			}
		}else
		{
			echo '<div class="alert alert-danger" role="alert">Account not found with this email.</div>';
		}
}

if(isset($_POST["reset"]))
{
	$resetId=$_POST["resetId"];
	$newPassword=$_POST["newPassword"];
	$emailId=$_POST["emailId"];
	
	$userExists = false;
	$dir = scandir("system/data/userDB");
	for ($i=2; $i <sizeof($dir) ; $i++) 
		{ 
			$userExists=file_exists("system/data/userDB/".$emailId.".json");		
		}

		if($userExists)
		{
			$file= fopen("system/data/userDB/".$emailId.".json","r");	
			$line= fgets($file);
			fclose($file);
			$obj= json_decode($line);

			$tempUserName=$obj->userName;
			$tempEmailId=$obj->emailId;
			$tempPassword=$obj->password;
			$tempResetCode=$obj->passwordResetCode;

			if($tempResetCode==$resetId)
			{
				$file= fopen("system/data/userDB/".$emailId.".json","w");	
				$line= fgets($file);
				$newUser= new user($tempUserName,$newPassword,$tempEmailId,"");
				toJson($newUser);
				fclose($file);
				echo '<div class="alert alert-success" role="alert">Password Changed Successfully.</div>';
			}else
			{
				echo '<div class="alert alert-danger" role="alert">Please check the resetCode.</div>';
			}
			

		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
</head>
<body class="<?php echo $websiteBGColor; ?> ">
	<div class="container">
		<div class="card m-5 w-60 <?php echo($websiteBGColor); ?>">
		<form method="POST" action=""> 	
			 <div class="form-group <?php echo $navTextColor; ?>"><p>Enter Email ID :</p> <input class="form-control"type="text" name="emailId"></div>
			 <div class="form-group <?php echo $navTextColor; ?>"> <input class="form-control btn <?php echo($secondaryWebsiteColor); ?>" type="submit" name="submit" value = "Send Password Reset Link"></div>
		</form>
		</div>
	</div>
	<div class="container">
		<div class="card m-5 w-60 <?php echo($websiteBGColor); ?>">
		<form method="POST" action=""> 	
			 <div class="form-group <?php echo $navTextColor; ?>"><p>Enter Email ID :</p> <input class="form-control"type="text" name="emailId"></div>
			 <div class="form-group <?php echo $navTextColor; ?>"><p>Enter New Password :</p> <input class="form-control"type="text" name="newPassword"></div>
			 <div class="form-group <?php echo $navTextColor; ?>"><p>Enter Reset ID:</p> <input class="form-control"type="text" name="resetId"></div>
			 <div class="form-group <?php echo $navTextColor; ?>"> <input class="form-control btn <?php echo($secondaryWebsiteColor); ?>" type="submit" name="reset" value = "Reset Password"></div>
		</form>
		</div>
	</div>

</body>
</html>

<?php
	include "footer/footer.php";
?>
