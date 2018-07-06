<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\PlayerOnline;

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
        $playersOnline =PlayerOnline::all()->tojson();

        return view('principal.index',compact('playersOnline'));
    }
}


