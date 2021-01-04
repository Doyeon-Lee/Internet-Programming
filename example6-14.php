<?php
//Using the compact function

	$fname = "Doctor";
	$sname = "Who";
	$planet = "Galifrey";
	$system = "Gridlock";
	$constellation = "Kasterborous";
	
	$contact = compact('fname', 'sname', 'planet', 'system', 'constellation');

	echo "<pre>";
	print_r($contact);
	echo "</pre>";

/*
Note how compact requires the variable names to be supplied in quotes, not preceded
by a $ symbol. This is because compact is looking for a list of variable names, not
their values.
*/
?>