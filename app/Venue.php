<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    public function eventtypes() {
		return $this->belongsToMany('App\Eventtype');
	}
}
