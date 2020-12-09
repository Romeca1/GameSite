<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<style>
		body{
			background-color: #E7E7E7;
		}
		form{
			position: absolute;
			top:35%;
			left:40%;
		}
		input{
			height: 25px;
			width:290px;
			margin-bottom: 20px;
		}

	</style>
</head>
<body>
	<form method="POST" action="/login">
		<
        @csrf
        <div>
        	<label for="email">Email</label><br>
        	<input type="email" name="email" placeholder="Enter email:">
        </div>
        <div>
        	<label for="email">Password</label><br>
        	<input type="password" name="password" placeholder="Enter password:">
        </div>
        <br>
        <div>
        	<input type="submit" name="btn" value="Log in">
        </div>
    </form>
</body>
</html>