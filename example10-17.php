<?php
//How to safely access MySQL with user input

	require_once "example10-1.php";
	$conn = new mysqli($hn, $un, $pw, $db);
	if($conn->connect_error) die("Fatal Error");
	
	$user = mysql_fix_string($conn, $_POST['user']);
	$pass = mtsql_fix_string($conn, $_POST['pass']);
	$query = "SELECT * FROM users WHERE user='$user' AND pass='$pass'";
	
	//Etc.
	
	function mysql_fix_string($conn, $string){
		if(get_magic_quotes_gpc()) $string = stripslashes($string);
		return $conn->real_escape_string($string);
	}

?>