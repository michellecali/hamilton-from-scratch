<?php include ("ttt_functions.php"); ?>
<?php 

	$currentBoard = "0000000000";
	$currentScore="000";
	$whoseNext = whoseNext($currentBoard);
	$nextBoards = nextBoards($currentBoard, $whoseNext);
	$possibleWins = checkAllWins($nextBoards);
	$possibleTies = checkAllTies($nextBoards);
	$nextScores = nextScores($currentScore, $possibleWins, $possibleTies);
	$end = endGame($nextScores);
	$nextStatuses = nextStatuses($nextBoards, $nextScores);
	$printHTML = printBoard($currentBoard, $end, $nextStatuses);
	echo "nextBoards";
	print_r($nextBoards);
	echo "possible Wins";
	print_r($possibleWins);
	echo "possible Ties";
	print_r($possibleTies);
	echo "next Scores";
	print_r($nextScores);
	echo "end";
	print_r($end);
	echo "nextStatuses";
	print_r($nextStatuses);
	echo "printBoard";
	print_r($printHTML);





?>


