<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InnerCategory extends Model
{
    public $table="innercategories";

    protected $fillable= [
        'name',
        'featured_image',
        'subcategory_id'
    ];

    public function subcategory(){
        return $this->belongsTo('App\SubCategory');
    }

    public function products(){
        return $this->hasMany('App\Product')->get();
    }
}
