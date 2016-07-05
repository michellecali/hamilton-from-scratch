<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tic | tac | toe</title>
	<link rel="stylesheet" href="css/ttt.css">
</head>
<?php $current = 'ttt_game'; ?>
<body class = pagecontainer>
<div class = "header">
	<a href="ttt_game.php?status=000000000123">Play again?</a>
</div>
<div class="container">
<div class="board">
<?php include ("ttt_game/ttt_functions.php"); ?>
<?php 
	$status = get_Status();
	$currentBoard = get_Board($status);
	$score = get_Score($status);
	$whoseNext = whoseNext($currentBoard);
	$winner = checkWin($currentBoard);
	$tie = checkTie($currentBoard, $winner);
	$end = endGame($winner, $tie);
	$nextBoard = next_Board($currentBoard, $score);
?>
<?php $file_connection = fopen('ttt.txt','a');?>
<?php
		$square = array(0,1,2,3,4,5,6,7,8);
		$pos = array();
		foreach ($square as $i) {
			echo "<div class='board__square'>";
			echo checkSpaces($currentBoard, $i, $end, $whoseNext, $nextBoard);
			echo "</div>\n";
			$pos[$i] = checkSpaces($currentBoard, $i, $end, $whoseNext, $nextBoard);
		}
?>
<?php
		$x = ($pos[0].$pos[1].$pos[2]);
		$y = ($pos[3].$pos[4].$pos[5]);
		$z = ($pos[6].$pos[7].$pos[8]);

?>
<?php 
		fwrite($file_connection, $x);
		fwrite($file_connection, $y);
		fwrite($file_connection, $z);
		fclose($file_connection);
?>
</div>
<div class="score">
		<div class="score__row">
			<?php showScore ($score, $player="Player1", $winner)  ?>
		</div>
		<div class="score__row">
			<?php showScore ($score, $player="Player2", $winner)  ?>
		</div>
		<div class="score__row">
			<?php showScore ($score, $player="Draw", $winner) ?>
		</div>
</div>	
</div>
</body>
</html>