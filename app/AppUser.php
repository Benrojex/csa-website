<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Downloads;

class AppUser extends Model
{
    public function downloads()
    {
    	return $this->hasMany('App\Downloads');
    }
}
