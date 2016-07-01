<?php $current = 'ttt_game'; ?>
<?php $title = 'tic | tac | toe'; ?>
<?php include ("includes/header.includes.php"); ?>
<!-- <?php include ("ttt_game/ttt_functions.php"); ?> -->

<form action="ttt_functions.php" method="get">
<button name="scoreboard" type="submit" value="100000000">GO!</button>

Choose your space:
<!-- <button name="1" type="submit" value="<?php if (isset($_GET['choice'])) {echo $scoreBoard;} ?> ">1</button> -->
<button name="2" type="submit" value="2">2</button>
<button name="3" type="submit" value="3">3</button>
<button name="4" type="submit" value="4">4</button>
<button name="5" type="submit" value="5">5</button>
<button name="6" type="submit" value="6">6</button>
<button name="7" type="submit" value="7">7</button>
<button name="8" type="submit" value="8">8</button>
<button name="9" type="submit" value="9">9</button>
</form>