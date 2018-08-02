<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\eventTrigger;
use App\Personaje;
use App\Game;
use App\User;
use App\Player;
use Illuminate\Support\Facades\URL;
use Redirect;
use Illuminate\Support\Facades\Auth;

class PartidaController extends Controller
{
  public function Crear(Request $request)
  {

    $userId=\Auth::user()->id;

    $game= Game::create([
        'host_id'=>$userId,

        'personaje_p1'=>(\Auth::user()->userPersonaje())->orderBy('id', 'desc')->first()->id,
    
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
   
      // $game2= $game;
       
   // if(!($game->isLLena())){



        if($game && $game->host_id!=$userId->id ){
          $game->opnente_id=$userId->id;
          $game->personaje_p2= \Auth::user()->userPersonaje()->latest()->first()->id;
          //$game->url2=bin2hex(openssl_random_pseudo_bytes(30));
          $game->save();

        //return Redirect::to('http://localhost:5000/game/'.$game->id.'/'.$userId->name.'/'.$game->url2);
        return Redirect::to(env('GAME_URL').$game->id.'/'.$userId->name.'/'.$game->url2);
        
        }else{
        
          return Redirect::to(env('GAME_URL').$game->id.'/'.$userId->name.'/'.$game->url1);

        }
      /*
    }else{

     $error="Lo sentimos la partida esta llena";
      //event(eventTrigger($partidallena));
      //return response()->json($partidallena); 
      return view('errores.index')->with(compact(['error']));
    }*/
    ;
    
  
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
                  'Player'=>Personaje::find( $personaje1->id)->name,
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
                    'Player'=>Personaje::find( $personaje2->id)->name,
                    'img'=>$personaje2->img
        ];
      }else{
        $personaje2=null;
      }

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


  public function Terminar (Request $request)
  {

/*
*/




    $ganador = Game::where('url1',$request->ganador)->first();
     //$gandor->terminar();
    if($ganador != null ){
      //return $gandor->host_id;
      if($ganador->url2 == $request->perdedor){

        //DARLE LOS PUNTOS AL GANADOR
        $ganador->Terminar($ganador->host_id);
        
        
        /*

        

        User::find($ganador->host_id)->userPlayer()->updatePlayer(

          $oro=$premio->oro,
          $experiencia=$premio->experiencia,
          $millas=$premio->millas,

          );
        */

      return $ganador->host_id;
        }
    }else
    {
    $ganador = Game::where('url2',$request->ganador)->first();

    //$gandor->terminar();
    if($ganador != null ){
      //return $gandor->host_id;
      if($ganador->url1 == $request->perdedor){
        //DARLE LOS PUNTOS AL GANADOR
        $ganador->Terminar($ganador->oponent_id);
        
/*


        User::find($ganador->opnente_id)->userPlayer()

        ->updatePlayer(

          $oro=$premio->oro,
          $experiencia=$premio->experiencia,
          $millas=$premio->millas,

          );
*/

        return $ganador->opnente_id;
      }
      //return Game::where('url1',$request->ganador)->first()->oponente_id;
    };

  };

}


}
/*

*/