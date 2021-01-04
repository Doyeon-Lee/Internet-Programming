<?php
//Executing s system command

	$cmd = "dir"; //Windows
	//$cmd = "ls; //Linux, Unix & Mac
	
	exec(escapeshellcmd($cmd), $output, $status);
	
	if($status) echo "Exec command failed";
	else{
		echo "<pre>";
		foreach($output as $line) echo htmlspecialchars("$line\n");
		echo "</pre>";
	}
	
	/*
	If you wish, you can omit the $output and $status parameters, but you will not
	know the output created by the call or even whether it completed successfully.
	*/
?>