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
                padding: 0;
                margin: 0;
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
            .menu{
                overflow: hidden;
                padding: 0;
                margin:0px;
                list-style-type: none;
                background-color: #43EC28;
            }
            .menu li{
                float:left;
                border:none;
                margin: 0px;
            }
            .menu li a{
                border:none;
                padding: 15px 25px;
                background-color: #43EC28;
                margin: 0px;
                color:black;
                text-decoration: none;   
            }
            .menu li a:hover{
                background-color: #13790B;
            }
            .head{
                margin-left: 45%;
            }
            h1{
                color:white;
            }
        </style>

    </head>
    <form method="GET" action='/game'>
        {{ csrf_field() }}
        <ul class="menu">   
            <li><input type="submit" name="btn" value="All"></li>
            <li><input type="submit" name="btn" value="Puzzle"></li>
            <li><input type="submit" name="btn" value="2 Player"></li>
            <li><input type="submit" name="btn" value="Sports"></li>
            <li><input type="submit" name="btn" value="Action"></li>
            <li><input type="submit" name="btn" value="Arcade"></li>
            <li><input type="submit" name="btn" value="Adventure"></li>
            <li><input type="submit" name="btn" value="Racing"></li>
        </ul>
    </form>
    <body class="antialiased">
        <div class="head"><h1>{{$title ?? ''}}</h1></div>
    	<?php  $count = 1;?>
    	<div class="main-div">
    	<ul>
			@foreach($games as $game)
				<li>
				<form method="get" action="/game/{{$game->id}}">
					<img src="{{$game->icon}}">
                    <br>
                    <input type="submit" name="sbm" value="play">
				</form>
			</li>
			@endforeach
    	</ul>
    </div>
    </body>
</html>
