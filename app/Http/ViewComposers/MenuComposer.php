<?php

namespace App\Http\ViewComposers;

use App\Category;
use App\Contact;
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
        $contacts = Contact::first();
        $menus =  Category::with(['subcategories.innercategories'])->get();
        
        $view->with('menus', $menus);
        $view->with('contact',$contacts);
    }

}