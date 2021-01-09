<?php
//formtest.php
	echo <<<_END
	<html>
		<head>
			<title>Form Test</title>
		</head>
		
		<body>
			<form method="post" action="example11-1.php">
				What is your name?
				<input type="text" name="name">
				<input type="submit">
			</form>
		</body>
	</html>
	_END;
?>