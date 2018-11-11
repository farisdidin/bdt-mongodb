<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;

class Car extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'cars';
    
    protected $fillable = [
        'carcompany', 'model','price'
    ];
}
