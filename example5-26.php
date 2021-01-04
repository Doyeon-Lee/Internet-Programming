<?php
//Creating a final method

	class User{
		final function copyright(){
			echo "This class was written by Joe Smith";
		}
	}
//You can use final keyword to prevent a subclass from overriding a superclass method

?>