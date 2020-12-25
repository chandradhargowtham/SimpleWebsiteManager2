<?php 
session_start();
?>
<?php include "header/header.php"; ?>
<?php include "banner/banner.php"; ?>
<?php 
if($websiteType=="learningPortal")
{
	include "categories/categories.php";
}else
{
	include "sections/productDescription.php"; 
}
?>
<?php include "sections/featuredArticles.php"; ?>
<?php include "footer/footer.php"; ?>




