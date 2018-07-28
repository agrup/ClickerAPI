<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
Use App\Player;
class PlayerController extends Controller
{
    public static function show()
    {
    	return view('players.CreatePlayer');
    }

    public static function store()
    {
    	
    }

    public static function create()
    {
    	
    }
    public function editarPlayer(Request $request)
    {
    $player = Player::find(\Auth::user()->id);   
    DB::table('players')
            ->where('id', $player->id)
            ->update(['avatar' => 'user'.$player->id.'img.jpg']);
    Storage::putFileAs('public',$request->avatar,'user'.$player->id.'img.jpg');
    return view('players.modifPlayer') ->with(compact('player'))
                                        ;
    }
}
