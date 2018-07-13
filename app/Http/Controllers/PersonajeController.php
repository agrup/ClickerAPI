<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personaje;

class PersonajeController extends Controller
{
     public function show(){

       //return view('principal.index');
    	return view('personajes.personajes');
    }

    public  function store(Request $request)
    {


    	$personaje = new Personaje;

        $personaje->create([

            'name'=>$request->name,
            'Especie'=>$request->Especie

            ]);


        /*
        $dataValidad = $request->validate([

                'nombre'=>'required|unique:posts|max:255',
                'Especie'=>'required|integer'
            ]);
        */
   
    	return view('principal.index');
    }

    public static function create()
    {
    	
    }
}
