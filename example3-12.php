<?php

	function longdate($timestamp){
		return date("l F jS Y", $timestamp);
	}
	//result: Thursday December 17th 2020
	echo longdate(time());
	//n days ago: time() - n * 24 * 60 * 60
?>