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
		case 'websiteConfig':
				{
					
					$file = fopen("system/data/websiteConfig.json", "w");
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

function fromJson($objName)
{
	
	if(is_dir("system"))
	{
		$URLpath = "";
	}else
	{
		$URLpath = "../";

	}
	
	$obj = new websiteConfig();
	switch (get_class($objName)) {
		case 'websiteConfig':
			{
				echo $URLpath;
				$file=fopen($URLpath."system/data/websiteConfig.json", "r");
				$line=fgets($file);
				
				$obj = json_decode($line);

			}
			break;
		
		default:
			# code...
			break;
	}

	return $obj;
}

?>