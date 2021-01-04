<?php
//Updating a file with locking

	$fh = fopen("testfile.txt", 'r+') or die("Failed to open file");
	$text = =fgets($fh);
	
	//flock is not supported on all systems; thus, it is wise to check whether
	//you successfully secured a lock, just in case one could not be obtained.
	if(flock($fh, LOCK_EX)){ //no other processes can write to (or even read from) the file
		fseek($fh, 0, SEEK_END);
		fwrite($fh, "$text") or die("Could not write to file");
		flock($fh, LOCK_UN);
	}
	
	fclose($fh);
	echo "File 'testfile.txt' successfully updated";

	//like mutex, semaphore..
	//multiple people accessing to one file...
?>