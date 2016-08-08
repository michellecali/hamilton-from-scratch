
	<h3>pages</h3>
	<ul>
	<li> <?php if($current == 'home') {echo 'home';} else {echo '<a href="index.php">home</a>';}?> </li>
	<li> <?php if($current == 'my_vision') {echo 'my vision';} else {echo '<a href="my_vision.php">my vision</a>';}?> </li> 
	<li> <?php if($current == 'rps_game') {echo 'a bonus game!';} else {echo '<a href="rps_game.php">a bonus game!</a>';}?> </li>
	</ul>

				
	<h3>musings | industry</h3>
	<ul>
	<li> <?php if($current == 'is_a_decentralized_web_practical') {echo 'a decentralized web?';} else {echo '<a href="is_a_decentralized_web_practical.php">a decentralized web?</a>';}?> </li>
	<li> <?php if($current == 'the_web_as_a_medium') {echo 'the web as a medium';} else {echo '<a href="the_web_as_a_medium.php">the web as a medium</a>';}?> </li>
	</ul>