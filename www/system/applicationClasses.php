<?php
session_start();
class user
{
	public $userName;
	public $password;
	public $emailId;
	public $role;
	public $passwordResetCode;

	function __construct($userName,$password,$emailId,$passwordResetCode)
	{
		$this->userName=$userName;
		$this->password=$password;
		$this->emailId=$emailId;
		$this->role="user";
		$this->passwordResetCode=$passwordResetCode;
	}
}

// Used for tutorial/elearning website
class tutorialEntry
{
	// variable declarations
	public $tutorialName;
	public $tutorialType;
	public $tutorialLang;
	public $courseName;
	public $author;
	public $publishDate;

	//Constructor
	public  function __construct($tutorialName,$tutorialType,$tutorialLang,$courseName,$author,$publishDate)
	{
		$this->tutorialName=$tutorialName;
		$this->tutorialType=$tutorialType;
		$this->tutorialLang=$tutorialLang;
		$this->courseName=$courseName;
		$this->author=$author;
		$this->publishDate=$publishDate;
	}

	// Getters	

	public function getTutorialName()
	{
		return $this->tutorialName;
	}
	public function getTutorialType()
	{
		return $this->tutorialType;
	}
	public function getTutorialLang()
	{
		return $this->tutorialLang;
	}
	public function getCourseName()
	{
		return $this->courseName;
	}
	public function getAuthor()
	{
		return $this->author;
	}
	public function getPublishDate()
	{
		return $this->publishDate;
	}
}

// class to generate a Tutorial related HTML code
class displayTutorial
{
	public $tutorialName;
	public $printableTutorialName;
	
	function __construct($tutorialName)
	{
		$this->tutorialLang = $tutorialName;

		$postLink= "content/".$tutorialName;
		$printableTutorialName = substr($tutorialName, 0,strlen($tutorialName)-4);

		//obj manipulation
		$file = fopen("system/data/articleDB/$printableTutorialName.json", "r");
		$line=fgets($file);
		$obj=json_decode($line);

		// getting required data
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

		//
		if($obj->tutorialName!="" && $obj->courseName=="None")
		{	
			
			echo '	<div class="card '. $secondaryWebsiteColor.' p-2 m-2 ">';
	    	echo '	<div class="card-body text-center ">';
	      	echo '	<p class="card-text '.' '.$primaryTextColor.'  p-2">'.$obj->tutorialLang.'</p>';
	      	echo '	<p class="card-text "><h5 class ="'.$primaryWebsiteColor."  ".$navTextColor." p-2".'">'.$obj->tutorialName.'</h5>by '.$obj->author." on ".$obj->publishDate.' <p> </p>';
	      	echo '	<a href="'."content/".$tutorialName.'" class="btn btn-dark">Go</a>';
	   		echo '	</div>';
	  		echo '	</div>';
	  		
		}
	}
}



// Used for a Generic Blog/Website Post
class genericPost
{
	//variable definations

	public $postName;
	public $author;
	public $publishDate;

	// constructor
	function __construct($postName,$author,$publishDate)
	{
		$this->postName = $postName;
		$this->author=$author;
		$this->publishDate=$publishDate;
	}

	// getter
	public function getPostName()
	{
		return $postName;
	}
	public function getpublishDate()
	{
		return $publishDate;
	}
	public function getAuthor()
	{
		return $author;
	}

}

// class to generate a genericPost related HTML code
class displayGenericPost
{
	public $postName;
	public $printablePostName;
	
	function __construct($postName)
	{
		$this->postName = $postName;

		$postLink= "content/".$postName;
		$printablePostName = substr($postName, 0,strlen($postName)-4);

		//obj manipulation
		$file = fopen("system/data/articleDB/$printablePostName.json", "r");
		$line=fgets($file);
		$obj=json_decode($line);
		if($obj->postName!="")
		{
			echo '<div class ="col-sm-6">';
			echo '<div class ="card m-2">';
			echo '<div class ="card-body p-5">';
			echo '<h5 class="card-title">'.$printablePostName.'</h5><br>';
			echo '<p class="card-text">'."by ".$obj->author." on ".$obj->publishDate.'</p>';
			echo '<a href="'."content/".$postName.'" class="btn btn-primary">View Article</a>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			}
	}
}




class websiteConfig
{
	//Website FrontEnd Vars
	public $websiteName;
	public $websiteType;
	public $bannerHeader;
	public $bannerSubHeader;
	public $primaryWebsiteColor;
	public $secondaryWebsiteColor;
	public $primaryTextColor;
	public $secondaryTextColor;
	public $websiteBGColor;
	public $websiteNameColor;
	public $footerURL;
	public $linkTextColor;
	public $navTextColor;
	public $contactEmailId;
	//product Desc HomePage vars
	public $productDescriptionTitleText;
	public $productDescriptionTitleLinkLabel;
	public $productDescriptionMainText;
	public $productDescriptionLink;
	public $productDescriptionBG;
	//product Page Vars
	public $productPageHeader;
	public $productPageParaOne;
	public $productPageParaOneColor;
	public $productPageParaTwo;
	public $productPageParaTwoColor;
	public $productPagefbLink;
	public $productPageTwitterLink;
	public $productPageInstaLink;
	public $productPageLinkColor;


	public function addData($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10,$a11,$a12,$a13,$a14,$a15,$a16,$a17,$a18,$a19,$a20,$a21,$a22,$a23,$a24,$a25,$a26,$a27,$a28)
	{
		$this->websiteName =$a1;
		$this->websiteType =$a2;
		$this->bannerHeader =$a3;
		$this->bannerSubHeader =$a4;
		$this->primaryWebsiteColor =$a5;
		$this->secondaryWebsiteColor =$a6;
		$this->primaryTextColor =$a7;
		$this->secondaryTextColor =$a8;
		$this->websiteBGColor=$a9;
		$this->websiteNameColor = $a10;
		$this->footerURL = $a11;
		$this->linkTextColor = $a12;
		$this->navTextColor= $a13;
		$this->contactEmailId=$a14;
		$this->productDescriptionTitleText=$a15;
		$this->productDescriptionTitleLinkLabel=$a16;
		$this->productDescriptionMainText=$a17;
		$this->productDescriptionLink=$a18;

		$this->productPageHeader=$a19;
		$this->productPageParaOne=$a20;
		$this->productPageParaOneColor=$a21;
		$this->productPageParaTwo=$a22;
		$this->productPageParaTwoColor=$a23;
		$this->productPagefbLink=$a24;
		$this->productPageTwitterLink=$a25;
		$this->productPageInstaLink=$a26;
		$this->productPageLinkColor=$a27;
		$this->productDescriptionBG=$a28;

	}

	public function getWebsiteName()
	{
		return $this->websiteName;
	}
}

?>