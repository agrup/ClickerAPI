<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\URL;

use App\Player;
use App\Personaje;
use App\User;

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
        public function Personaje()
        {
            // belongsTo(RelatedModel, foreignKey = host_id, keyOnRelatedModel = id)
            return $this->belongsTo(Personaje::class ,'personaje_p1');
        }

        public function getGameByUrl()
    	{
            return self::where();
    	}
        public function Terminar($ganador)
        {
                $premio = [     'oro'=>50,
                    'experiencia'=>20,
                    'millas'=>200
                    ];

          $oro=$premio['oro'];
          $experiencia=$premio['experiencia'];
          $millas=$premio['millas'];
            User::find($ganador)->userPlayer->playerWin($oro,$experiencia,$millas);

            $this->Estado = true;
            $this->save();
        }


}