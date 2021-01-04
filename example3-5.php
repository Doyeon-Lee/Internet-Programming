<?php

	$oxo = array(array('x', ' ', 'o'),
				 array('o', 'o', 'x'),
				 array('x', 'o', ' '));
				 
	echo $oxo[1][2];
	echo $oxo[1];
	//the result prints "Array" as "$oxo" does.

?>