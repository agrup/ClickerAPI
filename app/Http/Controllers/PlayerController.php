<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
Use App\Player;
Use App\Game;
Use App\Personaje;
use Image;

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
        //////////////--------------------////////////////
     $personajes = Personaje::where('User',\Auth::user()->id)->get();
            
        $partidas= Game::where('Estado',false)->orderBy('id','desc')->take(20)->get();
        $partidaResult=[];
        foreach($partidas as $partida){

           array_push($partidaResult,['id'=>$partida->id,
                            'Personaje'=>$partida->Personaje->name,
                            'User'=>$partida->Personaje()->first()->User()->first()->name
            ]);
        };

      $partidas =  $partidaResult;
      $personajeActual=$personajes->first();    
      //////////////----------------------------///////////////////

    $player = Player::find(\Auth::user()->id);   
    DB::table('players')
            ->where('id', $player->id)
            ->update(['avatar' => 'user'.$player->id.'img.jpg']);
    //guardo la imagen        
    //Storage::putFileAs('public',$request->avatar,'user'.$player->id.'img.jpg');

    $imagen=Image::make($request->avatar);
    $imagen->resize(100,100);
    $imagen->save('storage/user'.$player->id.'img.jpg');

    return view('principal.index') ->with(compact('player'))
                                   -> with(compact('personajes'))
                                        ->with(compact('partidas'))
                                        ->with(compact('personajeActual'));
                                        
                                    
    }
}
