<!DOCTYPE html>
<html>
<head>
	<title>GGame</title>
	<style>
		body{
			padding: 0;
			margin: 0;
			background-color: #283747;
		}
		a{
			padding: 50px 80px;
			background-color: #43EC28;
			margin-top:25px;
			margin-right: 250px;
			text-decoration: none;
			color:white;
		}
		
		.like-btn{
			padding: 10px 15px;
			background-color: #4F94D8;
		}
		.like-btn:hover , .dislike-btn:hover{
			box-shadow: 0px 4px 6px 0px black;
		}
		.dislike-btn
		{

			padding: 10px 15px;
			background-color: #4F94D8;
		}
	</style>
	<script type="text/javascript" src="{{asset('js/jQuery.js')}}"></script>
</head>
<body>
	<div>
		<iframe src="{{$game->link}}" width="100%" height="800" scrolling="none" frameborder="0"></iframe>
	</div>
	<br>
	<a href="/home">Exit</a>
	<div>
		<p>Instruction:</p>{{$game->instruction}}
	</div>
</body>
</html>