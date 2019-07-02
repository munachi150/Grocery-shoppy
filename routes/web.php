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
Route::get('all_categories','PageController@all_categories');
Route::get('all_subcategories','PageController@all_subcategories');
Route::get('contacts', 'PageController@contacts');
Route::get('checkout', 'PageController@checkout');


Route::get('products/create', 'ProductController@create');
Route::post('products/create', 'ProductController@store');
Route::get('all_products', 'PageController@all_products');
Route::get('product/{url}', 'ProductController@show');
Route::get('products/edit/{id}', 'ProductController@edit');
Route::post('products/edit/{id}', 'ProductController@update');
Route::get('products/delete/{id}', 'ProductController@delete');
Route::post('products/delete/{id}', 'ProductController@destroy');
Route::get('products/pictures/{url}', 'ProductController@picture_create');
Route::post('products/pictures/{url}', 'ProductController@picture_store');
Route::get('products/pictures/delete/{id}', 'ProductController@picture_destroy');


// categories route
Route::get('categories/create', 'CategoryController@create');
Route::post('categories/create', 'CategoryController@store');
Route::get('category/{url}', 'CategoryController@show');
Route::get('categories/edit/{id}', 'CategoryController@edit');
Route::post('categories/edit/{id}', 'CategoryController@update');
Route::get('categories/delete/{id}','CategoryController@delete');
Route::post('categories/delete/{id}','CategoryController@destroy');

//subcategories
Route::get('subcategories/create', 'SubcategoryController@create');
Route::post('subcategories/create', 'SubcategoryController@store');
Route::get('subcategories/edit/{id}', 'SubcategoryController@edit');
Route::post('subcategories/edit/{id}', 'SubcategoryController@update');
Route::get('subcategories/delete/{id}', 'SubcategoryController@delete');
Route::post('subcategories/delete/{id}', 'SubcategoryController@destroy');
Route::get('subcategory/{url}', 'SubcategoryController@show');


Auth::routes();

Route::get('/home', 'PageController@home')->name('home');
Route::get('logout', 'Auth\loginController@logout');

