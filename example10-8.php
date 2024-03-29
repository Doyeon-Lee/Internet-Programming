<?php
//Describing the cats table

	require_once 'example10-1.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if($conn->connect_error) die("Fatal Error");
	
	$query = "DESCRIBE cats";
	$result = $conn->query($query);
	if(!$result) die("Database access failed");
	
	$rows = $result->num_rows;
	
	echo "<table>
			<tr>
				<th>Column</th>
				<th>Type</th>
				<th>NULL</th>
				<th>Key</th>
			</tr>";
	
	for($j = 0;$j < $rows;++$j){
		$row = $result->fetch_array(MYSQLI_NUM);
		
		echo "<tr>";
		for($k = 0;$k < 4;++$k)
			echo "<td>" .htmlspecialchars($row[$k]) ."</td>";
		echo "</tr>";
	}
	
	echo "</table>";

?>