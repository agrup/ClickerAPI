<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\eventTrigger;
use App\Personaje;
use App\Game;
use Illuminate\Support\Facades\URL;

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
            'url'=>URL::temporarySignedRoute('node',now()->addMinutes(30),['user'=>$userId])



        ]);
/*

*/

      $game = Game::where('id',$game->id)->first();
        //broadcast(new eventTrigger($id))->toOthers();
        event(new eventTrigger($game));

        return $game->toJson();
    }
}
