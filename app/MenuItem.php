<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $table = 'menu_items';

    protected $appends = ['parentmenu'];

    protected $fillable=[
        'name','type','url','order','menu_id','parent'
    ];

    public function getParentmenuAttribute(){

        if($this->parent!=null){
            return \App\MenuItem::find($this->parent);
        }
        
    }

   
}
