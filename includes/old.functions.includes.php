<?php 
	function create_player_choice_variable(){
	// upon Parameter entry, this Function returns a Variable with the player choice 
		if ($_GET['choice']) {
	    	$player_choice = $_GET['choice'];
		}
		return $player_choice;
	}

	function create_computer_choice_variable(){
	// this Function returns a Variable with the computer choice
		$array = array("rock", "paper", "scissors");
		$computer_key = array_rand($array);
		$computer_choice = $array[$computer_key];
		return $computer_choice;
	}

	function evaluate_winner(){
	//this Function evaluates for the winner, and returns a Variable with the outcome
  		$outcome = "";
  		switch ([$player_choice, $computer_choice]) {
  			case ["rock", "rock"]:
  			case ["paper", "paper"]:
  			case ["scissors", "scissors"]:
  				return $outcome = "tie";
  			break;

  			case ["rock", "paper"]:
  			case ["paper", "scissors"]:
  			case ["scissors", "rock"]:
  				return $outcome = "lose";
  			break;

  			case ["rock", "scissors"]:
  			case ["paper", "rock"]:
  			case ["scissors", "paper"]:
  				return $outcome = "win";
  			break;
  		}
 	 }

	function notify_user(){
	// return a series of Strings recapping both the player and computer choices
		return "<br><br>You chose $player_choice and I chose $computer_choice";
	  	switch ([$outcome]) {
	  		case ["tie"]:
	  			return "<br> WE TIED! Play again?";
	  		break;

	  		case ["lose"]:
	  			return "<br> I win! I rule!";
	  		break;

	  		case ["win"]:
	  			return "<br> You won! You're great!";
	  		break;
 	 	}
	}
?>