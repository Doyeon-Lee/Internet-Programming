<?php
//Performing a secondary query

	require_once "example10-1.php";
	$conn = new mysqli($hn, $un, $pw, $db);
	if($conn->connect_error) die("Fatal Error");
	
	$query = "SELECT * FROM customers";
	$result = $conn->query($query);
	if(!$result) die("Database access failed");
	
	$rows = $result->num_rows;
	
	for($j = 0;$j < $rows;++$j){
		$row = $result->fetch_array(MYSQLI_NUM);
		echo htmlspecialchars($row[0]) ." purchased ISBN " 
			.htmlspecialchars($row[1]) .":<br>";
				
		$subquery = "SELECT * FROM classics WHERE isbn='$row[1]'";
		$subresult = $conn->query($subquery);
		if(!$subresult) die("Database access failed");
		
		$subrow = $subresult->fetch_array(MYSQLI_NUM);
		echo "&nbsp;&nbsp;" .htmlspecialchars("'$subrow[1]'") ." by "
			.htmlspecialchars($subrow[0]) ."<br><br>";
	}
/*
you could also return the same information using a NATURAL JOIN query (see Chapter 8), like this:
SELECT name,isbn,title,author FROM customers
NATURAL JOIN classics;
*/

?>