<?php

namespace App;

use App\VacuumModel;

class Form extends VacuumModel
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
