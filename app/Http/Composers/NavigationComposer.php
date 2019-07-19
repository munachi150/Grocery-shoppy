<?php

namespace App\Http\Composers;

use App\Category;
use App\Subcategory;
use Illuminate\View\View;

class NavigationComposer
{
	public function categories(View $view)
	{
		$categories = Category::with(['products'])->get();
		$subcategories = Subcategory::with(['products'])->get();
		$view->with(['categories'=>$categories]);
	}
}