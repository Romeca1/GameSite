<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<style>
		body{
			padding: 0;
			margin:0;
			background-color: #474848;
		}
		.form-div{
			border-right:1px;
			background-color: #333;
			position: fixed;
			height: 100%;
			padding-left: 20px;
			padding-right:20px; 
			margin: 0px;
		}
		textarea{
			resize: none;
			background-color: #581845;
			color:white;
		}

		label{
			color:white;
		}
		input{
			background-color: #581845;
			
			width: 245px;
		}
		.create-btn{
			padding: 60px 35px;
			font-size: 80px;
			background-color: #43EC28;
			border:none;
			color:#2C7C1F;
			border-radius: 2px;
		}
		.create-btn:hover{
			background-color: #13790B;
			color:white;
		}
		.info-div{
			float:left;
			margin-top: 5%;
			margin-left: 45%;
		}
		.info-div div{
			float:left;
			width: 350px;
			height: 100px;
			border:1px solid black;
		}
		span{
			margin-top:200px;
			color:white;
			font-size: 40px; 
		}
		.user-div{
			margin-right: 50px;
			margin-left: -150px;
			background-color: #C70039;
			border-radius: 5px;
		}
		.game-div{
			background-color: #FF5733;
			border-radius: 5px;
		}
		a:hover .user-div{
			background-color:#FF5733; 
		}
		a:hover .game-div{
			background-color:#C70039; 
		}
		.div1{
			margin-top: 250px;
			margin-left: 400px;
			background-color: #333;
			padding: 0px;
			margin-right: 20px;  
		}
		.div2{
			margin-top: 350px;
			margin-left: 400px;
			background-color: #333;
			padding: 0px;
			margin-right: 20px;  
		}
		img{
			width: 100px;
			height: 75px;
		}
		.single-game-div{
			float:left;
			padding: 10px;
			margin-right: 40px;
			border:1px solid black;
			border-radius: 4px;
		}
		.text-div{
			margin-left: 40%;
		}
		p{
			color:white;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<div class="form-div">
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
		</form>
	</div>

	<div class="info-div">
		<a href="/admin/users">
			<div class="user-div">
				<span>registered users:</span><br>
				<span>10000000</span>
			</div>
		</a>
		<a href="/admin/games">
			<div class="game-div">
				<span>games in site:</span><br>
				<span>10000000</span>
			</div>
		</a>
	</div>
	<br>	
	<div class="div1">
		<div class="text-div">
			<p>Top 5 likes game!</p>
		</div>
		@for($i=1;$i<=5;$i++)
			@foreach(App\Models\Game::all() as $game)
            <div class="single-game-div">
                <img class="game-icon" src="{{$game->icon}}">
                <p>{{$game->name}}</p>
            </div>
        	@endforeach
        @endfor
	</div>
	<div class="div2">
		<div class="text-div">
			<p>Top 5 likes game!</p>
		</div>
		@for($i=1;$i<=5;$i++)
		@foreach(App\Models\Game::all() as $game)
            <div class="single-game-div">
                <img class="game-icon" src="{{$game->icon}}">
                <p>{{$game->name}}</p>
            </div>
        @endforeach
        @endfor
	</div>
</body>
</html>