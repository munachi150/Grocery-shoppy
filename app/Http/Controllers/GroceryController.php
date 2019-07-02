<?php

namespace App\Http\Controllers;
use App\Grocery;

use Illuminate\Http\Request;

class GroceryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groceries.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grocery= new Grocery();
        $grocery->itemName = $request->name;
        $grocery->price = $request->price;
        $grocery->weight = $request->weight;
        $grocery->shippingCharge = $request->shippingcharges;
        $grocery->deletedPrice = $request->deletedprice;
        $grocery->description = $request->description;
        $grocery->product = $request->product;
        $grocery->url = str_slug($request->name);
        if ($request->hasFile('picture')) {
            $picName = "DOC".uniqid().time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path().'/uploads/', $picName);
            $grocery->picture='uploads/'.$picName;
        }
        $grocery->save();
        return redirect('all_products');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url)

    {
      
     $grocery = Grocery::where('url', $url)->first();
     return view('groceries.show',compact('grocery'));   
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grocery = Grocery::FindOrFail($id);
        return view('groceries.edit', compact('grocery'));
    }
    public function delete($id)
    {
        $grocery = Grocery::FindOrFail($id);
        return view('groceries.delete', compact('grocery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {$grocery = Grocery::FindOrFail($id);
        $grocery->itemName = $request->name;
        $grocery->price = $request->price;
        $grocery->weight = $request->weight;
        $grocery->shippingCharge = $request->shippingcharges;
        $grocery->deletedPrice = $request->deletedprice;
        $grocery->description = $request->description;
        $grocery->product = $request->product;
        if ($request->hasFile('picture')) {
            $picName = "DOC".uniqid().time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path().'/uploads/', $picName);
            $grocery->picture='uploads/'.$picName;
    }
    $grocery->save();
    return redirect('all_products');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grocery = Grocery::FindOrFail($id);
        $grocery->delete();
        return redirect('all_products');
    }
}
