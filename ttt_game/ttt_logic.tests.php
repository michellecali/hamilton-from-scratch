<?php include ("ttt_functions.php"); ?>
<?php 
	// echo "\nTesting function get_QS(); return query string as variable.\n";
	// 	$_SERVER['QUERY_STRING'] = "s=0000000001";
	// 	$qs = "";
	// 	if (get_QS() == "s=0000000001") {
	//   		echo "Success!";
	// 	}
	// 	else {
	//   		echo "Failed!";
	// 	}
	// echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	echo "\nTesting function get_Turn(); return last index as variable.\n";
		$qs = "s=1000000000";
		$turn = "";
		if (get_Turn($qs) == "1") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed!";
		}
	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	// echo "\nTesting function whoseTurn(); proper identification of player 2 turn.\n";
	// 	$turn = "2";
	// 	if (whoseTurn($turn) == "b") {
	//   		echo "Success!";
	// 	}
	// 	else {
	//   		echo "Failed!";
	// 	}
	// echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	// echo "\nTesting function get_Choice() to validate parameter passed to corresponding Variable.\n";
	// 	$qs = "4=000a000002";
	// 	$choiceIndex = "" ;
	// 	if (get_Choice($qs) == "4") {
	//   		echo "Success!";
	// 	}
	// 	else {
	//   		echo "Failed!";
	// 	}
	// echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	// echo "\nTesting function get_Current() to validate parameter passed to corresponding Variable.\n";
	// 	$qs = "4=000a000002";
	// 	$currentBoard = "" ;
	// 	if (get_Current($qs) == "000a00000") {
	//   		echo "Success!";
	// 	}
	// 	else {
	//   		echo "Failed!";
	// 	}
	// echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	// echo "\nTesting function storeChoice() to validate parameter passed to corresponding spot in string.\n";
	// 	$whoseTurn = "a";
	// 	$choiceIndex = "2";
	// 	if (storeChoice($choiceIndex, $whoseTurn) == '??a???????') {
	//   		echo "Success!";
	// 	}
	// 	else {
	//   		echo "Failed!";
	// 	}
	// 	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	// echo "\nTesting function add\n";
	// 	$turn = "5";
	// 	if (add($turn) == "6") {
	// 		echo "Success!";
	// 	}
	// 	else {
	// 		echo "Failed!";
	// 		echo add($turn);
	// 	}
	// 	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	// echo "\nTesting function replace\n";
	// 	$currentBoard = "000a00000";
	// 	$turn = "1";
	// 	if (replace($currentBoard, $turn) == "000a000002") {
	// 		echo "Success!";
	// 		echo replace($currentBoard, $turn);
	// 	}
	// 	else {
	// 		echo "Failed!";
	// 	}
	// 	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
		// echo "\nTesting function updateMove\n";
		// 	$currentBoard = "000000000";
		// 	$turn = "1";
		// 	$whoseTurn = "a";
		// 	$choiceIndex = "4";
		// 	if (updateMove($currentBoard, $turn, $whoseTurn, $choiceIndex) == "000a000002") {
		// 		echo "Success!";
		// 		echo updateMove($currentBoard, $turn, $whoseTurn, $choiceIndex);
		// 	}
		// 	else {
		// 		echo "Failed!";
		// 	}
		// 	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
		echo "\nTesting function echoBoard\n";
			$newBoard = "0000000001";
			echo echo_newBoard($newBoard);

			echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	echo "\n###################################################################\n";
	echo "Tests complete.\n"; 
?>