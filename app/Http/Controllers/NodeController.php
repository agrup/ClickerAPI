<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class NodeController extends Controller
{
    public static function show(){
    	return Redirect::to('http://localhost:5000/game/15/agu/luli');
    }

}
