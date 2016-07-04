	$score = get_Score($status);

	<div class="score">
		<div class="score__row">
			<?php showScore ($score, $player="You", $winner)  ?>
		</div>
		<div class="score__row">
			<?php showScore ($score, $player="Opponent", $winner)  ?>
		</div>
		<div class="score__row">
			<?php showScore ($score, $player="Draw", $winner) ?>
		</div>
	</div>


<?php
	function get_currentBoard($status){
	// this logic Function returns the Variable $currentBoard derived as a substring of $status
		if ($status) {
			$currentBoard = (substr($status, 0, 9));
		}
		return $currentBoard;
	}
?>
<?php
	function get_Score($status){
	// this logic Function returns the Variable $score derived as a substring of $status
		if ($status) {
			$score = (substr($status, 9, 3));
		}
		return $score;
	}
?>
<?php
	function newScore ($score, $player, $winner) {
		if ($score) {
			$a = $score[0];
			$b = $score[1];
			$c = $score[2];
			if ($player=="You" && $winner == "a") {
				$score[0] = ($a + 1);
			}
			if ($player=="Opponent" && $winner == "b") {
				$score[1] = ($b + 1);
			}
			if ($player=="Draw" && $winner == "tie"){
				$score[2] = ($c + 1);
			}
		}
	}
?>