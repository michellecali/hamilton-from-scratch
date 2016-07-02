<?php include ("ttt_functions.php"); ?>
<?php 
	echo "\nTesting function get_Board(); return query string as variable.\n";
		$_GET['board'] = "000a00000";
		$currentBoard = "";
		if (get_Board() == "000a00000") {
	  		echo "Success!";
		}
		else {
	  		echo "Failed!";
		}
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
	echo "\nTesting function create_Array().\n";
		$currentBoard = "b00a00a00";
		$whoseNext= "b";
		print_r(create_Array($whoseNext, $currentBoard));
	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	echo "\nTesting function create_Array().\n";
		$currentBoard = "b00a00a00";
		$whoseNext= "b";
		print_r(create_Array($whoseNext, $currentBoard));
	echo "\n-------------------------------------------------------------------\n";
?>
<?php 
	echo "\n###################################################################\n";
	echo "Tests complete.\n"; 
?>