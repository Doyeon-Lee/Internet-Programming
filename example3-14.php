<?php


	$temp = "The date is ";
	echo longdate(time());
	
	function longdate($timestamp){
		return $temp . date("l F jS Y", $timestamp);
	}
	//result: only timestamp.
	//reason: because $temp was neither created within the longdate function
	//nor passed it as a parameter, longdate cannot access it.

?>