<?php

 include "header/header.php";

function displayContent()
{
	$arr = scandir("content/");
	for ($i=2; $i < sizeof($arr) ; $i++) 
	{ 
		$obj = new displayGenericPost($arr[$i]);
	}
}


?>
<html>
<head>
	
</head>

<body class="<?php echo $websiteBGColor; ?>">
	<div class="container "> <br>
		<div class="row">
			<?php displayContent(); ?>
		</div>

	</div>

</body>
</html>
<?php include "footer/footer.php" ?>