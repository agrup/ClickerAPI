<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personaje;
use App\PersonajeModel;

class PersonajeController extends Controller
{
     public function show(){

       //return view('principal.index');
        $personajeModel = PersonajeModel::all();
    	return view('personajes.personajes')->with(compact('personajeModel'));
    }

    public  function store(Request $request)
    {
 
        $user=\Auth::user()->userPersonaje()->first();
        if ($user == null){


        $PersonajeBase = PersonajeModel::find($request->Especie);

        $personaje = new Personaje;
        //dd($request);
        $personaje->create([

            'name'=>$PersonajeBase->name,
            'Especie'=>$request->Especie,
            'User'=> \Auth::user()->id,
            'img'=>$PersonajeBase->img,
            'Velocidad'=>$PersonajeBase->Velocidad,
            'Fuerza'=>$PersonajeBase->Fuerza,
            'Inteligencia'=>$PersonajeBase->Inteligencia
            ]);


        /*

        $dataValidad = $request->validate([

                'nombre'=>'required|unique:posts|max:255',
                'Especie'=>'required|integer'
            ]);
        */
                $personajeModel = PersonajeModel::all();

                return redirect()->route('game');

        $succes='Exito al cargar Personaje Nuevo';
        return view('personajes.personajes')->with(compact('succes'))
                                            //->withErrors('Ya cuenta con un personaje')
                                            //->withSucces('Personaje Guardado Exitosamente')
                                            ->with(compact('personajeModel'));
        }else{
            $personajeModel = PersonajeModel::all();
            $error='Ya cuenta con un personaje';
        return view('personajes.personajes')->with(compact('error'))
                                            //->withErrors('Ya cuenta con un personaje')
                                            //->withSucces('Ya cuenta con un personaje')
                                            ->with(compact('personajeModel'));
        }

    }

    public static function showMi()
    {

        $personaje = \Auth::user()->userPersonaje->first();
        $personajeModel = \Auth::user()->userPersonaje()->get();
    	return view('personajes.miPersonaje')->with(compact('personaje'))
                                            ->with(compact('personajeModel'));
        ;
    }
}
