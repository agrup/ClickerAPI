<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
      /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $guarded = [];
    
            public function User()
        {
            // belongsTo(RelatedModel, foreignKey = host_id, keyOnRelatedModel = id)
            return $this->belongsTo(User::class ,'User');
        }

        public function updatePersonaje($vida,$ataque){
            if (isset($vida)) {
                $this->vida = $this->vida + $vida;
            }
            if (isset($ataque)) {    
                $this->ataque = $this->ataque + $ataque;}
            $this->save();
        }
}