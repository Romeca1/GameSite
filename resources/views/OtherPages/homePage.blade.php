<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GGame</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        	body{
        		background-color: #283747;
        	}
            img{
            	width:120px;
            	height: 105px;
            }
            input{
            	width: 120px;
            	border:none;
            	background-color:#481EB0;
            	color:white;
            	border-radius: 10px;
            }
            input:hover{
            	background-color: #7542F1;
            }
            span{
            	text-align: center;
            	color:white;
            }
            ul{
            	list-style-type: none;
            }
            li{
            	padding: 15px;
            	float:left;
            	border:1px solid black;
            	border-radius: 10px;
            	margin:5px;
            }
        </style>

       
    </head>
    <body class="antialiased">
    	
    	<div class="main-div">
    	<ul>
			@foreach($games as $game)
				<li>
				<form method="get" action="/game/{{$game->id}}">
					<img src="{{$game->icon}}">
					<div><span>{{$game->name}}</span></div>
					<input type="submit" name="sbm" value="play">
				</form>
			</li>
			@endforeach
    	</ul>
    </div>
    </body>
</html>
