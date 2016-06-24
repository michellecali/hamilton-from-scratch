<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>
			rock | paper | scissors
		</title>
		<link href='https://fonts.googleapis.com/css?family=Lobster+Two:400,700,400italic,700italic|Arimo:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Cantata+One|Imprima' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="styles.css">	
		<?php $current = 'game'; ?>
	</head>
	<body class="pagecontainer">
	<div class="flex-container-left">
		<div class="name-and-social">
			<?php include ("inc/social.inc.php"); ?>
		</div>
		<div class="nav-links">
			<?php include ("inc/nav.inc.php"); ?>
	  	</div>
	</div>
	<div class="flex-container-right">
		<div class="body-text">
			<form>
				<h1>Choose your weapon!</h1>
			  	<input type="radio" name="choice" value="6"> rock<br>
			  	<input type="radio" name="choice" value="7"> paper<br>
			  	<input type="radio" name="choice" value="8"> scissors<br><br>
			  	<input type="submit">
			</form>  	
			<?php
			  if ($_GET['choice']) {
				$player_answer = $_GET['choice'];
				$computer_answer = rand(6,8);
			  	$array = array ('6' => 'rock', '7' => 'paper', '8' => 'scissors');
			  	echo "<br><br>You chose " . $array[$player_answer]; echo " and I chose " . $array[$computer_answer];
			  	if ($player_answer == $computer_answer) {
			  		echo "<br> WE TIED! Play again?";
			  	}
			  	switch ([$player_answer, $computer_answer]) {
			  		case ["6", "7"]:
			  			echo "<br> I win! I rule!";
			  		break;

			  		case ["6", "8"]:
			  		 	echo "<br> You won! You're great!"; 
			  		break;

			  		case ["7", "8"]:
			  			echo "<br> I win! I rule!";
			  		break;

			  		case ["7", "6"]:
			  		 	echo "<br> You won! You're great!"; 
			  		break;

			  		case ["8", "6"]:
			  			echo "<br> I win! I rule!";
			  		break;

			  		case ["8", "7"]:
			  		 	echo "<br> You won! You're great!"; 
			  		break;
			  	}
			  }
			?>
	</body>