<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::all();
        return response()->json(ProductResource::collection($products),200);
    }


    public function searchProductsByCategoryName(Request $request) {
        $categoryName = $request->category;
        $products = Product::whereHas('categories', function($query) use ($categoryName) {
            $query->where('name', $categoryName);
        })->get();
        if ($products->isEmpty()) 
            return response()->json(['message'=>'no products!!'],404);
           
        return response()->json(ProductResource::collection($products),200);
}
}