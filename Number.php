<?php
/**
Number Guessing Game
**/

if(isset($_POST['Guess'])){

	$Number="7";
	
	if($Guess == $Number){
		print "<p>You Win!</p>"
	}
	else {
		print "<p>Sorry, Wrong number.  Guess Again!</p>"
	}
}
?>
<form method="post">
	<input type="text" name="Guess" />
	<input type="submit" name="submit" value="Play" />
</form>
