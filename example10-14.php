<?php
//Adding data to the cats table and reporting the insert ID

	require_once "example10-1.php";
	$conn = new mysqli($hn, $un, $pw, $db);
	if($conn->connect_error) die("Fatal Error");
	
	$query = "INSERT INTO cats VALUES(NULL, 'Lynx', 'Stumpy', 5)";
	$result = $conn->query($query);
	if(!$result) die("Database access failed");

	echo "The Insert ID was: " .$conn->insert_id;
//note how the previous id value of 2 is not reused,
//as this could cause complications in some instances

?>