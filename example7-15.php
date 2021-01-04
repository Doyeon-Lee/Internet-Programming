<?php
//Image uploader upload.php

//<<<: send EVERYTHING including new line
	echo <<<_END
	<html>
		<head>
			<title>PHP Form Upload</title>		
		</head>
		
		<body>
			<form method='post' action='example7-15.php' enctype='multipart/form-data'>
				Select File: <input type='file' name='filename' size='10'>
				<input type='submit' value='Upload'>
			</form>
	_END;
	
	//if a browser which started this program sent a file(to server), 
	if($_FILES){
		$name = $_FILES['filename']['name'];
		move_uploaded_file($_FILES['filename']['tmp_name'], $name);
		echo "Uploaded image '$name'<br><img src='$name'>";
	}
	
	echo "</body></html>"

?>