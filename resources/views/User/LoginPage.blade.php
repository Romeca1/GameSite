<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>    
    <link rel="stylesheet" type="text/css" href="{{asset('../css/style.css')}}">       
</head>

<body>
	<h2>Login Page</h2><br>    
    <div class="login">    
		<div class="form_div">
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
		<form id="login" method="post" action="/login">
			{{@csrf_field()}}
		    <label><b>User email     
		    </b>    
		    </label>    
		    <input type="email" name="email" id="Uname" placeholder="email">    
		    <br><br>    
		    <label><b>Password     
		    </b>    
		    </label>    
		    <input type="Password" name="password" id="Pass" placeholder="Password">    
		    <br><br>    
		    <input type="submit" name="log" id="log" value="Log In Here">       
		    <br><br>    

		</form>     
</div>    
</body>    
</html>     

	</div>
</body>
</html>