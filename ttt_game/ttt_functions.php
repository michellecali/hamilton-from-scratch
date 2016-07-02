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
		
		if($currentBoard[$square] == "1"){
			echo "X";
		}
		elseif($currentBoard[$square] == "2"){
			echo "O";
		}
		elseif($currentBoard[$square] == "0"){
			$currentBoard[$square] = $whoseNext;
			echo "<a href=test_index.php?board=" . $currentBoard. ">#</a>";
		}
	}
?>

<?php
	// function create_Array($whoseNext, $currentBoard){
	// 	if ($currentBoard) {
	// 		$array = str_split($currentBoard);
	// 		foreach ($array as $key => $value) {
	// 			if ($value == a) {
	// 				$array[$key] = "X";
	// 			}
	// 			elseif ($value == b) {
	// 				$array[$key] = "O";
	// 			}
	// 			elseif ($value == 0) {
	// 				$i = $currentBoard;
	// 				$i[$key] = $whoseNext;
	// 				$array[$key] = $i;
	// 			}
	// 		}
	// 	}
	// 	return $array;
	}
?>
<?php
	// function print_Array($array){
	// 	if ($array) {
	// 		foreach ($array as $key => $value) {
	// 			if ($value == "X") {
	// 				echo "X";
	// 			}
	// 			elseif ($value == "O") {
	// 				echo "O";
	// 			}
	// 			else {
	// 				echo "<a href=index.php?board=".$value.">#</a>"
	// 			}
	// 		}
	// 	}
	// }
?>



