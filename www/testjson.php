<?php

class student
{
	public $name;
	public $age;

	function setName($str)
	{
		$this->name = $str;
	}
}

$obj = new student();

$obj->setName("chan");

$objToExport=json_encode($obj);
$file=fopen("test.json","w");
fwrite($file, $objToExport);

?>