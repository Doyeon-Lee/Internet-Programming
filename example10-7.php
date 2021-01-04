<?php
//Creating a table called cats

	require_once 'example10-1.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if($conn->connect_error) die("Fatal Error");
	
	$query = "CREATE TABLE cats(
		id SMALLINT NOT NULL AUTO_INCREMENT,
		family VARCHAR(32) NOT NULL,
		name VARCHAR(32) NOT NULL,
		age TINYINT NOT NULL,
		PRIMARY KEY (id)
	)";
	
	$result = $conn->query($query);
	if(!$result) die("Database access failed");

?>