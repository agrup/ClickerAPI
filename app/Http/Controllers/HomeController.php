<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Player;
Use App\Personajes;

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
        $playersOnline =Player::getPlayers()->tojson();
        $personajes = Personajes::all()->tojson();

        return view('principal.index')->with(compact('playersOnline'))
                                    ->with(compact('personajes'))
            ;
    }
}


