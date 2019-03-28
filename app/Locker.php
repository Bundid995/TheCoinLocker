<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Unit;


class Locker extends Eloquent 
{

    protected $connection = 'mongodb';
    protected $collection = 'lockers';
    protected $fillable=['id','size','price'];

 
}
