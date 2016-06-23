<!DOCTYPE html>
<html lang="en-US">
<!-- read somewhere lang a best practice; true? -->
<link rel="stylesheet" type="text/css" href="something.css">
	<head>
		<title>
			bonus | stuff i like
		</title>
		<?php $current = 'bonus_mgc'; ?>
	</head>
	<body>
		<div id="header">
			<h1>bonus | stuff i like</h1>
		</div>
		<div id="sidebar">
			<?php include ("inc/nav.inc.php"); ?>
  		</div>
		<div id="section">
			<p>Great stuff goes here soon!</p>
  		</div>
  		<div id="footer">
  			<ul id="footer_nav">
			<?php include ("inc/footer.inc.php"); ?>
			</ul>
		</div>
	</body>
</html>