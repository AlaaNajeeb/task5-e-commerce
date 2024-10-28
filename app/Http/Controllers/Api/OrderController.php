<?php

namespace App\Http\Controllers\Api;


use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function addOrder(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'product_name' => 'required|string|max:250',        
        ]);

        if($validate->fails()){  
            return response()->json([
                'status' => 'failed',
                'message' => 'Validation Error!',
                'data' => $validate->errors(),
            ], 403);    
        }
    
     $product_name=$request->product_name;
     $product_id=Product::where('name',$product_name)->first();
    
        $order=Order::create([
            'user_id'=>Auth::id(), 
            'product_id'=>$product_id->id, 
        ]);
        
        $response = [
            'status' => 'success',
            'message' => 'Order is added successfully.',
            'data' => $order,
        ];

        return response()->json($response, 200);
       
    }
}
