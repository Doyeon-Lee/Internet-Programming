<?php
//Calling the parent class constructor

	$object = new Tiger();
	
	echo "Tigers have...<br>";
	echo "Fur: " . $object->fur . "<br>";
	echo "Stripes: " .$object->stripes;
	
	class WildCat{
		public $fur; //Wildcats have fur
		
		function __construct(){
			$this->fur = "TRUE";
		}
	}

	class Tiger extends WildCat{
		public $stripes; //Tigers have stripes
		
		function __construct(){
			parent::__construct(); //Call parent constructor first
			$this->stripes = "TRUE";
		}
	}


?>