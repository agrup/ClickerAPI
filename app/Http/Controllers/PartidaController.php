<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\eventTrigger;
use App\Personaje;

class PartidaController extends Controller
{
    public function Crear(Request $request)
    {

    	$response = $request->partida;
        event(new eventTrigger());
    	dd($request);
    	$personajes = Personaje::where('User',\Auth::user()->id)->get();

    	//return response()->json($request);
    	return \Response::json($response);


        
        //return view('principal.index')->with(compact('personajes'));
    }
}
