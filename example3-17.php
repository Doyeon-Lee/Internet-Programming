<?php

	function test(){
		static $count = 0;
		echo $count;
		$count++;
	}

	test();
	test();
	test();
	//0, 1, 2
?>