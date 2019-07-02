<?php

namespace App\Http\Controllers;

use App\Subcategory;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{

    function home()
    {
        $subcategories = Subcategory::orderBy('updated_at', 'desc')->get();
        $categories = Category::all();
    	return view('pages.home', compact('categories', 'subcategories'));
    }
    
    function about_us(){
        return view('pages.about_us');
    }
    function all_categories(){
        $categories = Category::all();
        return view('pages.all_categories', compact('categories'));
    }
    function all_subcategories(){
        $subcategories = Subcategory::all();
        return view('pages.all_subcategories', compact('subcategories'));
    }
        function kitchen_products(){
    	return view('pages.kitchen_products');
    }
    Function household_products(){
    	return view('pages.household_products');
    }
    function faqs(){
    	return view('pages.faqs');
    }
    function contacts(){
    	return view('pages.contacts');
    }
    
    function all_products(){
    	$products = Product::all();
    	return view('pages.all_products', compact('products'));
    }
    function checkout()
    {
        return view('pages.checkout');
    }

}
