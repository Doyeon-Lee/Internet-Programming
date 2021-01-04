<?php
//Adding data to the cats table

	require_once 'example10-1.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if($conn->connect_error) die("Fatal Error");
	
	$query = "INSERT INTO cats VALUES
		(NULL, 'lion', 'Leo', 4)";
	
	$result = $conn->query($query);
	if(!$result) die("Database access failed");

	$query = "INSERT INTO cats VALUES(NULL, 'Cougar', 'Growler', 2)";
	$result = $conn->query($query);
	if(!$result) die("Database access failed");	
	
	$query = "INSERT INTO cats VALUES(NULL, 'Cheetah', 'Charly', 3)";
	$result = $conn->query($query);
	if(!$result) die("Database access failed");	

?>