<?php
//Defining a property implicitly
	$object1 = new User();
	$object1->name = "Alice";
	
	echo $object1->name;
	
	class User{}
/*
This code correctly outputs the string Alice because PHP 
implicity declare the property $object1->name for you. But
this kind of programming can lead to bugs!
*/
?>