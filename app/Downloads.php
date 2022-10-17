<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Downloads extends Model
{
    public function AppUser()
    {
    	return $this->belongsTo('App\AppUser');
    }
}
