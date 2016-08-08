
<?php
	function get_Status(){
		if ($_GET['status']) {
			$status = $_GET['status'];
		}
		return $status;
	}
?>
<?php
	function get_Board($status){
		if ($status) {
			$currentBoard = substr($status, 0, 9);
		}
		return $currentBoard;
	}
?>
<?php
	function get_Score($status){
		if ($status) {
			$currentScore = (substr($status, 9, 3));
		}
		return $currentScore;
	}
?>

<?php
	function whoseNext($currentBoard){
		$i = "";
		$j = "";
		$whoseNext = "";
		if ($currentBoard) {
			$whoseNext = "a";
			$i = substr_count($currentBoard, a);
			$j = substr_count($currentBoard, b);
			if ($i > $j) {
				$whoseNext = "b";
			}
		return $whoseNext;
		}
	}
?>
<?php 
function nextBoards($currentBoard, $whoseNext) {
	$nextBoards = array();
	$square = array(0,1,2,3,4,5,6,7,8);
	
	foreach ($square as $i) {
			if ($currentBoard[$i] == "0") {
				$j = $currentBoard;
				$j[$i] = $whoseNext;
				$nextBoards[]=$j;
			} 
			else {
				$nextBoards[] = $currentBoard;
			}
	}
	return $nextBoards;
}
?>

<?php
	function checkWin($i){
		$win = array();
			$win[0] = $i[0] . $i[1] . $i[2];
			$win[1] = $i[3] . $i[4] . $i[5];
			$win[2] = $i[6] . $i[7] . $i[8];
			$win[3] = $i[0] . $i[3] . $i[6];
			$win[4] = $i[1] . $i[4] . $i[7];
			$win[5] = $i[2] . $i[5] . $i[8];
			$win[6] = $i[0] . $i[4] . $i[8];
			$win[7] = $i[2] . $i[4] . $i[6];
			foreach($win as $j){
				if($j=="aaa"){
					$winner = "a";
				}
				elseif($j=="bbb"){
					$winner = "b";
				}
			}
			return $winner;
	}
?>
<?php
	function checkAllWins($nextBoards){
		$a = $nextBoards;
		$possibleWins = array_map("checkWin", $a);
		return $possibleWins;
	}
?>
<?php
	function checkTie($i){
		$tie = "no";
		if (substr_count($i, "0")==0){
				$tie = "yes";
		}
		return $tie;
	}
?>
<?php
	function checkAllTies($nextBoards){
		$a = $nextBoards;
		$possibleTies = array_map("checkTie", $a);
		return $possibleTies;
	}
?>
<?php
function nextScores($currentScore, $possibleWins, $possibleTies){
$nextScores = array();
	$square = array(0,1,2,3,4,5,6,7,8);
	
	foreach ($square as $i) {
			if ($possibleWins[$i] == "a") {
				$j = $currentScore;
				$j[0] = ($j[0] + 1);
				$nextScores[]=$j;
			} 
			elseif ($possibleWins[$i] == "b") {
				$j = $currentScore;
				$j[1] = ($j[1] + 1);
				$nextScores[]=$j;
			}
			elseif ($possibleTies[$i] == "yes") {
				$j = $currentScore;
				$j[2] = ($j[2] + 1);
				$nextScores[]=$j;
			}
			else {
				$nextScores[] = $currentScore;
			}
	}
	return $nextScores;
}
?>
<?php
	function endGame($currentBoard){
		$end = "";
		$i = checkWin($currentBoard);
		$j = checkTie($currentBoard);
			if ($i == "a" || "b") {
				$end = "yes";
			}
			elseif ($j == "yes") {
				$end = "yes";
			}
			else {
				$end = "no";
			}
		return $end;
		echo "i is $i";
		echo "j is $j";
	}
?>
<?php
//model code
	function nextStatuses($nextBoards, $nextScores){
		$nextStatuses = array();
		$square = array(0,1,2,3,4,5,6,7,8);
		foreach ($square as $i) {
			$nextStatuses[$i] = $nextBoards[$i].$nextScores[$i];
		}
		return $nextStatuses;
	}
?>
<?php
//display code?
	function printBoard($currentBoard, $end, $nextStatuses){
		$square = array(0,1,2,3,4,5,6,7,8);
		foreach ($square as $i) {
			$j = $currentBoard;
			if($j[$i] == "a"){
				$printHTML[$i] = "<div class='board__square'>X</div>\n";
			}
			elseif($j[$i] == "b"){
				$printHTML[$i] =  "<div class='board__square'>O</div>\n";
			}
			elseif($j[$i] == "0"){
				if ($end == "no") {
					$k = $nextStatuses[$i];
					$printHTML[$i] = "<div class='board__square'><a href=ttt_game.php?status=".$k.">#</a></div>\n";
				}
				if ($end == "yes") {
					$printHTML[$i] =  "n";
				}
			}
		}
		return $printHTML;
	}
?>

<?php
//would be display code if in play?
	// function notifyWinner ($winner) {
	// 	if($winner) {
	// 		if($winner = "a") {
	// 			return "Congratulations, X! You win!";
	// 		}
	// 		if($winner = "b") {
	// 			return "Congratulations, Y! You win!";
	// 		}
	// }
?>

		
