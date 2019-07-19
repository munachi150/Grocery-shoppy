<?php

namespace App\Http\Controllers;
use App\Product;
use App\Subcategory;
use App\Category;
//modell for dropzone'ProductPicture'
use App\ProductPicture;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except'=>['show','index']]);
        $this->middleware('auth', ['except'=>['show','index']]);
    }
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
        $subcategories = Subcategory::orderBy('updated_at', 'desc')->get();
        $categories = Category::all();
        return view('products.create', compact('categories', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clean_price = $this->sanitize_num($request->price)*100;
        $clean_old_price = $this->sanitize_num($request->old_price)*100;

        $product  = new Product();
        $product->name = $request->name;
        $product->price = $clean_price;
        $product->old_price= $clean_old_price;
        $product->description = $request->description;
        $product->sub_category_id = $request->sub_category;
        $product->category_id =  $request->category;
        $product->special_offer = $request->special_offer;
        $product->url = str_slug($request->name);
        if ($request->hasFile('picture')) {
            $picName = "GRO".uniqid().time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path().'/uploads/', $picName);
            $product->picture='uploads/'.$picName;
        }
        $product->save();
        flash('please select your product pictures')->success();
        return redirect('products/pictures/'.$product->url);
    }
    
     public function picture_create($url){
        $product = Product::with(['pictures'])->where('url', $url)->first();
        return view('products.picture_create', compact('product'));
    }

    public function picture_store(Request $request, $url)
    {
        $product = Product::where('url',$url)->first();
        if (!$product) {
        abort(404);   
         }

         $file = $request->file;

         $newName = 'PRO'.uniqid().time().'.'.$file->getClientOriginalExtension();
         $oldName = $file->getClientOriginalName();
         $size = $file->getClientSize();
         $type = $file->getClientMimeType();

         $file->move('uploads/products',$newName);

         $picture = new ProductPicture();
         $picture->product_id  = $product->id;
         $picture->user_id  = auth()->user()->id;
         $picture->name  = $newName;
         $picture->old_name = $oldName;
         $picture->size = $size;
         $picture->type = $type;
         $picture->picture = 'uploads/products/'.$newName;
         $picture->save();

         return $picture;
    }
public function picture_destroy($id){
        $picture = ProductPicture::where('id', $id)->first();
        if (!$picture) {
            return redirect()->back();
        }else{
            $picture->delete();
            return redirect()->back();
        }
     }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {$product =  Product::where('url', $url)->first();
    $other_products = Product::orderBy('updated_at', 'desc')->where('special_offer', 2)->take(20)->get();
    if (!$product) {
        abort(404);
    }
    return view('products.show', compact('product','other_products'));   
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    $subcategories = Subcategory::orderBy('updated_at', 'desc')->get();
        $product = Product::FindOrFail($id);
        return view('products.edit', compact('product','subcategories'));
    }
     public function delete($id)
    {
        $product = Product::FindOrFail($id);
        return view('products.delete', compact('product'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {$product = Product::FindOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->old_price= $request->old_price;
        $product->description = $request->description;
        $product->sub_category_id = $request->sub_category;
        if ($request->hasFile('picture')) {
            $picName = "GRO".uniqid().time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path().'/uploads/', $picName);
            $product->picture='uploads/'.$picName;
        }
        $product->save();
        flash('Product updated successfully');
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
        $product  =  Product::FindOrFail($id);
        $product->delete();
        flash('Product deleted successfully')->success();
        return redirect('/');
    }
}
