<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $table = 'pizza';

    // we make the json to array for us to use
    protected $casts = [
    	'extras' => 'array'
    ];
}