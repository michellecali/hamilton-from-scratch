<?php include ("ttt_functions.php"); ?>
<?php 
	$square = array(0,1,2,3,4,5,6,7,8);
	$currentBoard = "0000a0000";
	$end = "no";
	$whoseNext = "b";
	$nextBoard = "0000a0000123";
	foreach ($square as $i) {
		echo "<div class='board__square'>";
		echo checkSpaces($currentBoard, $i, $end, $whoseNext, $nextBoard);
		echo "<div>\n";
	}
?>

