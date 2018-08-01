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
        //$markers=marker::all();  
        
      $partidas =  $partidaResult;
      $personajeActual=$personajes->first();    
      //////////////----------------------------///////////////////

    $player = Player::find(\Auth::user()->id);   
    DB::table('players')
            ->where('id', $player->id)
            ->update(['avatar' => 'user'.$player->id.'img.jpg']);
    //guardo la imagen        
    //Storage::putFileAs('public',$request->avatar,'user'.$player->id.'img.jpg');

    //$imagen=Image::make($request->avatar);
    
          
    $imagen=Image::make($request->file('file')->getRealPath());
    $imagen->resize(150,150);
    $imagen->save('storage/user'.$player->id.'img.jpg');


      $markers=$player->markers;
     //$url    = Storage::url('public/user'.$player->id.'img.jpg');
   
    
        return view('principal.index')->with(compact('personajes'))
                                        ->with(compact('partidas'))
                                        ->with(compact('personajeActual'))
                                        ->with(compact('player'))
                                        ->with(compact('markers'))
                                       // ->with(response()->json("{{asset('/storage/'".$player->avatar.")}}"))
                                        ;

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
