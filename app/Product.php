<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'featured_image',
        'content',
        'category_id',
        'subcategory_id',
        'innercategory_id'
    ];

    public function subcategory(){
        return $this->belongsTo('App\Subcategory');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function innercategory(){
        return $this->belongsTo('App\InnerCategory');
    }
    
}
