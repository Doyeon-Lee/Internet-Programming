<?php
//Updating a file

	$fh = fopen("testfile.txt", 'r+') or die("Failed to open file");
	$text = fgets($fh);
	
	fseek($fh, 0, SEEK_END); /*move the file pointer right to the file end,
	at which point the line of text that was extracted from the start of the file
	(store in $text) is then appended to the file's end and the file is closed.*/
	
	/*SEEK_END tells the function to move the file pointer to the end of the file,
	and 0 tells it how many positions it should then be moved backward from that point.*/
	
	fwrite($fh, "$text") or die("Could not write to file");
	fclose($fh);
	
	echo "File 'testfile.txt' successfully updated";
	/*Result
	Line 1
	Line 2
	Line 3
	Line 1*/
	
	/*SEEK_SET option tells the function to set the file pointer to the exact 
	position given by the preceding parameter. SEEK_CUR sets the file pointer 
	to the current position plus the value of the given offset.*/
?>