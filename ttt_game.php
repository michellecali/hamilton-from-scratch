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
	<a href="ttt_game.php?board=0000000000">Play again?</a>
</div>

<?php include ("ttt_game/ttt_functions.php"); ?>
<?php 
	$currentBoard = get_Board();
	echo "currentBoard=$currentBoard  ";
	$whoseNext= whoseNext($currentBoard);
	echo "whoseNext=$whoseNext  ";
	$winner = checkWin($currentBoard);
	echo "winner=$winner  ";
?>
<div class="container">
<div class="board">
		<div class="board__square">
			<?php checkSpaces($currentBoard, $square=0, $whoseNext) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($currentBoard, $square=1, $whoseNext) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($currentBoard, $square=2, $whoseNext) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($currentBoard, $square=3, $whoseNext) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($currentBoard, $square=4, $whoseNext) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($currentBoard, $square=5, $whoseNext) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($currentBoard, $square=6, $whoseNext) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($currentBoard, $square=7, $whoseNext) ?>
		</div>
		<div class="board__square">
			<?php checkSpaces($currentBoard, $square=8, $whoseNext) ?>
		</div> 
</div>
</div>
</body>
</html>