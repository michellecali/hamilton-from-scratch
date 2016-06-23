<!DOCTYPE html>
<html lang="en-US">
<!-- read somewhere lang a best practice; true? -->
<link rel="stylesheet" type="text/css" href="something.css">
	<head>
		<title>
			musings | thoughts on the industry
		</title>
		<?php $current = 'the_web_as_a_medium'; ?>
		<style>
		img { 
    		width:100%; 
		}
		</style>
	</head>
	<body>
		<div id="header">
			<h1>musings | thoughts on the industry</h1>
		</div>
		<div id="sidebar">
			<?php include ("inc/nav.inc.php"); ?>
  		</div>
		<div id="section">
			<h2> The Web as a Medium</h2>
			<p>June 22, 2016</p>
			<br>
			<p> Great stuff goes here</p>
			
  		</div>
  		<img src="/media/osi_model.png" alt="OSI Model" style="width:360px;height:231px;">
  		<div id="footer">
  			<ul id="footer_nav">
			<?php include ("inc/footer.inc.php"); ?>
			</ul>
		</div>
	</body>
</html>