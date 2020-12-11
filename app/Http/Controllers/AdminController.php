<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Game;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RssRequest;
class AdminController extends Controller
{
    public function AdminPage()
    {
    	$MostLikesGames = DB::table('games')
                            ->select('icon')
                            ->orderBy('likes', 'DESC')
                            ->limit(5)
                            ->get();
        return view('Admin.AdminPage', [
            "user_count" => count(User::all()),
    	   "game_count" => count(Game::all()),
    	   "topLikes" => $MostLikesGames
        ]);
    }
    public function UsersPage()
    {
    	return view('Admin.UsersPage',['users' => User::all()]);
    }
    public function GamesPage()
    {
    	return view('Admin.GamesPage',['games' => Game::all()]);
    }
    #description instruction title url assetList => name categoryList => name
    public function RssConection(Request $request)
    {

        $games = file_get_contents($request['link']);
        $json_a = json_decode($games, true);
        
        for ($i=1; $i <count($json_a) ; $i++) { 
            Game::create([
                "name" => $json_a[$i]['title'],
                "link" => $json_a[$i]['url'],
                "icon" => $json_a[$i]['assetList'][0]['name'],
                "category" => $json_a[$i]['categoryList'][0]['name'],
                "description" => $json_a[$i]['description'],
                "instruction" => $json_a[$i]['instructions']
            ]);
        }
    }
}
