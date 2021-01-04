<?php
//Exploding a string delimited with *** into an array

	$temp = explode('***', "A***sentence***with***asterisks");
	
	echo "<pre>";
	print_r($temp);
	echo "</pre>";

?>