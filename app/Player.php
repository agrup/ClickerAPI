<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
class Player extends Model
{
    protected $guarded = [];
    /**
     * Player has many HostGame.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hostGame()
    {
    	// hasMany(RelatedModel, foreignKeyOnRelatedModel = player_id, localKey = id)
    	return $this->hasMany(Game::class, 'host_id');
    }

    public static function getPlayers()
    {
        return self::all();
    }

    public static function createPlayer()
    {
          
    }


        // hasMany(RelatedModel, foreignKeyOnRelatedModel = player_id, localKey = id)
  /**
         * Player belongs to .
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function PlayerPersonaje()
        {
            // belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
            return $this->belongsTo(Personaje::class, 'User');
        }
        public function markers(){
            return $this->belongsToMany('App\marker','marker_player','player_id','marker_id')
            ->withPivot('player_id','completa');
            ;
        }
        public  function updatePlayer($oro,$experiencia,$millas,$distancia){
            //recupero la experiencia actual
            if(isset($experiencia)){
                $sumexp=$this->experiencia + $experiencia;
                if($sumexp>=100){
                    $this->experiencia=$sumexp-100;
                    $this->nivel=$this->nivel+1;
                }else{
                    $this->experiencia = $this->experiencia + $experiencia;
                }
            }
            if(isset($millas)){$this->millas = $this->millas + $millas;} 

            $this->millas=$this->millas-$distancia;
            if (isset($oro)){$this->oro = $this->oro + $oro;}
            
            $this->save();
        }
    

}
