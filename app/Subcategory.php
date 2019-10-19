<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    
    public $table="subcategories";

    protected $fillable = [
        'name',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function innercategories(){
        return $this->hasMany('App\InnerCategory');
    }

    public function products(){
        return $this->hasMany('App\Product')->get();
    }



}
