<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\eventTrigger;
use App\Personaje;
use App\Game;
use App\User;
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
     //dd($userId);
    $game= Game::create([
        'host_id'=>$userId,
        //'host_id'=>1023,
        //'personaje_p1'=>$request->personaje,
        'personaje_p1'=>\Auth::user()->userPersonaje->first()->id,
    
            //creao el hash de la partida
        //'url'=>URL::temporarySignedRoute('unirme',now()->addMinutes(30))
        'url1'=>bin2hex(openssl_random_pseudo_bytes(30)),
        'url2'=>bin2hex(openssl_random_pseudo_bytes(30))


    ]);

  $game = Game::where('id',$game->id)->first();
    //broadcast(new eventTrigger($id))->toOthers();
    event(new eventTrigger($game));

    return $game->toJson();
  }

  public function unirme(Request $request)
  {


 // dd($request->fullurl());
    $userId=(Auth::user());
    $game = Game::where('id',$request->id)->first();
    //dd($game, $userId->id);
   
       $game2= $game;
       
    if($game && $game->host_id!=$userId->id ){
      $game->opnente_id=$userId->id;
      $game->personaje_p2= Personaje::where('User',$userId->id)->first()->id;
      //$game->url2=bin2hex(openssl_random_pseudo_bytes(30));
      $game->save();

    //return Redirect::to('http://localhost:5000/game/'.$game->id.'/'.$userId->name.'/'.$game->url2);
    return Redirect::to(env('GAME_URL').$game->id.'/'.$userId->name.'/'.$game->url2);
    
    }else{


    return Redirect::to(env('GAME_URL').$game->id.'/'.$userId->name.'/'.$game->url1);
      
    };
    
  
  }


  public function Game (Request $request)
  {

    $game =Game::where('id',$request->game)->where('url1',$request->signature)->orWhere('url2',$request->signature)->first();




    if($game){
      

      $personaje1=Personaje::find($game->personaje_p1);
      //$user1=User::find($game->host_id);
      $personaje1->user= [
                  'name'=>User::find($game->host_id)->name, 
                  //Player en realidad es Personaje Tengo que refactorizarlo
                  'Player'=>Personaje::find( $personaje1->Especie)->name,
                  'img'=>$personaje1->img
      ];
      /*
                  ];
      */
                        

      $personaje2= Personaje::find($game->personaje_p2);
      if($personaje2){

        $personaje2->user= [
                    'name'=>User::find($game->opnente_id)->name, 
                    //Player en realidad es Personaje Tengo que refactorizarlo
                    'Player'=>Personaje::find( $personaje2->Especie)->name,
                    'img'=>$personaje2->img
        ];
      }else{
        $personaje2=null;
      }


/*


*/
      /*


      */
      $gameJSON = ['Player1'=>$personaje1,
                    'Player2'=>$personaje2,
                    'Game'=>$game->id,
                    'url1'=>$game->url1,
                    'url2'=>$game->url2
                    ];
      /*
      */

      //$gameJSON->player1->User = 'casa';

      $gameJSON = json_encode($gameJSON);

    return $gameJSON;



  }else{

    //retorno null en caso de no existir la partida, luego se creara un mensaje de error
    return 'null';
  }

  }

}
/*

*/