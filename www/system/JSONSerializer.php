<?php
 function toJson($obj)
{
	
	switch (get_class($obj)) 
	{
		case 'tutorialEntry':
				{
					
					$file = fopen("system/data/articleDB.json", "a");
					$line = json_encode($obj);
					//echo $line;
					fwrite($file, $line.PHP_EOL);
					fclose($file);
				}
			break;
		case 'genericPost':
				{
						
					$file = fopen("system/data/genericPost.json", "a");
					$line = json_encode($obj);
					//echo $line;
					fwrite($file, $line.PHP_EOL);
					fclose($file);
				}
				break;		
		
		default:
			# code...
			break;
	}
}

function fromJson()
{

}

?>