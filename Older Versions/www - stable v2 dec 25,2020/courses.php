<?php
session_start();
?>
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
				echo '<tr><td>'.$obj->courseName." </td>";
				$tutorialTitle = str_replace($obj->courseName, "", $obj->tutorialName);
				echo '<td><a href="content/'.$obj->tutorialName.'.php">'.$tutorialTitle.'</a></td></tr><br>';
				

			}
		}

	}

?>
<html>
<head>
	
</head>

<body class="<?php echo $websiteBGColor; ?>">
	<div class="container"> <br>
		<table class="table">
    <thead>
      <tr>
        <th>Course Series</th>
        <th>Tutorial</th>
      </tr>
    </thead>
    <tbody>
      <?php scanCourses();?>
      </tbody>
  </table>

	</div>

</body>
</html>
<?php include "footer/footer.php" ?>