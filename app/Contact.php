<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $fillable = [
        'phone1',
        'phone2',
        'address',
        'city',
        'pincode',
        'email'
    ];
}
