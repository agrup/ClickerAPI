<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/game', function () {

    return view('principal.index');
});
*/

//Route::get('/game','HomeController@index');

Auth::routes();
//Route::get('glogin',array('as'=>'glogin','uses'=>'UserController@googleLogin')) ;
//Route::get('google-user',array('as'=>'user.glist','uses'=>'UserController@listGoogleUser')) ;
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/game', 'HomeController@index')->name('game');

