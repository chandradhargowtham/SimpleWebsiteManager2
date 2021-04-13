<?php 
session_start();
include "header/header.php";

function loadImages()
{
	$arr = scandir("gallery");
	for ($i=2; $i <sizeof($arr) ; $i++) 
	{ 
		
	  	echo '<img class="img-fluid img-thumbnail" style="max-width: 40%; height: auto;" src="'."gallery/$arr[$i]".'"alt="image" >';
	}
}
?>
<html>
<head>
	<title>Gallery</title>
</head>
<body>
	<div class="container-fluid">
		
			
		<?php loadImages();?>
		
	</div>
</body>
</html>
<?php include "footer/footer.php";?>