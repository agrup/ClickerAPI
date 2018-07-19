<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /**
     * Player has many HostGame.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    protected $guarded = [];
    public function hostGame()
    {
    	// hasMany(RelatedModel, foreignKeyOnRelatedModel = player_id, localKey = id)
    	return $this->hasMany(Game::class, 'host_id');
    }
    public function getDataPlayer(){
        return $this->belongsto(User::class,'id');
    }


    public static function getPlayers()
    {
        return self::all();
    }

    public static function createPlayer()
    {
        
    }

}
