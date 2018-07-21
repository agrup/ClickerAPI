<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\URL;
class Game extends Model
{
/**
    	 * Game belongs to Host.
    	 *
    	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
  */

        protected $guarded = [];
    	
        public function Host()
        {
            // belongsTo(RelatedModel, foreignKey = host_id, keyOnRelatedModel = id)
            return $this->belongsTo(Player::class ,'host_id');
        }

        public function getGameByUrl()
    	{
            return self::where();
    	}





         /*
        public static function createGame($user1,$user2)
        {
        $game={
            "player1":
                {   "Vida":100,
                    "max-vida":80,
                    "Vida":80,
                    "Ataque":1,
                    "Defensa":0.5,
                    "especial":{
                        "Ataque +":0,
                        "Ataque x":1,
                        "Vida":0
                    },
                    "User":{
                    "Player":1,
                    "name":"Bruno",
                    "Player":"Goku-00",
                    "img":"freezer-4.png"
                }
            },
            "player2":
            {
                "max-vida":50,
                "Vida":50,
                "Ataque":1,

                "Defensa":0.5,
                "especial":{
                    "Ataque +":1,
                    "Ataque x":1,
                    "Vida":0
                },
                "User":{
                    "Player":2,
                    "name":"Agustin",
                    "Player":"Freezer",
                    "img":"Goku-0.png"
                }
            }
        };
    return $game;
    }
         */   
}