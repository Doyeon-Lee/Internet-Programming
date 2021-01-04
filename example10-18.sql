--MySQL placeholders

	PREPARE statement FROM "INSERT INTO classics VALUES(?,?,?,?,?)";
	
	SET @author = "Emily Brontë",
		@title = "Wuthering Heights",
		@category = "Classic Fiction",
		@year = "1849",
		@isbn = "9780553212587";

	EXECUTE statement USING @author, @title, @category, @year, @isbn;
	DEALLOCATE PREPARE statement;
	
/*
This can be cumbersome to submit to MySQL, so the mysqli extension makes handling
placeholders easier for you with a ready-made method called prepare, which
you call like this:
$stmt = $conn->prepare('INSERT INTO classics VALUES(?,?,?,?,?)');
*/