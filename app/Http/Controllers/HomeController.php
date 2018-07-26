<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Player;
Use App\Game;
Use App\Personaje;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Paso la informacion del Player asociado al usuario auth
        $player = Player::find(\Auth::user()->id);   

        //$playersOnline =Player::getPlayers()->tojson();
        //$personajes = Personajes::all()->tojson();
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
//      var_dump($partidas);
//dd($partidas);
        return view('principal.index')->with(compact('personajes'))
                                        ->with(compact('partidas'))
                                        ->with(compact('personajeActual'))
                                        ->with(compact('player'))
                                        ;

    }
}


