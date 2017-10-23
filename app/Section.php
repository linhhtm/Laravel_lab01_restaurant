<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
 	public function foods()
 	{
 		return $this->hasMany('App\Food');
 	}
}
