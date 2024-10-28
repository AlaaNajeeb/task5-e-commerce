<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{ 
    public function __construct(){
          $this->middleware('IsAdmin')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        return view ('products.list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $categories=Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
        { $request->validate([
            'name' => 'required',
            'count'  => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);  
        $path='';
        if ($request->hasFile('image')) {
            $path = $request->file('image');
            $file_name= $path->getClientOriginalName();  //get real image name, not the temp name
            $path = $path->storeAs('images', $file_name, 'public');  
        }

        $product=Product::create([
            'name'=>$request->name, 
            'count' =>$request->count,
            'image' => $path,
        ]);
        // $product=new Product();
        // $product->name=$request->name;
        // $product->count=$request->count;
        // $product->save();
        $product->categories()->sync($request->categories_ids);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {   $categories=Category::all();
        return view('products.show', compact('product','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {   $categories=Category::all();
        return view('products.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {  // $product=Blog::findOrFail($id);
        if ($request->hasFile('image')) {
            $path = $request->file('image');
            $file_name= $path->getClientOriginalName();  //get real image name, not the temp name
            $path = $path->storeAs('images', $file_name, 'public');  
        }
       else $path = $product->image; 

        $product->update([
            'name'=>$request->name,
            'count'=>$request->count,
            'image'=>$path,
          ]);
          $product->categories()->sync($request->categories_ids);
          return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
    //list deleted products
    public function trashed()
    {
        $deletedProducts = Product::onlyTrashed()->get();
        return view('products.trash', compact('deletedProducts'));
    }

    public function restore($id)
    {
        $book = Product::onlyTrashed()->findOrFail($id);
        $book->restore();
        return redirect()->route('products.trashed');
    }
    public function forceDelete($id)
    {
        $book = Product::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('products.trashed');
    }
}
