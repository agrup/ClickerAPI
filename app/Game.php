<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
/**
    	 * Game belongs to Host.
    	 *
    	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
  */
    	public function Host()
    	{
    		// belongsTo(RelatedModel, foreignKey = host_id, keyOnRelatedModel = id)
    		return $this->belongsTo(Player::class ,'host_id');
    	}
    }
}
