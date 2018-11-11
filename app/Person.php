<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Person extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'person';
    
    protected $fillable = [
        'email', 'name','city', 'gender'
    ];
}
