<?php
//The if...OR statement modified to ensure calling of getnext
	$gn = getnext();
	$finished = 0;
	
	if($finished == 1 OR $gn == 1) exit;
/*
In this case, the code executes the getnext function and stores the value returned in
$gn before executing the if statement.
Another solution is to switch the two clauses to make sure that
getnext is executed, as it will then appear first in the expression.
*/
?>