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

            User::find($ganador)->userPlayer()->updatePlayer(

          $oro=$premio->oro,
          $experiencia=$premio->experiencia,
          $millas=$premio->millas

          );

            $this->Estado = true;
            $this->save();
        }


}