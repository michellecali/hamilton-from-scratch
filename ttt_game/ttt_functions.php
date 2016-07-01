<?php 
// The query string is initially set to x0000000001 (do this in nav if it works)
//  - the x character is unique to the square
//  - the 0s found in indices 1-9 which represent status of spaces on the board;
//  - the 0 found in index -1 represents the turn count
// When a player selects a button, an updated query string is passed for use in the next turn via that button's value

// in the comments below, Functions are noted as either 'logic' or 'notification' in terms of responsibility; tests for each can be found on test pages named accordingly?>

<?php
	function get_QS(){
// this logic Function captures the query string and returns the Variable $qs; **passed test**
		if ($_SERVER['QUERY_STRING']) {
			$qs = $_SERVER['QUERY_STRING'];
		}
		return $qs;
	}
?>
<?php
	function get_Turn($qs){
// this logic Function returns variable $turn by retrieving the turn character (at -2) of $qs Variable; **passed test**
		$turnCount = "";
		if ($qs) {
			$turn = substr($qs, -1, 1);
		}
		return $turnCount;
	}
?>
<?php
	function whoseTurn($turnCount){
// this logic Function returns variable $whoseTurn by assessing the current $turnCount; **passed test**
		if ($turnCount) {
			$whoseTurn = "a";
			if ($turnCount % 2 == 0) {
				$whoseTurn = "b";
			}
		return $whoseTurn;
		}
	}
?>
<?php
	function notify_whoseTurn($whoseTurn){
// this notification Function returns a string notifying if it's player 1 (a) or player 2 (b) turn; tests written	
		$i = $whoseTurn;
		if ($i == "a") {
	    	return "<br><br>It is now Player 1's turn. Player 1, please select a space.";
		}
		elseif ($i == "b") {
			return "<br><br>It is now Player 2's turn. Player 2, please select a space.";
		}
		else {
			return "FOOOOOOOOOO";	
		}
	}
?>
<?php
	function get_Choice($qs){
// this logic Function captures player choice and returns the Variable $choiceIndex; **passed test**
		$choiceIndex = "";
		if ($qs) {
			$choiceIndex = substr($qs, 0, 1);
		}
		return $choiceIndex;
	}
?>

<?php
	function get_Current($qs){
// this logic Function captures the name of the player choice and returns the Variable $currentBoard; **passed test**
		$currentBoard = "";
		if ($qs) {
			$currentBoard = substr($qs, 1, 9);
		}
		return $currentBoard;
	}
?>

<?php
	function updateMove($currentBoard, $turnCount, $whoseTurn, $choiceIndex){
// this logic Function updates the $currentBoard Variable to the $newBoard Variable by changing the corresponding index number ($choiceIndex) to the $whoseTurn player symbol (a or b); revisit inconsistency in where turn is located within the string
		if ($currentBoard) {
			$newBoard = $currentBoard;
			$i = ++$turnCount;
			$j = $whoseTurn;
			$k = $choiceIndex;
			$newBoard = $currentBoard . $i;
			$newBoard[$k-1] = $j;

		}
		return $newBoard;
	}
?>
<?php
	function echo_newBoard($newBoard){
		for ($i=1; $i<=9; $i++) {
			echo "<a href=ttt_game.php?$i"."$newBoard</a>";
		}
	}
?>
<?php
	function add($turnCount){
		if ($turnCount) {
			$i = ++$turnCount;
		}
		return $turnCount;

	}
?>
<?php
	function replace($currentBoard, $turn) {
		if ($currentBoard) {
			$i = ++$turn;
			$newBoard = $currentBoard . $i;
		}
		return $newBoard;
	}
?>

