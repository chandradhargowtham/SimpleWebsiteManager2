<?php 
session_start();
if($_SESSION['loggedIn']!=true)
{
    header("Location: login.php");
}
?>
<?php include "header/header.php" ?>

<html>
<head>
	
</head>
<body>
	<div class="container">
		<form method = "POST" action="AdminCreatePage.php">
			<br><br>
			Enter Post Name: <input type="text" name="postName"><br>
			Enter Post Type: 
			<?php 
			if($websiteType=="learningPortal")
			{
				echo '<select name="postType">';
	            echo '<option value="article">Article</option>';
	            echo '<option value="tutorial">Tutorial</option>';
	            echo '<option value="course">Course</option>';
	            echo '</select><br>';

	            echo 'Enter Course Name: <input type="text" name="courseName" value="None"><br>';

	            echo 'Enter Tutorial Category:';
         		echo '<select name="postCategory">';
			    echo '<option>Unity</option>';
			    echo '<option>PHP</option>';
			    echo '<option>HTML-Bootstrap</option>';
			    echo '<option>Design Patterns</option>';
			    echo '<option>Programming</option>';
			    echo '<option>General</option>';
  				echo '</select><br><br>';

  				

			}else
			{
				echo '<select name="postType">';
	             echo '<option value="article">Article</option>';
	             echo '</select><br>';
			}

			?>
			
		Enter Post Content: <textarea name="postContent" style = "width:100%; height: 80vh;"></textarea>
		<input type="submit" value="Create Page" name="submit">
		<br><br>
		
		<p><br><a href="<?php echo $path; ?>addCodeSnippet.php" target="_blank">Click here </a>to add a code snippet.</p>
  		<p><a href="<?php echo $path; ?>image.php" target="_blank">Click here </a>to upload and add an image.</p>
	</form>

	</div>
</body>

</html>

<?php

include "system/embeddedHTMLCode.php";
if($_POST["submit"])
{
	$title = $_POST["postName"];
	$content = $_POST["postContent"];
	$type = $_POST["postType"];
	$lang = $_POST["postCategory"];
	$courseName	=$_POST["courseName"];

	if($courseName=="None")
	{
		$prefix="";
	}else
	{
		$prefix=$courseName;
	}
	
	$content = str_replace("\n", "<br>", $content);

	$finalContent = '<?php include "../header/header.php"; ?>'.$articleBodyOpenTag."<br><h1>".$title."</h1>"."<br><br>".$content.$articleBodyCloseTag."<br><br>".'<?php include "../footer/footer.php"; ?>';
	
	$file=fopen("content/".$prefix.$title.".php", "w");
	fwrite($file, $finalContent);
	fclose($file);


	echo "Created ".$title." successfully.";
	if($websiteType=="learningPortal")
	{
		$postEntry = new tutorialEntry($prefix.$title,$type,$lang,$courseName,$_SESSION['User'],date("d-m-Y"));
		if($type=="article")
		{
			$postEntry= new genericPost($title,$_SESSION['User'],date("d-m-Y"));
		}
	}else
	{
		$postEntry= new genericPost($title,$_SESSION['User'],date("d-m-Y"));
	}
	
	
	toJson($postEntry);

}

?>