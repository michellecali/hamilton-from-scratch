<?php $current = 'game'; ?>
<?php $title = 'rock | paper | scissors'; ?>
<?php include ("includes/header.includes.php"); ?>
			<form>
				<h1>Choose your weapon!</h1>
			  	<input type="radio" name="choice" value="rock"> rock<br>
			  	<input type="radio" name="choice" value="paper"> paper<br>
			  	<input type="radio" name="choice" value="scissors"> scissors<br><br>
			  	<input type="submit">
			</form> 
<?php include ("includes/functions.includes.php"); ?> 	
			<?php   
				$x = create_player_choice_variable(); 
				$y = create_computer_choice_variable();
				echo recap_choices($x, $y);
				$z = declare_outcome($x, $y);
				echo notify_player($z);
			?>
	<?php include ("includes/footer.includes.php"); ?>