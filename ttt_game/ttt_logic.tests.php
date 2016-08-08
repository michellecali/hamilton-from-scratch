<?php include ("ttt_functions.php"); ?>
<?php 
	echo "\nTesting function get_Status(); return query string as variable.\n";
	// Only wrote this test to verify my understanding of the $_GET function
		$_GET['status'] = "000a00000";
		$status= "";
		if (get_Status() == "000a00000") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed!";
		}
	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	echo "\nTesting function get_Board(); return query string as variable.\n";
		$status = "000a00000";
		$currentBoard = "";
		if (get_Board($status) == "000a00000") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed!";
	  		echo get_Board($status);
		}
	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	echo "\nTesting function get_Score(); return query string as variable.\n";
		$status = "000a00000210";
		$score = "";
		if (get_Score($status) == "210") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed!";
		}
	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	echo "\nTesting function get_Score(); what is returned when nil.\n";
		$status = "000a00000";
		$score = "";
		if (get_Score($status) == "") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed!";
		}
		var_dump($score);
	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	echo "\nTesting function whoseNext(); proper identification of player 2 turn.\n";
		$currentBoard = "b00a00a00";
		if (whoseNext($currentBoard) == "b") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed!";
		}
	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	echo "\nTesting function checkWin() of player a.\n";
		$currentBoard = "ab00a00ba";
		if (checkWin($currentBoard) == "a") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed!";
	  	}
	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	echo "\nTesting function checkWin() of player b.\n";
		$currentBoard = "b0aab0a0b";
		if (checkWin($currentBoard) == "b") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed!";
	  	}
	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	echo "\nTesting function checkWin() of no winner.\n";
		$currentBoard = "00aab0a0b";
		if (checkWin($currentBoard) == "none") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed!";
	  	}
	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	echo "\nTesting function checkTie() of tie when tie.\n";
		$winner = "none";
		$currentBoard = "aabbbaaab";
		if (checkTie($currentBoard, $winner) == "yes") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed!";
	  	}
	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	echo "\nTesting function checkTie() of tie when no tie.\n";
		$winner = "none";
		$currentBoard = "abab0baba";
		if (checkTie($currentBoard, $winner) == "no") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed! Expected true";
	  	}
	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	echo "\nTesting function endGame() when winner is a, no tie.\n";
		$winner = "a";
		$tie = "no";
		if (endGame($winner, $tie) == "yes") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed!";
	  		echo endGame($winner, $tie);
	  	}
	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	echo "\nTesting function endGame() when winner is b, no tie.\n";
		$winner = "b";
		$tie = "no";
		if (endGame($winner, $tie) == "yes") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed!";
	  		echo endGame($winner, $tie);
	  	}
	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	echo "\nTesting function endGame() when winner is none, tie.\n";
		$winner = "none";
		$tie = "yes";
		if (endGame($winner, $tie) == "yes") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed!";
	  	}
	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	echo "\nTesting function endGame() when shouldn't end.\n";
		$winner = "none";
		$tie = "no";
		if (endGame($winner, $tie) == "no") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed! This one";
	  	}
	echo "\n-------------------------------------------------------------------\n";
?>ß
<?php 
	echo "\nTesting function nextBoard() returns expected variable when score present.\n";
		$currentBoard = "banana";
		$score = "123";
		if (next_Board($currentBoard, $score) == "banana123") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed!";
	  	}
	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	echo "\nTesting function nextBoard() returns expected variable when score nil.\n";
		$currentBoard = "banana";
		$score = "";
		if (next_Board($currentBoard, $score) == "banana") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed!";
	  	}
	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	echo "\nTesting function nextBoards().\n";
		$currentBoard = "a000b0000";
		$whoseNext = "a";
		print_r (nextBoards($currentBoard, $whoseNext));
	
	echo "\n------------------------------------------------------------------\n";
?>

<?php 
	echo "\n###################################################################\n";
	echo "Tests complete.\n"; 
?>