<?php
//Reading a file with fread

	$fh = fopen("testfile.txt", 'r') or
		die("File does not exist or you lack permission to open it");
		
	$text = fread($fh, 3);
	fclose($fh);
	
	echo $text;
//I’ve requested three characters in the fread call, so the program displays this: Lin

//The fread function is commonly used with binary data. If you use it on text data that
//spans more than one line, remember to count newline characters.
?>