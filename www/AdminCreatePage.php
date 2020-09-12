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
			<select name="postType">
	             <option value="article">Article</option>
	             <!--<option value="tutorial">Tutorial</option>
	             <option value="course">Course</option>-->
         	</select><br>
         	<!--Enter Tutorial Category:
         	<select name="postCategory">
			    <option>Unity</option>
			    <option>PHP</option>
			    <option>HTML-Bootstrap</option>
			    <option>Design Patterns</option>
			    <option>General</option>
  			</select><br><br>-->
		Enter Post Content: <textarea name="postContent" style = "width:100%; height: 80vh;"></textarea>
		<input type="submit" value="Create Page" name="submit">
		<br><br>
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

	$finalContent = '<?php include "../header/header.php"; ?>'.$articleBodyOpenTag."<br><h1>".$title."</h1>"."<br><br>".$content.$articleBodyCloseTag.'<?php include "../footer/footer.php"; ?>';
	$file=fopen("content/".$title.".php", "w");
	fwrite($file, $finalContent);
	fclose($file);

	echo "Created ".$title." successfully.";
	$postEntry= new genericPost($title);
	toJson($postEntry);

}

?>