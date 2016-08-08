<?php include ("../includes/functions.includes.php"); ?> 

<?php 
echo "\nTesting appropriate declaration of winning outcome.\n";
	$player_choice = "rock";
	$computer_choice = "scissors";
	if (declare_outcome($player_choice, $computer_choice) == "player_win") {
  		echo "Success!";
	}
	else{
  		echo "Failed!";
	}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting appropriate declaration of losing outcome.\n";
	$player_choice = "scissors";
	$computer_choice = "rock";
	if (declare_outcome($player_choice, $computer_choice) == "player_lose") {
  		echo "Success!";
	}
	else{
  		echo "Failed!";
	}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting appropriate declaration of tie outcome.\n";
	$player_choice = "rock";
	$computer_choice = "rock";
	if (declare_outcome($player_choice, $computer_choice) == "tie") {
  		echo "Success!";
	}
	else{
  		echo "Failed!";
	}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";

?>
