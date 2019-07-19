<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', 'PageController@home');
Route::get('about_us','PageController@about_us');
Route::get('kitchen_products', 'PageController@kitchen_products');
Route::get('household_products','PageController@household_products');
Route::get('faqs', 'PageController@faqs');
Route::get('all_products', 'PageController@all_products');
Route::get('contacts', 'PageController@contacts');
Route::get('checkout', 'PageController@checkout');


Route::get('products/create', 'ProductController@create')->middleware('admin');
Route::post('products/create', 'ProductController@store');
Route::get('product/{url}', 'ProductController@show');
Route::get('products/edit/{id}', 'ProductController@edit');
Route::post('products/edit/{id}', 'ProductController@update');
Route::get('products/delete/{id}', 'ProductController@delete');
Route::post('products/delete/{id}', 'ProductController@destroy');
Route::get('products/pictures/{url}', 'ProductController@picture_create');
Route::post('products/pictures/{url}', 'ProductController@picture_store');
Route::get('products/pictures/delete/{id}', 'ProductController@picture_destroy');

//cart route
Route::get('cart', 'CartController@index');
Route::get('product/cart/{id}', 'CartController@add');
Route::get('cart/counter', 'CartController@count');
Route::get('product/cart/{id}/{qty}', 'CartController@add_with_qty');
Route::get('cart_table', 'CartController@cart_table');
Route::get('remove_cart_item/{rowId}', 'CartController@remove_cart_item');
Route::get('product/cart_offer/{id}', 'CartController@cart_offer');
Route::get('product/cart_special_deal/{id}', 'CartController@cart_special_deal');
Route::get('product/cart_alert/{id}', 'CartController@cart_alert');
Route::get('product/cart_result/{id}', 'CartController@cart_result');




// categories route
Route::get('categories/create', 'CategoryController@create')->middleware('admin');
Route::post('categories/create', 'CategoryController@store');
Route::get('category/{url}', 'CategoryController@show');
Route::get('categories/edit/{id}', 'CategoryController@edit');
Route::post('categories/edit/{id}', 'CategoryController@update');
Route::get('categories/delete/{id}','CategoryController@delete');
Route::post('categories/delete/{id}','CategoryController@destroy');
Route::get('categories','CategoryController@index');

//subcategories
Route::get('subcategories/create', 'SubcategoryController@create')->middleware('admin');
Route::post('subcategories/create', 'SubcategoryController@store');
Route::get('subcategories/edit/{id}', 'SubcategoryController@edit');
Route::post('subcategories/edit/{id}', 'SubcategoryController@update');
Route::get('subcategories/delete/{id}', 'SubcategoryController@delete');
Route::post('subcategories/delete/{id}', 'SubcategoryController@destroy');
Route::get('subcategory/{url}', 'SubcategoryController@show');
Route::get('subcategories', 'SubcategoryController@index');


Auth::routes();

Route::get('/home', 'PageController@home')->name('home');
Route::get('logout', 'Auth\loginController@logout');

