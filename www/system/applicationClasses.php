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
		$printablePostName = substr($postName, 0,strlen($postName)-5);

		echo '<div class ="col-sm-6">';
		echo '<div class ="card m-2">';
		echo '<div class ="card-body p-5">';
		echo '<h5 class="card-title">'.$printablePostName.'</h5><br>';
		//echo '<p class="card-text">'."author".'</p>';
		$this->createPhpFile($postName,$printablePostName);
		echo '<a href="'."goto=".$printablePostName.'.php'.'" class="btn btn-primary">View Article</a>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}

	function createPhpFile($fileName,$printablePostName)
	{
		$file = fopen("goto=".$printablePostName.".php","w");
		$dataToInclude = '<?php include "header/header.php"; include "'."content/$fileName".'";  include "footer/footer.php"; ?>';

		fwrite($file, $dataToInclude);
		fclose($file);
	}
}

?>