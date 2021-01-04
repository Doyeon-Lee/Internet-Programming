<?php
//Defining constants within a class

	Translate::lookup();
	
	class Translate{
		const ENGLISH = 0;
		const SPANISH = 1;
		const FRENCH = 2;
		const GERMAN = 3;
		//...
		
		static function lookup(){
			echo self::SPANISH;
		}
	}
	
/*
You can reference constants directly, using the self keyword and double colon operator. 

!!!SELF vs THIS!!!
self:: refers to the scope at the point of definition not at the point of execution.
use static than self. 

when a class is extended and overwrited a method, this will refer to the method which is declared,
but self will refer to the method it is defined; parent method will be called even though the class is child.
*/

?>
?>