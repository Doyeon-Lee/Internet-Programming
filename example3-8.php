<?php
	
	$author = "Brian W. Kernighan";
	//heredoc
	/*It is important to remember that the closing _END; must appear right at the start of a
	new line and it must be the only thing on that line—not even a comment is allowed to
	be added after it (nor even a single space).*/
	echo <<<_END
	Debugging is twice as hard as writing the code in the first place.<br>
	Therefore, if you write the code as cleverly as possible, you are, 
	by definition, not smart enough to debug it.
	//once you have closed a  multiline block, you are free to use the same tag name again.
	-$author.
_END;

?>