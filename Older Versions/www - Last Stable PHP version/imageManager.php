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
  <title>Upload your files</title>
</head>
<body>
  <form enctype="multipart/form-data" action="imageManager.php" method="POST">
    <p>Upload your file (max file size is 2MB)</p>
    <input type="file" name="uploaded_file"></input><br />
    <select name="imageType"><option value="gallery">Gallery</option>
        <option value="banner">Banner Image</option>
        <option value="productDescription">Product Description Home Page</option>
        <option value="product">Product Page</option>
    <input type="submit" value="Upload"></input>
  </form>
</body>
</html>
<?php
  if(!empty($_FILES['uploaded_file']))
  {
    $imageType= $_POST["imageType"];

    switch ($imageType) {
      case 'gallery':
        $pathMain = "gallery/";
        $path = $pathMain .date("Y-m-d"). basename( $_FILES['uploaded_file']['name']);
        break;
      case 'banner':
        $pathMain = "banner/";
        $path = $pathMain ."banner.jpg";
        break;
      case 'productDescription':
        $pathMain = "sections/";
        $path = $pathMain ."productDescription.jpg";
        break;
      case 'product':
        $pathMain = "sections/";
        $path = $pathMain ."product.jpg";
        break;
      
      default:
        # code...
        break;
    }

    
    $fileName=$_FILES['uploaded_file']['name'];
    $userfile_extn = strtolower(substr($fileName, strlen($fileName)-3));

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      if($_FILES['uploaded_file']['size']<2*1048576){
        if($userfile_extn == 'png' || $userfile_extn == 'jpg' || $userfile_extn == 'gif' || $userfile_extn == 'peg')
        {
      echo "The file has been uploaded to $imageType";

    }else
    {
      echo "Wrong format - Only Jpg,Jpeg,png and gif formats are supported.";
    }
    }else
    {
      echo "size".$_FILES['uploaded_file']['size'];
    }
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>