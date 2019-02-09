<?php
namespace App\Http\ViewComposers;
use App\Item;
use Illuminate\View\View;
use App\Category;
class NavigationComposer{

    public function compose(View $view)
    {
       /* $view->with('married', random_int(0, 10));*/
        $view->with(['cats'=> Category::get(), 'items'=>Item::get()]);
    }
}