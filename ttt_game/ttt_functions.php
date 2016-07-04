<?php 
// The query string is initially set to x000000000 (do this in nav if it works)
//  - the x character is unique to the square chosen
//  - the 0s found in indices 1-9 which represent status of spaces on the board;
// When a player selects a button, an updated query string is passed for use in the next turn via that button's value
// in the comments below, Functions are noted as either 'logic' or 'notification' in terms of responsibility; tests for each can be found on test pages named accordingly?>

<?php
	function get_Status(){
// this logic Function captures the parameter 'game' and returns the Variable $currentBoard; historical looking
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
	function checkTie($currentBoard, $winner){
		$tie = "no";
		if ($winner = "none" && strpos($currentBoard, "0")===false) {
				$tie = "yes";
		}
		return $tie;
	}
?>
<?php
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
	function checkSpaces($currentBoard, $square, $end, $whoseNext){
		if($currentBoard[$square] == "a"){
			echo "X";
		}
		elseif($currentBoard[$square] == "b"){
			echo "O";
		}
		elseif($currentBoard[$square] == "0"){
			if ($end == no) {
				$currentBoard[$square] = $whoseNext;
				echo "<a href=ttt_game.php?status=" . $currentBoard. ">#</a>";
			}
			if ($end == yes) {
				echo " ";
			}
		}
	}
?>

<?php
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

		
