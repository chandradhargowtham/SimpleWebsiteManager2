

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form method = "POST" action="AdminCreatePage.php">
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
	</form>

	</div>
</body>

</html>

<?php
include "system/systemIncluders.php";
if($_POST["submit"])
{
	$title = $_POST["postName"];
	$content = $_POST["postContent"];
	$type = $_POST["postType"];
	$lang = $_POST["postCategory"];

	$finalContent = $articleHeaderTag."<br>".$articleBodyOpenTag.$content.$articleBodyCloseTag;
	$file=fopen("content/".$title.".html", "w");
	fwrite($file, $finalContent);
	fclose($file);

//name,type,lang,coursename,author,pubdate
	//$articleEntry = new article($title.".html",$type,$lang,"korse");
	$postEntry= new genericPost($title);
	//echo "sending for conversion";
	toJson($postEntry);

}

?>