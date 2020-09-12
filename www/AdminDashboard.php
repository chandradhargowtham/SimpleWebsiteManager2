<?php 
include "header/header.php";


if(isset($_POST["submit"]))
{
	
	$websiteName=$_POST["websiteName"];
	$websiteType=$_POST["websiteType"];
	$bannerHeader = $_POST["bannerHeader"];
	$bannerSubHeader = $_POST["bannerSubHeader"];
	$primaryWebsiteColor = $_POST["primaryWebsiteColor"];
	$secondaryWebsiteColor = $_POST["secondaryWebsiteColor"];
	$primaryTextColor = $_POST["primaryTextColor"];
	$secondaryTextColor = $_POST["secondaryTextColor"];
	$websiteBGColor = $_POST["websiteBGColor"];
	$websiteNameColor = $_POST["websiteNameColor"];
	$footerURL=$_POST["footerURL"];
	$linkTextColor= $_POST["linkTextColor"];
	$navTextColor = $_POST["navTextColor"];

	$obj = new websiteConfig();
	
	$obj->addData($websiteName,$websiteType,$bannerHeader,$bannerSubHeader,$primaryWebsiteColor,$secondaryWebsiteColor,$primaryTextColor,$secondaryTextColor,$websiteBGColor,$websiteNameColor,$footerURL,$linkTextColor,$navTextColor);
	
	toJson($obj);
	Echo "Save Complete";
}

?>
<html>
<head>
</head>
<body>
	<div class="container p-4">
		<a class="btn btn-primary" href="adminCreatePage.php">Create a New post </a> <br><hr>
		<form action="AdminDashboard.php" method = "POST">
			Enter Website Name : <input type="text" name="websiteName" value="<?php echo $websiteName; ?>"><br><br>
			Enter Website Name Color : 
			<select name="websiteNameColor"><option value="bg-primary">Blue</option>
				<option value="bg-dark">Black</option>
				<option value="bg-light">White</option>
				<option value="bg-danger">Red</option>
				<option value="bg-info">Cerulean</option>
				<option value="bg-success" selected="selected">Green</option>
				<option value="bg-warning">Yellow</option>
				<option value="bg-secondary">Gray</option>
			</select><br><br>
			Enter Website Type : <select name ="websiteType"><option value="genericWebsite">Generic Website</option><option value="learningPortal">Learning Portal</option></select><br><br>
			Enter Home Page Banner Title : <input type="text" name="bannerHeader" value="<?php echo $bannerHeader; ?>"><br><br>
			Enter Home Page Banner Caption : <input type="text" name="bannerSubHeader" value="<?php echo $bannerSubHeader; ?>"><br><br>
			Enter Primary Website Color : 
			<select name="primaryWebsiteColor"><option value="bg-primary">Blue</option>
				<option value="bg-dark" selected="selected">Black</option>
				<option value="bg-light" >White</option>
				<option value="bg-danger">Red</option>
				<option value="bg-info">Cerulean</option>
				<option value="bg-success">Green</option>
				<option value="bg-warning">Yellow</option>
				<option value="bg-secondary">Gray</option>
			</select><br><br>
			Enter Secondary Website Color : 
			<select name="secondaryWebsiteColor"><option value="bg-primary">Blue</option>
				<option value="bg-dark">Black</option>
				<option value="bg-light">White</option>
				<option value="bg-danger">Red</option>
				<option value="bg-info">Cerulean</option>
				<option value="bg-success">Green</option>
				<option value="bg-warning" selected="selected">Yellow</option>
				<option value="bg-secondary">Gray</option>
			</select><br><br>
			Enter Primary Text Color : 
			<select name="primaryTextColor"><option value="text-primary">Blue</option>
				<option value="text-dark" selected="selected">Black</option>
				<option value="text-light">White</option>
				<option value="text-danger">Red</option>
				<option value="text-info">Cerulean</option>
				<option value="text-success">Green</option>
				<option value="text-warning">Yellow</option>
				<option value="text-secondary">Gray</option>
			</select><br><br>
			Enter Secondary Text Color : 
			<select name="secondaryTextColor"><option value="text-primary">Blue</option>
				<option value="text-dark">Black</option>
				<option value="text-light">White</option>
				<option value="text-danger" selected="selected">Red</option>
				<option value="text-info">Cerulean</option>
				<option value="text-success">Green</option>
				<option value="text-warning">Yellow</option>
				<option value="text-secondary">Gray</option>
			</select><br><br>
			Enter Website Background Color : 
			<select name="websiteBGColor"><option value="bg-primary">Blue</option>
				<option value="bg-dark">Black</option>
				<option value="bg-light">White</option>
				<option value="bg-danger">Red</option>
				<option value="bg-info">Cerulean</option>
				<option value="bg-success">Green</option>
				<option value="bg-warning">Yellow</option>
				<option value="bg-secondary" selected="selected">Gray</option>
			</select><br><br>
			Enter Link Text Color : 
			<select name="linkTextColor"><option value="text-primary">Blue</option>
				<option value="text-dark">Black</option>
				<option value="text-light">White</option>
				<option value="text-danger">Red</option>
				<option value="text-info">Cerulean</option>
				<option value="text-success" selected="selected">Green</option>
				<option value="text-warning">Yellow</option>
				<option value="text-secondary">Gray</option>
			</select><br><br>
			Enter Navigation Bar Text Color : 
			<select name="navTextColor"><option value="text-primary">Blue</option>
				<option value="text-dark">Black</option>
				<option value="text-light" selected="selected">White</option>
				<option value="text-danger">Red</option>
				<option value="text-info">Cerulean</option>
				<option value="text-success">Green</option>
				<option value="text-warning">Yellow</option>
				<option value="text-secondary">Gray</option>
			</select><br><br>
			Enter Footer URL : <input type="text" name="footerURL" value="<?php echo $footerURL; ?>"><br><br>

			<input type="submit" name="submit" value="Save Data">
		</form><hr>
	</div>
</body>
</html>
