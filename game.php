<?php $current = 'game'; ?>
<?php $title = 'rock | paper | scissors'; ?>
<?php include ("includes/header.includes.php"); ?>
			<form>
				<h1>Choose your weapon!</h1>
			  	<input type="radio" name="choice" value="6"> rock<br>
			  	<input type="radio" name="choice" value="7"> paper<br>
			  	<input type="radio" name="choice" value="8"> scissors<br><br>
			  	<input type="submit">
			</form>  	
			<?php
			  	$player_answer = $_GET['choice'];
				$computer_answer = rand(6,8);
			  	$array = array ('6' => 'rock', '7' => 'paper', '8' => 'scissors');
			  if ($_GET['choice']) {
			  	echo "<br><br>You chose " . $array[$player_answer]; echo " and I chose " . $array[$computer_answer];
			  	if ($player_answer == $computer_answer) {
			  		echo "<br> WE TIED! Play again?";
			  	}
			  	switch ([$player_answer, $computer_answer]) {
			  		case ["6", "7"]:
			  		case ["7", "8"]:
			  		case ["8", "6"]:
			  			echo "<br> I win! I rule!";
			  		break;

			  		case ["6", "8"]:
			  		case ["7", "6"]:
			  		case ["8", "7"]:
			  		 	echo "<br> You won! You're great!"; 
			  		break;
			  	}
			  }
			?>
	<?php include ("includes/footer.includes.php"); ?>