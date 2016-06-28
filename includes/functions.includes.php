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

	function recap_choices($player_choice, $computer_choice){
	//this Function returns a string recapping the player and computer choices
	return "<br><br>You chose $player_choice and I chose $computer_choice...";
	}

	function declare_outcome($player_choice, $computer_choice){
	// this Function decides the outcome, and returns a Variable with the outcome
  		$outcome = "";
  		switch ([$player_choice, $computer_choice]) {
  			case ["rock", "rock"]:
  			case ["paper", "paper"]:
  			case ["scissors", "scissors"]:
  				 $outcome = "tie";
  			break;

  			case ["rock", "paper"]:
  			case ["paper", "scissors"]:
  			case ["scissors", "rock"]:
  				 $outcome = "player_lose";
  			break;

  			case ["rock", "scissors"]:
  			case ["paper", "rock"]:
  			case ["scissors", "paper"]:
  				 $outcome = "player_win";
  			break;
  		}
  		return $outcome;
 	 }

function notify_player($outcome){
	// this Function notifies the player of the outcome via a String
  		switch ([$outcome]) {
  			case ["tie"]:
  				return "<br> WE TIED! Play again?";
  			break;

  			case ["player_lose"]:
  				return "<br> I win! I rule!";
  			break;

  			case ["player_win"]:
  				return "<br> You won! You're great!";
  			break;
  		}
 	 }

?>
