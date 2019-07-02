<?php

namespace App\Http\Composers;

use App\Category;
use App\Subcategory;
use Illuminate\View\View;

class NavigationComposer
{
	public function categories(View $view)
	{
		$categories = Category::all();
		$subcategories = Subcategory::all();
		$view->with(['categories'=>$categories]);
	}
}