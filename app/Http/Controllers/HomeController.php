<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Player;
Use App\Game;
Use App\Personaje;
Use App\marker;
use Image;
use DB;

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
      //marcas
      //$markers=marker::all(); 


      $markers=$player->markers; 

      $partidas =  $partidaResult;
      $personajeActual=$personajes->first();

        return view('principal.index')->with(compact('personajes'))
                                        ->with(compact('partidas'))
                                        ->with(compact('personajeActual'))
                                        ->with(compact('player'))
                                        ->with(compact('markers'))
                                        ;

    }


  public function cambiarAvatar(Request $request){
        if($request->hasFile('avatar')){
            $avatar=$request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/img/'.$filename));
            $user=Auth::user();
            $user->$avatar=$filename;
            $user->save();
        }
        return view('principal.index',array(user=>Auth::user()));
  }  
  public function editarPlayer(){
    $player = Player::find(\Auth::user()->id);   
        return view('players.modifPlayer') ->with(compact('player'))
                                        ;
  }

  public function viajar(){
        $id = request()->input('id');
        $millas = request()->input('millas');
        if(!isset($millas)){$millas=0;}
        $experiencia = request()->input('experiencia');
        if(!isset($experiencia)){$experiencia=0;}
        $oro = request()->input('oro');
        if(!isset($oro)){$oro=0;}
        $ataque = request()->input('ataque');
        if(!isset($ataque)){$ataque=0;}
        $vida = request()->input('vida');
        if(!isset($vida)){$vida=0;}
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
      //marcas
      //$markers=marker::all();
      $player = Player::find(\Auth::user()->id);
      /*DB::table('players')
            ->where('id', $player->id)
            ->update(['nickname' => $nickname]); */
              

      $player->markers()->updateExistingPivot($id,['player_id'=>$player->id,'completa'=>'completa']);
     
      $markers=$player->markers;

      $partidas =  $partidaResult;
      $personajeActual=$personajes->first();
      //hago update en las marcas
      
        /* DB::table('markers')
            ->where('id', $player->id)
            ->update(['completo' => 'completo']);*/


        return view('principal.index')->with(compact('personajes'))
                                        ->with(compact('partidas'))
                                        ->with(compact('personajeActual'))
                                        ->with(compact('player'))
                                        ->with(compact('markers'))
                                        ;

  }
}


