<?php

use Illuminate\Http\Request;
use App\Game;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->get('/game', function (Request $request) {
	//var_dump(Game::find($request->game));
	//dd($request);
	$game =Game::where('id',$request->game)->where('url',$request->signature)->first();
    return $game;
    //return Game::find($request->game);
});
