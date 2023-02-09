<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class CategoriesMenu extends Component
{
    public $categories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories = Category::with('subcategories')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // dd($categories);
        return view('components.categories-menu');
    }
}
