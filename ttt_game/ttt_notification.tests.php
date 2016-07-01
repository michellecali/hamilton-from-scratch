<?php include ("ttt_functions.php"); ?>

<?php 
	echo "\nTesting function notify_whoseTurn; proper notification of player 1 turn.\n";
		$whoseTurn = "a";
		if (notify_whoseTurn($whoseTurn) == "<br><br>It is now Player 1's turn.") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed!";
		}

	echo "\n-------------------------------------------------------------------\n";

	echo "\nTesting function notify_whoseTurn; proper notification of player 2 turn.\n";
		$whoseTurn = "b";
		if (notify_whoseTurn($whoseTurn) == "<br><br>It is now Player 2's turn.") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed!";
		}

	echo "\n-------------------------------------------------------------------\n";

	echo "\n###################################################################\n";
	echo "Tests complete.\n"; 
?>