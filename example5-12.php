<?php
//Copying an object?
	$object1 = new User;
	$object1->name = "Alice";
	$object2 = $object1;
	$object2->name = "Amy";
	
	echo "object1 name = " . $object1->name . "<br>";
	echo "object2 name = " . $object2->name . "<br>";
	
	class User{
		public $name;
	}
//Both object1 and object2 refer to the same object, so 
//changing the naem property of $object2 to Amy also sets
//that property for $object1.

?>