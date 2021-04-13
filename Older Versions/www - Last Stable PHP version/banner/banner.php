<?php 
// Unused for now - ut can be used for other text effects
  switch ($websiteNameColor) {
    case 'text-primary':
      $EmbossColor = "blue";
      break;
    case 'text-secondary':
      $EmbossColor = "gray";
      break;
    case 'text-light':
      $EmbossColor = "white";
      break;
    case 'text-dark':
      $EmbossColor = "black";
      break;
    case 'text-success':
      $EmbossColor = "green";
      break;
    case 'text-danger':
      $EmbossColor = "red";
      break;
    case 'text-warning':
      $EmbossColor = "yellow";
      break;
    case 'text-info':
      $EmbossColor = "MediumSeaGreen";
      break;
    default:
      $EmbossColor = "black";
      break;
    
    
  }
?>
<html>

<head>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Source+Code+Pro:wght@600&family=Ubuntu&display=swap" rel="stylesheet"> 
</head>

<body>
	<div class="jumbotron jumbotron-fluid">
  <div class="container"> 
    <div class = "textBG">
      <h1 class="display-3 <?php echo($websiteNameColor); ?> bannerH"><?php echo $bannerHeader; ?></h1><br>
      <p class="  <?php echo($websiteNameColor); ?> bannerP"><?php echo $bannerSubHeader; ?></p>
    </div>
</div>
</div>

</body>

</html>
<style type="text/css">
	.jumbotron {
  color: black;
 
  background-image: url("banner/banner.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100vh;
  padding-left:20%;
  font-size: +2em;

  
}
.bannerH
{
  text-shadow: 0px 1px 0px #000, 0px 2px 0px #000, 0px 3px 0px #000, 0px 4px 0px #000, 0px 5px 0px #000, 0px 6px 0px #000, 0px 7px 0px #000, 0px 8px 7px #000;
    
    font-family: 'Source Code Pro', monospace;
}
.bannerP
{
  text-shadow: 0px 1px 0px #000, 0px 2px 0px #000, 0px 3px 0px #000, 0px 4px 0px #000, 0px 5px 0px #000, 0px 6px 0px #000, 0px 7px 0px #000, 0px 8px 7px #000;
    
  font-family: 'Source Code Pro', monospace;
  font-family: 'Dancing Script', cursive;
  font-family: 'Ubuntu', sans-serif;
  

    
}


}
.textBG
{
  background: rgba(0, 0, 0, 0);
  display:inline-table;  
  padding: 25px 25px 25px 25px;         
}
</style>

