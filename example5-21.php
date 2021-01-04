<?php
//Creating and accessing a static method

	User::pwd_string();
	
	class User{
		static function pwd_string(){
			echo "Please enter your password";
		}
	}
//You can define a method as static, which means that it is called on a class, not on an object

?>