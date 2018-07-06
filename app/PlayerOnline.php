<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerOnline extends Model
{

	protected $fillable = ['name','connect'];

    public function getOnlines()
    {
    	return PlayerOnlineController::all();
    }


    public static function getOnline()
    {
    	return self::where('connect',1);
    }




}
