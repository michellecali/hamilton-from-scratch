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
	<a href="ttt_game.php?status=000000000">Play again?</a>
</div>

<?php include ("ttt_game/ttt_functions.php"); ?>
<?php 
	$status = get_Status();
	$currentBoard = get_Board($status);
	$whoseNext= whoseNext($currentBoard);
	$winner = checkWin($currentBoard);
	$end = endGame($winner, $tie);
?>
<div class="container">
<div class="board">
		<div class="board__square">
			<?php checkSpaces($currentBoard, $square=0, $end, $whoseNext) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($currentBoard, $square=1, $end, $whoseNext) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($currentBoard, $square=2, $end, $whoseNext) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($currentBoard, $square=3, $end, $whoseNext) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($currentBoard, $square=4, $end, $whoseNext) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($currentBoard, $square=5, $end, $whoseNext) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($currentBoard, $square=6, $end, $whoseNext) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($currentBoard, $square=7, $end, $whoseNext) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($currentBoard, $square=8, $end, $whoseNext) ?>
		</div> 
</div>
</div>
</body>
</html>