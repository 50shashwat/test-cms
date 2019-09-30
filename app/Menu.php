<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name'];

    public function menuItems(){
        return $this->hasMany('App\MenuItem')->orderBy('order','asc')->get();
    }
}
