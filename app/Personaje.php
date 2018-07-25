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
}