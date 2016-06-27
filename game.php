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
<?php include ("includes/functions.includes.php"); ?> 	
			<?php rock_paper_scissors(); ?>
	<?php include ("includes/footer.includes.php"); ?>