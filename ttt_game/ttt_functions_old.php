<?php 
// The query string is initially set to x000000000 (do this in nav if it works)
//  - the x character is unique to the square chosen
//  - the 0s found in indices 1-9 which represent status of spaces on the board;
// When a player selects a button, an updated query string is passed for use in the next turn via that button's value
// in the comments below, Functions are noted as either 'logic' or 'notification' in terms of responsibility; tests for each can be found on test pages named accordingly?>

<?php
	function get_Status(){
// this logic Function captures the parameter 'game' and returns the Variable $currentBoard; historical looking
	// Controller code?
		if ($_GET['status']) {
			$status = $_GET['status'];
		}
		return $status;
	}
?>
<?php
// Controller code?
	function get_Board($status){
		if ($status) {
			$currentBoard = substr($status, 0, 9);
		}
		return $currentBoard;
	}
?>
<?php
// Controller code?
	function get_Score($status){
	// this logic Function returns the Variable $score derived as a substring of $status
		if ($status) {
			$score = (substr($status, 9, 3));
		}
		return $score;
	}
?>


<?php
//Model code
	function checkWin($currentBoard){
		$win = array();
		$winner = "none";
			$win[0] = $currentBoard[0] . $currentBoard[1] . $currentBoard[2];
			$win[1] = $currentBoard[3] . $currentBoard[4] . $currentBoard[5];
			$win[2] = $currentBoard[6] . $currentBoard[7] . $currentBoard[8];
			$win[3] = $currentBoard[0] . $currentBoard[3] . $currentBoard[6];
			$win[4] = $currentBoard[1] . $currentBoard[4] . $currentBoard[7];
			$win[5] = $currentBoard[2] . $currentBoard[5] . $currentBoard[8];
			$win[6] = $currentBoard[0] . $currentBoard[4] . $currentBoard[8];
			$win[7] = $currentBoard[2] . $currentBoard[4] . $currentBoard[6];
			foreach($win as $i){
				if($i=="aaa"){
					$winner = "a";
				}
				elseif($i=="bbb"){
					$winner = "b";
				}
			}
			return $winner;
	}
?>
<?php
//model code
	function checkTie($currentBoard, $winner){
		$tie = "no";
		if ($winner = "none" && strpos($currentBoard, "0")===false) {
				$tie = "yes";
		}
		return $tie;
	}
?>
<?php
//model code
	function endGame($winner, $tie){
		$end = "no";
			if ($winner == "a") {
				$end = "yes";
			}
			elseif ($winner == "b") {
				$end = "yes";
			}
			elseif ($tie == "yes") {
				$end = "yes";
			}
		return $end;
	}
?>
<?php
//model code
	function whoseNext($currentBoard){
// this logic Function returns variable $whoseNext by comparing the number of turns each player has taken
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
//model code
	function newScore ($end, $score, $player, $winner) {
		// start here - not working but not breaking
		if ($end == "yes") {
			$a = $score[0];
			$b = $score[1];
			$c = $score[2];
			if ($player=="Player1" && $winner == "a") {
				$score[0] = ($a + 1);
				echo $score;
			}
			if ($player=="Player2" && $winner == "b") {
				$score[1] = ($b + 1);
				echo $score;
			}
			if ($player=="Draw" && $tie == "yes"){
				$score[2] = ($c + 1);
				echo $score;
			}
		}
	}
?>
<?php
//model code
	function next_Board($currentBoard, $score){
		$nextBoard = $currentBoard;
		if ($score != "") {
			$nextBoard = $currentBoard.$score;
		}
		return $nextBoard;
	}
?>
<?php
//display code?
	function checkSpaces($currentBoard, $square, $end, $whoseNext, $nextBoard){
		if($currentBoard[$square] == "a"){
			return "X";
		}
		elseif($currentBoard[$square] == "b"){
			return "O";
		}
		elseif($currentBoard[$square] == "0"){
			if ($end == no) {
				$nextBoard[$square] = $whoseNext;
				return "<a href=ttt_game.php?status=".$nextBoard.">#</a>";
			}
			if ($end == yes) {
				return " ";
			}
		}
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

		
