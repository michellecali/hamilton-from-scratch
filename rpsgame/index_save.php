<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>
			rock | paper | scissors
		</title>
		<link href='https://fonts.googleapis.com/css?family=Lobster+Two:400,700,400italic,700italic|Arimo:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Cantata+One|Imprima' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="styles.css">	
		<?php $current = 'home'; ?>
	</head>
	<body>
		<form>
			<h1>Choose your weapon!</h1>
		  	<input type="radio" name="choice" value="1"> rock<br>
		  	<input type="radio" name="choice" value="2"> scissors<br>
		  	<input type="radio" name="choice" value="3"> paper<br><br>
		  	<input type="submit">
		</form>  	
		<?php
		  if ($_GET['choice']) {
			$player_answer = $_GET['choice'];
		  	$computer_answer = rand(1,3);
		  	$array = array ('1' => 'rock', '2' => 'paper', '3' => 'scissors');
		  	$array = array_values($array);
		  	// if ($player_answer == "$computer_answer") {
		  		echo "You chose " . $array[$player_answer];
		  	// }
		  	switch ([$player_answer, $computer_answer]) {
		  		case ["rock", "rock"]:
		  		 echo "We TIED!!! Play again??";
		  	}
		  }
		?>
	</body>