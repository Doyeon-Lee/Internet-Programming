<?php
//Checking for a function’s existence
	if(function_exists("array_combine")){
		echo "Function exists.";
	}
	else
		echo "Function does not exist - better write our own.";
//You can also use the phpversion function to determine
//which version of PHP and yet still have your code run on 
//earlier versions, as long as you replicate any features that are missing.
?>