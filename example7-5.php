<?php
//Reading a file with fgets

	$fh = fopen("testfile.txt", 'r') or
		die("File does not exist or you lack permission to open it");
		
	$line = fgets($fh);
	fclose($fh);
	echo $line;

//If you created the file as shown in Example 7-4, you’ll get the first line: Line 1
?>