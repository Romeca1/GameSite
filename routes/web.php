<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\AdminController;

Route::get('/',[UserController::class,"WelcomePage"]);
Route::get('/register',[UserController::class,"RegisterForm"]);
Route::post('/register',[UserController::class,"UserCreate"]);
Route::get('/login',[UserController::class,"LoginForm"]);
Route::post('/login',[UserController::class,"LogUser"]);
Route::get('/home',[UserController::class,"HomePage"]);
Route::resource('game', 'GameController');
Route::get('/admin',[AdminController::class,'AdminPage']);
Route::get('/admin/users',[AdminController::class,'UsersPage']);
Route::get('/admin/games',[AdminController::class,'GamesPage']);
Route::get('/admin/games/delete/{$id}',function($id)
{
	return view('GameInclude.GameDeleatForm.',['id' => $id]);
});
Route::post('/admin/rss',[AdminController::class,'RssConection']);