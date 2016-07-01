<?php 
// The game operates by initially setting a query string in html via the value of the "go" button
// The query string is initially set to s=1000000000, where:
//  - the letter in index 0 indicates the button pressed;
//  - the 1 in index 3 indicates $turn, and 
//  - the 0s found in indices 4-12 represent spaces on the board
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
// this logic Function returns variable $turn by retrieving the last character of $qs Variable; **passed test**
		$turn = "";
		if ($qs) {
			$turn = substr($qs, 2, 1);
		}
		return $turn;
	}
?>
<?php
	function whoseTurn($turn){
// this logic Function returns variable $whoseTurn by assessing the current $turn; **passed test**
		if ($turn) {
			$whoseTurn = "a";
			if ($turn % 2 == 0) {
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
			$currentBoard = substr($qs, 2, 9);
		}
		return $currentBoard;
	}
?>

<?php
	function updateMove($currentBoard, $turn, $whoseTurn, $choiceIndex){
// this logic Function updates the $currentBoard Variable to the $newBoard Variable by changing the corresponding index number ($choiceIndex) to the $whoseTurn player symbol (a or b); revisit inconsistency in where turn is located within the string
		if ($currentBoard) {
			$newBoard = $currentBoard;
			$i = ++$turn;
			$j = $whoseTurn;
			$k = $choiceIndex;
			$newBoard = $currentBoard . $i;
			$newBoard[$k-1] = $j;

		}
		return $newBoard;
	}
?>
<?php
	function add($turn){
		if ($turn) {
			$i = ++$turn;
		}
		return $turn;

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
