<?php
//query-mysqli.php
	require_once 'example10-1.php'; //'login.php'	
	$connection = new mysqli($hn, $un, $pw, $db);
	if($connection->connect_error) die("Fatal Error");

	$query = "SELECT * FROM classics";
	$result = $connection->query($query);
	if(!$result) die("Fatal Error");

	$rows = $result->num_rows;
	
	for($j = 0;$j < $rows;++$j){
		$result->data_seek($j);
		echo 'Author: ' .htmlspecialchars($result->fetch_assoc()['author']) ."<br>";
		$result->data_seek($j);
		echo 'Title: ' .htmlspecialchars($result->fetch_assoc()['title']) ."<br>";
		$result->data_seek($j);
		echo 'Category: ' .htmlspecialchars($result->fetch_assoc()['category']) ."<br>";
		$result->data_seek($j);
		echo 'Year: ' .htmlspecialchars($result->fetch_assoc()['year']) ."<br>";
		$result->data_seek($j);
		echo 'ISBN: ' .htmlspecialchars($result->fetch_assoc()['isbn']) ."<br><br>";
	}

	$result->close();
	$connection->close();
/*
When displaying data in a browser the source of which was (or
may have been) user input, there’s always a risk of sneaky HTML
characters being embedded within it—even if you believe it to have
been previously sanitized—which could potentially be used for a
cross-site scripting (XSS) attack. The simple way to prevent this
possibility is to embed all such output within a call to the function
htmlspecialchars, which replaces all such characters with harmless
HTML entities. This technique was implemented in the preceding
example and will be used in many of the following
examples.
*/
?>