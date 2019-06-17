<?php

namespace App\Http\ViewComposers;

use App\Category;
use Illuminate\View\View;

class CategoryComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $categories = Category::all();

        $view->with(compact('categories'));
    }
}
