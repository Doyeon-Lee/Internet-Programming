<?php
//Overriding a method and using the parent operator

	$object = new Son;
	$object->test();
	$object->test2();
	
	class Dad{
		function test(){
			echo "[Class Dad] I am Your Father<br>";
		}
	}

	class Son extends Dad{
		function test(){
			echo "[Class Son] I am Luke<br>";
		}
		function test2(){
			parent::test();
			//self::test(); prints the CLASS SON.
		}
	}

?>