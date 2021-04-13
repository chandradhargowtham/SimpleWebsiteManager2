<?php
session_start();

include "header/header.php";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Product</title>
</head>
<body>
	<div class="jumbotron jumbotron-fluid"></div>
	<div class="container-fluid bg-light p-4">
		<h1 class="<?php echo $websiteNameColor?>"><?php echo $productPageHeader?></h1>
		<p class ="<?php echo $productPageParaOneColor?> container-fluid p-5">
			<?php echo $productPageParaOne?>
		</p>
		<img src="banner/banner.jpg" height="auto" width="50%" class="rounded mx-auto d-block ">

		<p class ="<?php echo $productPageParaTwoColor?> container-fluid p-5">
			<?php echo $productPageParaOne?>
		</p>
	</div>
	<div class="container-fluid <?php echo $productPageLinkColor?>">
		<div class="p-4" style="margin-left: 10%; margin-right: 10%;">
		<a href="<?php echo $productPagefbLink?>" class="fa fa-facebook"></a>
		<a href="<?php echo $productPageTwitterLink?>" class="fa fa-twitter"></a>
		<a href="<?php echo $productPageInstaLink?>" class="fa fa-instagram"></a>
		
		</div>
	</div>
</body>
</html>
<?php include "footer/footer.php" ?>

<style type="text/css">
	.jumbotron {
  color: black;
  background-image: url("sections/product.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100vh;
  padding-left:20%;
  font-size: +2em;
}
.fa {

  padding: 20px;
  font-size: 30px;
  width: 80px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;

}

/* Add a hover effect if you want */
.fa:hover {
  opacity: 0.7;
  color:black;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  background: #3B5998;
  color: white;
}

/* Twitter */
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-instagram {
  background: #b210a2 ;
  color: white;
}
</style>