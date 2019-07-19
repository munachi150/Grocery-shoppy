<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::content();
        return view('pages.cart', compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add($id)
    {
        $product = Product::where('id', $id)->first();
        $cart = Cart::add($product->id, $product->name, 1, $product->price/100)->associate('\App\Product');
        $result =  `<div class="alert alert-success" role="alert">Product added to cart successfully</div>`;
        return $result;
    }
        function add_with_qty($id,$qty)
    {
        $product = Product::where('id', $id)->first();
        $cart = Cart::add($product->id, $product->name, $qty, $product->price/100)->associate('\App\Product');
        $result =  `<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Product added to cart successfully</div>`;
        return $result;
    }
    function cart_table(){
        $carts = Cart::content();

        return view('partials.cart_table', compact('carts'));
    }

     function remove_cart_item($rowId){
        Cart::remove($rowId);
        $carts = Cart::content();
        
        return view('partials.cart_table', compact('carts'));
    }
    function cart_offer($id)
    {
        $product = Product::where('id', $id)->first();
        $cart = Cart::add($product->id, $product->name, 1, $product->price/100)->associate('\App\Product');
        $result =  "";
        return $result;

    }
    function cart_special_deal($id){

        $product = Product::where('id', $id)->first();
        $cart = Cart::add($product->id, $product->name, 1, $product->price/100)->associate('\App\Product');
        $result =  "";
        return $result;
    }
    function cart_alert($id){
$product = Product::where('id', $id)->first();
        $cart = Cart::add($product->id, $product->name, 1, $product->price/100)->associate('\App\Product');
        $result =  "";
        return $result;

    }
    function cart_result($id){
        $product = Product::where('id', $id)->first();
        $cart = Cart::add($product->id, $product->name, 1, $product->price/100)->associate('\App\Product');
        $result =  "";
        return $result;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
      function count()
    {
        $count = Cart::count();
        if ($count == 0) {
            return "";
        }else {
            return '<span class="badge badge-info">'.$count.'</span>';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
