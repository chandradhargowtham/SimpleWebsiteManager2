
<html>
<head></head>
<body class="<?php echo $websiteBGColor; ?>">

  <div class="container-fluid <?php echo $websiteNameColor; ?> p-5 ">
    
    <div class="row <?php echo $productDescriptionBG ?>">
      
      <div class="card">
          <img class="card-img-top" style="width: 18rem;" src="sections/productDescription.jpg" alt="Card image cap" >
        <div class="card-body">
          <h5 class="card-title <?php echo $primaryTextColor; ?>"><?php echo $productDescriptionTitleText ?></h5>
          <a href="<?php echo $productDescriptionLink ?>" class="btn btn-primary "><?php echo $productDescriptionTitleLinkLabel ?></a>
          
        </div>
      </div>
      <div class="container float-right p-3">
        <h5 class="card-title"><?php echo $productDescriptionMainText ?> </h5>

      </div>
    </div>
  </div>

</body>
</html>
<?php 

 


?>