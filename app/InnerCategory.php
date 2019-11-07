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
        return $this->belongsTo('App\Subcategory','subcategory_id','id');
    }
    
   
}
