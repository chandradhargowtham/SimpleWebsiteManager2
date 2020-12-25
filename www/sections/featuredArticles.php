
<html>
<head></head>
<body class="<?php echo $websiteBGColor; ?>">
	<div class="container<?php echo $websiteBGColor; ?> p-5">
		<h5>Featured Articles : </h5>
		<div class="row">
      <?php
      
        displayContent();   

      ?>
			
			

		</div>
	</div>

</body>
</html>
<?php 
function displayContent()
{
  //
    $websiteConfigData = new websiteConfig();
    $websiteConfigData = fromJson($websiteConfigData);

    
    $websiteType = $websiteConfigData->websiteType;
    
  //
  $arr = scandir("content/");
  
  for ($i=2; $i < 8 ; $i++) 
  { 
    if($arr[$i]!="images")
    {
    if($websiteType=="learningPortal")
      {

        $obj = new displayTutorial($arr[$i]);
      }else
      {
        $obj = new displayGenericPost($arr[$i]);
      }
    }
  }
} 


?>