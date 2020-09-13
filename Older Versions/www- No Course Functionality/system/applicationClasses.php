<?php

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
	public  function __construct($tutorialName,$tutorialType,$tutorialLang,$courseName)
	{
		$this->tutorialName=$tutorialName;
		$this->tutorialType=$tutorialType;
		$this->tutorialLang=$tutorialLang;
		$this->courseName=$courseName;
	}

	// Getters	

	public function getTutorialName()
	{
		return $tutorialName;
	}
	public function getTutorialType()
	{
		return $tutorialType;
	}
	public function getTutorialLang()
	{
		return $tutorialLang;
	}
	public function getCourseName()
	{
		return $courseName;
	}
	public function getAuthor()
	{
		return $author;
	}
	public function getPublishDate()
	{
		return $publishDate;
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
	function __construct($postName)
	{
		$this->postName = $postName;
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
class displayPost
{
	public $postName;
	public $printablePostName;
	
	function __construct($postName)
	{
		$this->postName = $postName;

		$postLink= "content/".$postName;
		$printablePostName = substr($postName, 0,strlen($postName)-4);

		echo '<div class ="col-sm-6">';
		echo '<div class ="card m-2">';
		echo '<div class ="card-body p-5">';
		echo '<h5 class="card-title">'.$printablePostName.'</h5><br>';
		//echo '<p class="card-text">'."author".'</p>';
		echo '<a href="'."content/".$postName.'" class="btn btn-primary">View Article</a>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
}


class websiteConfig
{
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

	public function addData($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10,$a11,$a12,$a13)
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
	}

	public function getWebsiteName()
	{
		return $this->websiteName;
	}
}

?>