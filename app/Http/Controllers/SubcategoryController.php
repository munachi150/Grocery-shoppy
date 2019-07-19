<?php

namespace App\Http\Controllers;
use App\Subcategory;
use App\Category;
use App\Product;

use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except'=>['show','index']]);
        $this->middleware('admin', ['except'=>['show','index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::all();
        return view('subcategories.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name','asc')->get();
        return view('subcategories.create', compact('categories'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $subcategory = new Subcategory();
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category;
        $subcategory->url = str_slug($request->name);
         if ($request->hasFile('picture')) {
            $picName = "GRO".uniqid().time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path().'/uploads/', $picName);
            $subcategory->picture='uploads/'.$picName;
        }
        $subcategory->save();
        flash('Subcategory created successfully');
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        $subcategory = Subcategory::where('url', $url)->first();
        if (!$subcategory) {
            abort(404);
        }
        return view('subcategories.show', compact('subcategory'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $subcategory = Subcategory::FindOrFail($id);
       $categories = Category::all();
      return view('subcategories.edit', compact('subcategory', 'categories'));
    }
public function delete($id)
    {
      $subcategory = Subcategory::FindOrFail($id);
      return view('subcategories.delete', compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {$subcategory= Subcategory::FindOrFail($id);
         $subcategory->name = $request->name;
        $subcategory->category_id = $request->category;
         if ($request->hasFile('picture')) {
            $picName = "DOC".uniqid().time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path().'/uploads/', $picName);
            $subcategory->picture='uploads/'.$picName;
        }
        $subcategory->save();
        flash('Subcategory updated successfully');
        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = Subcategory::FindOrFail($id);
        $subcategory->delete();
        flash('Subcategory deleted successfully');
        return redirect('/');
    }
    }
