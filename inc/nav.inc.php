<ul>
	<li> <?php if($current == 'home') {echo 'home';} else {echo '<a href="index.php">home</a>';}?> </li>
	<li> <?php if($current == 'my_vision') {echo 'my vision';} else {echo '<a href="my_vision.php">my vision</a>';}?> </li>  				
	<li> <?php if($current == 'bonus_mgc') {echo 'bonus mgc';} else {echo '<a href="bonus_mgc.php">bonus mgc</a>';}?> </li>  
	<li> <?php if($current == 'industry_musings') {echo 'industry musings';} else {echo '<a href="industry_musings.php">industry musings</a>';}?> 
		<ul>
			<li> <?php if($current == 'is_a_decentralized_web_practical') {echo 'is a decentralized web practical?';} else {echo '<a href="is_a_decentralized_web_practical.php">is a decentralized web practical?</a>';}?></li>
			<li> <?php if($current == 'the_web_as_a_medium') {echo 'the web as a medium';} else {echo '<a href="the_web_as_a_medium.php">the web as a medium</a>';}?></li>
		</ul>
	</li>  
</ul>