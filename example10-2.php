<?php

	require_once 'example10-1.php'; //login.php
	$conn = new mysqli($hn, $un, $pw, $db);
	if($conn->connect_error) die("Fatal Error");
	
/*
You should also never be tempted to output the contents of any
error message received from MySQL. Rather than helping your
users, you could give away sensitive information to hackers such as
login details. Instead, just guide the user with information on how
to overcome their difficulty based on what the error message
reports to your code.
*/
?>