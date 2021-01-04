<?php
//fetchrow.php
	require_once 'example10-1.php'; //login.php
	$conn = new mysqli($hn, $un, $pw, $db);
	if($conn->connect_error) die("Fatal Error");
	
	$query = "SELECT * FROM classics";
	$result = $conn->query($query);
	if(!$result) die("Fatal Error");
	
	$rows = $result->num_rows;
	
	for($j = 0;$j < $rows;++$j){
		$row = $result->fetch_array(MYSQLI_ASSOC);
		//MYSQLI_NUM/ASSOC/BOTH
		
		echo 'Author: ' .htmlspecialchars($row['author']) ."<br>";
		echo 'Title: ' .htmlspecialchars($row['title']) ."<br>";
		echo 'Category: ' .htmlspecialchars($row['category']) ."<br>";
		echo 'Year: ' .htmlspecialchars($row['year']) ."<br>";
		echo 'ISBN: ' .htmlspecialchars($row['isbn']) ."<br><br>";
		
		/*
		This returns a single row of data as an array, which is then
		assigned to the array $row.
		echo "<pre>";
		print_r($row);
		echo "</pre>";
		*/
	}

	$result->close();
	$conn->close();

?>