<?php 
session_start();
?>

<?php include "header/header.php" ?>
<html>
    



<body class="<?php echo $websiteBGColor; ?>">
<div class="container p-5 m-5">
  <form action="" autocomplete="on">
  <input id="search" name="search" type="text" placeholder="Enter article name/type"><input value="Search" type="submit">
  <br><br>
  </form>
  <table class="table">
    <thead>
      <tr>
        <th>Results</th>
        
      </tr>
    </thead>
    <tbody>
<?php

$category = $_GET["category"];
$searchQuery = $_GET["search"];

if(isset($searchQuery))
{
	$a=scandir("system/data/articleDB");

	
	for($i=2;$i<sizeof($a);$i++)
	{

		$articleName=substr($a[$i], 0,strlen($a[$i])-5);
		
		$file= fopen("system/data/articleDB/".$a[$i], "r");
		$line=fgets($file);
		$obj=json_decode($line);

		//echo $line;
		if(preg_match("/{$searchQuery}/i", $obj->tutorialName)  || preg_match("/{$searchQuery}/i", $obj->tutorialLang))
		{
			
				echo '<tr><td><a href="content/'.$articleName.".php".'">'.$obj->tutorialName.'</a></td></tr>';
			

		}
		if(preg_match("/{$searchQuery}/i", $obj->postName)  )
		{
			
				echo '<tr><td><a href="content/'.$articleName.".php".'">'.$obj->postName.'</a></td></tr>';
		}


	}
	 echo "<tr><td>End of results</td></tr>";

	
	
}

?>
</table>

</div>
</body>
</html>

<?php include "footer/footer.php" ?>
