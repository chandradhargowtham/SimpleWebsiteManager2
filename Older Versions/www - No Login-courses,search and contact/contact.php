<?php 
session_start();
?>
<?php include "header/header.php" ?>


<html lang="en">
<body class="<?php echo $websiteBGColor; ?> ">
<div  class="container-fluid">
    <div class="row">

        <h1 style="text-align: center; margin:auto;">Contact</h1>
        <div style="width: 30%; margin-top:100px; margin-left:auto; margin-right:auto">

            <form action="contact.php" method="POST">
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="image" placeholder="email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="description" placeholder="phone">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="description" placeholder="query">
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-block <?php echo($secondaryWebsiteColor) ?>">Submit!</button>
                </div>
            </form>
        </div>


    </div>

</div>

</body>

</html>




<?php

$name = $_POST["name"];
$email = $_POST["email"];
$query = $_POST["query"];

$outputString = $name." \n".$email." \n".$query;
if(isset($name))
{

mail($contactEmailId, "Website Query", $outputString);
echo "Thanks for contacting us. Message sent.";
}
?>
<?php include "footer/footer.php" ?>