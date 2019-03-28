<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Lockers extends Eloquent
{
    protected $connection = 'mongodb';

    public function unit()
    {
       return $this->belongsToMany('App\Unit', null, 'lockers_ids', 'units_ids');
    }

}


