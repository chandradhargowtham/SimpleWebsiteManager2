<?php 
session_start();
if($_SESSION['loggedIn']!=true)
{
    header("Location: login.php");
}
?>
<?php 
include "header/header.php";


if(isset($_POST["submit"]))
{
	// Website FrontEnd Config
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
	$contactEmailId = $_POST["contactEmailId"];
	// ProductDescription HomePage Vars
	$productDescriptionTitleText = $_POST["productDescriptionTitleText"];
	$productDescriptionTitleLinkLabel = $_POST["productDescriptionTitleLinkLabel"];
	$productDescriptionMainText = $_POST["productDescriptionMainText"];
	$productDescriptionLink = $_POST["productDescriptionLink"];
	$productDescriptionBG = $_POST["productDescriptionBG"];
	// Product Page Vars
	$productPageHeader= $_POST["productPageHeader"];
	$productPageParaOne= $_POST["productPageParaOne"];
	$productPageParaOneColor= $_POST["productPageParaOneColor"];
	$productPageParaTwo= $_POST["productPageParaTwo"];
	$productPageParaTwoColor= $_POST["productPageParaTwoColor"];
	$productPagefbLink= $_POST["productPagefbLink"];
	$productPageTwitterLink= $_POST["productPageTwitterLink"];
	$productPageInstaLink= $_POST["productPageInstaLink"];
	$productPageLinkColor= $_POST["productPageLinkColor"];

	

	

	$obj = new websiteConfig();
	
	$obj->addData($websiteName,$websiteType,$bannerHeader,$bannerSubHeader,$primaryWebsiteColor,$secondaryWebsiteColor,$primaryTextColor,$secondaryTextColor,$websiteBGColor,$websiteNameColor,$footerURL,$linkTextColor,$navTextColor,$contactEmailId,$productDescriptionTitleText,$productDescriptionTitleLinkLabel,$productDescriptionMainText,$productDescriptionLink,$productPageHeader,$productPageParaOne,$productPageParaOneColor,$productPageParaTwo,$productPageParaTwoColor,$productPagefbLink,$productPageTwitterLink,$productPageInstaLink,$productPageLinkColor,$productDescriptionBG);
	
	toJson($obj);
	Echo "Save Complete";
}

?>
<html>
<head>
</head>
<body class="<?php echo $websiteBGColor; ?>">
	<div class="container p-4">
		<a class="btn btn-primary" href="AdminCreatePage.php">Create a New post </a> <br><hr>
		<a class="btn btn-primary" href="imageManager.php" target="_Blank">Image Manager </a> <br><hr>

		<h4>Website FrontEnd Config : </h4><hr>
		<form action="AdminDashboard.php" method = "POST">
			Enter Website Name : <input type="text" name="websiteName" value="<?php echo $websiteName; ?>"><br><br>
			Enter Website Name Color : 
			<select name="websiteNameColor"><option value="text-primary">Blue</option>
				<option value="text-dark">Black</option>
				<option value="text-light">White</option>
				<option value="text-danger">Red</option>
				<option value="text-info">Cerulean</option>
				<option value="text-success" selected="selected">Green</option>
				<option value="text-warning">Yellow</option>
				<option value="text-secondary">Gray</option>
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
				<option value="bg-light" selected="selected">White</option>
				<option value="bg-danger">Red</option>
				<option value="bg-info">Cerulean</option>
				<option value="bg-success">Green</option>
				<option value="bg-warning">Yellow</option>
				<option value="bg-secondary">Gray</option>
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
			Enter Contact Email : <input type="text" name="contactEmailId" value="<?php echo $contactEmailId; ?>"><br><br>

			<h4>Home Page Product Description Section : </h4><hr>
			Enter Product Description Title : <input type="text" name="productDescriptionTitleText" value="<?php echo $productDescriptionTitleText; ?>"><br><br>
			Enter Product Description Link Label : <input type="text" name="productDescriptionTitleLinkLabel" value="<?php echo $productDescriptionTitleLinkLabel; ?>"><br><br>
			Enter Product Description Link : <input type="text" name="productDescriptionLink" value="<?php echo $productDescriptionLink; ?>"><br><br>
			Enter Product Description Main Body : <input type="text" name="productDescriptionMainText" value="<?php echo $productDescriptionMainText; ?>"><br><br>
			Enter Product Description Background Color : 
			<select name="productDescriptionBG"><option value="bg-primary">Blue</option>
				<option value="bg-dark">Black</option>
				<option value="bg-light">White</option>
				<option value="bg-danger">Red</option>
				<option value="bg-info">Cerulean</option>
				<option value="bg-success">Green</option>
				<option value="bg-warning" selected="selected">Yellow</option>
				<option value="bg-secondary">Gray</option>
			</select><br><br>

			<h4>Product Page Section : </h4><hr>
			Enter Product Page Header : <input type="text" name="productPageHeader" value="<?php echo $productPageHeader; ?>"><br><br>
			Enter productPageParaOne : <input type="text" name="productPageParaOne" value="<?php echo $productPageParaOne; ?>"><br><br>
			Enter productPageParaOne Color : 
			<select name="productPageParaOneColor"><option value="bg-primary">Blue</option>
				<option value="bg-dark">Black</option>
				<option value="bg-light" selected="selected">White</option>
				<option value="bg-danger">Red</option>
				<option value="bg-info">Cerulean</option>
				<option value="bg-success">Green</option>
				<option value="bg-warning">Yellow</option>
				<option value="bg-secondary">Gray</option>
			</select><br><br>
			Enter productPageParaTwo : <input type="text" name="productPageParaTwo" value="<?php echo $productPageParaTwo; ?>"><br><br>
			Enter productPageParaTwo Color : 
			<select name="productPageParaTwoColor"><option value="bg-primary">Blue</option>
				<option value="bg-dark">Black</option>
				<option value="bg-light" selected="selected">White</option>
				<option value="bg-danger">Red</option>
				<option value="bg-info">Cerulean</option>
				<option value="bg-success">Green</option>
				<option value="bg-warning">Yellow</option>
				<option value="bg-secondary">Gray</option>
			</select><br><br>
			Enter Fb Link : <input type="text" name="productPagefbLink" value="<?php echo $productPagefbLink; ?>"><br><br>
			Enter Twitter Link : <input type="text" name="productPageTwitterLink" value="<?php echo $productPageTwitterLink; ?>"><br><br>
			Enter Instagram Link : <input type="text" name="productPageInstaLink" value="<?php echo $productPageInstaLink; ?>"><br><br>
			Enter Links Bar Color : 
			<select name="productPageLinkColor"><option value="bg-primary">Blue</option>
				<option value="bg-dark" selected="selected">Black</option>
				<option value="bg-light">White</option>
				<option value="bg-danger">Red</option>
				<option value="bg-info">Cerulean</option>
				<option value="bg-success">Green</option>
				<option value="bg-warning">Yellow</option>
				<option value="bg-secondary">Gray</option>
			</select><br><br>


			<input type="submit" name="submit" value="Save Data">
		</form><hr>
	</div>
</body>
</html>
<?php include "footer/footer.php"; ?>
