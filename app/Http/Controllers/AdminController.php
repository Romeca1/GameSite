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
                            ->select('*')
                            ->orderBy('likes', 'DESC')
                            ->limit(5)
                            ->get();
        $MostDislikesGames = DB::table('games')
                            ->select('*')
                            ->orderBy('dislikes', 'DESC')
                            ->limit(5)
                            ->get();
        
        return view('Admin.AdminPage', [
            "user_count" => count(User::all()),
    	   "game_count" => count(Game::all()),
    	   "topLikes" => $MostLikesGames,
           'topDislikes' => $MostDislikesGames
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
        $array = [];
        for ($j=0; $j <count($json_a) ; $j++) { 
            $array[$j]['name'] = $json_a[$j]['title'];
            $array[$j]['link'] = $json_a[$j]['url'];
            $array[$j]['icon'] = $json_a[$j]['assetList'][0]['name'];
            $array[$j]['category'] = $json_a[$j]['categoryList'][0]['name'];
            $array[$j]['description'] = $json_a[$j]['description'];
            $array[$j]['instruction'] = $json_a[$j]['instructions'];          
        }   
        DB::table('games')->insert($array);
        return redirect('/admin');
    }
}
