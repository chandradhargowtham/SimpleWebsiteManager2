<?php

$file=fopen("test.json", "r");

$line = fgets($file);
$obj = json_decode($line);
echo "he";
echo $obj->name;
?>