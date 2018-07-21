<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\eventTrigger;
use App\Personaje;
use App\Game;
use Illuminate\Support\Facades\URL;
use Redirect;
use Illuminate\Support\Facades\Auth;

class PartidaController extends Controller
{
    public function Crear(Request $request)
    {
        


       //$response = $request->partida;
         $userId=\Auth::user()->id;
         //Busco los personajes para el User       
        //$personajes = Personaje::where('User',$userId)->get();

        //$personaje = $request->personaje;

         //Busco el elegido

        //Creao La Partida

        $game= Game::create([
            'host_id'=>$userId,
            //'host_id'=>1023,
            'personaje_p1'=>$request->personaje,
       
                //creao el hash de la partida
            //'url'=>URL::temporarySignedRoute('unirme',now()->addMinutes(30))
            'url'=>bin2hex(openssl_random_pseudo_bytes(30))

        ]);
/*

*/

      $game = Game::where('id',$game->id)->first();
        //broadcast(new eventTrigger($id))->toOthers();
        event(new eventTrigger($game));

        return $game->toJson();
    }

        public function unirme(Request $request)
    {

/*
  if (! $request->hasValidSignature()) {
        //abort(401);
    };
*/
   // dd($request->fullurl());
      $userId=(Auth::user());
      $game = Game::where('id',$request->id)->first();
      //dd($game, $userId->id);
     
         $game2= $game;
         
      if($game && $game->host_id!=$userId->id ){
        $game->opnente_id=$userId->id;
        $game->personaje_p2=
                            Personaje::where('User',$userId->id)->first()->id;
         
         $game->save();
        //dd ($game2,$game);

      };
        //dd ($game);
      return Redirect::to('http://localhost:5000/game/'.$game->id.'/'.$userId->id.'/'.$game->url);
    
    }
}
/*

*/