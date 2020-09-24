<?php 
session_start();
if($_SESSION['loggedIn']!=true)
{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Code Snippet</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/mmlogo.png" />
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- custom stylesheet -->
    <link href="index.css" rel="stylesheet">
    <!-- font awesome cdn -->
    <script src="https://kit.fontawesome.com/2f26e4cb71.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<form action="" method="POST">
	<p> Paste code in the box below:<br>
	<textarea  style = "width:100%; height: 80vh;" name="textarea"></textarea>
	<input type="submit" value="Generate Code Snippet">
</form>
</body>
</html>
<?php
if (isset($_POST['textarea'])) 
{
	$ohyeah=$_POST['textarea'];
	$newText= str_replace("<", "&lt",$ohyeah );
	$finalText= str_replace(">", "&gt",$newText );
	$finalText = str_replace("\n", "</code><br><code>", $finalText);
	$string="<b>Code Snippet</b><br>"."<code>".$finalText."</code>";
	echo "Paste this code in you content area in the Admin Tools Page.";
	echo "<input type='text' value='$string''>";	
	echo "You can close this window after copying the text.";
}

?>