<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Popup extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'image_url'
    ];

}
