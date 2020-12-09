<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Models\Game;
class UserController extends Controller
{
    //
    public function WelcomePage()
    {
    	return view('OtherPages.WelcomePage');
    }
    public function RegisterForm()
    {
    	return view('User.RegisterPage');
    }
    public function HomePage()
    {
    	return view('OtherPages.homePage',['games' => Game::all()]);
    }
    public function UserCreate(RegisterRequest $request)
    {
    	$user = User::create([
    		"name" => $request['name'],
    		"email" => $request['email'],
    		"password" => $request['password'],
    	]);
    	session_start();
    	session('user_id',User::all()->last());
    	return redirect('/home');
    }
    public function LoginForm()
    {
    	return view('User.LoginPage');
    }
    public function LogUser(LoginRequest $request)
    {
    	$user = User::where(['email' => $request['email'],'password' => $request['password']])->first(); 
		if($user){
			session_start();
    		$_SESSION['user_id'] = $user->id;
    		if($user->role == 'admin'){
    			return redirect('/admin');
    		}else{
    			return view('OtherPages.homePage',['games' => Game::all()]);
    		}
		}
    }
}
