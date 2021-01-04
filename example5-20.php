<?php
//Changing property and method scope
	class Example{
		var $name = "Michael"; //Same as public but deprecated
		public $age = 23; //Public property
		protected $usercount; //Protected property
		
		private function admin(){ //Private method
			//Admin code goes here
		}
	}
//var and public are interchangable; but var is deprecated.
//It is retained only for compatibility with previous versions of PHP. 
?>