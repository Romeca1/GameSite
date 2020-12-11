<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>

<body>
	<?php

		$games = file_get_contents('https://catalog.api.gamedistribution.com/api/v1.0/rss/All/?collection=all&categories=All&subType=all&type=all&mobile=all&rewarded=all&amount=40&page=1&format=json');
		$json_a = json_decode($games, true);
		
	?>
	<table>

	</table>
</body>
</html>