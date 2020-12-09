<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Game;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function AdminPage()
    {
    	$MostLikesGames = DB::table('games')
        ->select('icon')
        ->orderBy('likes', 'DESC')
        ->get();
        return view('Admin.AdminPage',
    	["user_count" => count(User::all()),
    	"game_count" => count(Game::all()),
    	"topLikes" => $MostLikesGames]);
    }
    public function UsersPage()
    {
    	return view('Admin.UsersPage',['users' => User::all()]);
    }
    public function GamesPage()
    {
    	return view('Admin.GamesPage',['games' => Game::all()]);
    }
}
