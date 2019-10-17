<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use App\Menu;
use App\Page;

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
        $footer=array();
        $footer[] =   Page::where('type','footer-section-one')->first();
        $footer[] =  Page::where('type','footer-section-two')->first();
        $footer[] =  Page::where('type','footer-section-three')->first();
        $footer[] =  Page::where('type','footer-section-four')->first();

        
        $view->with('footer',$footer);
    }

}