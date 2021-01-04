<?php
//How to properly sanitize user input for MySQL

	function mysql_fix_string($conn, $string){
		if(get_magic_quotes_gpc()) $string = stripslashes($string);
		return $conn->real_escape_string($string);
	}
/*
The get_magic_quotes_gpc function returns TRUE if magic quotes are active. In that
case, any slashes that have been added to a string have to be removed, or the
real_escape_string method could end up double-escaping some characters, creating
corrupted strings.
*/
?>