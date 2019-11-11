<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderform extends Model
{
    public $fillable = [
        'name',
        'email',
        'distribute_name',
        'salesman_name',
        'signboard_type',
        'products',
        'size',
        'language'
    ];
}
