<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use App\Menu;

class NavigationComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $navigations = Menu::where('is_primary','true')->first();
        if($navigations!=null){
            $navigations = $navigations->menuItems()->toJson();
        }
        $view->with('navigations', json_decode($navigations, true) );
    }

}