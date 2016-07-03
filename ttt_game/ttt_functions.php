<?php 
// The query string is initially set to x000000000 (do this in nav if it works)
//  - the x character is unique to the square chosen
//  - the 0s found in indices 1-9 which represent status of spaces on the board;
// When a player selects a button, an updated query string is passed for use in the next turn via that button's value

// in the comments below, Functions are noted as either 'logic' or 'notification' in terms of responsibility; tests for each can be found on test pages named accordingly?>

<?php
	function get_Board(){
// this logic Function captures the parameter 'game' and returns the Variable $currentBoard; historical looking
		if ($_GET['board']) {
			$currentBoard = $_GET['board'];
		}
		return $currentBoard;
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
	function checkSpaces($currentBoard, $square, $whoseNext){
	//Leveraged from classmate
		
		if($currentBoard[$square] == "a"){
			echo "X";
		}
		elseif($currentBoard[$square] == "b"){
			echo "O";
		}
		elseif($currentBoard[$square] == "0"){
			$currentBoard[$square] = $whoseNext;
			echo "<a href=ttt_game.php?board=" . $currentBoard. ">#</a>";
		}
	}
?>
<?php
	function checkWin($currentBoard){
	//Leveraged from classmate
		$win = array();
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
					return $winner = "a";
				}
				elseif($i=="bbb"){
					return $winner = "b";
				}
			}
			if (strpos($currentBoard, "0")===false) {
				$winner = "tie";
			}
			else {
				$winner = "none";
			}
			print_r($win);
			echo $winner;
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

		


