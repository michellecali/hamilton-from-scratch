<?php $current = 'ttt_game'; ?>
<?php $title = 'tic | tac | toe'; ?>
<?php include ("includes/header.includes.php"); ?>
<?php include ("ttt_game/ttt_functions.php"); ?>

<?php 
	$qs = get_QS();
	$turn = get_Turn($qs);
	echo "turn=$turn  ";
	$choiceIndex = get_Choice($qs);
	echo "choiceIndex=$choiceIndex  ";
	$currentBoard = get_Current($qs);
	echo "currentBoard=$currentBoard  ";
	$whoseTurn = whoseTurn($turn);
	echo "whoseTurn=$whoseTurn  ";
	$newBoard = updateMove($currentBoard, $turn, $whoseTurn, $choiceIndex);
	echo "newBoard=$newBoard  ";

?>

<form action="ttt_game.php" method="get">
<button name="0" type="submit" id="scoreBoard" value="0000000000">GO!</button>
 


<h3>Choose your space:</h3>
 
<button name="1" type="submit" value="<?php echo $newBoard; ?>">1</button>
<button name="2" type="submit" value="<?php echo $newBoard; ?>">2</button>
<button name="3" type="submit" value="<?php echo $newBoard; ?>">3</button>
<button name="4" type="submit" value="<?php echo $newBoard; ?>">4</button>
<button name="5" type="submit" value="<?php echo $newBoard; ?>">5</button>
<button name="6" type="submit" value="<?php echo $newBoard; ?>">6</button>
<button name="7" type="submit" value="<?php echo $newBoard; ?>">7</button>
<button name="8" type="submit" value="<?php echo $newBoard; ?>">8</button>
<button name="9" type="submit" value="<?php echo $newBoard; ?>">9</button>


</form>

<a href="current_page.php/?123_455_275">a decentralized web?</a>;

<a

