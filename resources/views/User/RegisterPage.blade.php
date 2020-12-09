<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
	<div class="login">
		{{@csrf_field()}}
			@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form id="login" method="post" action="/register">
			{{@csrf_field()}}
			<label><b>User name     
		    </b>    
		    </label>    
		    <input type="text" name="name" id="Uname" placeholder="Username">    
		    <br><br>  
		    <label><b>User email     
		    </b>    
		    </label>    
		    <input type="email" name="email" id="Uname" placeholder="Email">    
		    <br><br>    
		    <label><b>Password     
		    </b>    
		    </label>    
		    <input type="password" name="password" id="Pass" placeholder="Password">    
		    <br><br>    
		    <label><b>Repeat password     
		    </b>    
		    </label>    
		    <input type="password" name="password2" id="Uname" placeholder="Repeat passowrd">    
		    <br><br>  
		    
		    <input type="submit" name="log" id="log" value="Register">       
		    <br><br>    

		</form> 
		<div>
				@if(isset($messeg_error))
				<p class="error_p">{{$messeg_error}}</p>
				@endif

				@if(isset($errors))
				@foreach($errors as $error)
				<p class="error_p">{{$error}}</p>
				@endforeach
				@endif
			</div>
	</div>
</body>
</html>