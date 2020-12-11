<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.form-div{
			margin-top: 35%;
			margin-left: 40%;
		}	
	</style>
</head>
<body>
	<div class="form-div">
		<form action="/game/{{$id}}" method="DELETE">
			{{ csrf_field() }}
			<p>Are you sure to deleat the game!</p>
			<input type="submit" name="btn1" value="Yes">
			<input type="submit" name="btn2" value="No">
		</form>
	</div>
</body>
</html>