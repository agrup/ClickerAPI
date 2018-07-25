<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','provider','provide_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

            // hasMany(RelatedModel, foreignKeyOnRelatedModel = player_id, localKey = id)
  /**
         * Player belongs to .
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function userPersonaje()
        {
            // belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
            return $this->hasMany(Personaje::class, 'User');
        }
        public function userPlayer()
        {
            return $this->belongsTo(Player::class,'id');
        }



}
