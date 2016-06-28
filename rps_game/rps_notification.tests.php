<?php include ("../includes/functions.includes.php"); ?> 

<?php 
echo "\nTesting player is notified appropriately of losing outcome.\n";
	$outcome = "player_lose";
	if (notify_player($outcome) == "<br> I win! I rule!") {
  		echo "Success!";
	}
	else{
  		echo "Failed!";
	}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting player is notified appropriately of winning outcome.\n";
	$outcome = "player_win";
	if (notify_player($outcome) == "<br> You won! You're great!") {
  		echo "Success!";
	}
	else{
  		echo "Failed!";
	}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting player is notified appropriately of tie outcome.\n";
	$outcome = "tie";
	if (notify_player($outcome) == "<br> WE TIED! Play again?") {
  		echo "Success!";
	}
	else{
  		echo "Failed!";
	}
echo "\n-------------------------------------------------------------------\n";


echo "\n###################################################################\n";
echo "Tests complete.\n";

?>
