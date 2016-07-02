<?php $current = 'ttt_game'; ?>
<?php $title = 'tic | tac | toe'; ?>
<?php include ("includes/header.includes.php"); ?>
<?php include ("ttt_game/ttt_functions.php"); ?>

				<h1>Play tic | tac | toe!</h1>

				<?php 
					$currentBoard = get_Board();
					echo "currentBoard=$currentBoard  ";
					$whoseNext= whoseNext($currentBoard);
					echo "whoseNext=$whoseNext  ";
				?>

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


<a href="ttt_game.php?board=0000000000">Play again?</a>

<?php include ("includes/footer.includes.php"); ?>