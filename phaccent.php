#!/bin/bash
<?php
if (count($argv) != 2) {
	echo "PHAccent: Accent manager";
	echo "Default operation convert all accent to html entities";
	echo "Usage: {$argv[0]} <filename>";
	echo PHP_EOL;
	exit(1);
}
$filename = $argv[1];
if(!is_file($filename)) {
	echo "Error: $filename is not a valid file";
	echo PHP_EOL;
	exit(10);
}
$file = file_get_contents($filename);
if(!$file){
	echo "Error: $filename can't be opened";
	echo PHP_EOL;
	exit(20);
}

$cleartext = htmlspecialchars_decode(htmlentities($file,ENT_NOQUOTES), ENT_NOQUOTES);

echo $cleartext;
echo PHP_EOL;

exit(0);