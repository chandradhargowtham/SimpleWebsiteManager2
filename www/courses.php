<?php

 	include "header/header.php";
	function scanCourses()
	{
		$arr = scandir("system/data/articleDB/");
		$courseNameList = array();
		for ($i=2; $i < sizeof($arr) ; $i++) 
		{ 
			
			$file=fopen("system/data/articleDB/".$arr[$i], "r");
			$line= fgets($file);
			$obj=json_decode($line);

			if($obj->courseName!="None" && $obj->tutorialName!= "")
			{	
				echo $obj->courseName." - ";
				echo '<a href="content/'.$obj->tutorialName.'.php">'.$obj->tutorialName.'</a><br>';
				

			}
		}

	}

?>
<html>
<head>
	
</head>

<body>
	<div class="container"> <br>
		<div class="rows">
			<?php scanCourses(); ?>
		</div>

	</div>

</body>
</html>
<?php include "footer/footer.php" ?>