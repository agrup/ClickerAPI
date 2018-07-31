<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marker extends Model
{
    //
     protected $guarded = [];

     public function players(){
            return $this->belongsToMany('App\Player','marker_player','marker_id','player_id');
        }
        
}
