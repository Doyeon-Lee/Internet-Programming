<?php
//Creating a mmultidimensional associative array

	$products = array(
		'paper' => array(
			'copier' => "Copier & Multipurpose",
			'inkjet' => "Inkjet Printer",
			'laser' => "Laser Printer",
			'photo' => "Photographic Paper"),
			
		'pens' => array(
			'tape' => "Sticky Tape",
			'glue' => "Adhesives",
			'clips' => "Paperclips"
			)
	);
	
	echo "<pre>";
	
	foreach($products as $section => $items){
		foreach($items as $key => $value)
			echo "$section:\t$key\t($value)<br>";
	}
	echo "</pre>"; 
	//By using <pre>, the font and the lines changed more readable.
?>