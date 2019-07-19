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
 $subcategories = Subcategory::with(['products'])->get();
 $categories = Category::orderBy('updated_at', 'desc')->take(3)->get();
 $products = Product::orderBy('updated_at', 'desc')->where('special_offer', 0)->take(20)->get();
 $other_products = Product::orderBy('updated_at', 'desc')->where('special_offer', 1)->take(20)->get();
 $special_deal = Product::orderBy('updated_at', 'desc')->where('special_offer', 3)->take(20)->get();
 return view('pages.home', compact('categories', 'subcategories','products','other_products', 'special_deal'));
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

    // function checkout()
    // {
    //     return view('pages.checkout');
    // }

}
