<!DOCTYPE html>
<html>
<head>
	<title>Games</title>
</head>
<style>
	body{
			padding: 0;
			margin:0;
			background-color: #474848;
		}
		.table-div{
			margin-left: 12%;
			margin-top: 15%;
		}
		table,tr,td{
			
		}
		img{
			width: 60px;
			height: 60px;
		}
		td{
			padding: 5px 25px;
		}
		.main-td{
			border-bottom: 1px solid black;
			color:white;
		}
		.single-user:hover{
			color:white;
			background-color: #333;
		}
		a{
			padding: 25px 35px;
			margin-top: 5px;
			border-bottom-right-radius: 25px;
			text-decoration: none;
			background-color: #333;
			color:white;
		}
		a:hover{
			background-color: #fff;
			color:black;
		}
		span{
			font-size: 25px;
		}
		.btn{
			padding: 0;
			margin: 0;
		}
		img{
			width: 25px;
			height: 20px;
		}
		.update-btn{
			padding: 20px 25px;
			background-color: #F4D03F;
		}
</style>
<body>
	<a href="/admin">Back</a>
	<div class="table-div">
		<table>
			<tr>
				<td class="main-td">№</td>
				<td class="main-td">name</td>
				<td class="main-td">icon</td>
				<td class="main-td">link</td>
				<td class="main-td">category</td>
			</tr>
			<?php $count = 1; ?>
			@foreach($games as $game)
				<tr class="single-user">
					<td>{{$count}}</td>
					<td>{{$game->name}}</td>
					<td><img src="{{$game->icon}}"></td>
					<td>{{$game->link}}</td>
					<td><span>#</span>{{$game->category}}</td>
					<td class="btn"><a href="" class="update-btn"><img src="{{asset('../img/hiclipart.com.png')}}"></a></td>
					<?php $count++;?>
				</tr>
			@endforeach
		</table>
	</div>
</body>
</html>