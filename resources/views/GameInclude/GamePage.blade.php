<!DOCTYPE html>
<html>
<head>
	<title>{{$game->name}}</title>
	<style>
		body{
			padding: 0;
			margin: 0;
			background-color: #283747;
		}
		a{
			padding: 10px 40px;
			background-color: #536A82;
			margin-top:25px;
			text-decoration: none;
			color:white;
		}
		a:hover{
			background-color: #5F9EDC;
		}
	</style>
	<script type="text/javascript" src="{{asset('js/jQuery.js')}}"></script>
</head>
<body>
	<div>
		<iframe src="{{$game->link}}" width="100%" height="900" scrolling="none" frameborder="0"></iframe>
	</div>
	<div>
		<a href="/home">Exit</a>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {

		});
	</script>
</body>
</html>