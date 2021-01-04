<?php
//Writing a file using a for loop with error trapping
	$fp = fopen("text.txt", 'wb'); //write in binary mode
	
	for($j = 0;$j < 100;++$j){
		$written = fwrite($fp, "data");
		if($written == FALSE) break;
		//if(!fwrite($fp, "data")) break;
	}
	
	fclose($fp);

?>