<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table="categories";

    protected $fillable = [
        'name'
    ];

    public function subcategories(){
        return $this->hasMany('App\Subcategory')->get();
    }


    public function products(){
        return $this->hasMany('App\Product')->get();
    }


}
