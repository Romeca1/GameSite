<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	body{
			padding: 0;
			margin:0;
			background-color: #474848;
		}
		.table-div{
			margin-left: 25%;
			margin-top: 15%;
		}
		table,tr,td{
			
		}
		td{
			padding: 15px 25px;
		}
		.exit-btn{
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
		.main-td{
			border-bottom: 1px solid black;
			color:white;
		}
		.single-user:hover{
			color:white;
			background-color: #333;
		}
		

</style>
<body>
	<a href="/admin" class="exit-btn">Back</a>
	<div class="table-div">
		<table>
			<tr>
				<td class="main-td">№</td>
				<td class="main-td">role</td>
				<td class="main-td">name</td>
				<td class="main-td">email</td>
				<td class="main-td">created_at</td>
			</tr>
			<?php $count = 1; ?>
			@foreach($users as $user)
				<tr class="single-user">
					<td>{{$count}}</td>
					<td>{{$user->role}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>{{$user->created_at}}</td>
					<?php $count++;?>
					
				</tr>
			@endforeach
		</table>
	</div>
</body>
</html>