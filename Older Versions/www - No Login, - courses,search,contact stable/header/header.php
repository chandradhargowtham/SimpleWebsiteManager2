<?php  
if(is_dir("system"))
{
include "system/systemIncluders.php";
}
else
{
include "../system/systemIncluders.php";
}

if(is_dir("content"))
{
$path = "";
}else
{
$path = "../";
}

// get website Config data - will be used all over the website (since header is attached to every single page, it will be accessible)

$websiteConfigData = new websiteConfig();
$websiteConfigData = fromJson($websiteConfigData);

$websiteName = $websiteConfigData->websiteName;
$websiteNameColor = $websiteConfigData->websiteNameColor;
$websiteType = $websiteConfigData->websiteType;
$websiteBGColor = $websiteConfigData->websiteBGColor;
$primaryWebsiteColor = $websiteConfigData->primaryWebsiteColor;
$secondaryWebsiteColor = $websiteConfigData->secondaryWebsiteColor;
$primaryTextColor = $websiteConfigData->primaryTextColor;
$secondaryTextColor = $websiteConfigData->secondaryTextColor;
$footerURL = $websiteConfigData->footerURL;
$bannerHeader= $websiteConfigData->bannerHeader;
$bannerSubHeader= $websiteConfigData->bannerSubHeader;
$navTextColor = $websiteConfigData->navTextColor;
$contactEmailId =$websiteConfigData->contactEmailId;
$linkTextColor = $websiteConfigData->linkTextColor;

?>
<!doctype html>
<html lang="en">

<head>
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
    <header class="sticky-top">
        <!-- NAVBAR Begins -->
        <nav id="mainNavBar" class="navbar navbar-expand-lg navbar-dark <?php echo $primaryWebsiteColor;?>">
            <div class="container">

                <a class="navbar-brand <?php echo $websiteNameColor;?>" href="<?php echo $path; ?>index.php"><?php echo $websiteName;?> </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

                <div class="navbar-collapse justify-content-md-center collapse" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?php echo $navTextColor; ?>" href="<?php echo $path; ?>adminDashboard.php">Dashboard</a>
                        </li>

                        <?php
                            if($websiteType=="learningPortal")
                            {
                                echo '<li class="nav-item">';
                                echo '<a class="nav-link '.$navTextColor.' ?>" href="'.$path.'tutorials.php">Tutorials</a>';
                                echo '</li>';

                                echo '<li class="nav-item">';
                                echo '<a class="nav-link '.$navTextColor.' ?>" href="'.$path.'courses.php">Courses</a>';
                                echo '</li>';
                            }


                        ?>
                        <!--<li class="nav-item">
                            <a class="nav-link" href="tutorials.php">Tutorials</a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link <?php echo $navTextColor; ?>" href="<?php echo $path; ?>articles.php">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $navTextColor; ?>" href="<?php echo $path; ?>search.php">Search</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link <?php echo $navTextColor; ?>" href="<?php echo $path; ?>contact.php">Contact</a>
                        </li>
                        <?php
                        if ($_SESSION['loggedIn']==true) 
                        {
                            
                            echo '<li class="nav-item">';
                            echo '<a class="nav-link'. $navTextColor .'" href="'.  $path .'admintools.php">Admin</a>';
                            echo "</li>";
                        }?>
                        <?php
                        if ($_SESSION['loggedIn']!=true) {
                            
                            echo '<li class="nav-item">';
                            echo '<a class="nav-link '.$navTextColor.'" href="'.$path.'login.php">Login</a>';
                        echo "</li>";
                        }else{
                        echo '<li class="nav-item">';
                            echo '<a class="nav-link '.$navTextColor.'" href="'.$path.'logout.php">Logout</a>';
                        echo "</li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- NAVBAR Ends -->

        <!-- Header Section Ends -->
    </header>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>