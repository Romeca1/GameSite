<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			padding: 0;
			margin:0;
			background-color: #474848;
		}

	</style>

</head>
<body>
	<div>
		<form method="post" action="/game">
			{{ csrf_field() }}
			<div>
				<label for="name">Enter the name of game</label><br>
				<input type="text" name="name">
			</div>
			<br>
			<div>
				<label for="link">Paste the link of the game</label><br>
				<input type="text" name="link">
			</div>
			<br>
			<div>
				<label for="icon">Paste the link of the icon</label><br>
				<input type="text" name="icon">
			</div>
			<br>
			<div>
				<label for="icon">Enter the category of the game</label><br>
				<input type="text" name="category">
			</div>
			<br>
			<div>
				<label for="description">Enter the description of the description</label><br>
				<textarea type="text" name="description" rows="12" cols="33" placeholder="The text must be 60 - 120 character!">
				</textarea>
			</div>
			<br>
			<div>
				<label for="instruction">Enter the instruction of the game</label><br>
				<textarea type="text" rows="12" cols="33" name="instruction">
				</textarea>
			</div>
			<br>
			<div>
				<input type="submit" value="GO!" class="create-btn">
			</div>
	</div>
</body>
</html>