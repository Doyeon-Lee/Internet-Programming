<?php

/*
The OR operator can cause unintentional problems in if statements, 
because the second operand will not be evaluated if the first is evaluated 
as TRUE. The function getnext will never be called if $finished has a value of 1.
*/

	//$finished = 1;
	if($finished == 1 OR getnext() == 1) exit;
	//executing without finished == 1, the browser shows an error page! T.T
	//Fatal error: Uncaught Error: Call to undefined function getnext() in...
?>