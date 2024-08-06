<?php

namespace App\Models;

abstract class Model extends \Illuminate\Database\Eloquent\Model
{
    public $timestamps = false;

    protected $guarded = [
        'id'
    ];
}
