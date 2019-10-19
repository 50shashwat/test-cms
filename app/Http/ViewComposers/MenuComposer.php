<?php

namespace App\Http\ViewComposers;

use App\Category;
use Illuminate\View\View;
use App\Repositories\UserRepository;
use App\Menu;
use App\Page;

class MenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        
        $menus =  Category::with(['subcategories.innercategories']);
        
        $view->with('menus', $menus);
    }

}