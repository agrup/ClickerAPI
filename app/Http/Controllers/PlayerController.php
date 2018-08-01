<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
Use App\Player;
Use App\Game;
Use App\Personaje;
Use App\marker;
use Image;
use Illuminate\Support\Facades\Input;

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
    public function editarPlayer( Request $request)
    {
       
   

    $player = Player::find(\Auth::user()->id);   
    DB::table('players')
            ->where('id', $player->id)
            ->update(['avatar' => 'user'.$player->id.'img.jpg']);

    
          
    $imagen=Image::make($request->file('file')->getRealPath());
    $imagen->resize(150,150);
    $imagen->save('storage/user'.$player->id.'img.jpg');


      
   
   
   

    }

    public static function editarPerfil(){

        $nickname = request()->input('nickname');
        $player = Player::find(\Auth::user()->id);   
        DB::table('players')
            ->where('id', $player->id)
            ->update(['nickname' => $nickname]);
        return response()->json($nickname);
    }
   

}
